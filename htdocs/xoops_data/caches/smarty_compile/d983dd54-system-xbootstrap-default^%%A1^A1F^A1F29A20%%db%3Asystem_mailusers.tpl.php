<?php /* Smarty version 2.6.25-dev, created on 2017-11-08 21:34:22
         compiled from db:system_mailusers.tpl */ ?>
<!--smilies-->
<?php $this->_smarty_include(array('smarty_include_tpl_file' => "db:system_header.tpl", 'smarty_include_vars' => array()));
 ?>
<!-- Display mailusers form  -->
<br/>
<?php if ($this->_tpl_vars['form']): ?>
    <div class="spacer"><?php echo $this->_tpl_vars['form']; ?>
</div>
<?php endif; ?>
<?php echo $this->_tpl_vars['Sucess']; ?>

<?php echo $this->_tpl_vars['Errors']; ?>
