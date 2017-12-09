<?php /* Smarty version 3.1.27, created on 2016-08-30 16:27:43
         compiled from "/data/wwwroot/www.minzhuzhihun.com/modules/media/views/data.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:129567914957c5437f080ed6_69101437%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e0c41de55e836312131c0bb0c6e61f420012692' => 
    array (
      0 => '/data/wwwroot/www.minzhuzhihun.com/modules/media/views/data.tpl',
      1 => 1429598894,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '129567914957c5437f080ed6_69101437',
  'variables' => 
  array (
    'total' => 0,
    'rows' => 0,
    'row' => 0,
    'types' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_57c5437f0cf777_20007405',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_57c5437f0cf777_20007405')) {
function content_57c5437f0cf777_20007405 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/data/wwwroot/www.minzhuzhihun.com/includes/vendors/smarty/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '129567914957c5437f080ed6_69101437';
?>
<tbody data-total="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
">
	<?php
$_from = $_smarty_tpl->tpl_vars['rows']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreach_row_Sav = $_smarty_tpl->tpl_vars['row'];
?>
	<tr name="media" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
		<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="grp" /></td>
		<td>
			<a href="<?php echo the_media_src($_smarty_tpl->tpl_vars['row']->value['url']);?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['row']->value['filename'];?>
</a>
			<p><?php echo $_smarty_tpl->tpl_vars['row']->value['url'];?>
</p>
		</td>
		<td><?php echo $_smarty_tpl->tpl_vars['types']->value[$_smarty_tpl->tpl_vars['row']->value['type']];?>
</td>	
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['nickname'];?>
</td>
		<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['create_time'],'Y-m-d H:i:s');?>
</td>	
	</tr>
	<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
	<tr>
		<td colspan="5" class="text-center">无媒体文件</td>
	</tr>
	<?php
}
?>
</tbody><?php }
}
?>