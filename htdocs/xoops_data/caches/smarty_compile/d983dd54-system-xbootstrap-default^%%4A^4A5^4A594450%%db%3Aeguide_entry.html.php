<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:50:33
         compiled from db:eguide_entry.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:eguide_entry.html', 18, false),)), $this); ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:eguide_item.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if ($this->_tpl_vars['errors']): ?>
<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['msg']):
?>
<div class="error"><?php echo $this->_tpl_vars['msg']; ?>
</div>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['message']): ?>
<div class="entform">
  <div class="evnote"><?php echo $this->_tpl_vars['message']; ?>
</div>
</div>
<?php elseif ($this->_tpl_vars['form']): ?>
<a name="form"></a>
<div class="entform">
<div class="evtitle"><?php echo @_MD_RESERV_REGISTER; ?>
</div>
<form action="entry.php" method="post">
<table class="outer" align="center" cellspacing="1" border="0">
<tr><th colspan="2"><?php echo $this->_tpl_vars['event']['date']; ?>
 &nbsp; <?php echo $this->_tpl_vars['event']['title']; ?>
</th></tr>
<tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
"><td class="head"><?php echo @_MD_UNAME; ?>
</td><td><?php echo $this->_tpl_vars['form']['uname']; ?>
</td></tr>
<?php if (! $this->_tpl_vars['form']['member_only']): ?>
<tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
"><td class="head"><?php echo @_MD_EMAIL; ?>
</td><td><input size="40" name="email" value="<?php echo $this->_tpl_vars['form']['email']; ?>
"/>
</td></tr>
<?php endif; ?>
<?php $_from = $this->_tpl_vars['form']['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fm']):
?>
<tr class="<?php echo $this->_tpl_vars['fm']['attr']; ?>
 <?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
"><td class="head"><?php echo $this->_tpl_vars['fm']['label']; ?>
</td><td><?php echo $this->_tpl_vars['fm']['value']; ?>
<?php echo $this->_tpl_vars['fm']['comment']; ?>
</td></tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<?php if ($this->_tpl_vars['form']['uid'] > 0): ?>
<input type="hidden" name="uid" id="reserv_uid" value="<?php echo $this->_tpl_vars['form']['uid']; ?>
" />
<?php endif; ?>
<input type="hidden" name="eid" value="<?php echo $this->_tpl_vars['form']['eid']; ?>
" />
<?php if ($this->_tpl_vars['event']['exid']): ?>
<input type="hidden" name="sub" value="<?php echo $this->_tpl_vars['event']['exid']; ?>
" />
<?php endif; ?>
<?php if ($this->_tpl_vars['form']['note']): ?>
  <div align='right'><?php echo $this->_tpl_vars['form']['note']; ?>
</div>
<?php endif; ?>
<p style="text-align: center;"><input type="submit" value="<?php echo @_MD_ORDER_SEND; ?>
" /></p>
</form>
</div>
<?php endif; ?>