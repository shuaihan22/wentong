<?php /* Smarty version 3.1.27, created on 2017-01-20 14:49:35
         compiled from "F:\wamp\www\6\modules\cms\views\page\cpage_data.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:276415881b2ff9c0ab2_86557885%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54b602e6fb40ba2bbe48038617aea3cf3af16614' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\page\\cpage_data.tpl',
      1 => 1472547309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '276415881b2ff9c0ab2_86557885',
  'variables' => 
  array (
    'total' => 0,
    'rows' => 0,
    'row' => 0,
    'enable_approving' => 0,
    'status' => 0,
    'canEditPage' => 0,
    'canDelPage' => 0,
    'disable_approving' => 0,
    'cCache' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5881b2ffaaef74_89733694',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5881b2ffaaef74_89733694')) {
function content_5881b2ffaaef74_89733694 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '276415881b2ff9c0ab2_86557885';
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
	<tr name="page" rel="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
">
		<td class="hidden-xs hidden-sm"></td>
		<td><input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="grp" /></td>
		<td><?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
</td>
		<td>	
			<?php if ($_smarty_tpl->tpl_vars['row']->value['channel'] == '_t') {?>		
				<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['title2'],24,'...');?>
[ URL规则:<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['url'], ENT_QUOTES, 'UTF-8', true);?>
 ]
			<?php } else { ?>
			<a href="<?php echo safe_url($_smarty_tpl->tpl_vars['row']->value,false);?>
?preview" target="_blank">
				<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['title2'],24,'...');?>
</a>
			<?php }?>			
			<?php if ($_smarty_tpl->tpl_vars['row']->value['flag_h']) {?><span class="label bg-color-redLight">头条</span><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['row']->value['flag_c']) {?><span class="label bg-color-orange">推荐</span><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['row']->value['flag_a']) {?><span class="label bg-color-teal">特荐</span><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['row']->value['flag_b']) {?><span class="label bg-color-blueLight">加粗</span><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['row']->value['flag_j']) {?><span class="label bg-color-greenLight">跳转</span><?php }?>
			
		</td>	
		<td>
			<?php echo $_smarty_tpl->tpl_vars['row']->value['template_file'];?>

		</td>	
		<?php if ($_smarty_tpl->tpl_vars['enable_approving']->value) {?>
		<td class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['status']->value[$_smarty_tpl->tpl_vars['row']->value['status']];?>
</td>
		<?php }?>
		<td class="hidden-xs hidden-sm">
			<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['update_time'],'Y-m-d H:i');?>
			
		</td>
		<td class="text-right">
			<div class="btn-group">
			<?php if ($_smarty_tpl->tpl_vars['canEditPage']->value) {?>
			<a href="#<?php echo Router::url(array('0'=>'cms/cpage/edit','1'=>false));
echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-xs btn-primary">
				<i class="fa fa-pencil-square-o"></i></a>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['canDelPage']->value) {?>
			<a title="删除" class="btn btn-xs btn-danger" 
				href="<?php echo Router::url(array('0'=>'cms/page/del'));
echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="ajax"
				data-confirm="你确定要删除这个文章吗?">
				<i class="glyphicon glyphicon-trash"></i></a>
			<?php }?>			
			</div>
		</td>	

	</tr>
	<tr parent="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="hidden-xs hidden-sm">
		<td colspan="2"></td>
		<td colspan="<?php if ($_smarty_tpl->tpl_vars['disable_approving']->value) {?>6<?php } else { ?>5<?php }?>">
			<p>
				由<?php echo $_smarty_tpl->tpl_vars['row']->value['cuname'];?>
创建于<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['create_time'],'Y-m-d H:i');?>

				<?php if ($_smarty_tpl->tpl_vars['cCache']->value) {?>
					[<a href="<?php echo safe_url($_smarty_tpl->tpl_vars['row']->value['url'],false);?>
?preview=_c2c_" target="_blank">清除缓存</a>]
				<?php }?>
			</p>
			<p>关键词:<?php echo $_smarty_tpl->tpl_vars['row']->value['keywords'];?>
</p>
			<p>内容模型:<?php echo $_smarty_tpl->tpl_vars['row']->value['modelName'];?>
</p>
			<p>模板:<?php echo $_smarty_tpl->tpl_vars['row']->value['template_file'];?>
</p>
		</td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
	<tr class="hidden-xs hidden-sm">
		<td colspan="<?php if ($_smarty_tpl->tpl_vars['disable_approving']->value) {?>8<?php } else { ?>7<?php }?>">无结果</td>
	</tr>
	<?php
}
?>
</tbody><?php }
}
?>