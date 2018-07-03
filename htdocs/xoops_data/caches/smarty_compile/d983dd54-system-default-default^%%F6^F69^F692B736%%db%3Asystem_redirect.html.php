<?php /* Smarty version 2.6.25-dev, created on 2017-11-15 19:19:00
         compiled from db:system_redirect.html */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
"/>
    <meta http-equiv="Refresh" content="<?php echo $this->_tpl_vars['time']; ?>
; url=<?php echo $this->_tpl_vars['url']; ?>
"/>
    <meta name="generator" content="XOOPS"/>
    <link rel="shortcut icon" type="image/ico" href="<?php echo 'http://localhost/htdocs/favicon.ico'; ?>"/>
    <title><?php echo $this->_tpl_vars['xoops_sitename']; ?>
</title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['xoops_themecss']; ?>
"/>
</head>
<body>
<div class="center bold" style="background-color: #ebebeb; border: 1px solid #fff;border-right-color: #aaa;border-bottom-color: #aaa;">
    <h4><?php echo $this->_tpl_vars['message']; ?>
</h4>

    <p><?php echo $this->_tpl_vars['lang_ifnotreload']; ?>
</p>
</div>
<?php if ($this->_tpl_vars['xoops_logdump'] != ''): ?>
    <div><?php echo $this->_tpl_vars['xoops_logdump']; ?>
</div>
<?php endif; ?>
</body>
</html>