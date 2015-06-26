<?
/**
 * 无线智能版页面的HTML骨架
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
        	'template_name'     => 'pb',//模板名称
		'page_perf_param'         => array(//性能采集相关参数
    		'open_perf_script'	=> false, 	性能监控开关
		),
		'resource_load'              => array(//模块资源加载相关,主要是为了做兼容,减少js数量
		    'page_css'      => true,//默认加载模块页面的css
		    'page_js'       => true,//默认加载模块页面的js
		),

	 );
*/


/*性能脚本开关*/
if(!isset($page_perf_param)){
	$open_perf_script = false;
}else{
    $open_perf_script = $page_perf_param['open_perf_script'];
}
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

/*获取helper和全局变量，不用每次调用layout的时候都传递，此种hack方式不准在其他地方用！！！！！！！*/
$_view = Bingo_Page::getView()->getScript();
$helper = Bingo_Page::getView()->getScript()->getObjHelper();
$base = $_view->g('base');
$wreq = $_view->g('wreq');
$user = $_view->g('user');
?>

<!DOCTYPE HTML>
<html>
<!--STATUS OK-->
<head>
<meta charset="utf-8">
<meta content="width=device-width,initial-scale=1,user-scalable=no" name="viewport">
<meta name="format-detection" content="telephone=no" >
<title><?= $title ?></title>
<? /* Add to homescreen for iOS */ ?>
<meta name="apple-mobile-web-app-capable" content="yes">
<? /* Add to homescreen for Chrome on Android */ ?>
<? if (!($wreq['client']['os']['family'] === 'Android' && $wreq['client']['browser']['family'] === 'QQ Browser Mobile')) { /* QQ浏览器安卓对这个meta有诡异的处理 */ ?>
<meta name="mobile-web-app-capable" content="yes">
<? } ?>
<? /* iOS icons */ ?>
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="icon/apple-touch-icon-144x144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="icon/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="icon/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="icon/apple-touch-icon-57x57-precomposed.png">
<? /* Generic Icon */ ?>
<link rel="shortcut icon" href="icon/touch-icon-57x57.png">
<? /* Chrome Add to Homescreen */ ?>
<link rel="shortcut icon" sizes="196x196" href="icon/touch-icon-196x196.png">
<?if ($open_perf_script) {?>
<script>void function(g,f,j,c,h,d,b){g.alogObjectName=h,g[h]=g[h]||function(){(g[h].q=g[h].q||[]).push(arguments)},g[h].l=g[h].l||+new Date,d=f.createElement(j),d.async=!0,d.src=c,b=f.getElementsByTagName(j)[0],b.parentNode.insertBefore(d,b)}(window,document,"script","http://img.baidu.com/hunter/alog/alog.mobile.min.js","alog");void function(){function c(){return;}window.PDC={mark:function(a,b){alog("speed.set",a,b||+new Date);alog.fire&&alog.fire("mark")},init:function(a){alog("speed.set","options",a)},view_start:c,tti:c,page_ready:c}}();void function(n){var o=!1;n.onerror=function(n,e,t,c){var i=!0;return!e&&/^script error/i.test(n)&&(o?i=!1:o=!0),i&&alog("exception.send","exception",{msg:n,js:e,ln:t,col:c}),!1},alog("exception.on","catch",function(n){alog("exception.send","exception",{msg:n.msg,js:n.path,ln:n.ln,method:n.method,flag:"catch"})})}(window);</script>
<?}?>

<?= HTML::css('style/common.css', 'sglobal') ?>
<?if ($resource_load['page_css']) {
	echo HTML::getCss();
}?>
<?= isset($head) ? $head : '' ?>

<?if($open_perf_script){?>
	<script> alog('speed.set', 'ht', +new Date);</script>
<?}?>
<?if($wreq['isLightApp']){?>
<script name="baidu-tc-cerfication" type="text/javascript" charset="utf-8" src="http://apps.bdimg.com/cloudaapi/lightapp.js#5a0b51bb3d8814b2a37d119e583b6d9b"></script>
<script type="text/javascript">window.bd && bd._qdc && bd._qdc.init({app_id: 'd7589b03ceffc0cb4405cdb5'});</script>
<?}?>
</head>
<? /* 请勿在此输出内容，</head>与<body>之间出现任何代码都是不合法的 */ ?>
<body class="ue_revision">
<?
/* 加载无图模式适配 */
$__widget__->load('pic_free_mode_adapter', array(), 'sglobal');
?>
<?= $content;/*内容区*/?>

<?if($open_perf_script){?>
<script>void function(e,t){for(var n=t.getElementsByTagName("img"),a=+new Date,i=[],o=function(){this.removeEventListener&&this.removeEventListener("load",o,!1),i.push({img:this,time:+new Date})},s=0;s< n.length;s++)!function(){var e=n[s];e.addEventListener?!e.complete&&e.addEventListener("load",o,!1):e.attachEvent&&e.attachEvent("onreadystatechange",function(){"complete"==e.readyState&&o.call(e,o)})}();alog("speed.set",{fsItems:i,fs:a})}(window,document);</script>
<?}?>

<?= HTML::combojs(array('sglobal/lib/lib.js', 'sglobal/lib/extend.js'));?>
<script>
    (function(F){var _JSSTAMP = <?= HTML::getJsStamp() ?>;
        F.tbConfig(_JSSTAMP);
    })(F);
</script>
<? $__widget__->load('page_data', array(), 'sglobal'); ?>
<script>$.netType.init("<?=_j($wreq['net_type'])?>");</script>
<script>$.client = <?= json($wreq['client']) ?>;</script>
<?= HTML::js('lib/common.js', 'sglobal');?>
<?
$__widget__->load('mark_err', array(
    'wreq' => $wreq,
    'helper' => $helper,
    'template_name' => $template_name
), 'sglobal');
?>
<?/*轻应用加载clouda和新的登录浮层*/?>
<?
$__component__->load('login_layer', array(), 'sglobal');

//调起组件端口配置，因为页面配置平台不支持component才这样写，以后可以删除
$__widget__->load('app_starter_conf', array(), 'sglobal');

if($wreq['isLightApp']){
    $__widget__->load('clouda_push', array(), 'sglobal');
}
?>

<?= HTML::getScript('important'); ?>
<?if($resource_load['page_js']){?>
	<?= HTML::getJs(); ?>
<?}?>
<?= isset($after_body) ? $after_body : '' ?>
<?= HTML::getPageUnitData(); ?>
<?= HTML::getScript('normal'); ?>
<?= HTML::getScript('optional'); ?>
<script>
    UserAccount.init({
        open_third_login:<?= (int)CONF('open_third_login','cms_control');?>,
        isNative:<?=(int)_j($wreq["_client_version"])?>
    })
</script>

<?if($open_perf_script){?>
<script>
	void function(e,t,n,a,r,o){function c(t){e.attachEvent?e.attachEvent("onload",t,!1):e.addEventListener&&e.addEventListener("load",t)}function i(e,n,a){a=a||15;var r=new Date;r.setTime((new Date).getTime()+1e3*a),t.cookie=e+"="+escape(n)+";path=/;expires="+r.toGMTString()}function s(e){var n=t.cookie.match(new RegExp("(^| )"+e+"=([^;]*)(;|$)"));return null!=n?unescape(n[2]):null}function d(){var e=s("PMS_JT");if(e){i("PMS_JT","",-1);try{e=eval(e)}catch(n){e={}}e.r&&t.referrer.replace(/#.*/,"")!=e.r||alog("speed.set","wt",e.s)}}c(function(){alog("speed.set","lt",+new Date),r=t.createElement(n),r.async=!0,r.src=a+"?v="+~(new Date/864e5),o=t.getElementsByTagName(n)[0],o.parentNode.insertBefore(r,o)}),d()}(window,document,"script","http://img.baidu.com/hunter/alog/dp.mobile.min.js");
</script>
<?}?>

<?
    if($wreq['showfps'] == 'on'){
        echo HTML::js('js/fps.js','sglobal');
    }
?>

</body>
</html>
