<?php /* Smarty version 3.1.27, created on 2017-01-20 15:56:49
         compiled from "F:\wamp\www\6\modules\cms\views\model\data.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:123135881c2c16d1941_38335168%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90a4d06e7e50ee2c4128f2773aed35d14bc62508' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\model\\data.tpl',
      1 => 1472547306,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '123135881c2c16d1941_38335168',
  'variables' => 
  array (
    'total' => 0,
    'search' => 0,
    'models' => 0,
    'model' => 0,
    'groups' => 0,
    'canDeleteModel' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5881c2c17bbf84_76870023',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5881c2c17bbf84_76870023')) {
function content_5881c2c17bbf84_76870023 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '123135881c2c16d1941_38335168';
?>
<tbody data-total="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" data-disable-tree="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
">
	<?php
$_from = $_smarty_tpl->tpl_vars['models']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['model'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['model']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['model']->value) {
$_smarty_tpl->tpl_vars['model']->_loop = true;
$foreach_model_Sav = $_smarty_tpl->tpl_vars['model'];
?>
	<tr data-parent="<?php if ($_smarty_tpl->tpl_vars['model']->value['child_cnt'] > 0) {?>true<?php }?>" rel="<?php echo $_smarty_tpl->tpl_vars['model']->value['id'];?>
" parent="<?php echo $_smarty_tpl->tpl_vars['model']->value['upid'];?>
">
		<td><a href="#<?php echo Router::url(array('0'=>'cms/model/edit','1'=>false));
echo $_smarty_tpl->tpl_vars['model']->value['id'];?>
"> <?php echo $_smarty_tpl->tpl_vars['model']->value['name'];?>
 </a></td>
		<td class="hidden-xs hidden-sm"><?php echo $_smarty_tpl->tpl_vars['model']->value['refid'];?>
</td>
		<td class="text-center hidden-xs hidden-sm"><?php if ($_smarty_tpl->tpl_vars['model']->value['is_topic_model']) {?>
			<span class="label label-success">是</span> <?php }?>
		</td>
		<td class="text-center hidden-xs hidden-sm"><?php if ($_smarty_tpl->tpl_vars['model']->value['status']) {?> <span
			class="label label-success">正常</span> <?php } else { ?> <span
			class="label label-danger">禁用</span> <?php }?>
		</td>
		<td><?php if ($_smarty_tpl->tpl_vars['model']->value['role']) {
echo $_smarty_tpl->tpl_vars['groups']->value[$_smarty_tpl->tpl_vars['model']->value['role']];
} else { ?>文章<?php }?></td>
		<td class="text-right">
			<div class="btn-group">
				<a class="btn btn-success btn-xs"
					href="#<?php echo Router::url(array('0'=>'cms/modelfield','1'=>false));
echo $_smarty_tpl->tpl_vars['model']->value['refid'];?>
" title="自定义字段"> <i class="fa fa-book"></i>
				</a> 
				<?php if ($_smarty_tpl->tpl_vars['canDeleteModel']->value) {?> 
					<a href="<?php echo Router::url(array('0'=>'cms/model/del'));
echo $_smarty_tpl->tpl_vars['model']->value['id'];?>
"
					class="btn btn-danger btn-xs" data-confirm="你真的要删除这个内容模型吗？"
					target="ajax"><i class="fa fa-trash-o"></i></a> 
				<?php }?>
			</div>
		</td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['model'] = $foreach_model_Sav;
}
?>
</tbody><?php }
}
?>