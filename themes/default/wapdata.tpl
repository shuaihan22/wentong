{strip}
{capture name=json_chunk assign=json_chunk}
	{$tag = str_replace(array('n_','a_'),'',$ARGS.tag)}
	{cts var=name from=mobiapp channel=$tag min_behot_time=$ARGS.min_behot_time max_behot_time=$ARGS.max_behot_time limit=$ARGS.count pp='off' loop='false'}{/cts}
	{foreach $name as $item}
	{if $item.type == '1'}
		<section data-id="{$item.items[0].id}" class="has_action" hot-time="{$item.items[0].time}">
            <a class="article_link clearfix" href="{'mobiapp/view'|app}{$item.items[0].id}">
                <h3 class="line3">{$item.items[0].title}</h3>                
                <div class="list_img_holder_large  list_img_holder_large_fix" style="background: transparent none repeat scroll 0% 0%;">
                    <img onload="loadimg.call(this)" onerror="errorimg.call(this)" src="{$item.items[0].img|media}"/>
                </div>
                <div class="item_info">
                    <span class="src  space">猫娱乐</span>
                    <span class="cmt"></span>
                    <span title="{$item.items[0].time|date_format:'Y-m-d H:i'}" class="time fr canhide"></span>
                </div>
            </a>
            <div class="line"></div>
        </section>
	{elseif $item.type == '4'}
		<section data-id="{$item.id}" class="has_action" hot-time="{$item.time}">
            <a class="article_link clearfix" href="{'mobiapp/view'|app}{$item.id}">
                <h3 class="line3">{$item.title}</h3>                
                <div class="list_img_holder_large  list_img_holder_large_fix" style="background: transparent none repeat scroll 0% 0%;">
                    <img onload="loadimg.call(this)" onerror="errorimg.call(this)" src="{$item.img|media}"/>
                </div>
                <div class="item_info">
                    <span class="src  space">猫娱乐</span>
                    <span class="cmt"></span>
                    <span title="{$item.time|date_format:'Y-m-d H:i'}" class="time fr canhide"></span>
                </div>
            </a>
            <div class="line"></div>
        </section>
	{elseif $item.type == '3'}
		<section data-id="{$item.id}" class=" has_action" hot-time="{$item.time}">
            <a class="article_link clearfix" href="{'mobiapp/view'|app}{$item.id}">                
                <h3 class="line3">{$item.title}</h3>                
                <div class="list_image">
                    <ul class="clearfix">                        
                        <li><div class="list_img_holder" style="background: transparent none repeat scroll 0% 0%;"><img onload="loadimg.call(this)" onerror="errorimg.call(this)" src="{$item.imgs[0]|media}"/></div></li>
                        <li><div class="list_img_holder" style="background: transparent none repeat scroll 0% 0%;"><img onload="loadimg.call(this)" onerror="errorimg.call(this)" src="{$item.imgs[1]|media}" /></div></li>
                        <li><div class="list_img_holder" style="background: transparent none repeat scroll 0% 0%;"><img onload="loadimg.call(this)" onerror="errorimg.call(this)" src="{$item.imgs[2]|media}" /></div></li>
                       </ul>
                </div>                
                <div class="item_info">
                    <span class="src  space">猫娱乐</span>
                    <span class="cmt"></span>
                    <span title="{$item.time|date_format:'Y-m-d H:i'}" class="time fr canhide"></span>
                </div>
            </a>
            <div class="line"></div>
        </section>
	{else}
		<section hot-time="{$item.time}" class="middle_mode has_action" data-id="{$item.id}">
            <a href="{'mobiapp/view'|app}{$item.id}" class="article_link clearfix">
                <div style="background: transparent none repeat scroll 0% 0%;" class="list_img_holder">
                    <img src="{$item.img|media}" onerror="errorimg.call(this)" onload="loadimg.call(this)"/>
                </div>
                <h3 class="line3">{$item.title}</h3>
                <div class="item_info">                    
                    <span class="src  space">猫娱乐</span>
                    <span class="cmt"></span>
                    <span class="time fr canhide" title="{$item.time|date_format:'Y-m-d H:i'}"></span>
                </div>
            </a>
            <div class="line"></div>
        </section>
	{/if}
	{/foreach}
{/capture}
{
"has_more": {if $name.hasMore}1{else}0{/if}, "return_count": {$name|count}, "html": {$json_chunk|trim|json_encode}, "page_id": "/{$ARGS.tag}/"
}
{/strip}