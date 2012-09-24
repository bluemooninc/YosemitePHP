<?php /* Smarty version 2.6.26, created on 2012-09-22 01:57:14
         compiled from file:module_install_success.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'xoops_escape', 'file:module_install_success.html', 15, false),array('modifier', 'theme', 'file:module_install_success.html', 32, false),)), $this); ?>
<div class="adminnavi">
  <a href="./index.php"><?php echo @_MI_LEGACY_NAME; ?>
</a>
  &raquo;&raquo; <a href="./index.php?action=ModuleList"><?php echo @_MI_LEGACY_MENU_MODULELIST; ?>
</a>
  &raquo;&raquo; <a href="./index.php?action=InstallList"><?php echo @_AD_LEGACY_LANG_MODINSTALL; ?>
</a>
  &raquo;&raquo; <span class="adminnaviTitle"><?php echo @_AD_LEGACY_LANG_MODINSTALL_SUCCESS; ?>
</span>
</div>

<h3 class="admintitle"><?php echo @_AD_LEGACY_LANG_MODINSTALL_SUCCESS; ?>
</h3>

<h4 class="admintitle"><?php echo @_AD_LEGACY_LANG_MODINSTALL_LOG; ?>
</h4>

<ul>
<?php $_from = $this->_tpl_vars['log']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['msg']):
?>
  <?php if ($this->_tpl_vars['msg']['type'] == 'error'): ?>
    <li class="legacy_modinstall_error"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg']['message'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
</li>
  <?php elseif ($this->_tpl_vars['msg']['type'] == 'warning'): ?>
    <li class="legacy_modinstall_warning"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg']['message'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
</li>
  <?php else: ?>
    <li class="legacy_modinstall_message"><?php echo ((is_array($_tmp=$this->_tpl_vars['msg']['message'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
</li>
  <?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
</ul>

<?php if ($this->_tpl_vars['module']->getAdminMenu()): ?>
<ul class="toptab" style="text-align:left;">
  <li class="editFile">
    <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['module']->get('dirname'); ?>
/admin/"><?php echo $this->_tpl_vars['module']->get('name'); ?>
 - <?php echo @_MI_LEGACY_MENU_MODULELIST; ?>
</a>
  </li>
</ul>
<?php endif; ?>

<div class="legacy_module_return"><img src="<?php echo ((is_array($_tmp="icons/info.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="" title="" /> <a href="index.php?action=ModuleInfo&amp;dirname=<?php echo $this->_tpl_vars['module']->getShow('dirname'); ?>
"><?php echo @_AD_LEGACY_LANG_INFORMATION; ?>
</a></div>
<div class="legacy_module_return"><img src="<?php echo ((is_array($_tmp="icons/module_edit.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="" title="" /> <a href="index.php?action=ModuleEdit&amp;mid=<?php echo $this->_tpl_vars['module']->getShow('mid'); ?>
"><?php echo @_AD_LEGACY_LANG_MOD_EDIT; ?>
</a></div>
<?php if ($this->_tpl_vars['module']->getInfo('blocks')): ?>
<div class="legacy_module_return"><img src="<?php echo ((is_array($_tmp="icons/block_add.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="" title="" /> <a href="index.php?action=BlockInstallList&amp;dirname=<?php echo $this->_tpl_vars['module']->getShow('dirname'); ?>
"><?php echo @_MI_LEGACY_MENU_BLOCKINSTALL; ?>
</a></div>
<?php endif; ?>
<?php if ($this->_tpl_vars['module']->getInfo('templates')): ?>
<div class="legacy_module_return"><img src="<?php echo ((is_array($_tmp="icons/templates.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="" title="" /> <a href="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/legacyRender/admin/index.php?action=TplfileList&amp;tpl_module=<?php echo $this->_tpl_vars['module']->getShow('dirname'); ?>
&amp;sort=-9"><?php echo @_AD_LEGACY_LANG_TEMPLATE_INFO; ?>
</a></div>
<?php endif; ?>
<div class="legacy_module_return"><img src="<?php echo ((is_array($_tmp="icons/module.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="" title="" /> <a href="index.php?action=ModuleList"><?php echo @_AD_LEGACY_LANG_MODLIST; ?>
</a></div>
<div class="legacy_module_return"><img src="<?php echo ((is_array($_tmp="icons/module_add.png")) ? $this->_run_mod_handler('theme', true, $_tmp) : Legacy_modifier_theme($_tmp)); ?>
" alt="" title="" /> <a href="index.php?action=InstallList"><?php echo @_AD_LEGACY_LANG_MODINSTALL; ?>
</a></div>