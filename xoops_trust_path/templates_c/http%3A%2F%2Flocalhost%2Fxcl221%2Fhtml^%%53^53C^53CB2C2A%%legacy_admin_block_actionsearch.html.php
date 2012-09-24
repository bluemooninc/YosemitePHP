<?php /* Smarty version 2.6.26, created on 2012-09-12 16:24:32
         compiled from blocks/legacy_admin_block_actionsearch.html */ ?>
<form action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/legacy/admin/index.php?action=actSearch" method="post">
  <input type="text" name="keywords"/>
  <input type="submit" value="<?php echo @_SEARCH; ?>
" class="formButton" />
</form>