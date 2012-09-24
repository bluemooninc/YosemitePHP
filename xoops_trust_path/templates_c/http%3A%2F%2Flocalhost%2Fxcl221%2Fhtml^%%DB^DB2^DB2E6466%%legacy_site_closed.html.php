<?php /* Smarty version 2.6.26, created on 2012-09-12 15:42:01
         compiled from /Users/bluemooninc/PhpstormProjects/xcl221/html/modules/legacy/templates/legacy_site_closed.html */ ?>
<?php 
ob_start();
header('HTTP/1.1 503 Service Temporarily Unavailable');
header('Status: 503 Service Temporarily Unavailable');
header('Retry-After: 3600');
header('X-Powered-By: XOOPS Cube');
ob_end_clean();
ob_end_flush();
 ?>
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" lang="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
">
<head>
<meta http-equiv="content-type" content="text/html; charset=<?php echo $this->_tpl_vars['xoops_charset']; ?>
" />
<meta http-equiv="content-language" content="<?php echo $this->_tpl_vars['xoops_langcode']; ?>
" />
<title><?php echo $this->_tpl_vars['xoops_sitename']; ?>
</title>
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $this->_tpl_vars['xoops_themecss']; ?>
" />

<style type="text/css">
<!--

#siteclosemsg {
	background-color:#ddffdf;
	color:#136C99;
	font-weight:bold;
	text-align:center;
	border-top:1px solid #ddffdf;
	border-left:1px solid #DDDDFF;
	border-right:1px solid #AAAAAA;
	border-bottom:1px solid #AAAAAA;
	padding:10px;
	width:80%;
	margin:55px auto;
}

#loginformTable {
	border: 1px solid silver;
	margin:5px auto;
	border-top:1px solid #dddddd;
	border-left:1px solid #dddddd;
	border-right:1px solid #AAAAAA;
	border-bottom:1px solid #AAAAAA;

}
#loginformTable th, #loginformTable td {
	font-size:14px;
}
#loginformTable th {
	background-color: #c2cdd6;
	color: #FFFFFF;
	vertical-align: middle;
	text-align: center;
	border-top:2px solid #dddddd;
	border-left:2px solid #dddddd;
	border-right:2px solid #AAAAAA;
	border-bottom:2px solid #AAAAAA;
	padding : 3px;
}

#loginformTable td {
	background-color: #f8f8f8;
	padding : 5px 15px;
	color: #000000;
}

-->
</style>
</head>
<body>
<div id="layout">

<div id="header">
<div class="headerlogo">
<a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/"><img src="<?php echo $this->_tpl_vars['xoops_imageurl']; ?>
images/logo.png" alt="<?php echo $this->_tpl_vars['xoops_sitename']; ?>
" title="<?php echo $this->_tpl_vars['xoops_sitename']; ?>
" /></a>
</div>
</div>


<div id="container" class="clearfix" style="text-align:center">

<div id="siteclosemsg"><?php echo $this->_tpl_vars['lang_siteclosemsg']; ?>
</div>

  <?php if ($this->_tpl_vars['xoops_isuser']): ?>
    <div align="center"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php?op=logout"><?php echo @_LOGOUT; ?>
</a></div>
  <?php else: ?>
  <form action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/user.php" method="post">
    <table class="outer" style="width:400px; margin:20px auto; text-align:left;">
      <tr>
        <th colspan="2"><?php echo $this->_tpl_vars['lang_login']; ?>
</th>
      </tr>
      <tr>
        <td class="odd"><?php echo $this->_tpl_vars['lang_username']; ?>
</td>
        <td class="odd"><input type="text" name="uname" size="14" value="" /></td>
      </tr>
      <tr>
        <td class="even"><?php echo $this->_tpl_vars['lang_password']; ?>
</td>
        <td class="even"><input type="password" name="pass" size="14" /></td>
      </tr>
      <tr>
        <td class="foot">&nbsp;</td>
        <td class="foot"><input type="hidden" name="xoops_login" value="1" /><input type="submit" value="<?php echo $this->_tpl_vars['lang_login']; ?>
" /></td>
      </tr>
    </table>
  </form>
  <?php endif; ?>

</div>

</div>
<br class="floatClear" />
<br />
  <div id="footerbar">&nbsp;<?php echo $this->_tpl_vars['xoops_sitename']; ?>
<br /><br /><br /></div>

</body>
</html>