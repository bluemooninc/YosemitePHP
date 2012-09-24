<?php /* Smarty version 2.6.26, created on 2012-09-23 07:28:54
         compiled from file:module_uninstall.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'file:module_uninstall.html', 9, false),array('modifier', 'xoops_escape', 'file:module_uninstall.html', 15, false),array('modifier', 'xoops_formattimestamp', 'file:module_uninstall.html', 61, false),array('function', 'xoops_token', 'file:module_uninstall.html', 22, false),array('function', 'xoops_input', 'file:module_uninstall.html', 23, false),array('function', 'cycle', 'file:module_uninstall.html', 35, false),)), $this); ?>
<div class="adminnavi">
  <a href="./index.php"><?php echo @_MI_LEGACY_NAME; ?>
</a>
  &raquo;&raquo; <a href="./index.php?action=ModuleList"><?php echo @_MI_LEGACY_MENU_MODULELIST; ?>
</a>
  &raquo;&raquo; <span class="adminnaviTitle"><?php echo @_AD_LEGACY_LANG_MODUNINSTALL_CONF; ?>
</span>
</div>

<h3 class="admintitle"><?php echo @_AD_LEGACY_LANG_MODUNINSTALL_CONF; ?>
</h3>

<div class="confirm"><?php echo ((is_array($_tmp=@_AD_LEGACY_LANG_MODUNINSTALL_ADVICE)) ? $this->_run_mod_handler('replace', true, $_tmp, "_%s_", $this->_tpl_vars['module']->getShow('name')) : smarty_modifier_replace($_tmp, "_%s_", $this->_tpl_vars['module']->getShow('name'))); ?>
</div>

<?php if ($this->_tpl_vars['actionForm']->hasError()): ?>
<div class="error">
  <ul>
    <?php $_from = $this->_tpl_vars['actionForm']->getErrorMessages(); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['message']):
?>
      <li><?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
</li>
    <?php endforeach; endif; unset($_from); ?>
  </ul>
</div>
<?php endif; ?>

<form  method="post" action="">
<?php echo smarty_function_xoops_token(array('form' => $this->_tpl_vars['actionForm']), $this);?>

<?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'dirname','value' => $this->_tpl_vars['module']->get('dirname')), $this);?>


<table class="outer">
  <tr>
    <th colspan="3"><?php echo @_AD_LEGACY_LANG_MODUNINSTALL_CONF; ?>
</th>
  </tr>
  <tr>
    <td rowspan="6" class="head legacy_list_image">
      <img src="<?php echo $this->_tpl_vars['xoops_url']; ?>
/modules/<?php echo $this->_tpl_vars['module']->getShow('dirname'); ?>
/<?php echo $this->_tpl_vars['module']->modinfo['image']; ?>
" />
      <div class="legacy_list_imagetitle"><?php echo ((is_array($_tmp=$this->_tpl_vars['module']->modinfo['name'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
</div>
    </td>
    <td class="head"><?php echo @_AD_LEGACY_LANG_MOD_NAME; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
"><?php echo $this->_tpl_vars['module']->getShow('name'); ?>
</td>
  </tr>
  <tr>
	<td class="head"><?php echo @_AD_LEGACY_LANG_MOD_DIR_NAME; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
"><?php echo $this->_tpl_vars['module']->getShow('dirname'); ?>
</td>
  </tr>
  <tr>
    <td class="head"><?php echo @_AD_LEGACY_LANG_VERSION; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php echo $this->_tpl_vars['currentVersion']; ?>

	</td>
  </tr>
  <tr>
	<td class="head"><?php echo @_AD_LEGACY_LANG_MOD_MID; ?>
</td>
	<td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php if ($this->_tpl_vars['module']->get('mid')): ?>
        <?php echo $this->_tpl_vars['module']->getShow('mid'); ?>

      <?php else: ?>
        --
      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_AD_LEGACY_LANG_LASTUPDATE; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
      <?php if ($this->_tpl_vars['module']->get('last_update')): ?>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['module']->get('last_update'))) ? $this->_run_mod_handler('xoops_formattimestamp', true, $_tmp, 'l') : smarty_modifier_xoops_formattimestamp($_tmp, 'l')); ?>

      <?php else: ?>
        --
      <?php endif; ?>
    </td>
  </tr>
  <tr>
    <td class="head"><?php echo @_AD_LEGACY_LANG_MOD_DESC; ?>
</td>
    <td class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['module']->modinfo['description'])) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
</td>
  </tr>
  <tr>
    <td class="foot" colspan="3">
      <label><input type="checkbox" name="force" value="1" /><?php echo @_AD_LEGACY_LANG_FORCE_MODE; ?>
</label>
    </td>
  </tr>
  <tr>
    <td class="foot" colspan="3">
      <input class="formButton" type="submit" value="<?php echo @_AD_LEGACY_LANG_UNINSTALL; ?>
" />
      <input class="formButton" type="submit" value="<?php echo @_BACK; ?>
" name="_form_control_cancel" />
    </td>
  </tr>
</table>
</form>