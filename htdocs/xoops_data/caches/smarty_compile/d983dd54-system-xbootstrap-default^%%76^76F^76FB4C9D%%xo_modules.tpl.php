<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:16:33
         compiled from /Applications/XAMPP/xamppfiles/htdocs/htdocs/modules/system/themes/default/xotpl/xo_modules.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', '/Applications/XAMPP/xamppfiles/htdocs/htdocs/modules/system/themes/default/xotpl/xo_modules.tpl', 5, false),)), $this); ?>
<div class="xo-title" id="xo-title-modules"><?php echo @_OXYGEN_INSTALLEDMODULES; ?>
</div>
<div id="xo-module-icons">
    <?php $_from = $this->_tpl_vars['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mod']):
?>
        <a class="tooltip" href="<?php echo $this->_tpl_vars['mod']['link']; ?>
" title="<img src='<?php echo $this->_tpl_vars['mod']['icon']; ?>
'/><span><?php echo $this->_tpl_vars['mod']['title']; ?>
</span><br /><span><?php echo $this->_tpl_vars['mod']['description']; ?>
</span></span>">
            <img src='<?php echo ((is_array($_tmp=@$this->_tpl_vars['mod']['icon'])) ? $this->_run_mod_handler('default', true, $_tmp, ($this->_tpl_vars['theme_img'])."/modules.png") : smarty_modifier_default($_tmp, ($this->_tpl_vars['theme_img'])."/modules.png")); ?>
' alt="<?php echo $this->_tpl_vars['mod']['title']; ?>
"/>
            <span><?php echo $this->_tpl_vars['mod']['title']; ?>
</span>
        </a>
    <?php endforeach; endif; unset($_from); ?>
</div>