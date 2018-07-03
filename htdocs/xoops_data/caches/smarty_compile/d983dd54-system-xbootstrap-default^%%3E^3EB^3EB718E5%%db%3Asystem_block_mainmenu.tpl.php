<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:16:23
         compiled from db:system_block_mainmenu.tpl */ ?>
<ul class="nav nav-pills nav-stacked">
    <li class="<?php if (! $this->_tpl_vars['block']['nothome']): ?>active<?php endif; ?>"><a href="<?php echo 'http://localhost/htdocs/'; ?>" title="<?php echo $this->_tpl_vars['block']['lang_home']; ?>
"><span
                    class="glyphicon glyphicon-home"></span> <?php echo $this->_tpl_vars['block']['lang_home']; ?>
</a></li>
    <!-- start module menu loop -->
    <?php $_from = $this->_tpl_vars['block']['modules']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module']):
?>
        <li class="<?php if ($this->_tpl_vars['module']['highlight']): ?>active<?php endif; ?>">
            <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['module']['directory']; ?>
/" title="<?php echo $this->_tpl_vars['module']['name']; ?>
"><span class="glyphicon glyphicon-ok"></span>
                <?php echo $this->_tpl_vars['module']['name']; ?>

            </a>
            <ul>
                <?php $_from = $this->_tpl_vars['module']['sublinks']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sublink']):
?>
                    <li>
                        <a class="dropdown" href="<?php echo $this->_tpl_vars['sublink']['url']; ?>
" title="<?php echo $this->_tpl_vars['sublink']['name']; ?>
"><?php echo $this->_tpl_vars['sublink']['name']; ?>
</a>
                    </li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
        </li>
    <?php endforeach; endif; unset($_from); ?>
    <!-- end module menu loop -->
</ul>