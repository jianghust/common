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
		<?= HTML::css('lib/bootstrap/dist/css/bootstrap.css','common');?>
		<?= HTML::css('lib/animate.css/animate.css','common');?>
		<?= HTML::css('lib/angular-ui-grid/ui-grid.min.css','common');?>
		<?= HTML::css('lib/angular-ui-grid/ui-grid.bootstrap.css','common');?>
		<?= HTML::css('lib/font-awesome/css/font-awesome.css','common');?>
		<?= HTML::css('lib/simple-line-icons/css/simple-line-icons.css','common')?>
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

        <?= HTML::js('lib/jquery/dist/jquery.min.js', 'common');?>
        <?= HTML::js('lib/angular/angular.js', 'common');?>
		<?= HTML::js('lib/angular-ui-grid/ui-grid.min.js','common');?>
        <?= HTML::js('lib/angular-animate/angular-animate.js', 'common');?>
        <?= HTML::js('lib/angular-cookies/angular-cookies.js', 'common');?>
        <?= HTML::js('lib/angular-resource/angular-resource.js', 'common');?>
        <?= HTML::js('lib/angular-sanitize/angular-sanitize.js', 'common');?>
        <?= HTML::js('lib/angular-touch/angular-touch.js', 'common');?>
        <?= HTML::js('lib/angular-ui-router/release/angular-ui-router.js', 'common');?>
        <?= HTML::js('lib/ngstorage/ngStorage.js', 'common');?>
        <?= HTML::js('lib/angular-ui-utils/ui-utils.js', 'common');?>
        <?= HTML::js('lib/angular-bootstrap/ui-bootstrap-tpls.js', 'common');?>
        <?= HTML::js('lib/oclazyload/dist/ocLazyLoad.js', 'common');?>
        <?= HTML::js('lib/angular-translate/angular-translate.js', 'common');?>
        <?= HTML::js('lib/angular-translate-loader-static-files/angular-translate-loader-static-files.js', 'common');?>
        <?= HTML::js('lib/angular-translate-storage-cookie/angular-translate-storage-cookie.js', 'common');?>
        <?= HTML::js('lib/angular-translate-storage-local/angular-translate-storage-local.js', 'common');?>
        <?if($resource_load['page_js']){?>
            <?= HTML::getJs(); ?>
        <?}?>
        <?= isset($after_body) ? $after_body : '' ?>
        <?= HTML::getScript('normal'); ?>
        <?= HTML::getScript('optional'); ?>
</html>
