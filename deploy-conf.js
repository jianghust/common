/**
 * 部署配置信息
 */

module.exports = {
	//部署机器的HOST
//	'host': 'cq01-forum-rdtest20.vm.baidu.com',
	'host': 'tc-testing-sandbox-forum05-vm.epc.baidu.com',
	//'host': 'fe.tieba.baidu.com',
	'modName': 'common',
	//静态端口
	'staticPort': 8090,
	//页面访问端口
	'modPort': 8080,
	//静态文件部署路径
	'staticPath': '/home/work/static/static.tieba.baidu.com',
	//模版文件部署路径
	'modPath': '/home/work/',
	//模板在模块中的位置
//	'tplPath': 'template/',
};

