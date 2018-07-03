<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:17:05
         compiled from /Applications/XAMPP/xamppfiles/htdocs/htdocs/modules/system/themes/default/xotpl/xo_page.tpl */ ?>
<div id="xo-body-contain">
    <div id="xo-body">
        <?php if ($this->_tpl_vars['xoops_contents']): ?>
            <div id="xo-content">
                                <?php if ($this->_tpl_vars['xo_system_menu']): ?><?php echo $this->_tpl_vars['xo_system_menu']; ?>
<?php endif; ?>
                <?php echo $this->_tpl_vars['xoops_contents']; ?>

            </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['modules']): ?>
            <div>
                <div id="xo-index">
                    <div id="xo-body-icons" class="xo-index-option"><?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_icons.tpl", 'smarty_include_vars' => array()));
 ?></div>
                    <div id="xo-tabs" class="xo-index-option"><?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_tabs.tpl", 'smarty_include_vars' => array()));
 ?></div>
                </div>
                <div id="xo-index">
                    <div id="xo-modules" class="xo-index-option"><?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_modules.tpl", 'smarty_include_vars' => array()));
 ?></div>
                    <div id="xo-accordion" class="xo-index-option"><?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_accordion.tpl", 'smarty_include_vars' => array()));
 ?></div>
                </div>
            </div>
            <div id="xo-index-bottom"></div>
        <?php endif; ?>
    </div>
</div>