<?php
return array(

	//RBAC权限管理相关配置
	'RBAC_SUPERADMIN' => 'admin',			//超级管理员名称
	'ADMIN_AUTH_KEY' => 'superadmin',		//超级管理员识别
	'USER_AUTH_ON' => true,					//是否开启验证
	'USER_AUTH_TYPE' => 1,					//验证类型（1：登录识别，2：时时识别）
	'USER_AUTH_KEY' => 'uid',				//用户认证识别号
	'NOT_AUTH_MODULE' => 'Index',				//无需认证的控制器
	'NOT_AUTH_ACTION' => 'status,runAddBlog,addInfoHandle,addCateHandle,upload,delPic,updateCate,updateMail,updateMailHandle,addLink,linkHandle,linkSort,delLink,addBanner,addBannerHandle,updateBanner,updateBannerHandle,delBanner,sortBanner,addRoll,addRollHandle,updateRoll,updateRollHandle,delRoll,sortRoll,searchHandle,addUserHandle,savePassHandle,addRoleHandle,blogList,updateBlog,updateBlogHandle,delBlog',				//无需认证的动作方法
	'RBAC_ROLE_TABLE' => 'tp_role',			//角色表名称
	'RBAC_USER_TABLE' => 'tp_role_user',	//角色与用户的中间表名称
	'RBAC_ACCESS_TABLE' => 'tp_access',		//权限表名称
	'RBAC_NODE_TABLE' => 'tp_node',			//节点表名称




	//'配置项'=>'配置值'
	'TMPL_PARSE_STRING'=>array(
		'__CSS__'=>__ROOT__.'/Application/Admin/View/Public/Css',
		'__JS__'=>__ROOT__.'/Application/Admin/View/Public/Js',
		'__IMG__'=>__ROOT__.'/Application/Admin/View/Public/images',
	),



	//指定错误，成功页面的模板
	'TMPL_ACTION_SUCCESS'=>'Public:jump',
	'TMPL_ACTION_ERROR'=>'Public:jump',

);
