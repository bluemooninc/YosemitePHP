<?php /* Smarty version 2.6.26, created on 2012-09-12 15:42:04
         compiled from /Users/bluemooninc/PhpstormProjects/xcl221/html/modules/legacy/templates/legacy_install_modules.html */ ?>
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
<link rel="stylesheet" type="text/css" media="all" href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/xoops.css" />

</head>
<body>
  <table cellspacing="0" width="100%">
    <tr id="header">
      <td style="height: 8px; border-bottom: 1px solid silver; background-color: #eeeeee;" colspan="2">&nbsp;</td>
    </tr>
  </table>

  <table cellspacing="1" align="center" width="80%" border="0" cellpadding="10px;">
    <tr>
      <td align="center"><div style="background-color: #ddffdf; color: #136C99; text-align: center; border-top: 1px solid #ddffdf; border-left: 1px solid #DDDDFF; border-right: 1px solid #AAAAAA; border-bottom: 1px solid #AAAAAA; font-weight: bold; padding: 10px;"><?php echo @_SYSTEM_MODULE_ERROR; ?>
</div></td>
    </tr>
  </table>
  
  <form action="<?php echo $this->_tpl_vars['xoops_url']; ?>
/index.php" method="post">
      <table cellspacing="0" align="center" style="border: 1px solid silver; width: 380px;">
        <tr>
          <th style="border: 1px solid silver;background-color: #c2cdd6; color: #FFFFFF; padding : 2px;">&nbsp;</th>
          <th style="border: 1px solid silver;background-color: #c2cdd6; color: #FFFFFF; padding : 2px;">Module</th>
          <th colspan="2" style="border: 1px solid silver;background-color: #c2cdd6; color: #FFFFFF; padding : 2px;">Status</th>
        </tr>
<?php $_from = $this->_tpl_vars['uninstalled']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module']):
?>
        <tr>
          <td style="border: 1px solid silver;width:30px; padding: 2px;"><input type="checkbox" name="uninstalled_modules_dummy[]" value="<?php echo $this->_tpl_vars['module']; ?>
" checked="checked" disabled /><input type="hidden" name="uninstalled_modules[]" value="<?php echo $this->_tpl_vars['module']; ?>
"/>&nbsp;</td>
          <td style="border: 1px solid silver;width:150px; padding: 2px;"><b><?php echo $this->_tpl_vars['module']; ?>
</b></td>
          <td colspan="2" style="border: 1px solid silver;width:200px; padding: 2px;"><?php echo @_SYS_MODULE_UNINSTALLED; ?>
</td>
        </tr>
<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['disabled']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module']):
?>
        <tr>
          <td style="border: 1px solid silver;width:30px; padding: 2px;"><input type="checkbox" name="disabled_modules_dummy[]" value="<?php echo $this->_tpl_vars['module']; ?>
" checked="checked" disabled /><input type="hidden" name="disabled_modules[]" value="<?php echo $this->_tpl_vars['module']; ?>
"/>&nbsp;</td>
          <td style="border: 1px solid silver;width:150px; padding: 2px;"><b><?php echo $this->_tpl_vars['module']; ?>
</b></td>
          <td style="border: 1px solid silver;width:100px; padding: 2px;"><?php echo @_SYS_MODULE_DISABLED; ?>
</td>
          <td style="border: 1px solid silver;width:100px; padding: 2px;"><a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/index.php?cube_module_uninstall=<?php echo $this->_tpl_vars['module']; ?>
"><?php echo @_UNINSTALL; ?>
</a></td>
        </tr>
<?php endforeach; endif; unset($_from); ?>
<?php $_from = $this->_tpl_vars['option']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['module']):
?>
        <tr>
          <td style="border: 1px solid silver;width:30px; padding: 2px;"><input type="checkbox" name="option_modules[]" value="<?php echo $this->_tpl_vars['module']['dirname']; ?>
" <?php echo $this->_tpl_vars['module']['checked']; ?>
 /></td>
          <td style="border: 1px solid silver;width:150px; padding: 2px;"><?php echo $this->_tpl_vars['module']['dirname']; ?>
</td>
          <td colspan="2" style="border: 1px solid silver;width:200px; padding: 2px;"><?php echo $this->_tpl_vars['module']['desc']; ?>
</td>
        </tr>
<?php endforeach; endif; unset($_from); ?>
        <tr><td colspan="4" style="text-align:center;padding: 2px;">
         <input type="hidden" name="cube_module_install" value="1"/>
         <input type="submit" value="<?php echo @_INSTALL; ?>
" />
        </td></tr>
      </table>
  </form>

  <table cellspacing="0" width="100%">
    <tr>
      <td style="height:8px; border-bottom: 1px solid silver; border-top: 1px solid silver; background-color: #eeeeee;" colspan="2">&nbsp;</td>
    </tr>
  </table>

  </body>
</html>