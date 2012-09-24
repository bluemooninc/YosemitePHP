<?php /* Smarty version 2.6.26, created on 2012-09-23 07:28:51
         compiled from file:module_list_confirm.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'xoops_token', 'file:module_list_confirm.html', 12, false),array('function', 'xoops_input', 'file:module_list_confirm.html', 13, false),array('function', 'cycle', 'file:module_list_confirm.html', 23, false),array('modifier', 'xoops_escape', 'file:module_list_confirm.html', 27, false),array('modifier', 'intval', 'file:module_list_confirm.html', 40, false),)), $this); ?>
<div class="adminnavi">
  <a href="./index.php"><?php echo @_MI_LEGACY_NAME; ?>
</a>
  &raquo;&raquo; <a href="./index.php?action=ModuleList"><?php echo @_MI_LEGACY_MENU_MODULELIST; ?>
</a>
  &raquo;&raquo; <span class="adminnaviTitle"><?php echo @_AD_LEGACY_LANG_MODUPDATE_CONF; ?>
</span>
</div>

<h3 class="admintitle"><?php echo @_AD_LEGACY_LANG_MODUPDATE_CONF; ?>
</h3>

<div class="confirm"><?php echo @_AD_LEGACY_MESSAGE_CONFIRM_UPDATE_MODULE; ?>
</div>

<form method="post">
  <?php echo smarty_function_xoops_token(array('form' => $this->_tpl_vars['actionForm']), $this);?>

  <?php echo smarty_function_xoops_input(array('type' => 'hidden','name' => 'confirm','value' => 1), $this);?>

<table class="outer">
  <tr>
    <th><?php echo @_AD_LEGACY_LANG_MOD_MID; ?>
</th>
    <th><?php echo @_AD_LEGACY_LANG_MOD_NAME; ?>
</th>
    <th><?php echo @_AD_LEGACY_LANG_WEIGHT; ?>
</th>
    <th><?php echo @_AD_LEGACY_LANG_ISACTIVE; ?>
</th>
  </tr>

<?php $_from = $this->_tpl_vars['mids']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mid']):
?>
  <tr class="<?php echo smarty_function_cycle(array('values' => 'odd,even'), $this);?>
">
    <td class="legacy_list_id"><?php echo $this->_tpl_vars['mid']; ?>
</td>
    <td class="legacy_list_name">
      <?php if ($this->_tpl_vars['actionForm']->get('name',$this->_tpl_vars['mid']) == $this->_tpl_vars['moduleObjects'][$this->_tpl_vars['mid']]->get('name')): ?>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['actionForm']->get('name',$this->_tpl_vars['mid']))) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>

      <?php else: ?>
         (<?php echo $this->_tpl_vars['moduleObjects'][$this->_tpl_vars['mid']]->getShow('name'); ?>
) &raquo; <b  class="legacy_module_error"><?php echo ((is_array($_tmp=$this->_tpl_vars['actionForm']->get('name',$this->_tpl_vars['mid']))) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
</b>
      <?php endif; ?>
    </td>
    <td class="legacy_list_order">
      <?php if ($this->_tpl_vars['actionForm']->get('weight',$this->_tpl_vars['mid']) == $this->_tpl_vars['moduleObjects'][$this->_tpl_vars['mid']]->get('weight')): ?>
        <?php echo ((is_array($_tmp=$this->_tpl_vars['actionForm']->get('weight',$this->_tpl_vars['mid']))) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>

      <?php else: ?>
         (<?php echo $this->_tpl_vars['moduleObjects'][$this->_tpl_vars['mid']]->getShow('weight'); ?>
) &raquo; <b  class="legacy_module_error"><?php echo ((is_array($_tmp=$this->_tpl_vars['actionForm']->get('weight',$this->_tpl_vars['mid']))) ? $this->_run_mod_handler('xoops_escape', true, $_tmp) : smarty_modifier_xoops_escape($_tmp)); ?>
</b>
      <?php endif; ?>
    </td>
    <td class="legacy_list_select">
      <?php if (((is_array($_tmp=$this->_tpl_vars['actionForm']->get('isactive',$this->_tpl_vars['mid']))) ? $this->_run_mod_handler('intval', true, $_tmp) : intval($_tmp)) == $this->_tpl_vars['moduleObjects'][$this->_tpl_vars['mid']]->get('isactive')): ?>
        <?php echo @_AD_LEGACY_LANG_NO_CHANGE; ?>

      <?php else: ?>
        (<?php if ($this->_tpl_vars['moduleObjects'][$this->_tpl_vars['mid']]->get('isactive') == 1): ?>
          <?php echo @_AD_LEGACY_LANG_ISACTIVE; ?>

        <?php else: ?>
          <?php echo @_AD_LEGACY_LANG_DEACTIVATE; ?>

        <?php endif; ?>) 
        &raquo;
        
        <?php if ($this->_tpl_vars['actionForm']->get('isactive',$this->_tpl_vars['mid']) == 1): ?>
        <b class="legacy_module_error">
          <?php echo @_AD_LEGACY_LANG_ISACTIVE; ?>

        <?php else: ?>
        <b class="legacy_module_warning">
          <?php echo @_AD_LEGACY_LANG_DEACTIVATE; ?>

        <?php endif; ?></b>
      <?php endif; ?>
      <input type="hidden" name="name[<?php echo $this->_tpl_vars['mid']; ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['actionForm']->get('name',$this->_tpl_vars['mid']))) ? $this->_run_mod_handler('xoops_escape', true, $_tmp, 'edit') : smarty_modifier_xoops_escape($_tmp, 'edit')); ?>
" />
      <input type="hidden" name="weight[<?php echo $this->_tpl_vars['mid']; ?>
]" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['actionForm']->get('weight',$this->_tpl_vars['mid']))) ? $this->_run_mod_handler('xoops_escape', true, $_tmp, 'edit') : smarty_modifier_xoops_escape($_tmp, 'edit')); ?>
" />
      <?php if ($this->_tpl_vars['actionForm']->get('isactive',$this->_tpl_vars['mid'])): ?>
        <input type="hidden" name="isactive[<?php echo $this->_tpl_vars['mid']; ?>
]" value="1" />
      <?php else: ?>
        <input type="hidden" name="isactive[<?php echo $this->_tpl_vars['mid']; ?>
]" value="0" />
      <?php endif; ?>
    </td>
  </tr>
<?php endforeach; endif; unset($_from); ?>
  <tr>
    <td class="foot" colspan="4">
      <input type="submit" value="<?php echo @_AD_LEGACY_LANG_UPDATE; ?>
" class="formButton" />
      <input class="formButton" type="submit" value="<?php echo @_BACK; ?>
" name="_form_control_cancel" />
    </td>
  </tr>
</table>
</form>