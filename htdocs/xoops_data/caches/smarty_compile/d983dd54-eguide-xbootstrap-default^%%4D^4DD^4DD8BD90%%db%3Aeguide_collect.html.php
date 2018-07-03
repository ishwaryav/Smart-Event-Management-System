<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:57:32
         compiled from db:eguide_collect.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:eguide_collect.html', 39, false),)), $this); ?>
<table>
<?php $_from = $this->_tpl_vars['event']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['eid'] => $this->_tpl_vars['ev']):
?>
<tr>
  <td>
  <?php if (count ( $this->_tpl_vars['event'] ) > 1): ?><a href="collect.php?eid=<?php echo $this->_tpl_vars['eid']; ?>
">@</a><?php endif; ?>
  <a href="event.php?eid=<?php echo $this->_tpl_vars['eid']; ?>
" class="evhead"><?php echo $this->_tpl_vars['ev']['title']; ?>
</a> (<?php echo @_MD_POSTDATE; ?>
 <?php echo $this->_tpl_vars['ev']['postdate']; ?>
)</td>
  <td>
    [
      <a href="admin.php?eid=<?php echo $this->_tpl_vars['eid']; ?>
"><?php echo @_EDIT; ?>
</a>
      | <a href="export.php?eid=<?php echo $this->_tpl_vars['eid']; ?>
"}><?php echo @_MD_EXPORT_OUT; ?>
</a>
      <?php if ($this->_tpl_vars['ev']['exid']): ?>
      | <a href="editdate.php?eid=<?php echo $this->_tpl_vars['eid']; ?>
"}><?php echo @_MD_EDIT_EXTENT; ?>
</a>
      <?php endif; ?>
    ]
  </td>
</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<?php if (count ( $this->_tpl_vars['event'] ) == 1): ?>
  <?php $_from = $this->_tpl_vars['event']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['eid'] => $this->_tpl_vars['ev']):
?>
  <?php if ($this->_tpl_vars['ev']['catname']): ?>
    <a href="index.php?cat=<?php echo $this->_tpl_vars['ev']['catid']; ?>
">
    <?php if ($this->_tpl_vars['ev']['catimg']): ?>
      <img src="<?php echo $this->_tpl_vars['ev']['catimg']; ?>
" alt="<?php echo $this->_tpl_vars['ev']['catname']; ?>
" class="catbox" />
    <?php else: ?>
      <span class="catbox"><?php echo $this->_tpl_vars['ev']['catname']; ?>
</span>
    <?php endif; ?>
    </a>
  <?php endif; ?>
  <div class="evinfo"><?php echo @_MD_POSTERC; ?>
 <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['ev']['uid']; ?>
"><?php echo $this->_tpl_vars['ev']['uname']; ?>
</a></div>
  <p class="evbody"><?php echo $this->_tpl_vars['ev']['disp_summary']; ?>
</p>
  <?php endforeach; endif; unset($_from); ?>
<?php endif; ?>
<br/>
<form method="post">
<table class="outer" cellspacing="1" cellpading="2">
<tr><th></th><?php $_from = $this->_tpl_vars['timeline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['time']):
?><th><?php echo $this->_tpl_vars['time']; ?>
</th><?php endforeach; endif; unset($_from); ?></tr>
<?php $_from = $this->_tpl_vars['cells']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['day'] => $this->_tpl_vars['cell']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => "even, odd"), $this);?>
"><td class="head"><?php echo $this->_tpl_vars['dateline'][$this->_tpl_vars['day']]; ?>
</td>
  <?php $_from = $this->_tpl_vars['timeline']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['time'] => $this->_tpl_vars['disp']):
?>
    <td align="center">
      <?php if ($this->_tpl_vars['cell'][$this->_tpl_vars['time']]): ?>
        <?php $_from = $this->_tpl_vars['cell'][$this->_tpl_vars['time']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ev']):
?>
	  <div><?php echo @_MD_RESERV_PERSONS; ?>

	    <input size="2" name="persons[<?php echo $this->_tpl_vars['ev']['eid']; ?>
<?php if ($this->_tpl_vars['ev']['exid']): ?>-<?php echo $this->_tpl_vars['ev']['exid']; ?>
<?php endif; ?>]" value="<?php if ($this->_tpl_vars['ev']['exid']): ?><?php echo $this->_tpl_vars['ev']['expersons']; ?>
<?php else: ?><?php echo $this->_tpl_vars['ev']['persons']; ?>
<?php endif; ?>"/><br/>
	    <a href="entry.php?eid=<?php echo $this->_tpl_vars['ev']['eid']; ?>
<?php if ($this->_tpl_vars['ev']['exid']): ?>&sub=<?php echo $this->_tpl_vars['ev']['exid']; ?>
<?php endif; ?>" title="<?php echo $this->_tpl_vars['ev']['date']; ?>
 <?php echo $this->_tpl_vars['ev']['title']; ?>
"><?php echo @_REGISTER; ?>
</a>
	    <a href="receipt.php?eid=<?php echo $this->_tpl_vars['ev']['eid']; ?>
<?php if ($this->_tpl_vars['ev']['exid']): ?>&sub=<?php echo $this->_tpl_vars['ev']['exid']; ?>
<?php endif; ?>" title="<?php echo $this->_tpl_vars['ev']['date']; ?>
 <?php echo $this->_tpl_vars['ev']['title']; ?>
"><?php echo @_MD_DETAIL; ?>
</a>
            (<?php echo $this->_tpl_vars['ev']['reserved']; ?>
/<?php echo $this->_tpl_vars['ev']['persons']; ?>
)
	  </div>
        <?php endforeach; endif; unset($_from); ?>
      <?php elseif ($this->_tpl_vars['peid']): ?>
	<a href="editdate.php?eid=<?php echo $this->_tpl_vars['peid']; ?>
&adds=<?php echo $this->_tpl_vars['day']; ?>
+<?php echo $this->_tpl_vars['time']; ?>
" title="<?php echo $this->_tpl_vars['day']; ?>
 <?php echo $this->_tpl_vars['time']; ?>
 <?php echo $this->_tpl_vars['event'][$this->_tpl_vars['peid']]['title']; ?>
"><?php echo @_MD_ADD_EXTENT; ?>
</a>
      <?php endif; ?>
    </td>
  <?php endforeach; endif; unset($_from); ?>
  </tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<p style="text-align:center"><input type="submit" value="<?php echo @_MD_UPDATE; ?>
"></p>
</from>