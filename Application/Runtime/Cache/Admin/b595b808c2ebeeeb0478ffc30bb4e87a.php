<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <base target="iframe"/>
    <title>后台管理中心</title>
    <script type="text/javascript" src="/web/marx/Application/Admin/View/Public/Js/index.js"></script>
    <script type="text/javascript" src="/web/marx/Application/Admin/View/Public/Js/jquery-1.7.2.min.js"></script>
    <link rel="stylesheet" href="/web/marx/Application/Admin/View/Public/Css/bootstrap.min.css" >
    <link rel="stylesheet" href="/web/marx/Application/Admin/View/Public/Css/style.css" >
 	<link rel="stylesheet" href="/web/marx/Application/Admin/View/Public/Css/index.css" >
  </head>
  <body>
  	<div id='body' >
  		<div id="top">
  			<!--<img src="/web/marx/Application/Admin/View/Public/images/title.gif">-->
			<div id="logout">

  				<ul>
  					<li>
  						<a href="/web/marx/" target="_self">
  							<span class="icon icon1 icon-home3"></span>
  							<span>返回主页</span>
  						</a>	
  					</li>
  					<li>
  						<a href="/web/marx/index.php/Admin/Index/savePass">
  							<span class="icon icon2 icon-unlocked"></span>
  							<span>修改密码</span>
  						</a>
  					</li>
  					<li>
  						<a href="/web/marx/index.php/Admin/Index/logout" target="_self">
  							<span class="icon icon3 icon-switch"></span>
  							<span>退出系统</span>
  						</a>
  					</li>
  				</ul>
  			</div>
  		</div>
  		<div id='content'>
  			<div id="con_top">
  				<span class='icon-user2'>&nbsp;当前用户：<?php echo ($_SESSION['username']); ?></span>
  				<span>登录时间：<?php echo ($_SESSION['logintime']); ?></span>
  			</div>
  			<div id="con_left" >
  				<div id="nav">
  					管理菜单
  				</div>
  				<div id="nav_list">
          <input type="hidden" name="flag" value="none">
  				
          <dl>
						<dt><span class='icon-menu3'></span>&nbsp;&nbsp;文章管理</dt>
						<div>
							<a href="/web/marx/index.php/Admin/Blog/index"><dd><span class='icon-file-text'></span>&nbsp;&nbsp;文章列表</dd></a>
							<a href="/web/marx/index.php/Admin/Blog/infoList"><dd><span class='icon-file-text'></span>&nbsp;&nbsp;简介文章</dd></a>
							<a href="/web/marx/index.php/Admin/Blog/trach"><dd><span class='icon-bin'></span>&nbsp;&nbsp;回&nbsp;&nbsp;收&nbsp;&nbsp;站</dd></a>
						</div>
					
					</dl>
					<!-- <dl>
            <dt><span class='icon-menu3'></span>&nbsp;&nbsp;属性管理</dt>
            <div>
              <a href="/web/marx/index.php/Admin/Attribute/index"><dd><span class='icon-file-text'></span>&nbsp;&nbsp;属性列表</dd></a>
              <a href="/web/marx/index.php/Admin/Attribute/addAttr"><dd><span class='icon-plus'></span>&nbsp;&nbsp;添加属性</dd></a>
            </div>
          </dl> -->
					<!--<dl>
						<dt><span class='icon-menu3'></span>&nbsp;&nbsp;栏目管理</dt>
						<div>
							<a href="/web/marx/index.php/Admin/Category/index"><dd><span class='icon-file-text'></span>&nbsp;&nbsp;栏目列表</dd></a>
							<a href="/web/marx/index.php/Admin/Category/addCate"><dd><span class='icon-plus'></span>&nbsp;&nbsp;添加栏目</dd></a>
						</div>
					</dl>-->
					<dl>
						<dt><span class='icon-menu3'></span>&nbsp;&nbsp;用户管理</dt>
						<div>
							<a href="/web/marx/index.php/Admin/Rbac/index"><dd><span class='icon-address-book'></span>&nbsp;&nbsp;用户列表</dd></a>
							<a href="/web/marx/index.php/Admin/Rbac/addUser"><dd><span class='icon-user-plus'></span>&nbsp;&nbsp;添加用户</dd></a>
							<a href="/web/marx/index.php/Admin/Rbac/role"><dd><span class='icon-file-text'></span>&nbsp;&nbsp;角色列表</dd></a>				
							<a href="/web/marx/index.php/Admin/Rbac/addRole"><dd><span class='glyphicon glyphicon-plus'></span>&nbsp;&nbsp;添加角色</dd></a>
						  <!-- <a href="/web/marx/index.php/Admin/Rbac/addNode"><dd><span class='glyphicon glyphicon-plus'></span>&nbsp;&nbsp;添加节点</dd></a>
                            <a href="/web/marx/index.php/Admin/Rbac/node"><dd><span class='glyphicon glyphicon-list-alt'></span>&nbsp;&nbsp;权限列表</dd></a> -->
						</div>
					</dl>
					<!--<dl>
						<dt><span class='icon-menu3'></span>&nbsp;&nbsp;首页信息</dt>
						<div>
							<a href="/web/marx/index.php/Admin/First/mail"><dd><span class='icon-envelop'></span>&nbsp;&nbsp;邮箱管理</dd></a>
							<a href="/web/marx/index.php/Admin/First/link"><dd><span class='icon-link'></span>&nbsp;&nbsp;链接管理</dd></a>					
							<a href="/web/marx/index.php/Admin/First/banner"><dd><span class='icon-image'></span>&nbsp;&nbsp;导航图片</dd></a>
              <a href="/web/marx/index.php/Admin/First/roll"><dd><span class='icon-image'></span>&nbsp;&nbsp;滚动图片</dd></a>
              <a href="/web/marx/index.php/Admin/First/search"><dd><span class='icon-image'></span>&nbsp;&nbsp;搜索页面</dd></a>
						</div>
					</dl>-->
  				</div>
  				
  			</div>
  			<div id="con_right" >
  				<iframe id="iframe" name="iframe" frameborder='0' scrolling='auto' src="/web/marx/index.php/Admin/Index/content"></iframe>			
  			</div>
  		</div>
 	</div>
  		

  </body>
</html>