<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:16:33
         compiled from /Applications/XAMPP/xamppfiles/htdocs/htdocs/modules/system/themes/default/xotpl/xo_metas.tpl */ ?>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7"/>

<!-- title and metas -->
<title><?php if ($this->_tpl_vars['xoops_pagetitle'] != ''): ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
 : <?php endif; ?><?php echo $this->_tpl_vars['xoops_sitename']; ?>
</title>
<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
"/>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
"/>
<meta name="robots" content="<?php echo $this->_tpl_vars['xoops_meta_robots']; ?>
"/>
<meta name="keywords" content="<?php echo $this->_tpl_vars['xoops_meta_keywords']; ?>
"/>
<meta name="description" content="<?php echo $this->_tpl_vars['xoops_meta_description']; ?>
"/>
<meta name="rating" content="<?php echo $this->_tpl_vars['xoops_meta_rating']; ?>
"/>
<meta name="author" content="<?php echo $this->_tpl_vars['xoops_meta_author']; ?>
"/>
<meta name="copyright" content="<?php echo $this->_tpl_vars['xoops_meta_copyright']; ?>
"/>
<meta name="generator" content="XOOPS"/>
<?php if ($this->_tpl_vars['url']): ?>
    <meta http-equiv="Refresh" content="<?php echo $this->_tpl_vars['time']; ?>
; url=<?php echo $this->_tpl_vars['url']; ?>
"/>
<?php endif; ?>

<!-- Rss -->
<link rel="alternate" type="application/rss+xml" title="" href="<?php echo 'http://localhost/htdocs/backend.php'; ?>"/>

<!-- path favicon -->
<link rel="shortcut icon" type="image/ico" href="<?php echo 'http://localhost/htdocs/favicon.ico'; ?>"/>

<!-- Xoops style sheet -->
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo 'http://localhost/htdocs/xoops.css'; ?>"/>

<!-- customized header contents -->
<?php echo $this->_tpl_vars['xoops_module_header']; ?>
