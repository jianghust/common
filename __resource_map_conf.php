<?php
/**
 * 资源配置表的初始化配置信息
 * 该配置文件为了兼容旧的系统而制作，在模块内的 __init.php 中没有调用 $this->initResourceMap 方法时，被框架默认加载以完成初始化
 * 请勿删除，慎重修改
 * @author niuyao 
 * @time   2012.05.10
 * 
 */
return array(
	'domain'		=> array(
		'static'		=> 'http://tc-testing-sandbox-forum05-vm.epc.baidu.com:8090/',
		'passport'	=> 'https://passport.baidu.com/',
	),
	'static_prefix'	=> 'static/static-',
);
