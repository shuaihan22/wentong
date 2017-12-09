<?php
define ( 'WEB_ROOT', dirname ( dirname ( __FILE__ ) ) . DIRECTORY_SEPARATOR );
include_once WEB_ROOT . 'bootstrap.php';

$wp = DatabaseDialect::getDialect ( 'wp' );
// first import channel
function importChannel() {
	global $wp;
	
	$cates = dbselect ( 'WT.name,WT.slug,WT.term_id,WTT.parent,WTT.term_taxonomy_id' )->from ( 'wp_terms AS WT' )->join ( 'wp_term_taxonomy AS WTT', 'WT.term_id = WTT.term_id' )->where ( [ 'WTT.taxonomy' => 'category' ] )->setDialect ( $wp )->toArray ();
	foreach ( $cates as $chx ) {
		$ch ['id'] = $chx ['term_taxonomy_id'];
		$ch ['is_topic_channel'] = 0;
		$ch ['list_page'] = 0;
		$ch ['index_page'] = 0;
		$ch ['upid'] = $chx ['parent'];
		$ch ['path'] = $chx ['slug'];
		$ch ['default_model'] = 'news';
		$ch ['name'] = $chx ['name'];
		$ch ['refid'] = $chx ['slug'];
		$ch ['basedir'] = $chx ['slug'];
		$ch ['isfinal'] = 1;
		$ch ['default_page'] = 0;
		$ch ['default_template'] = 'article.tpl';
		$ch ['default_url_pattern'] = '{aid}.html';
		$ch ['page_name'] = 'index.html';
		$index_page_tpl = 'category.tpl';
		$list_page_tpl = 'category.tpl';
		$list_page_url = '{typedir}/list.html';
		
		$ch ['title'] = $chx ['name'];
		$ch ['keywords'] = $chx ['name'];
		$ch ['description'] = $chx ['name'];
		if (! addChannel ( $ch, $index_page_tpl, $list_page_tpl, $list_page_url )) {
			ActivityLog::warn ( '无法导入栏目:' . $ch ['name'] . '(' . $ch ['id'] . ')' );
			return false;
		}
	}
	updateChannelSubch ();
}
function importArticle() {
	global $wp;
	dbdelete ()->from ( '{cms_channel}' )->exec ();
	dbdelete ()->from ( '{cms_page}' )->exec ();
	$pageID = [ ];
	$i = 0;
	$limit = 100;
	while ( true ) {
		$pages = dbselect ( 'WP.*,WT.slug' )->from ( 'wp_posts AS WP' )->join ( 'wp_term_relationships AS WTR', 'WP.ID = WTR.object_id' );
		$pages->join ( 'wp_term_taxonomy AS WTT', 'WTR.term_taxonomy_id = WTT.term_taxonomy_id' );
		$pages->join ( 'wp_terms AS WT', 'WT.term_id = WTT.term_id' );
		$pages->where ( [ 'post_type' => 'post','WTT.taxonomy' => 'category' ] );
		$pages->asc ( 'ID' );
		$pages->limit ( $i * $limit, $limit )->setDialect ( $wp );
		$ps = $pages->toArray ();
		if (! $ps) {
			break;
		}
		$datas = array ();
		foreach ( $ps as $page ) {
			$data = array ();
			if (isset ( $pageID [$page ['ID']] )) {
				continue;
			}
			$pageID [$page ['ID']] = 1;
			$url = $page ['ID'] . '.html';
			$data ['channel'] = $page ['slug'];
			$data ['title'] = $page ['post_title'];
			if (empty ( $data ['title'] )) {
				continue;
			}
			$data ['url'] = $url;
			$data ['url_key'] = md5 ( $url );
			$data ['id'] = $page ['ID'];
			$data ['model'] = 'news';
			$img = dbselect ()->from ( 'wp_posts' )->where ( [ 'post_parent' => $page ['ID'],'post_type' => 'attachment','post_mime_type LIKE' => 'image/%' ] )->asc ( 'ID' )->setDialect ( $wp )->get ( 'guid' );
			if ($img) {
				$data ['image'] = str_replace ( array ('http://www.minzuzhihun.com/wp-content/','http://www.msmmjt.com/wp-content/','http://www.msmmjt.com/' ), '', $img );
			} else {
				$data ['image'] = '';
			}
			$data ['tag'] = $data ['keywords'] = getTag ( $page ['ID'] );
			if ($data ['keywords']) {
				$keys = explode ( ',', $data ['keywords'] );
				$k = get_keywords ( $data ['keywords'] );
				$data ['search_index'] = $k [1];
				$data ['tag'] = $keys [0];
			}
			$data ['content'] = str_replace ( array ('src="http://www.minzuzhihun.com/wp-content','src="http://www.msmmjt.com/wp-content','src="http://www.msmmjt.com' ), 'src="', $page ['post_content'] );
			if (empty ( $data ['image'] )) {
				if (preg_match_all ( '/<img\s+.*src\s*=\s*[\'"]([^\'"]+)[\'"].*/i', $data ['content'], $ms )) {
					$data ['image'] = ltrim ( $ms [1] [0], '/' );
				}
			}
			$content = preg_replace ( '#<[^>]+>#ms', '', $data ['content'] );
			$content = preg_replace ( '#&.+?;#', '', $content );
			$content = preg_replace ( '#[\s　]+#u', '', $content );
			if (function_exists ( 'mb_substr' )) {
				$data ['description'] = trim ( mb_substr ( $content, 0, 100 ) );
			} else {
				$data ['description'] = trim ( substr ( $content, 0, 200 ) );
			} 
			$data ['create_time'] = strtotime ( $page ['post_date'] );
			$data ['update_time'] = strtotime ( $page ['post_modified'] );
			$data ['create_uid'] = 1;
			$data ['update_uid'] = 1;
			$data ['allow_comment'] = 1;
			$data ['view_count'] = rand ( 80000, 168092 );
			$datas [] = $data;
		}
		if ($datas) {
			dbinsert ( $datas, true )->into ( '{cms_page}' )->exec ();
		}
		unset ( $datas );
		$i ++;
	}
}
function importPage() {
}
function addChannel($ch, $index_page_tpl, $list_page_tpl, $list_page_url) {
	$time = time ();
	$uid = 1;
	$ch ['update_uid'] = $uid;
	$ch ['update_time'] = $time;
	$ch ['url'] = $ch ['basedir'] . '/' . $ch ['page_name'];
	$urlkey = md5 ( $ch ['url'] );
	if (dbselect ( 'id' )->from ( '{cms_page}' )->where ( array ('url_key' => $urlkey,'id !=' => $ch ['index_page'] ) )->exist ()) {
		ActivityLog::warn ( 'url重复:' . $ch ['url'] );
		return false;
	}
	// 过后需要重新生成列表页的URL
	$ch ['list_page_url'] = $list_page_url;
	$ch ['create_uid'] = $uid;
	$ch ['create_time'] = $time;
	$rst = dbinsert ( $ch )->into ( '{cms_channel}' )->exec ();
	if ($rst) {
		$id = $ch ['id'];
		dbupdate ( '{cms_channel}' )->set ( array ('subchannels' => $id ) )->where ( array ('id' => $id ) )->exec ();
	}
	
	if ($rst) {
		$channel = dbselect ( '*' )->from ( '{cms_channel}' )->where ( array ('id' => $id ) )->get ( 0 );
		$arg = array ('tid' => $id,'trid' => $channel ['refid'],'model' => $channel ['default_model'],'create_time' => $channel ['create_time'],'name' => $channel ['name'],'path' => $channel ['path'],'basedir' => $channel ['basedir'],'page' => 1 );
		$list_url = parse_page_url ( $ch ['list_page_url'], $arg );
		if (dbselect ( 'id' )->from ( '{cms_page}' )->where ( array ('url_key' => md5 ( $list_url ),'id !=' => $ch ['list_page'] ) )->exist ()) {
			ActivityLog::warn ( 'list url重复:' . $list_url );
			return false;
		}
		dbupdate ( '{cms_channel}' )->set ( array ('list_page_url' => $list_url ) )->where ( array ('id' => $id ) )->exec ();
		$channel ['list_page_url'] = $list_url;
		CmsPage::updateChannelPage ( $channel, $index_page_tpl, $list_page_tpl, $list_page_url );
	}
	if ($rst) {
		return true;
	} else {
		return false;
	}
}
function updateChannelSubch() {
	// 取所有组数据
	$channels = dbselect ( 'upid,id,refid' )->from ( '{cms_channel}' )->toArray ();
	// 遍历树形数据
	$iterator = new TreeIterator ( $channels, 0, 'id', 'upid' );
	$nodes = $iterator->getNodes ();
	// 更新它们的subchannels
	foreach ( $nodes as $nid => $node ) {
		$ids = implode ( ',', $node->getSubIds () );
		$parents = $node->getParentsIdList ( 'refid' );
		if ($parents) {
			$len = count ( $parents ) - 1;
			$root = $parents [$len];
			$parents = implode ( ',', $parents );
		} else {
			$data = $node->getData ();
			$root = $data ['refid'];
			$parents = '';
		}
		dbupdate ( '{cms_channel}' )->set ( array ('parents' => $parents,'root' => $root,'subchannels' => $ids ) )->where ( array ('id' => $nid ) )->exec ();
	}
}
function getTag($pid) {
	global $wp;
	$tags = dbselect ( 'name' )->from ( 'wp_term_relationships AS WTR' )->join ( 'wp_term_taxonomy AS WTT', 'WTR.term_taxonomy_id = WTT.term_taxonomy_id' );
	$tags->join ( 'wp_terms AS WT', 'WTT.term_id = WT.term_id' );
	$tags->setDialect ( $wp );
	$tags->where ( [ 'WTT.taxonomy' => 'post_tag','WTR.object_id' => $pid ] );
	$tag = $tags->toArray ( 'name' );
	if ($tag) {
		$tag = implode ( ',', $tag );
	} else {
		$tag = '';
	}
	return $tag;
}

importArticle ();

importChannel ();