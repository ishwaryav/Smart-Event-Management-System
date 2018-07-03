<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:56:24
         compiled from db:eguide_item.html */ ?>
<div class="event">
  <div>
    <span class="evmark"><?php echo $this->_tpl_vars['event']['fill_mark']; ?>
</span>
    <a href="event.php?eid=<?php echo $this->_tpl_vars['event']['eid']; ?>
<?php if ($this->_tpl_vars['event']['exid']): ?>&amp;sub=<?php echo $this->_tpl_vars['event']['exid']; ?>
<?php endif; ?>" class="evhead">
    <?php echo $this->_tpl_vars['event']['date']; ?>
 &nbsp; <?php echo $this->_tpl_vars['event']['title']; ?>
</a>
  </div>
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
</a>&nbsp;&nbsp;<?php echo @_MD_POSTDATE; ?>
 <?php echo $this->_tpl_vars['event']['postdate']; ?>
 (<?php echo $this->_tpl_vars['event']['hits']; ?>
)</div>
  <p class="evbody"><?php echo $this->_tpl_vars['event']['disp_summary']; ?>
</p>
<div class="evprop">
<div><?php echo @_MD_STARTTIME; ?>
 <?php echo $this->_tpl_vars['event']['time']; ?>
</div>
<?php if ($this->_tpl_vars['event']['persons']): ?>
<div><?php echo $this->_tpl_vars['event']['reserv_num']; ?>
<?php if ($this->_tpl_vars['event']['reservation']): ?> (<?php echo $this->_tpl_vars['event']['reserv_reg']; ?>
)<?php endif; ?></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['event']['dispclose'] && $this->_tpl_vars['event']['reservation']): ?>
<div><?php echo @_MD_CLOSEDATE; ?>
 <?php echo $this->_tpl_vars['event']['dispclose']; ?>
</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['points_this']): ?>
<!-- points plugin -->
<div><?php echo @_POINTS_NEED; ?>
 <?php echo $this->_tpl_vars['points_this']; ?>
</div>
<?php endif; ?>
</div>
<?php if ($this->_tpl_vars['event']['disp_body']): ?>
  <p class="evbody"><?php echo $this->_tpl_vars['event']['disp_body']; ?>
</p>
<?php elseif ($this->_tpl_vars['event']['expire'] && $this->_tpl_vars['event']['reservation']): ?>
  <p><a href="event.php?eid=<?php echo $this->_tpl_vars['event']['eid']; ?>
<?php if ($this->_tpl_vars['event']['exid']): ?>&amp;sub=<?php echo $this->_tpl_vars['event']['exid']; ?>
<?php endif; ?>#form"><?php echo @_MD_RESERV_FORM; ?>
</a></p>
<?php endif; ?>
<?php if ($this->_tpl_vars['event']['link']): ?>
  <div class="evlink"><?php if ($this->_tpl_vars['event']['isadmin']): ?>[
<?php if ($this->_tpl_vars['event']['reservation'] || $this->_tpl_vars['event']['reserved']): ?>
    <a href="receipt.php?eid=<?php echo $this->_tpl_vars['event']['eid']; ?>
<?php if ($this->_tpl_vars['event']['exid']): ?>&amp;sub=<?php echo $this->_tpl_vars['event']['exid']; ?>
<?php endif; ?>"><?php echo @_MD_RESERV_ADMIN; ?>
</a> |
<?php endif; ?>
    <a href="admin.php?eid=<?php echo $this->_tpl_vars['event']['eid']; ?>
"><?php echo @_EDIT; ?>
</a> |
<?php if ($this->_tpl_vars['event']['extent']): ?>
    <a href="editdate.php?eid=<?php echo $this->_tpl_vars['event']['eid']; ?>
"><?php echo @_MD_EDIT_EXTENT; ?>
</a> |
<?php endif; ?>
    <a href="admin.php?op=delete&amp;eid=<?php echo $this->_tpl_vars['event']['eid']; ?>
"><?php echo @_DELETE; ?>
</a> ] <?php endif; ?>
<?php if ($this->_tpl_vars['caldate']): ?>
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/piCal/index.php?caldate=<?php echo $this->_tpl_vars['caldate']; ?>
"><img src="images/calendar.png" alt="<?php echo @_MD_CALENDAR; ?>
" /></a>
<?php endif; ?>
<?php if ($this->_tpl_vars['event']['detail']): ?>
    <a href="<?php echo $this->_tpl_vars['event']['detail']; ?>
"><?php echo @_MD_READMORE; ?>
</a>
<?php else: ?>
    <a href="event.php?op=print&amp;eid=<?php echo $this->_tpl_vars['event']['eid']; ?>
<?php if ($this->_tpl_vars['event']['exid']): ?>&amp;sub=<?php echo $this->_tpl_vars['event']['exid']; ?>
<?php endif; ?>"><img src="images/printer.png" alt="<?php echo @_PRINT; ?>
" border="0" /></a>
<?php endif; ?>
  </div>
<?php endif; ?>
</div>