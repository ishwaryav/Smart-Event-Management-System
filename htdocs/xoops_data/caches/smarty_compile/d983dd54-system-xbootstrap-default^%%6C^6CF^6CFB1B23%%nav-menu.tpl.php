<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:16:23
         compiled from xbootstrap/tpl/nav-menu.tpl */ ?>
<div class="navbar-wrapper">
    <div class="navbar navbar-inverse navbar-static-top global-nav">
        <div class="container">
            <div class="navbar-header">
                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
" class="navbar-brand xlogo" title="<?php echo $this->_tpl_vars['xoops_sitename']; ?>
">
                    <img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/logo.png" alt="<?php echo $this->_tpl_vars['xoops_sitename']; ?>
">
                </a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
"><?php echo @THEME_HOME; ?>
</a></li>
                    <li><a href="javascript:;"><?php echo @THEME_MODULE1; ?>
</a></li>
                    <li class="dropdown"><a data-toggle="dropdown" class="dropdown-toggle" href="javascript:;"><?php echo @THEME_MODULE2; ?>
<b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:;">Topic 1</a></li>
                            <li><a href="javascript:;">Topic 2</a></li>
                            <li><a href="javascript:;">Topic 3</a></li>
                            <li><a href="javascript:;">Topic 4</a></li>
                            <li><a href="javascript:;">Topic 5</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/newbb"><?php echo @THEME_MODULE3; ?>
</a></li>
                    <li><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/contact"><?php echo @THEME_MODULE4; ?>
</a></li>
                </ul>
                <form class="navbar-form navbar-right" role="search" action="<?php echo 'http://localhost/htdocs/search.php'; ?>" method="get">
                    <div class="form-group">
                        <input type="text" name="query" class="form-control" placeholder="<?php echo @THEME_SEARCH_TEXT; ?>
">
                        <input type="hidden" name="action" value="results">
                    </div>
                    <button class="btn btn-primary" type="submit"><?php echo @THEME_SEARCH_BUTTON; ?>
</button>
                </form>
            </div>
        </div>
    </div>
</div><!-- .navbar-wrapper -->