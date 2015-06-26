/**
 * @desc FIS2.0编译脚本配置
 * @date 2013-12-18
 */

//设置编译文件的配置信息
fis.config.set('fisConfig', {
	//设置哪些个地方用了新框架的内容
	//newFrameReg : /\/widget\/.*\.php$/i,
	//设置静态资源发布的短路径,PC的是'/tb/_/',无线的请改为'/tb/mobile'
	shortPath : '/static/_/',
	//设置静态文件前缀,PC的是'static-',无线的是'mobile/'
	staticPrefix : 'static-'
});
 
//配置要合并的代码，即之前的__merge_conf.php配置的内容
fis.config.merge({
	pack : {
		/*'widget/admin/admin.js' : [ //不能与包含的文件名字相同哦
			'widget/admin/threadManage.js',
			'widget/admin/admin_main.js', //原来这个文件名是admin.js,在fis编译里需要修改一下文件名称
		]*/
		'static/lib/erplib.js':[
			'static/lib/jquery/dist/jquery.min.js',
			'static/lib/angular/angular.js',
			'static/lib/angular-animate/angular-animate.js',
			'static/lib/angular-cookies/angular-cookies.js',
			'static/lib/angular-resource/angular-resource.js',
			'static/lib/angular-sanitize/angular-sanitize.js',
			'static/lib/angular-touch/angular-touch.js',
			'static/lib/angular-ui-router/release/angular-ui-router.js',
			'static/lib/ngstorage/ngStorage.js',
			'static/lib/angular-ui-utils/ui-utils.js',
			'static/lib/angular-bootstrap/ui-bootstrap-tpls.js',
			'static/lib/oclazyload/dist/ocLazyLoad.js',
			'static/lib/angular-translate/angular-translate.js',
			'static/lib/angular-translate-loader-static-files/angular-translate-loader-static-files.js',
			'static/lib/angular-translate-storage-cookie/angular-translate-storage-cookie.js',
			'static/lib/angular-translate-storage-local/angular-translate-storage-local.js',
		],
		'static/lib/erplib.css':[
			'static/lib/bootstrap/dist/css/bootstrap.css',
			'static/lib/animate.css/animate.css',
			'static/lib/font-awesome/css/font-awesome.css',
			'static/lib/simple-line-icons/css/simple-line-icons.css',
		],
		'static/lib/erpcommon.js':[
		
		],
		'static/lib/erpcommon.css':[
		
		]
	}
});

/*
fis.config.merge({
	project:{include:'template/**'}
});
*/
//fis.project.setProjectRoot(fis.project.getProjectPath() + '/template');

require('./_build/fis2/fis-conf-base.js');
