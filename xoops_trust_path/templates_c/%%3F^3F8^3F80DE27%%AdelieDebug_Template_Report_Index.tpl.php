<?php /* Smarty version 2.6.26, created on 2012-09-23 00:14:22
         compiled from /Users/bluemooninc/PhpstormProjects/xcl221/xoops_trust_path/cache/AdelieDebug_Template_Report_Index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date', '/Users/bluemooninc/PhpstormProjects/xcl221/xoops_trust_path/cache/AdelieDebug_Template_Report_Index.tpl', 1, false),array('modifier', 'count', '/Users/bluemooninc/PhpstormProjects/xcl221/xoops_trust_path/cache/AdelieDebug_Template_Report_Index.tpl', 1, false),array('modifier', 'escape', '/Users/bluemooninc/PhpstormProjects/xcl221/xoops_trust_path/cache/AdelieDebug_Template_Report_Index.tpl', 1, false),array('modifier', 'var_dump', '/Users/bluemooninc/PhpstormProjects/xcl221/xoops_trust_path/cache/AdelieDebug_Template_Report_Index.tpl', 1, false),array('modifier', 'ucwords', '/Users/bluemooninc/PhpstormProjects/xcl221/xoops_trust_path/cache/AdelieDebug_Template_Report_Index.tpl', 1, false),)), $this); ?>
<style><?php echo $this->_tpl_vars['css']; ?>
</style><div class="adelieDebug"><p class="h1"><span>Adelie Debug</span><?php if ($this->_tpl_vars['isBuild']): ?><span style="font-size: 12px;">(Build <?php echo ((is_array($_tmp='YmdHis')) ? $this->_run_mod_handler('date', true, $_tmp, $this->_tpl_vars['buildTime']) : date($_tmp, $this->_tpl_vars['buildTime'])); ?>
)</sapn><?php else: ?><span style="font-size: 12px;">(Source)</sapn><?php endif; ?></p><p class="h2">Errors</p><?php $_from = $this->_tpl_vars['errorSummary']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['typeName'] => $this->_tpl_vars['ids']):
?><div class="msgError"><strong><?php echo $this->_tpl_vars['typeName']; ?>
 (<?php echo count($this->_tpl_vars['ids']); ?>
)</strong><span>...</span><?php $_from = $this->_tpl_vars['ids']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['id']):
?><a href="#adelieDebugLogId<?php echo $this->_tpl_vars['id']; ?>
" style="margin: 10px;">#<?php echo $this->_tpl_vars['id']; ?>
</a><?php endforeach; endif; unset($_from); ?></div><?php endforeach; else: ?><div class="msgSuccess">There is no error.</div><?php endif; unset($_from); ?><p class="h3">Cheat Sheet</p><div class="adelieDebugHelp"><span>adump([mixed[, mixed]])</span><span>atrace()</span><span>awhich(object|string)</span><span>asynop(object|string)</span></div><div class="adelieDebugClearBoth"></div><p class="h2">Timeline</p><div id="adelieDebugPhpErrors"><table class="data"><tr><th>ID</th><th>ms</th><th>Type</th><th>Message</th></tr><?php $_from = $this->_tpl_vars['logs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['log']):
?><tr><td style="width: 10px;" id="adelieDebugLogId<?php echo $this->_tpl_vars['log']['id']; ?>
"><?php echo $this->_tpl_vars['log']['id']; ?>
</td><td style="width: 10px;"><?php echo $this->_tpl_vars['log']['ms']; ?>
</td><td><?php echo $this->_tpl_vars['log']['typeName']; ?>
</td><td><?php if ($this->_tpl_vars['log']['typeName'] == 'DUMP'): ?><?php echo $this->_tpl_vars['log']['message']; ?>
<?php elseif ($this->_tpl_vars['log']['typeName'] == 'SYNOPSYS'): ?><?php echo $this->_tpl_vars['log']['message']; ?>
<?php elseif ($this->_tpl_vars['log']['typeName'] == 'DELEGATE'): ?><div style="font-size:12px;"><?php echo ((is_array($_tmp=$this->_tpl_vars['log']['message'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</div><?php elseif ($this->_tpl_vars['log']['typeName'] == 'SQL'): ?><?php echo '<pre class="info '; ?><?php echo $this->_tpl_vars['log']['typeName']; ?><?php echo '" style="position:relative;"><div style="height: 100%; width: '; ?><?php echo $this->_tpl_vars['log']['timePer']; ?><?php echo '%; background: #c8d9ab; position: absolute; top: 0; left: 0;"></div>'; ?><?php echo '<div style="position: relative; ">'; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['log']['message'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?><?php echo '</div></pre>'; ?>
<?php if ($this->_tpl_vars['log']['info']): ?><pre><?php echo ((is_array($_tmp=$this->_tpl_vars['log']['info'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</pre><?php endif; ?><?php else: ?><pre class="info <?php echo $this->_tpl_vars['log']['typeName']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['log']['message'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</pre><?php if ($this->_tpl_vars['log']['info']): ?><pre><?php echo ((is_array($_tmp=$this->_tpl_vars['log']['info'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</pre><?php endif; ?><?php endif; ?></td></tr><?php endforeach; endif; unset($_from); ?></table></div><p class="h2">Sent Headers</p><div id="adelieDebugSentHeaders"><?php echo '<pre class="console">'; ?><?php $_from = $this->_tpl_vars['sentHeaders']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['header']):
?><?php echo ''; ?><?php echo $this->_tpl_vars['header']; ?><?php echo '<br />'; ?><?php endforeach; endif; unset($_from); ?><?php echo '</pre>'; ?>
</div><p class="h2">Requests</p><div id="adelieDebugRequest"><?php $_from = $this->_tpl_vars['requests']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['name'] => $this->_tpl_vars['request']):
?><p class="h3"><?php echo $this->_tpl_vars['name']; ?>
</p><?php if ($this->_tpl_vars['request']): ?><table class="data"><tr><th>Key</th><th>Value</th></tr><?php $_from = $this->_tpl_vars['request']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?><tr><td><?php echo $this->_tpl_vars['key']; ?>
</td><td><?php echo var_dump($this->_tpl_vars['value']); ?>
</td></tr><?php endforeach; endif; unset($_from); ?></table><?php else: ?><p>There is no values.</p><?php endif; ?><?php endforeach; endif; unset($_from); ?></div><p class="h2">PHP Information</p><?php $_from = $this->_tpl_vars['phpInfo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['categoryName'] => $this->_tpl_vars['info']):
?><p class="h3"><?php echo ((is_array($_tmp=$this->_tpl_vars['categoryName'])) ? $this->_run_mod_handler('ucwords', true, $_tmp) : ucwords($_tmp)); ?>
</p><?php if ($this->_tpl_vars['info']): ?><table class="data"><tr><th>Key</th><th>Value</th></tr><?php $_from = $this->_tpl_vars['info']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['value']):
?><tr><td><?php echo $this->_tpl_vars['key']; ?>
</td><td><?php echo $this->_tpl_vars['value']; ?>
</td></tr><?php endforeach; endif; unset($_from); ?></table><?php else: ?><p>There is no values.</p><?php endif; ?><?php endforeach; endif; unset($_from); ?></div>