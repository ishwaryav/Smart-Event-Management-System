<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:16:33
         compiled from /Applications/XAMPP/xamppfiles/htdocs/htdocs/modules/system/themes/default/xotpl/xo_icons.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', '/Applications/XAMPP/xamppfiles/htdocs/htdocs/modules/system/themes/default/xotpl/xo_icons.tpl', 7, false),)), $this); ?>
<div class="xo-title" id="xo-title-icons"><?php echo $this->_tpl_vars['lang_cp']; ?>
</div>
<div id="xo-system-icons">
    <div id="xo-icon">
        <?php $_from = $this->_tpl_vars['mod_options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['op']):
?>
            <a class="tooltip" href="<?php echo $this->_tpl_vars['op']['link']; ?>
" title="<?php echo $this->_tpl_vars['op']['desc']; ?>
">
                <img src='<?php echo ((is_array($_tmp=@$this->_tpl_vars['op']['icon'])) ? $this->_run_mod_handler('default', true, $_tmp, ($this->_tpl_vars['theme_icons'])."/icon_options.png") : smarty_modifier_default($_tmp, ($this->_tpl_vars['theme_icons'])."/icon_options.png")); ?>
' alt="<?php echo $this->_tpl_vars['op']['desc']; ?>
"/>
                <br/><span><?php echo $this->_tpl_vars['op']['title']; ?>
</span>
            </a>
        <?php endforeach; endif; unset($_from); ?>
        <a class="tooltip" href="<?php echo 'http://localhost/htdocs/modules/system/admin.php'; ?>" title="<?php echo @_AM_SYSTEM_CONFIG; ?>
">
            <img src='<?php echo ($this->_tpl_vars['theme_icons'])."/configuration.png"; ?>
'/>
            <span><?php echo @_AM_SYSTEM_CONFIG; ?>
</span>
        </a>
        <a class="tooltip" href="<?php echo 'http://localhost/htdocs/modules/system/help.php'; ?>" title="<?php echo @_AM_SYSTEM_HELP; ?>
">
            <img src='<?php echo ($this->_tpl_vars['theme_icons'])."/help.png"; ?>
'/>
            <span><?php echo @_AM_SYSTEM_HELP; ?>
</span>
        </a>
    </div>
</div>