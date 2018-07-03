<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:57:28
         compiled from db:eguide_block_category.html */ ?>
<?php if ($this->_tpl_vars['block']['options']): ?>
<form action="<?php echo $this->_tpl_vars['block']['action']; ?>
" id="<?php echo $this->_tpl_vars['block']['dirname']; ?>
_catsel" style="text-align: center;">
<select name="cat" onChange="submit();">
  <option value="">-----</option>
<?php $_from = $this->_tpl_vars['block']['options']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['option']):
?>
  <option value="<?php echo $this->_tpl_vars['option']['catid']; ?>
"<?php if ($this->_tpl_vars['option']['catid'] == $_GET['cat']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['option']['name']; ?>
</option>
<?php endforeach; endif; unset($_from); ?>
</select>
</form>
<?php endif; ?>