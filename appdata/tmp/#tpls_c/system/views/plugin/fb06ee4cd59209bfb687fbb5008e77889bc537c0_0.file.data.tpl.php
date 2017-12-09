<?php /* Smarty version 3.1.27, created on 2017-01-18 11:22:12
         compiled from "F:\wamp\www\6\modules\system\views\plugin\data.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12390587edf64c5c3e2_19578382%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb06ee4cd59209bfb687fbb5008e77889bc537c0' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\system\\views\\plugin\\data.tpl',
      1 => 1472547291,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12390587edf64c5c3e2_19578382',
  'variables' => 
  array (
    'total' => 0,
    'apps' => 0,
    'app' => 0,
    'installed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587edf64dee9c0_75606249',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587edf64dee9c0_75606249')) {
function content_587edf64dee9c0_75606249 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12390587edf64c5c3e2_19578382';
?>
<tbody data-total="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
">
	<?php
$_from = $_smarty_tpl->tpl_vars['apps']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['app'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['app']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['app']->value) {
$_smarty_tpl->tpl_vars['app']->_loop = true;
$foreach_app_Sav = $_smarty_tpl->tpl_vars['app'];
?>
	<tr>
		<td>
			<strong><?php echo $_smarty_tpl->tpl_vars['app']->value['appname'];?>
</strong>								
			<?php if ($_smarty_tpl->tpl_vars['app']->value['status'] == '0') {?>
			<span class="label label-default">禁用</span>
			<?php } elseif ($_smarty_tpl->tpl_vars['app']->value['upgradable']) {?>
			<span class="label label-warning">可升级到<?php echo $_smarty_tpl->tpl_vars['app']->value['currentVer'];?>
</span>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['app']->value['urlmapping']) {?>
			<p  style="margin:10px 0 0;"><a href="<?php echo Router::url(array('0'=>'system/plugin/mapping'));
echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
" dialog-id="urlmapDialog" dialog-width="300" dialog-model="true" dialog-title="设置URL" target="dialog" title=""><?php echo $_smarty_tpl->tpl_vars['app']->value['urlmapping'];?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['app']->value['conflict']) {?><span class="bg-color-red">URL冲突,建议修改.</span><?php }?>
			</p>								
			<?php }?>
		</td>
		<td><?php echo $_smarty_tpl->tpl_vars['app']->value['installedVer'];?>
</td>							
		<td class="hidden-xs hidden-sm">
			<p><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['app']->value['desc'], ENT_QUOTES, 'UTF-8', true));?>
</p>
			<p style="margin:5px 0 0;" class="text-info">
                最新版本:<?php echo $_smarty_tpl->tpl_vars['app']->value['currentVer'];?>
 | 
                作者:<?php echo $_smarty_tpl->tpl_vars['app']->value['author'];?>
 |
                <a target="_blank" href="<?php echo $_smarty_tpl->tpl_vars['app']->value['website'];?>
">插件主页</a>
            </p>
		</td>
		<td class="text-right">
			<?php if ($_smarty_tpl->tpl_vars['app']->value['upgradable']) {?>
			<a class="btn btn-success btn-xs"
				href="<?php echo Router::url(array('0'=>'system/plugin/upgrade'));
echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
/<?php echo $_smarty_tpl->tpl_vars['app']->value['currentVer'];?>
"
				target="ajax"
				data-confirm="你确定要升级此应用到最新版本吗?"
				title="升级" 
				><i class="fa fa-cloud-upload"></i></a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['installed']->value && $_smarty_tpl->tpl_vars['app']->value['status'] && !$_smarty_tpl->tpl_vars['app']->value['system']) {?>
			<a class="btn btn-warning btn-xs"
				href="<?php echo Router::url(array('0'=>'system/plugin/disable'));
echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
"
				target="ajax"
				data-confirm="你确定要禁用此应用吗?"
				title="禁用" 
				><i class="fa fa-times-circle"></i></a>
			<?php } elseif ($_smarty_tpl->tpl_vars['installed']->value && !$_smarty_tpl->tpl_vars['app']->value['status'] && !$_smarty_tpl->tpl_vars['app']->value['system']) {?>
			<a 	class="btn btn-success btn-xs"
				href="<?php echo Router::url(array('0'=>'system/plugin/enable'));
echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
"
				target="ajax"
				data-confirm="你确定要启用此应用吗?"
				title="启用" 
				><i class="fa fa-check-circle"></i></a>
			<?php } elseif (!$_smarty_tpl->tpl_vars['installed']->value) {?>
			<a class="btn btn-success btn-xs"
				href="<?php echo Router::url(array('0'=>'system/plugin/install'));
echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
"
				target="ajax"
				data-confirm="你确定要安装此应用吗?"
				><i class="fa fa-cloud-download"></i></a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['installed']->value && !$_smarty_tpl->tpl_vars['app']->value['system']) {?>
			<a class="btn btn-danger btn-xs"
				href="<?php echo Router::url(array('0'=>'system/plugin/uninstall'));
echo $_smarty_tpl->tpl_vars['app']->value['name'];?>
"
				target="ajax"
				data-confirm="插件卸载后其所有数据有可能全部被删除,你确定要卸载此应用吗?"
				><i class="fa fa-trash-o"></i></a>
			<?php }?>								
		</td>						
	</tr>
	<?php
$_smarty_tpl->tpl_vars['app'] = $foreach_app_Sav;
}
if (!$_smarty_tpl->tpl_vars['app']->_loop) {
?>
	<tr><td colspan="4" class="">无可用插件</td></tr>
	<?php
}
?>	
</tbody><?php }
}
?>