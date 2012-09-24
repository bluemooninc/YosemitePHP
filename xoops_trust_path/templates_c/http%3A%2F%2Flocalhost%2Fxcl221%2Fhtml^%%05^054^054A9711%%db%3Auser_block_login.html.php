<?php /* Smarty version 2.6.26, created on 2012-09-22 01:52:31
         compiled from db:user_block_login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'xoops_input', 'db:user_block_login.html', 4, false),)), $this); ?>
<form action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php" method="post" style="margin-top: 0px;">
<br />    
<?php echo @_MB_USER_USERNAME; ?>
<br />
<?php echo smarty_function_xoops_input(array('type' => 'text','name' => 'uname','size' => 14,'value' => $this->_tpl_vars['block']['unamevalue'],'maxlength' => 25,'id' => (@XOOPS_INPUT_DEFID_PREFIX)."block_uname"), $this);?>

<br />
<br />
    <?php echo @_MB_USER_PASSWORD; ?>
<br />
    <?php echo smarty_function_xoops_input(array('type' => 'password','name' => 'pass','size' => 14,'maxlength' => 32,'id' => (@XOOPS_INPUT_DEFID_PREFIX)."block_pass"), $this);?>

<br />

<!--<label><?php echo smarty_function_xoops_input(array('type' => 'checkbox','name' => 'rememberme','value' => 'On','class' => 'formButton'), $this);?>
<?php echo @_MB_USER_REMEMBERME; ?>
</label><br />-->

<input type="hidden" name="xoops_redirect" value="<?php echo $this->_tpl_vars['xoops_requesturi']; ?>
" />
<?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'op','value' => 'login','id' => (@XOOPS_INPUT_DEFID_PREFIX)."block_op"), $this);?>


<br /><br />
<?php echo smarty_function_xoops_input(array('type' => 'submit','name' => 'submit','value' => @_MB_USER_LOGIN,'id' => (@XOOPS_INPUT_DEFID_PREFIX)."block_submit"), $this);?>

   
</form>

<br />
<?php if ($this->_tpl_vars['block']['use_ssl'] == '1'): ?>
  <a href="javascript:openWithSelfMain('<?php echo $this->_tpl_vars['block']['sslloginlink']; ?>
', 'ssllogin', 300, 200);"><?php echo @_MB_USER_SECURE; ?>
</a>
<?php endif; ?>

<br />
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/lostpass.php"><?php echo @_MB_USER_LOSTPASS; ?>
</a> 
<?php if ($this->_tpl_vars['block']['allow_register'] == '1'): ?>
&nbsp;|<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/register.php"><?php echo @_MB_USER_USERREG; ?>
</a>
<?php endif; ?>