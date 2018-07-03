<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:16:23
         compiled from db:system_block_user.tpl */ ?>
<div class="usermenu">
    <ul class="nav nav-pills nav-stacked">
        <?php if ($this->_tpl_vars['xoops_isadmin']): ?>
            <li><a href="<?php echo 'http://localhost/htdocs/admin.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_adminmenu']; ?>
"><span class="glyphicon glyphicon-wrench"></span><?php echo $this->_tpl_vars['block']['lang_adminmenu']; ?>
</a>
            </li>
            <li><a href="<?php echo 'http://localhost/htdocs/user.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
"><span class="glyphicon glyphicon-user"></span><?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
</a>
            </li>
        <?php else: ?>
            <li><a class="menuTop" href="<?php echo 'http://localhost/htdocs/user.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
"><span class="glyphicon glyphicon-user"></span><?php echo $this->_tpl_vars['block']['lang_youraccount']; ?>
</a>
            </li>
        <?php endif; ?>
        <li><a href="<?php echo 'http://localhost/htdocs/edituser.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_editaccount']; ?>
"><span class="glyphicon glyphicon-pencil"></span><?php echo $this->_tpl_vars['block']['lang_editaccount']; ?>
</a>
        </li>
        <li><a href="<?php echo 'http://localhost/htdocs/notifications.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_notifications']; ?>
"><span class="glyphicon glyphicon-info-sign"></span><?php echo $this->_tpl_vars['block']['lang_notifications']; ?>
</a>
        </li>
        <?php if ($this->_tpl_vars['block']['new_messages'] > 0): ?>
            <li><a class="info" href="<?php echo 'http://localhost/htdocs/viewpmsg.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_inbox']; ?>
"><span class="glyphicon glyphicon-envelope"></span><?php echo $this->_tpl_vars['block']['lang_inbox']; ?>

                    <span class="badge pull-right"><strong><?php echo $this->_tpl_vars['block']['new_messages']; ?>
</strong></span></a></li>
        <?php else: ?>
            <li><a href="<?php echo 'http://localhost/htdocs/viewpmsg.php'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_inbox']; ?>
"><span class="glyphicon glyphicon-envelope"></span><?php echo $this->_tpl_vars['block']['lang_inbox']; ?>
</a>
            </li>
        <?php endif; ?>
        <li><a href="<?php echo 'http://localhost/htdocs/user.php?op=logout'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_logout']; ?>
"><span class="glyphicon glyphicon-off"></span><?php echo $this->_tpl_vars['block']['lang_logout']; ?>
</a>
        </li>
    </ul>
</div>