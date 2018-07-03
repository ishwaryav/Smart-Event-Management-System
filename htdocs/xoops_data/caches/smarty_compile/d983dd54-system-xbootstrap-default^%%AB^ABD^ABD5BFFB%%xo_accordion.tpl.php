<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:16:33
         compiled from /Applications/XAMPP/xamppfiles/htdocs/htdocs/modules/system/themes/default/xotpl/xo_accordion.tpl */ ?>
<div class="xo-title" id="xo-title-accordion"><?php echo @_MD_CPANEL_OVERVIEW; ?>
</div>
<div id="accordion">

    <h5><?php echo @_MD_CPANEL_OVERVIEW; ?>
</h5>

    <div class="pane">
        <table>
            <tr>
                <td><?php echo @_OXYGEN_VERSION_XOOPS; ?>
</td>
                <td><?php echo $this->_tpl_vars['xoops_version']; ?>
</td>
            </tr>
            <tr>
                <td><?php echo @_OXYGEN_VERSION_PHP; ?>
</td>
                <td><?php echo $this->_tpl_vars['lang_php_vesion']; ?>
</td>
            </tr>
            <tr>
                <td><?php echo @_OXYGEN_VERSION_MYSQL; ?>
</td>
                <td><?php echo $this->_tpl_vars['lang_mysql_version']; ?>
</td>
            </tr>
            <tr>
                <td><?php echo @_OXYGEN_Server_API; ?>
</td>
                <td><?php echo $this->_tpl_vars['lang_server_api']; ?>
</td>
            </tr>
            <tr>
                <td><?php echo @_OXYGEN_OS; ?>
</td>
                <td><?php echo $this->_tpl_vars['lang_os_name']; ?>
</td>
            </tr>
                                                                                                                                                                                                                                            <tr>
                <td>fsockopen</td>
                <td><?php echo $this->_tpl_vars['fsockopen']; ?>
</td>
            </tr>
            <tr>
                <td>post_max_size</td>
                <td><?php echo $this->_tpl_vars['post_max_size']; ?>
</td>
            </tr>
            <tr>
                <td>max_input_time</td>
                <td><?php echo $this->_tpl_vars['max_input_time']; ?>
</td>
            </tr>
            <tr>
                <td>output_buffering</td>
                <td><?php echo $this->_tpl_vars['output_buffering']; ?>
</td>
            </tr>
            <tr>
                <td>max_execution_time</td>
                <td><?php echo $this->_tpl_vars['max_execution_time']; ?>
</td>
            </tr>
            <tr>
                <td>memory_limit</td>
                <td><?php echo $this->_tpl_vars['memory_limit']; ?>
</td>
            </tr>
            <tr>
                <td>file_uploads</td>
                <td><?php echo $this->_tpl_vars['file_uploads']; ?>
</td>
            </tr>
            <tr>
                <td>upload_max_filesize</td>
                <td><?php echo $this->_tpl_vars['upload_max_filesize']; ?>
</td>
            </tr>
        </table>
    </div>

    <h5><?php echo @_OXYGEN_XOOPS_LICENSE; ?>
</h5>

    <div class="pane">
        <p id="xolicenses"><a class="tooltip" rel="external" href="http://www.gnu.org/licenses/gpl-2.0.html" title="<?php echo @XOOPS_LICENSE_TEXT; ?>
"><?php echo @XOOPS_LICENSE_TEXT; ?>
</a></p>
    </div>

    <h5><?php echo @_OXYGEN_ABOUT; ?>
</h5>

    <div class="pane"><?php echo @_OXYGEN_ABOUT_TEXT; ?>
</div>

    <h5><?php echo @_OXYGEN_XOOPS_LINKS; ?>
</h5>

    <div class="pane">
        <table>
            <tr>
                <td><a rel="external" href="http://xoops.org"><?php echo @_OXYGEN_XOOPSPROJECT; ?>
</a></td>
                <td><a rel="external" href="http://xoops.org"><?php echo @_OXYGEN_WEBSITE; ?>
</a></td>
            </tr>
            <tr>
                <td><a rel="external" href="http://www.xoops.org/modules/core"><?php echo @_OXYGEN_XOOPSCORE; ?>
</a></td>
                <td><a rel="external" href="http://www.xoops.org/modules/mediawiki/index.php/Main_Page"><?php echo @_OXYGEN_XOOPSWIKI; ?>
</a></td>
            </tr>
            <tr>
                <td><a rel="external" href="http://www.xoops.org/modules/xoopspartners"><?php echo @_OXYGEN_LOCALSUPPORT; ?>
</a></td>
                <td><a rel="external" href="https://github.com/XOOPS/XoopsCore25"><?php echo @_OXYGEN_CODESVN; ?>
</a></td>
            </tr>
            <tr>
                <td><a rel="external" href="https://github.com/XOOPS/XoopsCore25/issues"><?php echo @_OXYGEN_REPORTBUG; ?>
</a></td>
            </tr>
        </table>
    </div>

</div>

<script type="text/javascript">
    $("#accordion > h5").bind("click", function () {
        $(".pane").slideUp("fast");
        if ($(this).hasClass("current")) {
            $(this).removeClass("current");
        } else {
            $("#accordion > h5").removeClass("current");
            $(this).addClass("current");
            $(this).next().slideDown("fast");
        }
    });
</script>