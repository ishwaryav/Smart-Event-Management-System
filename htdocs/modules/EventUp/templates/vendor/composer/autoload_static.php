<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit005e91a92aab75c87f99a10a105b12e2
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
    );

    public static $prefixesPsr0 = array (
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
        'A' => 
        array (
            'Aws' => 
            array (
                0 => __DIR__ . '/..' . '/aws/aws-sdk-php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit005e91a92aab75c87f99a10a105b12e2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit005e91a92aab75c87f99a10a105b12e2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit005e91a92aab75c87f99a10a105b12e2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
