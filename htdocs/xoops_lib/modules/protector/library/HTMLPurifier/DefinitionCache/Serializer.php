<?php

class HTMLPurifier_DefinitionCache_Serializer extends HTMLPurifier_DefinitionCache
{

    /**
     * @param HTMLPurifier_Definition $def
     * @param HTMLPurifier_Config $config
     * @return int|bool
     */
    public function add($def, $config)
    {
        if (!$this->checkDefType($def)) {
            return null;
        }
        $file = $this->generateFilePath($config);
        if (file_exists($file)) {
            return false;
        }
        if (!$this->_prepareDir($config)) {
            return false;
        }
        return $this->_write($file, serialize($def), $config);
    }

    /**
     * @param HTMLPurifier_Definition $def
     * @param HTMLPurifier_Config $config
     * @return int|bool
     */
    public function set($def, $config)
    {
        if (!$this->checkDefType($def)) {
            return null;
        }
        $file = $this->generateFilePath($config);
        if (!$this->_prepareDir($config)) {
            return false;
        }
        return $this->_write($file, serialize($def), $config);
    }

    /**
     * @param HTMLPurifier_Definition $def
     * @param HTMLPurifier_Config $config
     * @return int|bool
     */
    public function replace($def, $config)
    {
        if (!$this->checkDefType($def)) {
            return null;
        }
        $file = $this->generateFilePath($config);
        if (!file_exists($file)) {
            return false;
        }
        if (!$this->_prepareDir($config)) {
            return false;
        }
        return $this->_write($file, serialize($def), $config);
    }

    /**
     * @param HTMLPurifier_Config $config
     * @return bool|HTMLPurifier_Config
     */
    public function get($config)
    {
        $file = $this->generateFilePath($config);
        if (!file_exists($file)) {
            return false;
        }
        return unserialize(file_get_contents($file));
    }

    /**
     * @param HTMLPurifier_Config $config
     * @return bool
     */
    public function remove($config)
    {
        $file = $this->generateFilePath($config);
        if (!file_exists($file)) {
            return false;
        }
        return unlink($file);
    }

    /**
     * @param HTMLPurifier_Config $config
     * @return bool
     */
    public function flush($config)
    {
        if (!$this->_prepareDir($config)) {
            return false;
        }
        $dir = $this->generateDirectoryPath($config);
        $dh = opendir($dir);
        while (false !== ($filename = readdir($dh))) {
            if (empty($filename)) {
                continue;
            }
            if ($filename[0] === '.') {
                continue;
            }
            unlink($dir . '/' . $filename);
        }
        return null;
    }

    /**
     * @param HTMLPurifier_Config $config
     * @return bool
     */
    public function cleanup($config)
    {
        if (!$this->_prepareDir($config)) {
            return false;
        }
        $dir = $this->generateDirectoryPath($config);
        $dh = opendir($dir);
        while (false !== ($filename = readdir($dh))) {
            if (empty($filename)) {
                continue;
            }
            if ($filename[0] === '.') {
                continue;
            }
            $key = substr($filename, 0, strlen($filename) - 4);
            if ($this->isOld($key, $config)) {
                unlink($dir . '/' . $filename);
            }
        }
        return null;
    }

    /**
     * Generates the file path to the serial file corresponding to
     * the configuration and definition name
     * @param HTMLPurifier_Config $config
     * @return string
     * @todo Make protected
     */
    public function generateFilePath($config)
    {
        $key = $this->generateKey($config);
        return $this->generateDirectoryPath($config) . '/' . $key . '.ser';
    }

    /**
     * Generates the path to the directory contain this cache's serial files
     * @param HTMLPurifier_Config $config
     * @return string
     * @note No trailing slash
     * @todo Make protected
     */
    public function generateDirectoryPath($config)
    {
        $base = $this->generateBaseDirectoryPath($config);
        return $base . '/' . $this->type;
    }

    /**
     * Generates path to base directory that contains all definition type
     * serials
     * @param HTMLPurifier_Config $config
     * @return mixed|string
     * @todo Make protected
     */
    public function generateBaseDirectoryPath($config)
    {
        $base = $config->get('Cache.SerializerPath');
        $base = is_null($base) ? HTMLPURIFIER_PREFIX . '/HTMLPurifier/DefinitionCache/Serializer' : $base;
        return $base;
    }

    /**
     * Convenience wrapper function for file_put_contents
     * @param string $file File name to write to
     * @param string $data Data to write into file
     * @param HTMLPurifier_Config $config
     * @return int|bool Number of bytes written if success, or false if failure.
     */
    private function _write($file, $data, $config)
    {
        $result = file_put_contents($file, $data);
        if ($result !== false) {
            // set permissions of the new file (no execute)
            $chmod = $config->get('Cache.SerializerPermissions');
            if (!$chmod) {
                $chmod = 0644; // invalid config or simpletest
            }
            $chmod = $chmod & 0666;
            chmod($file, $chmod);
        }
        return $result;
    }

    /**
     * Prepares the directory that this type stores the serials in
     * @param HTMLPurifier_Config $config
     * @return bool True if successful
     */
    private function _prepareDir($config)
    {
        $directory = $this->generateDirectoryPath($config);
        $chmod = $config->get('Cache.SerializerPermissions');
        if (!$chmod) {
            $chmod = 0755; // invalid config or simpletest
        }
        if (!is_dir($directory)) {
            $base = $this->generateBaseDirectoryPath($config);
            if (!is_dir($base)) {
                trigger_error(
                    'Base directory ' . $base . ' does not exist,
                    please create or change using %Cache.SerializerPath',
                    E_USER_WARNING
                );
                return false;
            } elseif (!$this->_testPermissions($base, $chmod)) {
                return false;
            }
            mkdir($directory, $chmod);
            if (!$this->_testPermissions($directory, $chmod)) {
                trigger_error(
                    'Base directory ' . $base . ' does not exist,
                    please create or change using %Cache.SerializerPath',
                    E_USER_WARNING
                );
                return false;
            }
        } elseif (!$this->_testPermissions($directory, $chmod)) {
            return false;
        }
        return true;
    }

    /**
     * Tests permissions on a directory and throws out friendly
     * error messages and attempts to chmod it itself if possible
     * @param string $dir Directory path
     * @param int $chmod Permissions
     * @return bool True if directory is writable
     */
    private function _testPermissions($dir, $chmod)
    {
        // early abort, if it is writable, everything is hunky-dory
        if (is_writable($dir)) {
            return true;
        }
        if (!is_dir($dir)) {
            // generally, you'll want to handle this beforehand
            // so a more specific error message can be given
            trigger_error(
                'Directory ' . $dir . ' does not exist',
                E_USER_WARNING
            );
            return false;
        }
        if (function_exists('posix_getuid')) {
            // POSIX system, we can give more specific advice
            if (fileowner($dir) === posix_getuid()) {
                // we can chmod it ourselves
                $chmod = $chmod | 0700;
                if (chmod($dir, $chmod)) {
                    return true;
                }
            } elseif (filegroup($dir) === posix_getgid()) {
                $chmod = $chmod | 0070;
            } else {
                // PHP's probably running as nobody, so we'll
                // need to give global permissions
                $chmod = $chmod | 0777;
            }
            trigger_error(
                'Directory ' . $dir . ' not writable, ' .
                'please chmod to ' . decoct($chmod),
                E_USER_WARNING
            );
        } else {
            // generic error message
            trigger_error(
                'Directory ' . $dir . ' not writable, ' .
                'please alter file permissions',
                E_USER_WARNING
            );
        }
        return false;
    }
}

// vim: et sw=4 sts=4