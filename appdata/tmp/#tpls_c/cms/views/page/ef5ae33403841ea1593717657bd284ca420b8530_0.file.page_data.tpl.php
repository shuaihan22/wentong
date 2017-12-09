<?php /* Smarty version 3.1.27, created on 2017-01-18 11:26:07
         compiled from "F:\wamp\www\6\modules\cms\views\page\page_data.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17208587ee04f77fcd7_41828294%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef5ae33403841ea1593717657bd284ca420b8530' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\page\\page_data.tpl',
      1 => 1472547310,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17208587ee04f77fcd7_41828294',
  'variables' => 
  array (
    'total' => 0,
    'rows' => 0,
    'row' => 0,
    'disable_approving' => 0,
    'status' => 0,
    'canEditPage' => 0,
    'type' => 0,
    'enableCopy' => 0,
    'canEditTag' => 0,
    'canDelPage' => 0,
    'cCache' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587ee04f85a904_86763046',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587ee04f85a904_86763046')) {
function content_587ee04f85a904_86763046 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\modifier.truncate.php';
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '17208587ee04f77fcd7_41828294';
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
			<a href="<?php echo safe_url($_smarty_tpl->tpl_vars['row']->value,false);?>
?preview" target="_blank" title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">
				<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['title'],32,'...');?>
</a>&nbsp; <?php if ($_smarty_tpl->tpl_vars['row']->value['image']) {?><span class="badge bg-color-red">图</span>&nbsp;<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['row']->value['flag_h']) {?><span class="label bg-color-redLight">头条</span>&nbsp;<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['row']->value['flag_c']) {?><span class="label bg-color-orange">推荐</span>&nbsp;<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['row']->value['flag_a']) {?><span class="label bg-color-teal">特荐</span>&nbsp;<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['row']->value['flag_b']) {?><span class="label bg-color-blueLight">加粗</span>&nbsp;<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['row']->value['flag_j']) {?><span class="label bg-color-greenLight">跳转</span>&nbsp;<?php }?>		
		</td>
		<td class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['row']->value['channelName'];?>
</td>
		<?php if ($_smarty_tpl->tpl_vars['disable_approving']->value) {?>
		<td class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['status']->value[$_smarty_tpl->tpl_vars['row']->value['status']];?>
</td>
		<?php }?>
		<td class="hidden-xs hidden-sm">
			<?php echo $_smarty_tpl->tpl_vars['row']->value['cuname'];?>

		</td>
		<td class="hidden-xs hidden-sm">
			<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['update_time'],'Y-m-d H:i');?>

		</td>
		<?php if ($_smarty_tpl->tpl_vars['canEditPage']->value) {?>
			<td class="hidden-xs hidden-sm"><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['display_sort'];?>
" class="ch-item-sort form-control" style="width:50px" maxlength="9" /></td>	
		<?php }?>
		<td class="text-right">
			<div class="btn-group">
				<?php if ($_smarty_tpl->tpl_vars['canEditPage']->value) {?>
				<a href="#<?php echo Router::url(array('0'=>'cms/page/edit','1'=>false));
echo $_smarty_tpl->tpl_vars['type']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="btn btn-primary btn-xs">
					<i class="fa fa-pencil-square-o"></i></a>									
				<?php } else { ?>
				<button data-toggle="dropdown" class="btn btn-primary btn-xs dropdown-toggle">
					<i class="fa fa-list"></i>
				</button>
				<?php }?>
				<button data-toggle="dropdown" class="btn btn-default btn-xs dropdown-toggle">
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu pull-right">
				<?php if ($_smarty_tpl->tpl_vars['canEditPage']->value && $_smarty_tpl->tpl_vars['enableCopy']->value) {?>					
				<li><a href="#<?php echo Router::url(array('0'=>'cms/page/edit','1'=>false));
echo $_smarty_tpl->tpl_vars['type']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
/1">
					<i class="fa fa-copy txt-color-green"></i> 复制</a></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['canEditTag']->value) {?>
				<li><a href="<?php echo Router::url(array('0'=>'cms/tag/topic2tag'));
echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="ajax" data-confirm="你真的要将它加入内链库吗?">
				<i class="fa fa-link"></i> 内链</a></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['canDelPage']->value) {?>
				<li><a title="删除"
					href="<?php echo Router::url(array('0'=>'cms/page/del'));
echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" target="ajax"
					data-confirm="你确定要删除这个文章吗?">
					<i class="glyphicon glyphicon-trash txt-color-red"></i> 删除</a></li>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['cCache']->value) {?>
					<li><a href="<?php echo safe_url($_smarty_tpl->tpl_vars['row']->value,false);?>
?preview=_c2c_" target="_blank"><i class="fa  fa-refresh txt-color-orange"></i> 清除缓存</a></li>
				<?php }?>
				<?php echo apply_filter('get_page_actions','',$_smarty_tpl->tpl_vars['row']->value,'');?>

				</ul>	
			</div>		
		</td>	
	</tr>
	<tr parent="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
" class="hidden-xs hidden-sm">
		<td colspan="2"></td>
		<td colspan="<?php if ($_smarty_tpl->tpl_vars['disable_approving']->value) {?>7<?php } else { ?>6<?php }?>">
			<p>
				创建于&nbsp;<span class="badge bg-color-greenLights"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['create_time'],'Y-m-d H:i');?>
</span>&nbsp;
				最后修改&nbsp;<span class="badge bg-color-greenLights"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['update_time'],'Y-m-d H:i');?>
</span>&nbsp;
				<?php if ($_smarty_tpl->tpl_vars['row']->value['publish_time']) {?>发布于&nbsp;<span class="badge bg-color-greenLights"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['publish_time'],'Y-m-d H:i');?>
</span>.<?php }?>				
			</p>
			<p>内容模型:<?php echo $_smarty_tpl->tpl_vars['row']->value['modelName'];
if ($_smarty_tpl->tpl_vars['row']->value['keywords']) {?>,&nbsp;关键词:<?php echo $_smarty_tpl->tpl_vars['row']->value['keywords'];
}?></p>
			<?php echo apply_filter('show_page_detail','',$_smarty_tpl->tpl_vars['row']->value,'');?>

		</td>
		<?php if ($_smarty_tpl->tpl_vars['canEditPage']->value) {?>
		<td></td>
		<?php }?>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
	<tr class="hidden-xs hidden-sm">
		<td></td>
		<td colspan="<?php if ($_smarty_tpl->tpl_vars['disable_approving']->value) {?>8<?php } else { ?>7<?php }?>">无结果</td>
		<?php if ($_smarty_tpl->tpl_vars['canEditPage']->value) {?>
		<td></td>
		<?php }?>
	</tr>
	<?php
}
?>
</tbody><?php }
}
?>