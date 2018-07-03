<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:50:33
         compiled from db:eguide_index.html */ ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:eguide_block_category.html', 'smarty_include_vars' => array('block' => $this->_tpl_vars['categories'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php $_from = $this->_tpl_vars['events']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['event']):
?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:eguide_item.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endforeach; endif; unset($_from); ?>
<table width="100%">
<tr>
  <td><?php if ($this->_tpl_vars['page_prev']): ?><a href="index.php<?php echo $this->_tpl_vars['page_prev']; ?>
"><?php echo @_MD_SHOW_PREV; ?>
</a><?php endif; ?></td>
  <td align="right"><?php if ($this->_tpl_vars['page_next']): ?><a href="index.php<?php echo $this->_tpl_vars['page_next']; ?>
"><?php echo @_MD_SHOW_NEXT; ?>
</a><?php endif; ?></td>
</tr>
</table>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'db:system_notification_select.html', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>