<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:56:24
         compiled from db:eguide_event.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:eguide_event.html', 27, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:eguide_item.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['event']['extents']): ?>
<div class="evform">
<form action="event.php">
<b><?php echo @_MD_EXTENT_DATE; ?>
</b>
<input type="hidden" name="eid" value="<?php echo $this->_tpl_vars['event']['eid']; ?>
"/>
<select name="sub">
<?php $_from = $this->_tpl_vars['event']['extents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ext']):
?>
<option value="<?php echo $this->_tpl_vars['ext']['exid']; ?>
"><?php echo $this->_tpl_vars['ext']['date']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>
<input type="submit" value="<?php echo @_SUBMIT; ?>
"/>
</form>
</div>
<?php elseif ($this->_tpl_vars['message']): ?>
<div class="evform">
  <div class="evnote"><?php echo $this->_tpl_vars['message']; ?>
</div>
</div>
<?php elseif ($this->_tpl_vars['form']): ?>
<a name="form"></a>
<div class="evform">
<div class="evtitle"><?php echo @_MD_RESERVATION; ?>
</div>
<form action="reserv.php?op=<?php echo $this->_tpl_vars['form']['op']; ?>
#form" name="order" method="post" onsubmit="return xoopsFormValidate_order();">
<table class="outer" align="center" cellspacing="1" border="0">
<tr><th colspan="2"><?php echo $this->_tpl_vars['event']['date']; ?>
 &nbsp; <?php echo $this->_tpl_vars['event']['title']; ?>
</th></tr>
<?php if (! $this->_tpl_vars['form']['member_only']): ?>
<tr class="evms <?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
"><td class="head"><?php echo @_MD_EMAIL; ?>
<?php echo @_MD_REQUIRE_MARK; ?>
</td><td><input size="40" name="email" id="email" value="<?php echo $this->_tpl_vars['form']['email']; ?>
"/>
<?php if ($this->_tpl_vars['form']['user_notify']): ?>
<br/><input type="checkbox" <?php if ($_POST['notify']): ?>checked="checked" <?php endif; ?>name="notify" /><?php echo @_MD_NOTIFY_REQUEST; ?>

<?php endif; ?>
</td></tr>
<?php if ($this->_tpl_vars['form']['options']['email_repeat_check']): ?>
<tr class="evms <?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
"><td class="head"><?php echo @_MD_EMAIL_CONF; ?>
<?php echo @_MD_REQUIRE_MARK; ?>
</td><td><input size="40" name="email_conf" id="email_conf" value="<?php echo $this->_tpl_vars['form']['email_conf']; ?>
"/>
  <div class="note"><?php echo @_MD_EMAIL_CONF_DESC; ?>
</div>
</td></tr>
<?php endif; ?>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['form']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['fm']):
        $this->_foreach['item']['iteration']++;
?>
  <?php if (preg_match ( "/^-/" , $this->_tpl_vars['form']['items'][$this->_foreach['item']['iteration']]['label'] )): ?>
    <?php if (empty ( $this->_tpl_vars['form_continue'] )): ?>
      <tr class="<?php echo $this->_tpl_vars['fm']['attr']; ?>
 <?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
"><td class="head"><?php echo $this->_tpl_vars['fm']['label']; ?>
</td><td>
      <?php $this->assign('form_continue', 1); ?>
    <?php endif; ?>
    <?php echo $this->_tpl_vars['fm']['value']; ?>
<?php if ($this->_tpl_vars['fm']['comment']): ?><span class="note"><?php echo $this->_tpl_vars['fm']['comment']; ?>
</span><?php endif; ?>
  <?php else: ?>
    <?php if (! empty ( $this->_tpl_vars['form_continue'] )): ?>
      <?php echo $this->_tpl_vars['fm']['value']; ?>
<?php if ($this->_tpl_vars['fm']['comment']): ?><span class="note"><?php echo $this->_tpl_vars['fm']['comment']; ?>
</span><?php endif; ?>
      </td></tr>
      <?php $this->assign('form_continue', 0); ?>
    <?php else: ?>
      <tr class="<?php echo $this->_tpl_vars['fm']['attr']; ?>
 <?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
"><td class="head"><?php echo $this->_tpl_vars['fm']['label']; ?>
</td><td><?php echo $this->_tpl_vars['fm']['value']; ?>
<?php if ($this->_tpl_vars['fm']['comment']): ?><span class="note"><?php echo $this->_tpl_vars['fm']['comment']; ?>
</span><?php endif; ?></td></tr>
    <?php endif; ?>
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</table>
<input type="hidden" name="eid" value="<?php echo $this->_tpl_vars['form']['eid']; ?>
" />
<?php if ($this->_tpl_vars['event']['exid']): ?>
<input type="hidden" name="sub" value="<?php echo $this->_tpl_vars['event']['exid']; ?>
" />
<?php endif; ?>
<p style="text-align: center;">
  
    <input type="submit" value="<?php if ($this->_tpl_vars['form']['op'] == 'confirm'): ?><?php echo @_MD_ORDER_CONF; ?>
<?php else: ?><?php echo @_MD_ORDER_SEND; ?>
<?php endif; ?>" <?php echo $this->_tpl_vars['form']['submit_opts']; ?>
/>
  
</p>
</form>
<script type="text/javascript">
<!--//
function checkItem(obj) {
  if (typeof(obj.selectedIndex)=="number" && obj.value != "") return false;
  if (obj.value == "") return true;
  if (typeof(obj.length)=="number") {
     for (i=0; i<obj.length; i++) {
        if (obj[i].checked) return false;
     }
     return true;
  }
  return false;
}
function xoopsFormValidate_order() {
    myform = window.document.order;
    obj = null;
    var msg = "";
<?php $_from = $this->_tpl_vars['form']['check']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['msg']):
?>
myobj = myform["<?php echo $this->_tpl_vars['name']; ?>
"];
if ( checkItem(myobj) ) { msg = msg+"<?php echo $this->_tpl_vars['msg']; ?>
\n"; if(obj==null)obj=myobj; }
<?php endforeach; endif; unset($_from); ?>
<?php if ($this->_tpl_vars['form']['options']['email_repeat_check']): ?>
myobj = myform["email_conf"];
if (myform["email"].value != myobj.value) { msg = msg+"<?php echo @_MD_MAIL_CONF_ERR; ?>
\n"; if(obj==null)obj=myobj; }
<?php endif; ?>
if (msg != "") { 
  window.alert(msg); 
  if (typeof(obj.length)!="number") obj.focus();
  return false; 
}
return true;
}
//--></script>
<?php if ($this->_tpl_vars['form']['lang_note'] || $this->_tpl_vars['form']['note']): ?>
  <p align="right"><?php echo $this->_tpl_vars['form']['lang_note']; ?>
 <?php echo $this->_tpl_vars['form']['note']; ?>
</p>
<?php endif; ?>
</div>
<?php endif; ?>

<?php if ($this->_tpl_vars['list']): ?>
<div class="evlist">
<div class="evtitle"><?php echo @_MD_RESERV_LIST; ?>
</div>
<table width="100%" cellspacing="1" cellpadding="4" class="outer">
<tr class="head"><th></th><?php $_from = $this->_tpl_vars['labels']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lab']):
?><th><?php echo $this->_tpl_vars['lab']; ?>
</th><?php endforeach; endif; unset($_from); ?></tr>
<?php $_from = $this->_tpl_vars['list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nc'] => $this->_tpl_vars['order']):
?>
<tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
  <td align="right"><?php echo $this->_tpl_vars['nc']; ?>
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
<?php if ($this->_tpl_vars['commentsnav']): ?>
<!-- XOOPS common comment system -->
<div style="text-align:center; margin-top:2em; margin-bottom:1em;">
  <?php echo $this->_tpl_vars['commentsnav']; ?>

  <?php echo $this->_tpl_vars['lang_notice']; ?>

</div>
<div class="evcomment">
<!-- start comments loop -->
<?php if ($this->_tpl_vars['comment_mode'] == 'flat'): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_flat.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['comment_mode'] == 'thread'): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_thread.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php elseif ($this->_tpl_vars['comment_mode'] == 'nest'): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_comments_nest.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<!-- end comments loop -->
</div>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:system_notification_select.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>