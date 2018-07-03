<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:50:33
         compiled from db:eguide_admin.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'db:eguide_admin.html', 156, false),)), $this); ?>
<?php if ($this->_tpl_vars['event']): ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "db:eguide_event.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<div class="event">
<h2><?php echo $this->_tpl_vars['lang_event_edit']; ?>
</h2>
<!-- for DHTML calendar -->
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/include/calendar-blue.css" />
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/include/calendar.js"></script>
<script type="text/javascript">
<!--
var calendar = null;

function selected(cal, date) {
  cal.sel.value = date;
}

function closeHandler(cal) {
  cal.hide();
  Calendar.removeEvent(document, "mousedown", checkCalendar);
}

function checkCalendar(ev) {
  var el = Calendar.is_ie ? Calendar.getElement(ev) : Calendar.getTargetElement(ev);
  for (; el != null; el = el.parentNode)
    if (el == calendar.element || el.tagName == "A") break;
  if (el == null) {
    calendar.callCloseHandler(); Calendar.stopEvent(ev);
  }
}
function showCalendar(id) {
  var el = xoopsGetElementById(id);
  if (calendar != null) {
    calendar.hide();
  } else {
    var cal = new Calendar(<?php if (@_MD_CAL_MONDAY_FIRST): ?>true<?php else: ?>false<?php endif; ?>, <?php if ($this->_tpl_vars['jstime']): ?><?php echo $this->_tpl_vars['jstime']; ?>
<?php else: ?>'null'<?php endif; ?>, selected, closeHandler);
    calendar = cal;
    cal.setRange(<?php echo $this->_tpl_vars['calrange'][0]; ?>
, <?php echo $this->_tpl_vars['calrange'][1]; ?>
);
    calendar.create();
  }
  calendar.sel = el;
  calendar.parseDate(el.value);
  calendar.showAtElement(el);
  Calendar.addEvent(document, "mousedown", checkCalendar);
  return false;
}

Calendar._DN = new Array
<?php if ($this->_tpl_vars['weekname']): ?>
("<?php echo $this->_tpl_vars['weekname']['Sun']; ?>
", "<?php echo $this->_tpl_vars['weekname']['Mon']; ?>
", "<?php echo $this->_tpl_vars['weekname']['Tue']; ?>
",
 "<?php echo $this->_tpl_vars['weekname']['Wed']; ?>
", "<?php echo $this->_tpl_vars['weekname']['Thu']; ?>
", "<?php echo $this->_tpl_vars['weekname']['Fri']; ?>
",
 "<?php echo $this->_tpl_vars['weekname']['Sat']; ?>
", "<?php echo $this->_tpl_vars['weekname']['Sun']; ?>
");
<?php else: ?>
("Sun", "Mon", "Tue", "Wed", "Thu", "Fri","Sat", "Sun");
<?php endif; ?>

Calendar._MN = new Array
<?php if ($this->_tpl_vars['monthname']): ?>
(<?php $_from = $this->_tpl_vars['monthname']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['month']):
?>"<?php echo $this->_tpl_vars['month']; ?>
",<?php endforeach; endif; unset($_from); ?>"");
<?php else: ?>
("Jan", "Feb", "Mar", "Apr", "May", "Jun",
 "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
<?php endif; ?>

Calendar._TT = {};
<?php if ($this->_tpl_vars['calsetting']): ?>
Calendar._TT["TOGGLE"] = "<?php echo $this->_tpl_vars['calsetting']['_CAL_TGL1STD']; ?>
";
Calendar._TT["PREV_YEAR"] = "<?php echo $this->_tpl_vars['calsetting']['_CAL_PREVYR']; ?>
";
Calendar._TT["PREV_MONTH"] = "<?php echo $this->_tpl_vars['calsetting']['_CAL_PREVMNTH']; ?>
";
Calendar._TT["GO_TODAY"] = "<?php echo $this->_tpl_vars['calsetting']['_CAL_GOTODAY']; ?>
";
Calendar._TT["NEXT_MONTH"] = "<?php echo $this->_tpl_vars['calsetting']['_CAL_NXTMNTH']; ?>
";
Calendar._TT["NEXT_YEAR"] = "<?php echo $this->_tpl_vars['calsetting']['_CAL_NEXTYR']; ?>
";
Calendar._TT["SEL_DATE"] = "<?php echo $this->_tpl_vars['calsetting']['_CAL_SELDATE']; ?>
";
Calendar._TT["DRAG_TO_MOVE"] = "<?php echo $this->_tpl_vars['calsetting']['_CAL_DRAGMOVE']; ?>
";
Calendar._TT["PART_TODAY"] = "(<?php echo $this->_tpl_vars['calsetting']['_CAL_TODAY']; ?>
)";
Calendar._TT["MON_FIRST"] = "<?php echo $this->_tpl_vars['calsetting']['_CAL_DISPM1ST']; ?>
";
Calendar._TT["SUN_FIRST"] = "<?php echo $this->_tpl_vars['calsetting']['_CAL_DISPS1ST']; ?>
";
Calendar._TT["CLOSE"] = "<?php echo $this->_tpl_vars['calsetting']['_CLOSE']; ?>
";
Calendar._TT["TODAY"] = "<?php echo $this->_tpl_vars['calsetting']['_CAL_TODAY']; ?>
";
<?php else: ?>
Calendar._TT["TOGGLE"] = "<?php echo @_CAL_TGL1STD; ?>
";
Calendar._TT["PREV_YEAR"] = "<?php echo @_CAL_PREVYR; ?>
";
Calendar._TT["PREV_MONTH"] = "<?php echo @_CAL_PREVMNTH; ?>
";
Calendar._TT["GO_TODAY"] = "<?php echo @_CAL_GOTODAY; ?>
";
Calendar._TT["NEXT_MONTH"] = "<?php echo @_CAL_NXTMNTH; ?>
";
Calendar._TT["NEXT_YEAR"] = "<?php echo @_CAL_NEXTYR; ?>
";
Calendar._TT["SEL_DATE"] = "<?php echo @_CAL_SELDATE; ?>
";
Calendar._TT["DRAG_TO_MOVE"] = "<?php echo @_CAL_DRAGMOVE; ?>
";
Calendar._TT["PART_TODAY"] = "(<?php echo @_CAL_TODAY; ?>
)";
Calendar._TT["MON_FIRST"] = "<?php echo @_CAL_DISPM1ST; ?>
";
Calendar._TT["SUN_FIRST"] = "<?php echo @_CAL_DISPS1ST; ?>
";
Calendar._TT["CLOSE"] = "<?php echo @_CLOSE; ?>
";
Calendar._TT["TODAY"] = "<?php echo @_CAL_TODAY; ?>
";
<?php endif; ?>

// date formats
Calendar._TT["DEF_DATE_FORMAT"] = "y-mm-dd";
Calendar._TT["TT_DATE_FORMAT"] = "y-mm-dd";

Calendar._TT["WK"] = "";
//-->
</script>

<form action="admin.php<?php if ($this->_tpl_vars['eid']): ?>?eid=<?php echo $this->_tpl_vars['eid']; ?>
<?php endif; ?>" method="post" class="evbody" name="evform" id="evform" onsubmit="return xoopsFormValidate_evform();">
<table border="0" cellpadding="0" cellspacing="0">
<tr><td>
<h3><?php echo @_MD_TITLE; ?>
</h3>
<input type="text" name="title" id="title" value="<?php echo $this->_tpl_vars['title']; ?>
" size="60" maxlength="80" />
</td><?php if ($this->_tpl_vars['input_category']): ?><td>
<h3><?php echo @_MD_EVENT_CATEGORY; ?>
</h3>
<?php echo $this->_tpl_vars['input_category']; ?>
</td><?php endif; ?></tr>
</table>
<h3><?php echo @_MD_EVENT_DATE; ?>
</h3>
<p>
<?php echo $this->_tpl_vars['input_edate']; ?>
 &nbsp;
<?php echo @_MD_TIMEC; ?>
 
<?php if ($this->_tpl_vars['timetable']): ?>
  <select name="edatetime">
    <?php $_from = $this->_tpl_vars['timetable']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['timeopt']):
?>
      <option value="<?php echo $this->_tpl_vars['timeopt']['value']; ?>
"<?php if ($this->_tpl_vars['timeopt']['value'] == $this->_tpl_vars['edatetime']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['timeopt']['label']; ?>
</option>
    <?php endforeach; endif; unset($_from); ?>
  </select>
<?php else: ?>
  <?php echo $this->_tpl_vars['input_edatetime']; ?>

<?php endif; ?>
</p>
<fieldset>
  <legend>
<script type="text/javascript">
<?php if ($this->_tpl_vars['extent_sets'] || $this->_tpl_vars['edata']['closetime'] != 3600): ?>
document.write('<input type="checkbox" onClick="toggle(\'exdate\',this);" checked="checked" id="dateck"/>');
<?php else: ?>
document.write('<input type="checkbox" onClick="toggle(\'exdate\',this);" id="dateck"/>');
<?php endif; ?>
</script>
  <?php echo @_MD_EDIT_EXTENT; ?>

  </legend>
  <div id="exdate">
    <p><b><?php echo @_MD_EVENT_EXPIRE; ?>
</b> <?php echo $this->_tpl_vars['input_expire']; ?>
</p>
    <p><b><?php echo @_MD_CLOSEBEFORE; ?>
</b> <input type="text" name="before" id="before" size="7" value="<?php echo $this->_tpl_vars['before']; ?>
"/> <span class="evinfo"><?php echo @_MD_CLOSEBEFORE_DESC; ?>
</span></p>
    <?php if ($this->_tpl_vars['input_extent']): ?>
    <p>
      <b><?php echo @_MD_EVENT_EXTENT; ?>
</b> <?php echo $this->_tpl_vars['input_extent']; ?>

    <?php if ($this->_tpl_vars['extent_sets']): ?>
    <div class="extents">
    <?php $_from = $this->_tpl_vars['extent_sets']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ext']):
?>
      <nobr><?php if ($this->_tpl_vars['ext']['disable']): ?>&middot; <?php else: ?><input type="checkbox" value="<?php echo $this->_tpl_vars['ext']['exdate']; ?>
" name="extent_sets[<?php echo $this->_tpl_vars['ext']['no']; ?>
]"<?php if ($this->_tpl_vars['ext']['checked']): ?> checked<?php endif; ?>/><?php endif; ?><?php echo $this->_tpl_vars['ext']['date']; ?>
</nobr>
    <?php endforeach; endif; unset($_from); ?>
    </div>
    <?php endif; ?>
    </p>
    <?php endif; ?>
  </div>
</fieldset>
<h3><?php echo @_MD_INTROTEXT; ?>
</h3>
<?php if ($this->_tpl_vars['use_fckeditor']): ?>
<textarea id="summary" name="summary" wrap="virtual" cols="60" rows="10"><?php echo ((is_array($_tmp=$this->_tpl_vars['summary'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
<?php else: ?>
<?php echo $this->_tpl_vars['summary_textarea']; ?>

<?php endif; ?>
<h3><?php echo @_MD_EXTEXT; ?>
</h3>
<textarea name="body" wrap="virtual" cols="60" rows="10"><?php echo $this->_tpl_vars['body']; ?>
</textarea>

<?php if ($this->_tpl_vars['use_fckeditor']): ?>
<script type="text/javascript" src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/common/fckeditor/fckeditor.js"></script>
<script type="text/javascript">
function fckeditor_exec(target, width, height, url) {
	var oFCKeditor = new FCKeditor(target, width, height, "<?php echo $this->_tpl_vars['use_fckeditor']; ?>
");
	oFCKeditor.BasePath = "<?php echo $this->_tpl_vars['xoops_url']; ?>
/common/fckeditor/";
	oFCKeditor.ReplaceTextarea();
}
fckeditor_exec("summary", "100%", "350");
fckeditor_exec("body", "100%", "350");
</script>
<input type="hidden" name="style" value="0" />
<?php else: ?>
<h3><?php echo @_MD_EVENT_STYLE; ?>
</h3>
<?php echo $this->_tpl_vars['input_style']; ?>

<?php endif; ?>

<h3><?php echo @_MD_RESERV_SETTING; ?>
</h3>
<div><input type="checkbox" name="reservation" value="1"<?php if ($this->_tpl_vars['reservation']): ?> checked<?php endif; ?>/> <?php echo @_MD_RESERV_DESC; ?>
</div>
<div>
  <input type="checkbox" name="strict" value="1"<?php if ($this->_tpl_vars['strict']): ?> checked<?php endif; ?>/> <?php echo @_MD_RESERV_STOPFULL; ?>

  <input type="checkbox" name="autoaccept" value="1"<?php if ($this->_tpl_vars['autoaccept']): ?> checked<?php endif; ?>/> <?php echo @_MD_RESERV_AUTO; ?>

</div>
<div><input type="checkbox" name="notify" value="1"<?php if ($this->_tpl_vars['notify']): ?> checked<?php endif; ?>/> <?php echo @_MD_RESERV_NOTIFYPOSTER; ?>
</div>
<div><b><?php echo @_MD_RESERV_PERSONS; ?>
</b> <input type="text" name="persons" value="<?php echo $this->_tpl_vars['persons']; ?>
" size="3" /> <?php echo @_MD_RESERV_UNIT; ?>
</div>
<h3><?php echo @_MD_RESERV_ITEM; ?>
</h3>
<textarea name="optfield" wrap="virtual" cols="60" rows="5"><?php echo $this->_tpl_vars['optfield']; ?>
</textarea>
<div id="itemhelper" style="display:none;">
  <?php echo @_MD_RESERV_LAB; ?>
 <input name="xelab" size="10">
  <input type="checkbox" name="xereq" title="<?php echo @_MD_RESERV_REQ; ?>
">
  <select name="xetype">
    <option value="text">text</option>
    <option value="checkbox">checkbox</option>
    <option value="radio">radio</option>
    <option value="textarea">textarea</option>
    <option value="select">select</option>
    <option value="hidden">hidden</option>
    <option value="const">const</option>
  </select>
  <input name="xeopt" size="30" />
  <button onClick="return addFieldItem();"><?php echo @_MD_RESERV_ADD; ?>
</button>
</div>
<div class="evinfo">
  <?php echo @_MD_RESERV_ITEM_DESC; ?>
 <?php echo $this->_tpl_vars['label_desc']; ?>
</div>
<fieldset>
  <legend>
<script type="text/javascript">
<?php if ($this->_tpl_vars['edata']['optvars']): ?>
document.write('<input type="checkbox" onClick="toggle(\'optvars\',this);" checked="checked" id="optck"/>');
<?php else: ?>
document.write('<input type="checkbox" onClick="toggle(\'optvars\',this);" id="optck"/>');
<?php endif; ?>
</script>
  <?php echo @_MD_OPTION_VARS; ?>

  </legend>
  <div id="optvars">
    <h3><?php echo @_MD_RESERV_REDIRECT; ?>
</h3>
    <input type="text" name="redirect" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['optvars']['redirect'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="60" />
    <div class="evinfo"><?php echo @_MD_RESERV_REDIRECT_DESC; ?>
</div>
    
    <h3><?php echo @_MD_OPTION_OTHERS; ?>
</h3>
    <textarea name="opt_others" cols="60" rows="4"><?php echo ((is_array($_tmp=$this->_tpl_vars['opt_others'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea>
  </div>
</fieldset>
<?php if ($this->_tpl_vars['input_status']): ?>
<p><?php echo $this->_tpl_vars['input_status']; ?>
</p>
<?php endif; ?>
<p>
<?php if ($this->_tpl_vars['eid'] && $this->_tpl_vars['enable_copy']): ?>
<div><input type="checkbox" name="eid" value="0"><?php echo @_MD_NEWTITLE; ?>
</div>
<?php endif; ?>
<input type="submit" name="preview" value="<?php echo @_MD_PREVIEW; ?>
" />
<input type="submit" name="save" value="<?php echo @_MD_SAVE; ?>
" />
</p>
</form>
<script type="text/javascript">
<!--//

// display only JavaScript enable
xoopsGetElementById("itemhelper").style.display = "block";
function addFieldItem() {
    var myform = window.document.evform;
    var item=myform.xelab.value;
    if (item == "") {
	alert("<?php echo @_MD_RESERV_LABREQ; ?>
");
	myform.xelab.focus();
	return false;
    }
    if (myform.xereq.checked) item += '*';
    var ty = myform.xetype.value;
    var ov = myform.xeopt.value;
    item += ','+ty;
    if (ty != 'text' && ty != 'textarea' && ov == "") {
	alert(ty+": <?php echo @_MD_RESERV_OPTREQ; ?>
");
	myform.xeopt.focus();
	return false;
    }
    if (ov != "") item += ','+ov;
    opts = myform.optfield;
    if (opts.value!="" && !opts.value.match(/[\n\r]$/)) item = "\n"+item;
    opts.value += item;
    myform.xelab.value = ""; // clear old value
    myform.xeopt.value = "";
    return false; // always return false
}
function xoopsFormValidate_evform() {
    myform = window.document.evform;
<?php $_from = $this->_tpl_vars['check']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['msg']):
?>
if ( myform.<?php echo $this->_tpl_vars['name']; ?>
.value == "" ) { window.alert("<?php echo $this->_tpl_vars['msg']; ?>
"); myform.<?php echo $this->_tpl_vars['name']; ?>
.focus(); return false; }
<?php endforeach; endif; unset($_from); ?>
return true;

}

function toggle(id,a) {
    xoopsGetElementById(id).style.display = a.checked?"block":"none";
}
toggle("exdate", xoopsGetElementById("dateck"));
toggle("optvars", xoopsGetElementById("optck"));
//--></script>
</div>