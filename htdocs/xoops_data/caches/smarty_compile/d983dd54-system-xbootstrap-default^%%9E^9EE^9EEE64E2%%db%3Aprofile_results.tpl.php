<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 20:15:39
         compiled from db:profile_results.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'db:profile_results.tpl', 11, false),)), $this); ?>
<?php $this->_smarty_include(array('smarty_include_tpl_file' => "db:profile_breadcrumbs.tpl", 'smarty_include_vars' => array()));
 ?>
<div>( <?php echo $this->_tpl_vars['total_users']; ?>
 )</div>
<?php if ($this->_tpl_vars['users']): ?>
    <table>
        <tr>
            <?php $_from = $this->_tpl_vars['captions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['caption']):
?>
                <th><?php echo $this->_tpl_vars['caption']; ?>
</th>
            <?php endforeach; endif; unset($_from); ?>
        </tr>
        <?php $_from = $this->_tpl_vars['users']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['user']):
?>
            <tr class="<?php echo smarty_function_cycle(array('values' => 'odd, even'), $this);?>
">
                <?php $_from = $this->_tpl_vars['user']['output']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['fieldvalue']):
?>
                    <td><?php echo $this->_tpl_vars['fieldvalue']; ?>
</td>
                <?php endforeach; endif; unset($_from); ?>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
    <?php echo $this->_tpl_vars['nav']; ?>

<?php else: ?>
    <div class="errorMsg">
        <?php echo @_PROFILE_MA_NOUSERSFOUND; ?>

    </div>
<?php endif; ?>