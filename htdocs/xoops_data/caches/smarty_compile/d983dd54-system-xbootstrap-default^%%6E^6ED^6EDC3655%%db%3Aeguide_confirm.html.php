<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:50:33
         compiled from db:eguide_confirm.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:eguide_confirm.html', 20, false),array('modifier', 'escape', 'db:eguide_confirm.html', 39, false),)), $this); ?>
<?php if ($this->_tpl_vars['event']['eid']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:eguide_item.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
  <h2><?php echo @_MD_NOTIFY_EVENT; ?>
</h2>
<?php endif; ?>
<?php if ($this->_tpl_vars['errors']): ?>
<div class="error">
<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['msg']):
?>
   <?php echo $this->_tpl_vars['msg']; ?>
<br/>
<?php endforeach; endif; unset($_from); ?>
</div>
<?php endif; ?>

<div class="evform">
<?php if ($this->_tpl_vars['items']): ?>
  <table cellspacing="1" cellpadding="2" border="0" class="outer">
  <?php $_from = $this->_tpl_vars['items']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['item'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['item']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['lab'] => $this->_tpl_vars['fm']):
        $this->_foreach['item']['iteration']++;
?>
    <?php if (preg_match ( "/^-/" , $this->_tpl_vars['items'][$this->_foreach['item']['iteration']]['label'] )): ?>
      <?php if (empty ( $this->_tpl_vars['form_continue'] )): ?>
	<tr class="<?php echo smarty_function_cycle(array('values' => "even, odd"), $this);?>
"><td class="head"><?php echo $this->_tpl_vars['fm']['label']; ?>
</td><td>
	<?php $this->assign('form_continue', 1); ?>
      <?php endif; ?>
      <?php echo $this->_tpl_vars['fm']['value']; ?>

    <?php else: ?>
      <?php if (! empty ( $this->_tpl_vars['form_continue'] )): ?>
	 <?php echo $this->_tpl_vars['fm']['value']; ?>
</td></tr>
	<?php $this->assign('form_continue', 0); ?>
      <?php else: ?>
	<tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
"><td class="head"><?php echo $this->_tpl_vars['fm']['label']; ?>
</td><td><?php echo $this->_tpl_vars['fm']['value']; ?>
</td></tr>
      <?php endif; ?>
    <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?>
  </table>
<?php endif; ?>
  <div class="evtbl">
    <?php if ($this->_tpl_vars['values']): ?>
    <table cellspacing="1" cellpadding="2" border="0" class="outer">
      <?php $_from = $this->_tpl_vars['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lab'] => $this->_tpl_vars['val']):
?>
	<tr class="<?php echo smarty_function_cycle(array('values' => "even,odd"), $this);?>
"><td class="head"><?php echo $this->_tpl_vars['lab']; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['val'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td></tr>
      <?php endforeach; endif; unset($_from); ?>
    </table>
    <?php endif; ?>
    <div style="text-align: center;">
    <?php if ($this->_tpl_vars['cancel']): ?>
    <table align="center">
      <tr><td><?php echo $this->_tpl_vars['submit']; ?>
</td><td><?php echo $this->_tpl_vars['cancel']; ?>
</td></tr>
    </table>
    <?php else: ?>
      <?php echo $this->_tpl_vars['submit']; ?>

    <?php endif; ?>
    </div>
  </div>
</div>