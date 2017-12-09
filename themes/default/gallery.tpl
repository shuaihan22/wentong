{
	"id":"{$id}",
	"comments":"987",
	"count":"{$tuku_images|count}",
	"title":{$title|json_encode},
	"desc":{$description|json_encode},	
	"items":[{foreach $tuku_images as $c}
		{ "img":"{$c.url|media}","desc":{$c.desc|json_encode} }{if !$c@last},{/if}
		{/foreach}]}