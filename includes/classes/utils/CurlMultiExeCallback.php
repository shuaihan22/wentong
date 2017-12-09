<?php
/**
 * 多Channel调用回调接口.
 * 
 * @author 子明.
 *
 */
interface CurlMultiExeCallback {
	/**
	 * 在执行请求前调用，如果返回false则放弃本次请求.
	 *
	 * @param string $index
	 *        	标识.
	 * @param resource $curl
	 *        	完成本次请求的curl channel.
	 * @param mixed $cdata
	 *        	用户自定义数据.
	 * @return bool 如果返回false则放弃本次请求.
	 */
	function onStart($index, $curl, $cdata);
	/**
	 * 请求出错回调.可以返回任何业务数据.
	 *
	 * @param string $index
	 *        	标识.
	 * @param resource $curl
	 *        	执行本次请求的curl channel.
	 * @param mixed $cdata
	 *        	用户自定义数据.
	 * @return mixed 任何业务数据.
	 */
	function onError($index, $curl, $cdata);
	/**
	 * 请求完成回调，可以返回任何业务数据.
	 *
	 * @param string $index
	 *        	标识.
	 * @param string $data
	 *        	网络返回的数据.
	 * @param resource $curl
	 *        	完成本次请求的curl channel.
	 * @param mixed $cdata
	 *        	用户自定义数据.
	 * @return mixed 任何业务数据.
	 */
	function onFinish($index, $data, $curl, $cdata);
}
