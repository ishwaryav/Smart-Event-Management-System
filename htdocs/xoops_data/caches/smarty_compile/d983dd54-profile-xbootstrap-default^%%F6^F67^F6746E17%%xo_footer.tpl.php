<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:21:40
         compiled from /Applications/XAMPP/xamppfiles/htdocs/htdocs/modules/system/themes/default/xotpl/xo_footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/Applications/XAMPP/xamppfiles/htdocs/htdocs/modules/system/themes/default/xotpl/xo_footer.tpl', 2, false),)), $this); ?>
<div id='xo-footer'>
    <div id="xo-footer-body">Powered by <a class="tooltip" rel="external" href="http://xoops.org" title="Xoops Project"><?php echo $this->_tpl_vars['xoops_version']; ?>
</a> &copy; 2001-<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y") : smarty_modifier_date_format($_tmp, "%Y")); ?>
</div>
    <div id="xo-footer-rss"><a class="tooltip" rel="external" href="<?php echo 'http://localhost/htdocs/backend.php'; ?>" title="<?php echo @_OXYGEN_RSS; ?>
"><img src="<?php 
echo 'http://localhost/htdocs/modules/system/themes/default/img/feed.png'; ?>"/></a></div>
    <div><?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_tpl'])."/xo_uptop.tpl", 'smarty_include_vars' => array()));
 ?></div>
</div>