<?
/**
 * erp 系统的骨架
 *
 * 功能：
 * 1. 将 body 区域的发挥余地交给页面全部控制
 * 2. 引入通用逻辑及基础库
 * 3. 集成页面所需js和css自动加载的功能
 *
 * 包含的 block：$title $head $content $after_body（页面尾部内容）
 * layout 自身需要的数据
     $data = array(
            'has_client_meta'   => true,//是否有调用客户端的meta
            'resource_load'              => array(//模块资源加载相关,主要是为了做兼容,减少js数量
                'page_css'      => true,//默认加载模块页面的css
                'page_js'       => true,//默认加载模块页面的js
            ),
     );
*/


/*资源加载开关*/
if(!isset($resource_load)){
    $resource_load = array(
        'page_css'      => true,/*默认加载模块页面的css*/
        'page_js'       => true,/*默认加载模块页面的js*/
    );
}else{
    $resource_load = array(
        'page_css'      => isset($resource_load['page_css'])?$resource_load['page_css']:true,
        'page_js'       => isset($resource_load['page_js'])?$resource_load['page_js']:true,
    );
}
?>

<!DOCTYPE HTML>
<html data-ng-app="app">
    <!--STATUS OK-->
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width,initial-scale=1,user-scalable=no" name="viewport">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="format-detection" content="telephone=no" >
        <title><?= $title ?></title>
        <?
            /*
            echo HTML::css('lib/erplib.css', 'common');
            echo HTML::js('lib/erpcommon.js','common');
            */
        ?>
		<?= HTML::css('erp/css/lib.css','common');?>
		<?= HTML::css('erp/css/common.css','common');?>
        <?if ($resource_load['page_css']) {
            echo HTML::getCss();
        }?>
        <?= isset($head) ? $head : '' ?>
    </head>
    <? /* 请勿在此输出内容，</head>与<body>之间出现任何代码都是不合法的 */ ?>
	<body ng-controller="AppCtrl">
	  <div class="app" id="app" ng-class="{'app-header-fixed':app.settings.headerFixed, 'app-aside-fixed':app.settings.asideFixed, 'app-aside-folded':app.settings.asideFolded, 'app-aside-dock':app.settings.asideDock, 'container':app.settings.container}">
        <?= $content;/*内容区*/?>
	  </div>
        <?
            /*
            echo HTML::js('lib/erplib.js', 'common');
            echo HTML::js('lib/erpcommon.js','common');
            echo HTML::getScript('important'); 
            */
        ?>
    </body>
		<?= HTML::js('erp/js/lib.js','common');?>
		<?= HTML::js('erp/js/common.js','common');?>
        <?if($resource_load['page_js']){?>
            <?= HTML::getJs(); ?>
        <?}?>
        <?= isset($after_body) ? $after_body : '' ?>
        <?= HTML::getScript('normal'); ?>
        <?= HTML::getScript('optional'); ?>
</html>
