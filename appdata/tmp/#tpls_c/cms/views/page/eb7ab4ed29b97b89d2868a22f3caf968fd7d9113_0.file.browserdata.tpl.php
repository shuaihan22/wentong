<?php /* Smarty version 3.1.27, created on 2017-01-21 16:26:43
         compiled from "F:\wamp\www\6\modules\cms\views\page\browserdata.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2936558831b438bdfb8_50682270%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'eb7ab4ed29b97b89d2868a22f3caf968fd7d9113' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\page\\browserdata.tpl',
      1 => 1472547309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2936558831b438bdfb8_50682270',
  'variables' => 
  array (
    'total' => 0,
    'rows' => 0,
    'row' => 0,
    'ss' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58831b439238d7_78240328',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58831b439238d7_78240328')) {
function content_58831b439238d7_78240328 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once 'F:\\wamp\\www\\6\\includes\\vendors\\smarty\\plugins\\modifier.truncate.php';

$_smarty_tpl->properties['nocache_hash'] = '2936558831b438bdfb8_50682270';
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
	<tr>		
		<td title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
">[<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
] 
			<?php if ($_smarty_tpl->tpl_vars['row']->value['title2']) {?>
			<a href="<?php echo safe_url($_smarty_tpl->tpl_vars['row']->value,false);?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['title2'],32,'...');?>
</a>
			<?php } else { ?>
			<a href="<?php echo safe_url($_smarty_tpl->tpl_vars['row']->value,false);?>
" target="_blank"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['row']->value['title'],32,'...');?>
</a>
			<?php }?>
		</td>
		<td><input name="ss_grp" type="<?php if ($_smarty_tpl->tpl_vars['ss']->value) {?>radio<?php } else { ?>checkbox<?php }?>" class="grp"
		 data-url = "<?php echo safe_url($_smarty_tpl->tpl_vars['row']->value,false);?>
"
		 data-title="<?php echo $_smarty_tpl->tpl_vars['row']->value['title'];?>
"
		 data-title2="<?php echo $_smarty_tpl->tpl_vars['row']->value['title2'];?>
"
		 data-img="<?php echo $_smarty_tpl->tpl_vars['row']->value['image'];?>
"
		 data-text="<?php if ($_smarty_tpl->tpl_vars['row']->value['title2']) {
echo $_smarty_tpl->tpl_vars['row']->value['title2'];
} else {
echo $_smarty_tpl->tpl_vars['row']->value['title'];
}?>" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
"/></td>
	</tr>
	<?php
$_smarty_tpl->tpl_vars['row'] = $foreach_row_Sav;
}
if (!$_smarty_tpl->tpl_vars['row']->_loop) {
?>
	<tr>
		<td colspan="2">无记录</td>
	</tr>
	<?php
}
?>
</tbody><?php }
}
?>