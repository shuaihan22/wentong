<?php
class AlbumInstaller extends AppInstaller {
	public function getVersionLists() {
		$v ['1.0.0'] = '20150810001';
		$v ['1.5.0'] = '20151110002';
		$v ['1.5.1'] = '20151127003';
		$v ['1.6.0'] = '20151127004';
		return $v;
	}
	public function getName() {
		return '相册';
	}
	public function getDscription() {
		return '为系统提供相册功能';
	}
	public function getWebsite() {
		return 'http://www.kisscms.cn/plugins/album';
	}
	public function getAuthor() {
		return '子明';
	}
	public function getDependences() {
		return array ('cms' => '[3.0.0,)' );
	}
	public function onInstall($dialect) {
		$model = new AlbumContentModel ();
		$rst = $model->install ( $dialect );
		return true;
	}
	public function uninstall() {
		$model = new AlbumContentModel ();
		$models [] = 'album';
		if (! $model->uninstall ( $models )) {
			return false;
		}
		return parent::uninstall ();
	}
}