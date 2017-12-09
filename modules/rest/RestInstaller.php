<?php
class RestInstaller extends AppInstaller {
	public function getAuthor() {
		return '子明';
	}
	public function getDscription() {
		return 'RESTful WEB Service 服务端与客户端库.';
	}
	public function getName() {
		return 'RESTful服务';
	}
	public function getWebsite() {
		return 'http://www.kissgo.org/';
	}
	public function getVersionLists() {
		$v ['0.0.1'] = '20140730001';
		$v ['0.0.2'] = '201408080001';
		$v ['1.0.0'] = '201411140001';
		$v ['2.0.0'] = '201412080002';
		$v ['2.1.0'] = '201502070003';
		return $v;
	}	
}
?>