<?php
/**
 * Smarty视图
 *
 * 通过Smarty模板引擎绘制视图。
 *
 * @author Leo Ning <leo.ning@like18.com> 2010-11-14 12:25
 * @version 1.0
 * @since 1.0
 * @copyright 2008-2011 LIKE18 INC.
 * @package view
 */
class SmartyView extends View {
	private $is_in_layout = false;
	/**
	 *
	 * @var Smarty Smarty
	 */
	private $__smarty;
	public function __construct($data = array(), $tpl = '', $headers = array('Content-Type'=>'text/html')) {
		if (! isset ( $headers ['Content-Type'] )) {
			$headers ['Content-Type'] = 'text/html';
		}
		parent::__construct ( $data, $tpl, $headers );
	}
	/**
	 * 是否嵌入layout View.
	 * @param mixed $in
	 * @return bool true 嵌入.
	 */
	public function isInLayout($in=null){
		if(!is_null($in)){
			$this->is_in_layout = $in;
		}
		return $this->is_in_layout;
	}
	/**
	 * 绘制
	 */
	public function render() {
		if ($this->relatedPath) {
			$this->tpl = $this->relatedPath . $this->tpl;
		}
		$tpl = MODULES_PATH . $this->tpl;
		$devMod = bcfg ( 'develop_mode' );
		if (is_file ( $tpl )) {
			$this->__smarty = new Smarty ();
			$this->__smarty->addPluginsDir ( INCLUDES . 'vendors/smarty/user_plugins' );
			$this->__smarty->template_dir = MODULES_PATH; // 模板目录
			$tpl = str_replace ( DS, '/', $this->tpl );
			$tpl = explode ( '/', $tpl );
			array_pop ( $tpl );
			$sub = implode ( DS, $tpl );
			$this->__smarty->compile_dir = TMP_PATH . '#tpls_c' . DS . $sub; // 模板编译目录
			$this->__smarty->cache_dir = TMP_PATH . '#tpls_cache' . DS . $sub; // 模板缓存目录
			$this->__smarty = apply_filter ( 'init_smarty_engine', $this->__smarty );
			$this->__smarty = apply_filter ( 'init_view_smarty_engine', $this->__smarty );
			$this->__smarty->compile_check = true;
			$this->__smarty->_dir_perms = 0755;
			if (bcfg ( 'develop_mode' )) {
				$this->__smarty->compile_check = true;
			} else {
				$this->__smarty->compile_check = false;
			}
			if ($devMod) {
				$this->__smarty->caching = false;
			}
			$this->__smarty->error_reporting = KS_ERROR_REPORT_LEVEL;
		} else {
			if ($devMod) {
				die ( 'The view template ' . $tpl . ' is not found' );
			}
			trigger_error ( 'The view template ' . $tpl . ' is not found', E_USER_ERROR );
		}
		$tplname = str_replace ( array ('/',DS ), '_', substr ( $this->tpl, 0, - 4 ) );
		$this->data = apply_filter ( $tplname . '_data', $this->data );
		$this->__smarty->assign ( $this->data ); // 变量
		$this->__smarty->assign ( '_css_files', $this->sytles );
		$this->__smarty->assign ( '_js_files', $this->scripts );
		$this->__smarty->assign ( '_SessionName', get_session_name () );
		$this->__smarty->assign ( '_SessionID', session_id () );
		$this->__smarty->assign ( '_current_template_file', $this->tpl );
		return $this->__smarty->fetch ( $this->tpl );
	}
}