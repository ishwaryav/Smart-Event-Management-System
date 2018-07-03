<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 21:04:59
         compiled from /Applications/XAMPP/xamppfiles/htdocs/htdocs/themes/xbootstrap/theme.tpl */ ?>
<!doctype html>
<html lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
<?php $this->assign('theme_name', $this->_tpl_vars['xoTheme']->folderName); ?>
    <meta charset="<?php echo $this->_tpl_vars['xoops_charset']; ?>
">
    <meta name="keywords" content="<?php echo $this->_tpl_vars['xoops_meta_keywords']; ?>
">
    <meta name="description" content="<?php echo $this->_tpl_vars['xoops_meta_description']; ?>
">
    <meta name="robots" content="<?php echo $this->_tpl_vars['xoops_meta_robots']; ?>
">
    <meta name="rating" content="<?php echo $this->_tpl_vars['xoops_meta_rating']; ?>
">
    <meta name="author" content="<?php echo $this->_tpl_vars['xoops_meta_author']; ?>
">
    <meta name="generator" content="XOOPS">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Owl Carousel Assets -->
    <link href="<?php 
echo 'http://localhost/htdocs/themes/xbootstrap/'; ?>js/owl/owl.carousel.css" rel="stylesheet">
    <link href="<?php 
echo 'http://localhost/htdocs/themes/xbootstrap/'; ?>js/owl/owl.theme.css" rel="stylesheet">

    <link href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" type="text/css" href="<?php 
echo 'http://localhost/htdocs/themes/xbootstrap/'; ?>css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php 
echo 'http://localhost/htdocs/themes/xbootstrap/'; ?>css/xoops.css">
    <link rel="stylesheet" type="text/css" href="<?php 
echo 'http://localhost/htdocs/themes/xbootstrap/'; ?>css/reset.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['xoops_themecss']; ?>
">
    <script src="<?php 
echo 'http://localhost/htdocs/themes/xbootstrap/'; ?>js/jquery-1.10.2.js"></script>
    <script src="<?php 
echo 'http://localhost/htdocs/themes/xbootstrap/'; ?>js/bootstrap.min.js"></script>
    <script src="<?php 
echo 'http://localhost/htdocs/themes/xbootstrap/'; ?>js/masonry.pkgd.min.js"></script>
    <script src="<?php 
echo 'http://localhost/htdocs/themes/xbootstrap/'; ?>js/imagesloaded.pkgd.min.js"></script>
<!--[if lt IE 9]>
    <script src="http://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="http://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <script src="<?php 
echo 'http://localhost/htdocs/themes/xbootstrap/'; ?>js/selectivizr-min.js"></script>
<![endif]-->
    <script src="<?php 
echo 'http://localhost/htdocs/themes/xbootstrap/'; ?>js/js.js"></script>
    <link rel="alternate" type="application/rss+xml" title="" href="<?php echo 'http://localhost/htdocs/backend.php'; ?>">

    <title><?php if ($this->_tpl_vars['xoops_dirname'] == 'system'): ?><?php echo $this->_tpl_vars['xoops_sitename']; ?>
<?php if ($this->_tpl_vars['xoops_pagetitle'] != ''): ?> - <?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
<?php endif; ?><?php else: ?><?php if ($this->_tpl_vars['xoops_pagetitle'] != ''): ?><?php echo $this->_tpl_vars['xoops_pagetitle']; ?>
 - <?php echo $this->_tpl_vars['xoops_sitename']; ?>
<?php endif; ?><?php endif; ?></title>

<?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/shareaholic-script.tpl", 'smarty_include_vars' => array()));
 ?>

<?php echo $this->_tpl_vars['xoops_module_header']; ?>


</head>

<body id="<?php echo $this->_tpl_vars['xoops_dirname']; ?>
">

<?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/nav-menu.tpl", 'smarty_include_vars' => array()));
 ?>

<?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/slider.tpl", 'smarty_include_vars' => array()));
 ?>

<div class="container maincontainer">

<?php if ($this->_tpl_vars['xoops_dirname'] == 'system'): ?>
    <div class="aligncenter home-message row">
    <div class="<?php if ($this->_tpl_vars['xoops_banner'] != ""): ?>col-md-6<?php else: ?>col-md-12<?php endif; ?>">
        <h2><?php echo @THEME_ABOUTUS; ?>
</h2>

        <p class="lead"><?php echo $this->_tpl_vars['xoops_meta_description']; ?>
</p>

        <p><a href="javascript:;" class="btn btn-md btn-success"><?php echo @THEME_LEARNINGMORE; ?>
</a></p>
    </div>

        <?php if ($this->_tpl_vars['xoops_banner'] != ""): ?><div class="col-md-6"><div class="xoops-banner pull-right"><?php echo $this->_tpl_vars['xoops_banner']; ?>
</div></div><?php endif; ?>

    </div><!-- .home-message -->
<?php endif; ?>

<div class="row">
    <?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/leftBlock.tpl", 'smarty_include_vars' => array()));
 ?>

    <?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/content-zone.tpl", 'smarty_include_vars' => array()));
 ?>

    <?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/rightBlock.tpl", 'smarty_include_vars' => array()));
 ?>
</div>

</div><!-- .maincontainer -->

<?php if ($this->_tpl_vars['xoBlocks']['page_bottomcenter'] || $this->_tpl_vars['xoBlocks']['page_bottomright'] || $this->_tpl_vars['xoBlocks']['page_bottomleft']): ?>
    <div class="bottom-blocks">
        <div class="container">
            <div class="row">
                <?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/leftBottom.tpl", 'smarty_include_vars' => array()));
 ?>

                <?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/centerBottom.tpl", 'smarty_include_vars' => array()));
 ?>

                <?php $this->_smarty_include(array('smarty_include_tpl_file' => ($this->_tpl_vars['theme_name'])."/tpl/rightBottom.tpl", 'smarty_include_vars' => array()));
 ?>
            </div>
        </div>
    </div><!-- .bottom-blocks -->
<?php endif; ?>

<footer class="footer">
    <h3>
        <?php echo $this->_tpl_vars['xoops_footer']; ?>

        <a href="http://xoops.org" title="Design by: XOOPS UI/UX Team" target="_blank" class="credits visible-md visible-sm visible-lg">
            <img src="<?php 
echo 'http://localhost/htdocs/themes/xbootstrap/'; ?>images/favicon.png" alt="Design by: XOOPS UI/UX Team">
        </a>
    </h3>
</footer>
<div class="aligncenter comments-nav visible-xs">
    <a href="http://xoops.org" title="Design by: XOOPS UI/UX Team" target="_blank">
        <img src="<?php 
echo 'http://localhost/htdocs/themes/xbootstrap/'; ?>images/favicon.png" alt="Design by: XOOPS UI/UX Team">
    </a>
</div>
</body>
</html>