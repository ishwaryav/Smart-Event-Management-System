<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:50:33
         compiled from db:eguide_receipt_print.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:eguide_receipt_print.html', 26, false),)), $this); ?>
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
<h2><?php echo $this->_tpl_vars['title']; ?>
</h2>
<div class="evlist">
<h3><?php echo @_MD_RESERV_LIST; ?>
</h3>

<table width="100%">
<tr><td><?php echo @_MD_ORDER_COUNT; ?>
 <?php echo $this->_tpl_vars['order_count']; ?>
 (<?php echo $this->_tpl_vars['reserv_num']; ?>
)</td><td align="right"><?php echo @_MD_PRINT_DATE; ?>
 <?php echo $this->_tpl_vars['print_date']; ?>
</td></tr>
</table>
<table width="100%" cellspacing="1" cellpadding="4" class="evtbl">
<tr class="head">
  <th><?php echo @_MD_ORDER_DATE; ?>
</th>
  <th><?php echo @_MD_STATUS; ?>
</th>
<?php $_from = $this->_tpl_vars['labels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lab']):
?>
  <th><?php echo $this->_tpl_vars['lab']; ?>
</th>
<?php endforeach; endif; unset($_from); ?>
</tr>
<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['order']):
?>
<tr class="<?php echo smarty_function_cycle(array('values' => "even, odd"), $this);?>
">
  <td nowrap><?php echo $this->_tpl_vars['order']['date']; ?>
</td>
  <td><?php echo $this->_tpl_vars['order']['stat']; ?>
</td>
  <td>
<?php if ($this->_tpl_vars['order']['uname']): ?>
    <?php echo $this->_tpl_vars['order']['uname']; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['order']['email']): ?>
    &lt;<?php echo $this->_tpl_vars['order']['email']; ?>
&gt;
<?php endif; ?>
  </td>
<?php $_from = $this->_tpl_vars['order']['add']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value']):
?>
  <td><?php echo $this->_tpl_vars['value']; ?>
</td>
<?php endforeach; endif; unset($_from); ?>
<?php endforeach; endif; unset($_from); ?>
<tr >
</table>
<?php if ($this->_tpl_vars['citem']): ?>
<br/>
<div class="evhead"><?php echo @_MD_SUMMARY; ?>
</div>
<table class="evtbl">
<tr class="head"><th><?php echo @_MD_SUM_ITEM; ?>
</th><th><?php echo @_MD_SUM; ?>
</th></tr>
<?php $_from = $this->_tpl_vars['citem']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['label'] => $this->_tpl_vars['count']):
?>
<tr class="<?php echo smarty_function_cycle(array('values' => "even, odd"), $this);?>
"><td><?php echo $this->_tpl_vars['label']; ?>
</td><td align='right'><?php echo $this->_tpl_vars['count']; ?>
</td></tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>
</div>
</body>
</html>