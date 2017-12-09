<?php /* Smarty version 3.1.27, created on 2017-01-21 14:32:52
         compiled from "F:\wamp\www\6\modules\cms\views\block\items_form.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:222565883009487cb48_02130087%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56186a4ec147ceeb3fddb99f446f6f5a56bf4553' => 
    array (
      0 => 'F:\\wamp\\www\\6\\modules\\cms\\views\\block\\items_form.tpl',
      1 => 1472547307,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222565883009487cb48_02130087',
  'variables' => 
  array (
    'blockName' => 0,
    'block' => 0,
    'id' => 0,
    'refid' => 0,
    'title' => 0,
    'page_id' => 0,
    'url' => 0,
    'image' => 0,
    'widgets' => 0,
    'sort' => 0,
    'description' => 0,
    'rules' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58830094911268_19423711',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58830094911268_19423711')) {
function content_58830094911268_19423711 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '222565883009487cb48_02130087';
?>
<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa-fw fa fa-list-ul"></i> <?php echo $_smarty_tpl->tpl_vars['blockName']->value;?>

			<span>&gt; 编辑区块内容</span>			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<a id="goback"  class="btn btn-default btn-labeled" href="#<?php echo Router::url(array('0'=>'cms/blockitem','1'=>false));
echo $_smarty_tpl->tpl_vars['block']->value;?>
">
				<span class="btn-label">
					<i class="glyphicon glyphicon-circle-arrow-left"></i>
				</span> 返回
			</a>			
		</div>
	</div>
</div>

<section id="widget-grid">
	<div class="row">
		<article class="col-sm-12">
			<div class="jarviswidget"
                id="wid-block-w"     
                data-widget-colorbutton="false"
				data-widget-editbutton="false"
				data-widget-togglebutton="false"
				data-widget-deletebutton="false"
				data-widget-fullscreenbutton="false"
				data-widget-custombutton="false"
				data-widget-collapsed="false"
				data-widget-sortable="false">
                <header>
                     <span class="widget-icon">
                          <i class="fa fa-edit"></i>
                     </span>
                     <h2> 区块内容编辑器 </h2>                     
                </header>
                <div>
                     <div class="widget-body widget-hide-overflow no-padding">
                          
                          <form name="BlockItemForm"                          		
                          		data-widget="nuiValidate" action="<?php echo Router::url(array('0'=>'cms/blockitem/save'));?>
" 
                          		method="post" id="blockitem-form" class="smart-form" target="ajax"
                          		>
                          	<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
"/>
                          	<input type="hidden" name="block" value="<?php echo $_smarty_tpl->tpl_vars['block']->value;?>
"/>
                          	<input type="hidden" name="refid" value="<?php echo $_smarty_tpl->tpl_vars['refid']->value;?>
"/>
							<fieldset>
								<div class="row">
									<section class="col col-10">
										<label class="label">标题</label>
										<label class="input">
										<input type="text" name="title" 
											id="title" value="<?php echo $_smarty_tpl->tpl_vars['title']->value;?>
"/>
										</label>
									</section>
									<section class="col col-2">
										<label class="label">绑定页面</label>
										<label class="input input-file" for="page_id">
											<div class="button" target="dialog"
												 dialog-title="选择页面"
												 dialog-model="true"
												 dialog-width="450"
												 data-url="<?php echo Router::url(array('0'=>'cms/page/browsedialog'));?>
1" 
												 data-for="#page_id">选择</div>
											<input type="text" name="page_id" id="page_id" value="<?php echo $_smarty_tpl->tpl_vars['page_id']->value;?>
"/>
										</label>
									</section>
								</div>
								
								<section>
									<label class="label">URL</label>
									<label class="input">
									<input type="text" name="url" 
										id="url" value="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"/>
									</label>
								</section>									
								
								<section>
									<label class="label">图片</label>									
									<label class="input input-file" for="image">
										<div class="button" id="uploadImg" data-widget="nuiAjaxUploader" for="#image" data-water="0">
											<i class="fa fa-lg fa-cloud-upload"></i>
										</div>
										<a for="image" class="button" <?php if ($_smarty_tpl->tpl_vars['image']->value) {?>href="<?php echo the_media_src($_smarty_tpl->tpl_vars['image']->value);?>
" rel="superbox[image]"<?php } else { ?>href="javascript:;" style="display:none"<?php }?>><i class="fa fa-lg fa-eye txt-color-blue"></i></a>
										<input type="text" name="image" id="image" value="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" />										
									</label>
								</section>
								<?php if ($_smarty_tpl->tpl_vars['widgets']->value) {?>								
								<?php echo $_smarty_tpl->tpl_vars['widgets']->value instanceof Renderable?$_smarty_tpl->tpl_vars['widgets']->value->render():$_smarty_tpl->tpl_vars['widgets']->value;?>

								<?php }?>
								<div class="row">	
									<section class="col col-2">
										<label class="label">显示排序</label>
										<label class="input">
											<input type="text" name="sort" id=""sort"" value="<?php echo $_smarty_tpl->tpl_vars['sort']->value;?>
"/>
										</label>
									</section>		
								</div>					
								<section>
									<label class="label">说明</label>
									<label class="textarea">
										<textarea rows="4" name="description" id="description"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['description']->value, ENT_QUOTES, 'UTF-8', true);?>
</textarea>
									</label>
								</section>
							</fieldset>
							
							<footer>								
								<button type="submit" class="btn btn-primary">
									保存
								</button>
								<a id="goback"  class="btn btn-default" href="#<?php echo Router::url(array('0'=>'cms/blockitem'));
echo $_smarty_tpl->tpl_vars['block']->value;?>
">
									返回
								</a>
							</footer>
						</form>

                     </div>
                </div>
           </div>
		</article>
	</div>
</section>

<?php echo '<script'; ?>
 type="text/javascript">
	nUI.validateRules['BlockItemForm'] = <?php echo $_smarty_tpl->tpl_vars['rules']->value;?>
;
	if(!window.fillBlockFromPage){
		window.fillBlockFromPage = function(id,rows){
			if(rows.length > 0){
				var row = $(rows[0]);
				$('#page_id').val(row.val());
				$('#url').val(row.data('url'));
				$('#title').val(row.data('text'));
				if(row.data('img')){
					$("#image").val(row.data('img'));
				}
			}
		};
	}
	$('#page_id').data('onInsert',fillBlockFromPage);
<?php echo '</script'; ?>
>
<?php }
}
?>