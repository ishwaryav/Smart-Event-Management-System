<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:50:33
         compiled from db:eguide_block_top.html */ ?>
<?php if ($this->_tpl_vars['block']['categories']): ?>
<div><b><?php echo @_BLOCK_EV_CATEGORY; ?>
</b>
  <?php $_from = $this->_tpl_vars['block']['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['categ'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categ']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['catid'] => $this->_tpl_vars['cat']):
        $this->_foreach['categ']['iteration']++;
?>
    <a href="<?php echo $this->_tpl_vars['block']['module_url']; ?>
/index.php?cat=<?php echo $this->_tpl_vars['catid']; ?>
"><?php echo $this->_tpl_vars['cat']['name']; ?>
</a><?php if (! ($this->_foreach['categ']['iteration'] == $this->_foreach['categ']['total'])): ?>, <?php endif; ?>
  <?php endforeach; endif; unset($_from); ?>
</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['block']['events']): ?>
<?php if ($this->_tpl_vars['block']['detail']): ?> 
<?php $_from = $this->_tpl_vars['block']['events']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['events'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['events']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['event']):
        $this->_foreach['events']['iteration']++;
?>
<div><?php echo $this->_tpl_vars['event']['date']; ?>

   <a href="<?php echo $this->_tpl_vars['block']['module_url']; ?>
/event.php?eid=<?php echo $this->_tpl_vars['event']['eid']; ?>
<?php if ($this->_tpl_vars['event']['exid']): ?>&amp;sub=<?php echo $this->_tpl_vars['event']['exid']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['event']['title']; ?>
</a> 
   (<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['event']['uid']; ?>
"><?php echo $this->_tpl_vars['event']['uname']; ?>
</a> <?php echo $this->_tpl_vars['event']['post']; ?>
)
   <?php echo $this->_tpl_vars['event']['mark']; ?>

   <?php if (($this->_foreach['events']['iteration'] <= 1)): ?>
     <div><?php echo $this->_tpl_vars['event']['description']; ?>
</div>
   <?php endif; ?>
</div>
<?php endforeach; endif; unset($_from); ?>
<?php else: ?>
<?php $_from = $this->_tpl_vars['block']['events']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['event']):
?>
<div><?php echo $this->_tpl_vars['event']['date']; ?>

  <a href="<?php echo $this->_tpl_vars['block']['module_url']; ?>
/event.php?eid=<?php echo $this->_tpl_vars['event']['eid']; ?>
<?php if ($this->_tpl_vars['event']['exid']): ?>&amp;sub=<?php echo $this->_tpl_vars['event']['exid']; ?>
<?php endif; ?>"><?php echo $this->_tpl_vars['event']['title']; ?>
</a>
  <?php echo $this->_tpl_vars['event']['mark']; ?>

</div>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<?php else: ?>
<div><?php echo @_BLOCK_EV_NONE; ?>
</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['block']['waiting']): ?>
<p><a href="<?php echo $this->_tpl_vars['block']['module_url']; ?>
/admin/index.php?op=events"><?php echo @_BLOCK_EV_WAIT; ?>
</a>: <?php echo $this->_tpl_vars['block']['waiting']; ?>
</p>
<?php endif; ?>
<div class="evmore"><a href="<?php echo $this->_tpl_vars['block']['more_url']; ?>
"><?php echo @_BLOCK_EV_MORE; ?>
</a></div>