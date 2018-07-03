<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:50:33
         compiled from db:eguide_userssel.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'db:eguide_userssel.html', 19, false),array('function', 'cycle', 'db:eguide_userssel.html', 37, false),)), $this); ?>
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
<?php else: ?>
<div class="entlist">
<div id="users_search">
<form action="entry.php">
<input type="hidden" name="eid" value="<?php echo $this->_tpl_vars['form']['eid']; ?>
" />
<?php if ($this->_tpl_vars['event']['exid']): ?>
<input type="hidden" name="sub" value="<?php echo $this->_tpl_vars['event']['exid']; ?>
" />
<?php endif; ?>
<input name="search" value="<?php echo ((is_array($_tmp=$_GET['search'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"/> <input type="submit" value="<?php echo @_SEARCH; ?>
"/>
</form>
</div>
<table width="100%">
  <tr>
    <td width="20%"><?php echo @_SEARCH; ?>
 <?php echo $this->_tpl_vars['users_total']; ?>
</td>
    <td align="center"><?php echo $this->_tpl_vars['navigation']; ?>
</td>
    <td width="20%"></td>
  </tr>
</table>
<table class="outer" align="center" cellspacing="1" border="0">
  <tr class="head">
    <th></th>
    <?php $_from = $this->_tpl_vars['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['col']):
?>
    <th><?php echo ((is_array($_tmp=$this->_tpl_vars['lang_users'][$this->_tpl_vars['col']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</th>
    <?php endforeach; endif; unset($_from); ?>
  </tr>
  <?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
">
    <td>
      <a href="entry.php?eid=<?php echo $this->_tpl_vars['form']['eid']; ?>
<?php if ($this->_tpl_vars['event']['exid']): ?>&amp;exid=<?php echo $this->_tpl_vars['event']['exid']; ?>
<?php endif; ?>&amp;uid=<?php echo $this->_tpl_vars['user']['uid']; ?>
"><?php echo @_MD_RESERV_REGISTER; ?>
</a>
      <?php if ($this->_tpl_vars['xoops_isadmin'] && $this->_tpl_vars['user']['uid'] > 0): ?>| <a href="mylist.php?eid=<?php echo $this->_tpl_vars['form']['eid']; ?>
<?php if ($this->_tpl_vars['event']['exid']): ?>&amp;exid=<?php echo $this->_tpl_vars['event']['exid']; ?>
<?php endif; ?>&amp;uid=<?php echo $this->_tpl_vars['user']['uid']; ?>
"><?php echo @_MD_DETAIL; ?>
</a> <?php endif; ?>
    </td>
    <?php $_from = $this->_tpl_vars['columns']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['col']):
?>
    <td><?php echo ((is_array($_tmp=$this->_tpl_vars['user'][$this->_tpl_vars['col']])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
    <?php endforeach; endif; unset($_from); ?>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>