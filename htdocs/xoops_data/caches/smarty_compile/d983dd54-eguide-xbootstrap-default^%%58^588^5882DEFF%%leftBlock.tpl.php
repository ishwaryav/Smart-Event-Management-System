<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:52:09
         compiled from xbootstrap/tpl/leftBlock.tpl */ ?>
<?php if ($this->_tpl_vars['xoBlocks']['canvas_left']): ?>
    <div class="col-sm-3 col-md-3 xoops-side-blocks">
        <?php $_from = $this->_tpl_vars['xoBlocks']['canvas_left']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['block']):
?>
            <aside>
                <?php if ($this->_tpl_vars['block']['title']): ?><h4 class="block-title"><?php echo $this->_tpl_vars['block']['title']; ?>
</h4><?php endif; ?>
                <?php echo $this->_tpl_vars['block']['content']; ?>

            </aside>
        <?php endforeach; endif; unset($_from); ?>
    </div>
<?php endif; ?>