<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:50:33
         compiled from db:eguide_editdate.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:eguide_editdate.html', 36, false),)), $this); ?>
<?php if ($this->_tpl_vars['errors']): ?>
<?php $_from = $this->_tpl_vars['errors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['msg']):
?>
<div class="error"><?php echo $this->_tpl_vars['msg']; ?>
</div>
<?php endforeach; endif; unset($_from); ?>
<p/>
<?php endif; ?>
<table>
<tr>
  <td>
  <a href="event.php?eid=<?php echo $this->_tpl_vars['event']['eid']; ?>
" class="evhead"><?php echo $this->_tpl_vars['event']['title']; ?>
</a> (<?php echo @_MD_POSTDATE; ?>
 <?php echo $this->_tpl_vars['event']['postdate']; ?>
)</td>
  <td>
    [
      <a href="admin.php?eid=<?php echo $this->_tpl_vars['event']['eid']; ?>
"><?php echo @_EDIT; ?>
</a>
      | <a href="export.php?eid=<?php echo $this->_tpl_vars['event']['eid']; ?>
"}><?php echo @_MD_EXPORT_OUT; ?>
</a>
      | <a href="collect.php?eid=<?php echo $this->_tpl_vars['event']['eid']; ?>
"><?php echo @_MD_SUMMARY; ?>
</a>
    ]
  </td>
</tr>
</table>
<?php if ($this->_tpl_vars['event']['catname']): ?>
  <a href="index.php?cat=<?php echo $this->_tpl_vars['event']['catid']; ?>
">
  <?php if ($this->_tpl_vars['event']['catimg']): ?>
    <img src="<?php echo $this->_tpl_vars['event']['catimg']; ?>
" alt="<?php echo $this->_tpl_vars['event']['catname']; ?>
" class="catbox" />
  <?php else: ?>
    <span class="catbox"><?php echo $this->_tpl_vars['event']['catname']; ?>
</span>
  <?php endif; ?>
  </a>
<?php endif; ?>
<div class="evinfo"><?php echo @_MD_POSTERC; ?>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['event']['uid']; ?>
"><?php echo $this->_tpl_vars['event']['uname']; ?>
</a></div>
<p class="evbody"><?php echo $this->_tpl_vars['event']['disp_summary']; ?>
</p>
<form method="post">
<div><?php echo @_MD_RESERV_PERSONS; ?>
: <?php echo $this->_tpl_vars['event']['persons']; ?>
<?php echo @_MD_RESERV_UNIT; ?>
</div>
<table cellspacing="1" cellpading="2" class="outer">
  <tr><th align="center"><?php echo $this->_tpl_vars['labels'][0]; ?>
</th><th><?php echo $this->_tpl_vars['labels'][1]; ?>
</th><th colspan="2"><?php echo $this->_tpl_vars['labels'][2]; ?>
</th><th><?php echo $this->_tpl_vars['labels'][3]; ?>
</th></tr>
  <?php $_from = $this->_tpl_vars['extents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ext']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "even, odd"), $this);?>
">
    <td align="center"><?php if ($this->_tpl_vars['ext']['reserved']): ?>-<?php else: ?><input type="checkbox" name="dels[<?php echo $this->_tpl_vars['ext']['exid']; ?>
]" value="<?php echo $this->_tpl_vars['ext']['exid']; ?>
"/><?php endif; ?></td>
    <td><a href="event.php?eid=<?php echo $this->_tpl_vars['event']['eid']; ?>
&amp;sub=<?php echo $this->_tpl_vars['ext']['exid']; ?>
"><?php echo $this->_tpl_vars['ext']['date']; ?>
</a></td>
    <td align="right"><?php echo $this->_tpl_vars['ext']['reserved']; ?>
</td><td>(<?php if ($this->_tpl_vars['ext']['expersons']): ?><?php echo $this->_tpl_vars['ext']['expersons']; ?>
<?php else: ?>-<?php endif; ?>)</td>
    <td align="center">
    <?php if ($this->_tpl_vars['ext']['edit']): ?>
      <input name="mods[<?php echo $this->_tpl_vars['ext']['exid']; ?>
]" value="<?php echo $this->_tpl_vars['ext']['edit']; ?>
" size="18"/> &nbsp;
      <input name="exps[<?php echo $this->_tpl_vars['ext']['exid']; ?>
]" size="2" value="<?php echo $this->_tpl_vars['ext']['expersons']; ?>
">
    <?php endif; ?>
    </td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  </tr>
</table>
<h4><?php echo @_MD_ADD_EXTENT; ?>
</h4>
<div><textarea name="adds"><?php echo $this->_tpl_vars['adds']; ?>
</textarea></div>
<div class="evinfo"><?php echo @_MD_ADD_EXTENT_DESC; ?>
</div>
<p><input type="submit" value="<?php echo @_MD_UPDATE; ?>
"/></p>
</form>