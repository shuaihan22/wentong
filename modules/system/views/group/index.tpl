<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 hidden-xs hidden-sm">
		<h1 class="txt-color-blueDark">
			<i class="fa-fw fa fa-group"></i> 用户组管理			
		</h1>
	</div>
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-8">
		<div class="pull-right margin-top-5 margin-bottom-5">
			<a class="btn btn-success"
			   href="#{'system/group/add'|app:0}0/{$type}"><i class="glyphicon glyphicon-plus"></i> 新增
			</a>			
		</div>
	</div>
</div>
<section id="widget-grid">	
	<div class="row">		
		<article class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-body no-padding">
					<ul class="nav nav-tabs in" id="role-type-tab">
						{foreach $types as $t=>$tname}					
						<li {if $type==$t}class="active"{/if}>
							<a href="#{'system/group'|app:0}{$t}" class="txt-color-blue"><i class="fa fa-group"></i> <span class="hidden-mobile hidden-tablet">{$tname}</span></a>
						</li>
						{/foreach}
					</ul>
				</div>
				
				<table 
					id="group-table"
					data-widget="nuiTable" 
					data-tree="true" style="margin-top:15px;">
					<thead>
						<tr>					
							<th width="300">用户组名</th>						
							<th width="80">ID</th>							
							<th class="hidden-xs hidden-sm">说明</th>
							<th width="30"></th>
						</tr>
					</thead>
					<tbody>
						{foreach $groups as $group}
						<tr data-parent="true" rel="{$group.group_id}" parent="{$group.upid}">	
							<td>
								<a href="#{'system/group/edit'|app:0}{$group.group_id}">
									{$group.group_name}
								</a>							
							</td>
							<td>{$group.group_refid}</td>							
							<td class="hidden-xs hidden-sm">{$group.note|escape}</td>
							<td class="text-right">
								{if $hasDusergroup}
								<a href="{'system/group/del'|app}{$group.group_id}" 
									class="btn btn-danger btn-xs"
									data-confirm="你真的要删除这个分组吗？"
									target="ajax"><i class="fa fa-trash-o"></i></a>
								{/if}
							</td>
						</tr>
						{/foreach}	
					</tbody>
				</table>			
			</div>
		</article>
	</div>
</section>