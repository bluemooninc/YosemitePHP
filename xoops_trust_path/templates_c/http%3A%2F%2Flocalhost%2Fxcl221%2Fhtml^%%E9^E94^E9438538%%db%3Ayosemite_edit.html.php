<?php /* Smarty version 2.6.26, created on 2012-09-25 00:10:54
         compiled from db:yosemite_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'xoops_token', 'db:yosemite_edit.html', 10, false),)), $this); ?>
<?php if ($this->_tpl_vars['errorMessage']): ?>
<div class="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<?php $_from = $this->_tpl_vars['errorMessage']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['em']):
?>
		<?php echo $this->_tpl_vars['em']; ?>

	<?php endforeach; endif; unset($_from); ?>
</div>
<?php endif; ?>
<form method="POST" action="edit">
	<?php echo smarty_function_xoops_token(array('form' => $this->_tpl_vars['actionForm']), $this);?>

	<input type="text" name="title" value="<?php echo $this->_tpl_vars['actionForm']->get('title'); ?>
">
	<textarea name="desc" rows="4" cols="40"><?php echo $this->_tpl_vars['actionForm']->get('desc'); ?>
</textarea>
	<input type="submit" class="btn btn-primary btn-large" value="Submit">
</form>