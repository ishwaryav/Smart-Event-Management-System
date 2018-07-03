<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:52:09
         compiled from xbootstrap/tpl/centerLeft.tpl */ ?>
<?php if ($this->_tpl_vars['xoBlocks']['page_topleft']): ?>
    <div class="col-sm-6 col-md-6 pull-left">
        <?php $_from = $this->_tpl_vars['xoBlocks']['page_topleft']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
            <div class="xoops-blocks">
                <?php if ($this->_tpl_vars['block']['title']): ?><h4><?php echo $this->_tpl_vars['block']['title']; ?>
</h4><?php endif; ?>
                <?php echo $this->_tpl_vars['block']['content']; ?>

            </div>
        <?php endforeach; endif; unset($_from); ?>
    </div>
<?php endif; ?>