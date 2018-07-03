<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:15:39
         compiled from db:pm_viewpmsg.tpl */ ?>
<h4><?php echo @_PM_PRIVATEMESSAGE; ?>
</h4>
<div class="current-tab">
    <div class="row">
        <?php if ($this->_tpl_vars['op'] == 'out'): ?>
            <div class="col-xs-6 col-md-6">
                <a class="btn btn-info btn-block" href="viewpmsg.php?op=in" title="<?php echo @_PM_INBOX; ?>
"><?php echo @_PM_INBOX; ?>
</a>
            </div>
            <div class="col-xs-6 col-md-6">
                <a class="btn btn-info btn-block" href="viewpmsg.php?op=save" title="<?php echo @_PM_SAVEBOX; ?>
"><?php echo @_PM_SAVEBOX; ?>
</a>
            </div>
        <?php elseif ($this->_tpl_vars['op'] == 'save'): ?>
            <div class="col-xs-6 col-md-6">
                <a class="btn btn-info btn-block" href="viewpmsg.php?op=in" title="<?php echo @_PM_INBOX; ?>
"><?php echo @_PM_INBOX; ?>
</a>
            </div>
            <div class="col-xs-6 col-md-6">
                <a class="btn btn-info btn-block" href="viewpmsg.php?op=out" title="<?php echo @_PM_OUTBOX; ?>
"><?php echo @_PM_OUTBOX; ?>
</a>
            </div>
        <?php elseif ($this->_tpl_vars['op'] == 'in'): ?>
            <div class="col-xs-6 col-md-6">
                <a class="btn btn-info btn-block" href="viewpmsg.php?op=out" title="<?php echo @_PM_OUTBOX; ?>
"><?php echo @_PM_OUTBOX; ?>
</a>
            </div>
            <div class="col-xs-6 col-md-6">
                <a class="btn btn-info btn-block" href="viewpmsg.php?op=save" title="<?php echo @_PM_SAVEBOX; ?>
"><?php echo @_PM_SAVEBOX; ?>
</a>
            </div>
        <?php endif; ?>
    </div>
</div><!-- .current-tab -->

<div class="message-current-tab">
    <?php if ($this->_tpl_vars['op'] == 'out'): ?>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><?php echo @_PM_OUTBOX; ?>
</strong>
        </div>
    <?php elseif ($this->_tpl_vars['op'] == 'save'): ?>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><?php echo @_PM_SAVEBOX; ?>
</strong>
        </div>
    <?php else: ?>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><?php echo @_PM_INBOX; ?>
</strong>
        </div>
    <?php endif; ?>
</div><!-- .message-current-tab -->

<?php if ($this->_tpl_vars['msg']): ?>
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong><?php echo $this->_tpl_vars['msg']; ?>
</strong>
    </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['errormsg']): ?>
    <div class="alert alert-danger alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <strong><?php echo $this->_tpl_vars['errormsg']; ?>
</strong>
    </div>
<?php endif; ?>

<?php if ($this->_tpl_vars['pagenav']): ?>
    <?php echo $this->_tpl_vars['pagenav']; ?>

<?php endif; ?>

<form name="<?php echo $this->_tpl_vars['pmform']['name']; ?>
" id="<?php echo $this->_tpl_vars['pmform']['name']; ?>
" action="<?php echo $this->_tpl_vars['pmform']['action']; ?>
" method="<?php echo $this->_tpl_vars['pmform']['method']; ?>
" <?php echo $this->_tpl_vars['pmform']['extra']; ?>
>
    <div class="row xoops-message-list">
        <div class="xoops-message-header">
            <div class="col-xs-1 col-md-1">
                <input name="allbox" id="allbox" onclick='xoopsCheckAll("<?php echo $this->_tpl_vars['pmform']['name']; ?>
", "allbox");' type="checkbox" value="Check All">
            </div>
            <div class="col-xs-1 col-md-1">
                <span class="glyphicon glyphicon-circle-arrow-down btn btn-primary"></span>
            </div>

            <?php if ($this->_tpl_vars['op'] == 'out'): ?>
                <div class="col-xs-2 col-md-2"><strong><?php echo @_PM_TO; ?>
</strong></div>
            <?php else: ?>
                <div class="col-xs-2 col-md-2"><strong><?php echo @_PM_FROM; ?>
</strong></div>
            <?php endif; ?>

            <div class="col-xs-4 col-md-4"><strong><?php echo @_PM_SUBJECT; ?>
</strong></div>

            <div class="col-xs-2 col-md-2"><strong><?php echo @_PM_DATE; ?>
</strong></div>

        </div><!-- .xoops-message-header -->

        <?php if ($this->_tpl_vars['total_messages'] == 0): ?>
            <div class="col-md-12">
                <div class="alert alert-warning">
                    <?php echo @_PM_YOUDONTHAVE; ?>

                </div>
            </div>
        <?php endif; ?>
    </div><!-- .xoops-message-list -->

    <?php $_from = $this->_tpl_vars['messages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
        <div class="row xoops-message-list xoops-message-loop">
            <div class="col-xs-1 col-md-1">
                <input type="checkbox" id="msg_id_<?php echo $this->_tpl_vars['message']['msg_id']; ?>
" name='msg_id[]' value="<?php echo $this->_tpl_vars['message']['msg_id']; ?>
">
            </div>
            <?php if ($this->_tpl_vars['message']['read_msg'] == 1): ?>
                <div class="col-xs-1 col-md-1">
                    <span class="glyphicon glyphicon-ok-sign btn btn-success"></span>
                </div>
            <?php else: ?>
                <div class="col-xs-1 col-md-1">
                    <span class="glyphicon glyphicon-envelope btn btn-warning" title="<?php echo @_PM_NOTREAD; ?>
"></span>
                </div>
            <?php endif; ?>

            <?php if ($this->_tpl_vars['message']['msg_image'] != ""): ?>
                <div class="col-xs-2 col-md-2">
                    <img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/images/subject/<?php echo $this->_tpl_vars['message']['msg_image']; ?>
" alt="">
                </div>
            <?php endif; ?>
            <?php if ($this->_tpl_vars['message']['postername'] != ""): ?>
                <div class="col-xs-2 col-md-2">
                    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['message']['posteruid']; ?>
" title=""><?php echo $this->_tpl_vars['message']['postername']; ?>
</a>
                </div>
            <?php else: ?>
                <div class="col-xs-2 col-md-2">
                    <?php echo $this->_tpl_vars['anonymous']; ?>

                </div>
            <?php endif; ?>

            <div class="col-xs-4 col-md-4">
                <a href="readpmsg.php?msg_id=<?php echo $this->_tpl_vars['message']['msg_id']; ?>
&amp;start=<?php echo $this->_tpl_vars['message']['msg_no']; ?>
&amp;total_messages=<?php echo $this->_tpl_vars['total_messages']; ?>
&amp;op=<?php echo $this->_tpl_vars['op']; ?>
"
                   title="">
                    <?php echo $this->_tpl_vars['message']['subject']; ?>

                </a>
            </div>

            <div class="col-xs-4 col-md-4">
                <?php echo $this->_tpl_vars['message']['msg_time']; ?>

            </div>
        </div>
        <!-- .xoops-message-list -->
    <?php endforeach; endif; unset($_from); ?>

    <?php echo $this->_tpl_vars['pmform']['elements']['send']['body']; ?>

    <?php if ($this->_tpl_vars['display']): ?>
        <?php echo $this->_tpl_vars['pmform']['elements']['move_messages']['body']; ?>

        <?php echo $this->_tpl_vars['pmform']['elements']['delete_messages']['body']; ?>

        <?php echo $this->_tpl_vars['pmform']['elements']['empty_messages']['body']; ?>

    <?php endif; ?>

    <?php $_from = $this->_tpl_vars['pmform']['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['element']):
?>
        <?php if ($this->_tpl_vars['element']['hidden'] == 1): ?>
            <?php echo $this->_tpl_vars['element']['body']; ?>

        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
</form>

<?php if ($this->_tpl_vars['pagenav']): ?>
    <?php echo $this->_tpl_vars['pagenav']; ?>

<?php endif; ?>