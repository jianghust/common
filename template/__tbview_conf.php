<?php
/**
 * view配置信息
 * 
 * @author niuyao
 * @date 2012.12.23
 */
return array(
	'DEBUG' => false, //是否debug模式，默认为 false
	'COMMON_DIRNAME' => 'common',//common 域的目录名，默认为 common，无线的为 sglobal
	'DYNAMIC_MERGE' => false, // 是否使用静态文件服务器端合并，默认为关闭，如果开启，则不会加载模板的__page__资源，会将所依赖的文件动态进行合并
	'TERMINAL_DIF' => false,  // 是否使用差异化， 默认关闭，无线需求针对不同机型加载不同模块的静态资源
);
