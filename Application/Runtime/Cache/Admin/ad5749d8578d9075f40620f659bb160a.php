<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title></title>
   
    <!-- Bootstrap -->
    <link href="/web/marx/Application/Admin/View/Public/Css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/web/marx/Application/Admin/View/Public/Css/top.css" />
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
      function del(bid){ 
        if(confirm('确定要删除吗？')){ 
          window.location = "/web/marx/index.php/Admin/Blog/delInfo?bid="+bid;
        }
      }
    </script>
  </head>
 
  <body>
  <div id="top">
      <a href="/web/marx/index.php/Admin/Index/content"><span class='glyphicon glyphicon-home'></span></a>&nbsp;当前位置：<a href="/web/marx/index.php/Admin/Blog/index">文章管理</a>&nbsp;>>&nbsp;<a href="/web/marx/index.php/Admin/Blog/infoList">简介文章</a>
    </div>
  <div id='all'>
    <table class="table table-bordered table-hover" >

      <tr class="firstTr">
          <th width="5%">ID</th>
          <th width="30%">栏目名称及标题</th>
          <th width="15%">数据更新时间</th>
          <th width="15%">发布状态</th>
          <th width="15%">操作</th>
      </tr>
      <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
          <td><?php echo ($v["id"]); ?></td>
          <td><?php if($v['pcate']): echo ($v["pcate"]); ?> --<?php endif; echo ($v["name"]); ?></td>
          <?php if(!isset($v['time'])) $v['time'] = 0; ?> 
          <td><?php echo (date('Y-m-d H:i',$v["time"])); ?></td>
          <td>
            <?php if($v['blog']): ?>已发布
            <?php else: ?> <span style="color:red">未发布</span><?php endif; ?>
          </td>
          <td>
              <?php if($v['blog']): ?>[<a href="/web/marx/index.php/Admin/Blog/addInfo?cid=<?php echo ($v['id']); ?>">修改文章</a>]
                [<a href="javascript:del(<?php echo ($v['bid']); ?>)">删除文章</a>]
              <?php else: ?>
                [<a href="/web/marx/index.php/Admin/Blog/addInfo?cid=<?php echo ($v['id']); ?>">发布文章</a>]<?php endif; ?>
          </td>
        </tr><?php endforeach; endif; ?>
    </table>
      
  </div>  
  <script src="/web/marx/Application/Admin/View/Public/Js/jquery-1.7.2.min.js"></script>
  <script src="/web/marx/Application/Admin/View/Public/Js/bootstrap.min.js"></script>
  </body>
</html>