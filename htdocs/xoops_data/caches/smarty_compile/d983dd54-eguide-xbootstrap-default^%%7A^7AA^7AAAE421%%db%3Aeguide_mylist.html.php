<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:57:21
         compiled from db:eguide_mylist.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:eguide_mylist.html', 16, false),)), $this); ?>
<h2><?php echo @_MD_MYLIST; ?>
</h2>

<?php if (is_object ( $this->_tpl_vars['show_user'] )): ?>
  <?php $this->assign('prog', "receipt.php"); ?>
  <h3><?php echo @_MD_UNAME; ?>
: <?php echo $this->_tpl_vars['show_user']->getVar('uname'); ?>
 (<?php echo $this->_tpl_vars['show_user']->getVar('name'); ?>
)</h3>
<?php else: ?>
  <?php $this->assign('prog', "event.php"); ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['reserved']): ?>
<table class="outer">
<tr>
  <th><?php echo @_MD_ORDER_DATE; ?>
</th><th><?php echo @_MD_TITLE; ?>
</th>
  <th></th>
</tr>
<?php $_from = $this->_tpl_vars['reserved']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['r']):
?>
<tr class="<?php echo smarty_function_cycle(array('values' => "even, odd"), $this);?>
<?php if ($this->_tpl_vars['r']['eid'] == $_GET['eid'] && ( empty ( $this->_tpl_vars['r']['exid'] ) || $this->_tpl_vars['r']['exid'] == $_GET['exid'] )): ?> select<?php endif; ?>">
  <td><?php echo $this->_tpl_vars['r']['rdate_fmt']; ?>
</td>
  <td><a href="<?php echo $this->_tpl_vars['prog']; ?>
?eid=<?php echo $this->_tpl_vars['r']['eid']; ?>
<?php if ($this->_tpl_vars['r']['exid']): ?>&amp;sub=<?php echo $this->_tpl_vars['r']['exid']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['r']['edate_fmt']; ?>
: <?php echo $this->_tpl_vars['r']['title']; ?>
</a></td>
  <td><?php if ($this->_tpl_vars['r']['cancel']): ?><a href="reserv.php?op=cancel&amp;rvid=<?php echo $this->_tpl_vars['r']['rvid']; ?>
&amp;key=<?php echo $this->_tpl_vars['r']['confirm']; ?>
"><?php echo @_MD_CANCEL; ?>
</a><?php endif; ?></td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<?php else: ?>
<div class='evnote'><?php echo @_MD_NODATA; ?>
</div>
<?php endif; ?>