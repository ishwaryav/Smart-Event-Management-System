<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:20:28
         compiled from db:pm_readpmsg.tpl */ ?>
<h4><?php echo @_PM_PRIVATEMESSAGE; ?>
</h4>
<div class="message-current-tab">
    <?php if ($this->_tpl_vars['op'] == out): ?>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><a href="viewpmsg.php?op=out" title="<?php echo @_PM_OUTBOX; ?>
"><?php echo @_PM_OUTBOX; ?>
</a></strong>
        </div>
    <?php elseif ($this->_tpl_vars['op'] == 'save'): ?>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong><a href="viewpmsg.php?op=save" title="<?php echo @_PM_SAVEBOX; ?>
"><?php echo @_PM_SAVEBOX; ?>
</a></strong>
        </div>
    <?php else: ?>
        <div class="alert alert-success alert-dismissable">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <a href="viewpmsg.php?op=in" title="<?php echo @_PM_INBOX; ?>
"><?php echo @_PM_INBOX; ?>
</a>
        </div>
    <?php endif; ?>
</div>

<?php if ($this->_tpl_vars['message']): ?>
<blockquote>
    <p><?php echo $this->_tpl_vars['message']['subject']; ?>
</p>
</blockquote>

<div class="row message-body">
    <form name="<?php echo $this->_tpl_vars['pmform']['name']; ?>
" id="<?php echo $this->_tpl_vars['pmform']['name']; ?>
" action="<?php echo $this->_tpl_vars['pmform']['action']; ?>
" method="<?php echo $this->_tpl_vars['pmform']['method']; ?>
"
            <?php echo $this->_tpl_vars['pmform']['extra']; ?>
>
        <div class="col-xs-4 col-md-4 sender-info">
            <?php if ($this->_tpl_vars['op'] == out): ?><strong><?php echo @_PM_TO; ?>
: </strong><?php else: ?><strong><?php echo @_PM_FROM; ?>
: </strong><?php endif; ?>
            <?php if (( $this->_tpl_vars['poster'] != false )): ?>
                <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/userinfo.php?uid=<?php echo $this->_tpl_vars['poster']->getVar('uid'); ?>
"><?php echo $this->_tpl_vars['poster']->getVar('uname'); ?>
</a>
                <?php if (( $this->_tpl_vars['poster']->getVar('user_avatar') != "" )): ?>
                    <img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/uploads/<?php echo $this->_tpl_vars['poster']->getVar('user_avatar'); ?>
" alt="<?php echo $this->_tpl_vars['poster']->getVar('uname'); ?>
"
                         class="img-responsive img-rounded img-thumbnail">
                <?php endif; ?>
                <?php if (( $this->_tpl_vars['poster']->getVar('user_from') != "" )): ?>
                    <?php echo @_PM_FROMC; ?>
<?php echo $this->_tpl_vars['poster']->getVar('user_from'); ?>

                <?php endif; ?>
                <?php if (( $this->_tpl_vars['poster']->isOnline() )): ?>
                    <?php echo @_PM_ONLINE; ?>

                <?php endif; ?>
            <?php else: ?>
                <?php echo $this->_tpl_vars['anonymous']; ?>

            <?php endif; ?>
        </div><!-- .sender-info -->

        <div class="col-xs-8 col-md-8 message-read">
            <p class="label label-info"><strong><?php echo @_PM_SENTC; ?>
 </strong><?php echo $this->_tpl_vars['message']['msg_time']; ?>
</p>

            <p><?php echo $this->_tpl_vars['message']['msg_text']; ?>
</p>

            <?php $_from = $this->_tpl_vars['pmform']['elements']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['element']):
?>
                <?php echo $this->_tpl_vars['element']['body']; ?>

            <?php endforeach; endif; unset($_from); ?>

            <div class="aligncenter comments-nav">
                <?php if (( $this->_tpl_vars['previous'] >= 0 )): ?>
                    <a class="btn btn-primary btn-sm" href="readpmsg.php?start=<?php echo $this->_tpl_vars['previous']; ?>
&amp;total_messages=<?php echo $this->_tpl_vars['total_messages']; ?>
&amp;op=<?php echo $this->_tpl_vars['op']; ?>
"
                       title="<?php echo @_PM_PREVIOUS; ?>
">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span>
                    </a>
                <?php else: ?>
                    <button class="btn btn-primary btn-sm" disabled="disabled">
                        <span class="glyphicon glyphicon-circle-arrow-left"></span>
                    </button>
                <?php endif; ?>
                <?php if (( $this->_tpl_vars['next'] < $this->_tpl_vars['total_messages'] )): ?>
                    <a class="btn btn-primary btn-sm" href="readpmsg.php?start=<?php echo $this->_tpl_vars['next']; ?>
&amp;total_messages=<?php echo $this->_tpl_vars['total_messages']; ?>
&amp;op=<?php echo $this->_tpl_vars['op']; ?>
"
                       title="<?php echo @_PM_NEXT; ?>
">
                        <span class="glyphicon glyphicon-circle-arrow-right"></span>
                    </a>
                <?php else: ?>
                    <button class="btn btn-primary btn-sm" disabled="disabled">
                        <span class="glyphicon glyphicon-circle-arrow-right"></span>
                    </button>
                <?php endif; ?>
            </div><!-- .message-read -->
    </form>
    <?php else: ?>
    <?php echo @_PM_YOUDONTHAVE; ?>

    <?php endif; ?>
</div>
</div><!-- .message-body -->