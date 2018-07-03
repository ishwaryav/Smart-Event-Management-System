<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:50:33
         compiled from db:eguide_event_print.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:eguide_event_print.html', 18, false),)), $this); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
<meta name="generator" content="XOOPS" />
<title><?php echo $this->_tpl_vars['xoops_sitename']; ?>
 - <?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
</title>
<link rel="stylesheet" type="text/css" media="all" href="print.css" />
<link href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/favicon.ico" rel="SHORTCUT ICON" />
</head>
<body>
<div class="header"><img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/images/logo.gif" alt="<?php echo $this->_tpl_vars['xoops_sitename']; ?>
"/></div>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:eguide_item.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['list']): ?>
<div class="evlist">
<div class="evtitle"><?php echo @_MD_RESERV_LIST; ?>
</div>
<table class="outer" align="center" width="100%">
<tr class="head"><th></th><?php $_from = $this->_tpl_vars['labels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lab']):
?><th><?php echo $this->_tpl_vars['lab']; ?>
</th><?php endforeach; endif; unset($_from); ?></tr>
<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nc'] => $this->_tpl_vars['order']):
?>
<tr class="<?php echo smarty_function_cycle(array('values' => "even, odd"), $this);?>
">
  <td class="num"><?php echo $this->_tpl_vars['nc']; ?>
</td>
<?php $_from = $this->_tpl_vars['order']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
  <td><?php echo $this->_tpl_vars['value']; ?>
</td><?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<tr >
</table>
</div>
<?php endif; ?>
<div class="footer">
<div><?php echo $this->_tpl_vars['lang_comefrom']; ?>
</div>
<div><a href="<?php echo @EGUIDE_URL; ?>
/"><?php echo @EGUIDE_URL; ?>
/</a></div>
<br/>
<div><?php echo @_MD_URLFOREVENT; ?>
</div>
<div><a href="<?php echo @EGUIDE_URL; ?>
/event.php?eid=<?php echo $this->_tpl_vars['event']['eid']; ?>
<?php if ($this->_tpl_vars['event']['exid']): ?>&sub=<?php echo $this->_tpl_vars['event']['exid']; ?>
<?php endif; ?>"><?php echo @EGUIDE_URL; ?>
/event.php?eid=<?php echo $this->_tpl_vars['event']['eid']; ?>
<?php if ($this->_tpl_vars['event']['exid']): ?>&amp;sub=<?php echo $this->_tpl_vars['event']['exid']; ?>
<?php endif; ?></a></div>
</div>
</body>
</html>