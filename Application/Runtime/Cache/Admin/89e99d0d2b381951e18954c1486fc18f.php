<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title></title>
   
    <!-- Bootstrap -->
    <link href="/Application/Admin/View/Public/Css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/Application/Admin/View/Public/Css/top.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  	<style type="text/css">
  	th,td{ 
  		text-align:center;
  	}
  	</style>
  	<script type="text/javascript">
  		function del(id){ 
  			if(confirm('确定要删除吗？')){ 
  				window.location = "/index.php?s=/Admin/Blog/delete?id="+id;
  			}
  		}
      function del1(id){ //删除到回收站
        if(confirm('确定要删除吗？')){ 
          window.location = "/index.php?s=/Admin/Blog/toTrach?id="+id+'&type=1';
        }
      }
  	</script>
  </head>
 
  <body>
 	<div id="top">
  		<a href="/index.php?s=/Admin/Index/content"><span class='glyphicon glyphicon-home'></span></a>&nbsp;当前位置：<a href="/index.php?s=/Admin/Blog/index">文章管理</a>&nbsp;>>&nbsp;<?php if(ACTION_NAME == "index"): ?><a href="/index.php?s=/Admin/Blog/index">文章列表</a><?php else: ?><a href="/index.php?s=/Admin/Blog/trach">回收站</a><?php endif; ?>
  	</div>
	<div id='all'>
    <?php if(ACTION_NAME == "index"): ?><a class='btn btn-primary' href="/index.php?s=/Admin/Blog/addBlog"  style='margin:10px 5px;display:inline-block'>添加文章</a><?php endif; ?>
		<table class="table table-bordered table-hover" >

			<tr class="firstTr">
					<th width="5%">ID</th>
					<th width="37%">标题</th>
					<th width="12%">所属分类</th>
					<th width="10%">作者</th>
					<th width="15%">发布时间</th>
					<th width="8%">点击次数</th>
					<th width="13%">操作</th>
			</tr>
			<?php if(is_array($list)): foreach($list as $key=>$v): ?><tr>
					<td><?php echo ($v["id"]); ?></td>
					<td><?php echo ($v["title"]); ?></td>
					<td><?php echo ($v["cate"]); ?></td>
					<td><?php echo ($v["author"]); ?></td>
					<td><?php echo (date('Y-m-d H:i:s',$v["time"])); ?></td>
					<td><?php echo ($v["click"]); ?></td>
					<td>
						<?php if(ACTION_NAME == "index"): ?>[<a href="/index.php?s=/Admin/Blog/addBlog?id=<?php echo ($v['id']); ?>">修改</a>]
							[<a href="javascript:del1(<?php echo ($v['id']); ?>)">删除</a>]
						<?php else: ?>
							[<a href="/index.php?s=/Admin/Blog/toTrach?id=<?php echo ($v['id']); ?>&type=0">还原</a>]
							<!--[<a href="/index.php?s=/Admin/Blog/delete?id=<?php echo ($v['id']); ?>">彻底删除</a>]-->
							[<a href="javascript:del(<?php echo ($v['id']); ?>)">彻底删除</a>]<?php endif; ?>
					</td>
				</tr><?php endforeach; endif; ?>
		</table>
		<div class=" pages"><?php echo ($page); ?></div>
			
	</div>	
  <script src="/Application/Admin/View/Public/Js/jquery-1.7.2.min.js"></script>
  <script src="/Application/Admin/View/Public/Js/bootstrap.min.js"></script>
  </body>
</html>