<?php /* Smarty version 2.6.25-dev, created on 2017-11-12 21:12:29
         compiled from db:eguide_receipt.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:eguide_receipt.html', 22, false),)), $this); ?>
<div class="evlist">
<table>
<tr>
  <td><a href="event.php?eid=<?php echo $this->_tpl_vars['eid']; ?>
<?php if ($this->_tpl_vars['exid']): ?>&amp;sub=<?php echo $this->_tpl_vars['exid']; ?>
<?php endif; ?>" class="evhead"><?php echo $this->_tpl_vars['title']; ?>
</a></td>
  <td>
    [ <a href="admin.php?eid=<?php echo $this->_tpl_vars['eid']; ?>
"><?php echo @_EDIT; ?>
</a>
    <?php if ($this->_tpl_vars['exid']): ?>| <a href="editdate.php?eid=<?php echo $this->_tpl_vars['eid']; ?>
"><?php echo @_MD_EDIT_EXTENT; ?>
</a><?php endif; ?>
    ]
  </td>
</tr>
</table>
<p/>
<?php if ($this->_tpl_vars['extents']): ?>
<table class="outer">
<tr class="head">
  <th><?php echo @_MD_EXTENT_DATE; ?>
</th>
  <th><?php echo @_MD_ORDER_COUNT; ?>
</th>
  <th><?php echo @_MD_RESERV_PERSONS; ?>
</th>
  <th><?php echo @_MD_OPERATION; ?>
</th>
</tr>
<?php $_from = $this->_tpl_vars['extents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ext']):
?>
<tr class="<?php echo smarty_function_cycle(array('values' => "even, odd"), $this);?>
">
  <td><a href="receipt.php?eid=<?php echo $this->_tpl_vars['eid']; ?>
&amp;sub=<?php echo $this->_tpl_vars['ext']['exid']; ?>
"><?php echo $this->_tpl_vars['ext']['date']; ?>
</a></td>
  <td align="right"><?php echo $this->_tpl_vars['ext']['reserved']; ?>
</td>
  <td align="right"><?php echo $this->_tpl_vars['ext']['persons']; ?>
</td>
  <td align="center">
    <a href="entry.php?eid=<?php echo $this->_tpl_vars['eid']; ?>
&amp;sub=<?php echo $this->_tpl_vars['ext']['exid']; ?>
"><?php echo @_MD_RESERV_REGISTER; ?>
</a>
  </td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<?php else: ?>
<h3><?php echo @_MD_RESERV_LIST; ?>
</h3>

<table width="100%">
<tr>
  <td>[ <a href="entry.php?eid=<?php echo $this->_tpl_vars['eid']; ?>
<?php if ($this->_tpl_vars['exid']): ?>&amp;sub=<?php echo $this->_tpl_vars['exid']; ?>
<?php endif; ?>"><?php echo @_MD_RESERV_REGISTER; ?>
</a> ] &nbsp; 
  <?php echo @_MD_ORDER_COUNT; ?>
 <?php echo $this->_tpl_vars['order_count']; ?>
 (<?php echo $this->_tpl_vars['reserv_num']; ?>
)
  </td>
  <td align="right"><?php echo @_MD_PRINT_DATE; ?>
 <?php echo $this->_tpl_vars['print_date']; ?>
</td>
</tr>
</table>
<?php if ($this->_tpl_vars['list']): ?>
<form action="receipt.php" method="post">
<table width="100%" cellspacing="1" cellpadding="4" class="outer">
<tr class="head">
  <th><?php echo @_MD_OPERATION; ?>
</th>
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
  <td>
<?php if ($this->_tpl_vars['order']['confirm']): ?>
    <input type="checkbox" name="act[]" value="<?php echo $this->_tpl_vars['order']['rvid']; ?>
" checked />
<?php endif; ?>
    <a href="receipt.php?rvid=<?php echo $this->_tpl_vars['order']['rvid']; ?>
"><?php echo @_MD_DETAIL; ?>
</a> |
    <a href="receipt.php?op=edit&rvid=<?php echo $this->_tpl_vars['order']['rvid']; ?>
"><?php echo @_EDIT; ?>
</a> |
    <a href="reserv.php?op=cancel&rvid=<?php echo $this->_tpl_vars['order']['rvid']; ?>
"><?php echo @_DELETE; ?>
</a>
  </td>
  <td><?php echo $this->_tpl_vars['order']['date']; ?>
</td>
  <td><?php echo $this->_tpl_vars['order']['stat']; ?>
</td>
  <td>
<?php if ($this->_tpl_vars['order']['uname']): ?>
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['order']['uid']; ?>
"><?php echo $this->_tpl_vars['order']['uname']; ?>
</a>
<?php endif; ?>
<?php if ($this->_tpl_vars['order']['email']): ?>
    &lt;<a href="mailto:<?php echo $this->_tpl_vars['order']['email']; ?>
"><?php echo $this->_tpl_vars['order']['email']; ?>
</a>&gt;
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
<?php if ($this->_tpl_vars['confirm']): ?>
<input type='hidden' name='op' value='active' />
<input type='hidden' name='eid' value='<?php echo $this->_tpl_vars['eid']; ?>
' />
<input type='hidden' name='sub' value='<?php echo $this->_tpl_vars['exid']; ?>
' />
<br/>
<table><tr><td><select name='yesno'>
<?php $_from = $this->_tpl_vars['operations']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['value'] => $this->_tpl_vars['label']):
?>
  <option value="<?php echo $this->_tpl_vars['value']; ?>
"><?php echo $this->_tpl_vars['label']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select></td><td>
<input type="submit" value="<?php echo @_SUBMIT; ?>
" />
</td></tr>
</table>
<p><b><?php echo @_MD_RESERV_MSG_H; ?>
</b></p>
<textarea name="msg" cols="60" rows="10"><?php echo $this->_tpl_vars['reserv_msg']; ?>
</textarea>
<?php endif; ?>
</form>
<p align='right'>
[
 <a href="receipt.php?op=csv&amp;eid=<?php echo $this->_tpl_vars['eid']; ?>
<?php if ($this->_tpl_vars['exid']): ?>&amp;sub=<?php echo $this->_tpl_vars['exid']; ?>
<?php endif; ?>"><?php echo @_MD_CSV_OUT; ?>
</a>
 | <a href="export.php?eid=<?php echo $this->_tpl_vars['eid']; ?>
<?php if ($this->_tpl_vars['exid']): ?>&amp;sub=<?php echo $this->_tpl_vars['exid']; ?>
<?php endif; ?>"><?php echo @_MD_EXPORT_OUT; ?>
</a>
 | <a href="sendinfo.php?eid=<?php echo $this->_tpl_vars['eid']; ?>
<?php if ($this->_tpl_vars['exid']): ?>&amp;sub=<?php echo $this->_tpl_vars['exid']; ?>
<?php endif; ?>"><?php echo @_MD_INFO_MAIL; ?>
</a>
] 
<a href="receipt.php?op=print&amp;eid=<?php echo $this->_tpl_vars['eid']; ?>
<?php if ($this->_tpl_vars['exid']): ?>&amp;sub=<?php echo $this->_tpl_vars['exid']; ?>
<?php endif; ?>"><img src="images/printer.png" alt="<?php echo @_PRINT; ?>
" border="0" /></a>
</p>
<?php else: ?>
<p class='evnote'><?php echo @_MD_NODATA; ?>
</p>
<?php endif; ?>
<?php if ($this->_tpl_vars['citem']): ?>
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
<?php endif; ?>