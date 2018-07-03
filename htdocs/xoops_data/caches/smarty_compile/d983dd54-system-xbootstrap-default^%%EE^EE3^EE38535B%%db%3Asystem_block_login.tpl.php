<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 21:25:42
         compiled from db:system_block_login.tpl */ ?>
<div class="loginform">
    <form action="<?php echo 'http://localhost/htdocs/user.php'; ?>" method="post" role="form">
        <div class="form-group">
            <?php echo $this->_tpl_vars['block']['lang_username']; ?>

            <input class="form-control" type="text" name="uname" placeholder="<?php echo @THEME_LOGIN; ?>
">
        </div>

        <div class="form-group">
            <?php echo $this->_tpl_vars['block']['lang_password']; ?>

            <input class="form-control" type="password" name="pass" placeholder="<?php echo @THEME_PASS; ?>
">
        </div>

        <div class="checkbox">
            <label>
                <?php if (isset ( $this->_tpl_vars['block']['lang_rememberme'] )): ?>
                    <input type="checkbox" name="rememberme" value="On" class="formButton">
                    <?php echo $this->_tpl_vars['block']['lang_rememberme']; ?>

                <?php endif; ?>
            </label>
        </div>

        <input type="hidden" name="xoops_redirect" value="<?php echo $this->_tpl_vars['xoops_requesturi']; ?>
">
        <input type="hidden" name="op" value="login">
        <input type="submit" class="btn btn-primary btn-block btn-sm" value="<?php echo $this->_tpl_vars['block']['lang_login']; ?>
">
        <?php echo $this->_tpl_vars['block']['sslloginlink']; ?>

    </form>
    <a class="btn btn-info btn-xs btn-block" href="<?php echo 'http://localhost/htdocs/user.php#lost'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_lostpass']; ?>
"><?php echo $this->_tpl_vars['block']['lang_lostpass']; ?>
</a>

    <a class="btn btn-info btn-xs btn-block" href="<?php echo 'http://localhost/htdocs/register.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_registernow']; ?>
"><?php echo $this->_tpl_vars['block']['lang_registernow']; ?>
</a>
</div>