<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title></title>
    <script type="text/javascript" src="/web/marx/Application/Admin/View/Public/Js/jquery-1.7.2.min.js"></script>
    <!-- Bootstrap -->
    <link href="/web/marx/Application/Admin/View/Public/Css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/web/marx/Application/Admin/View/Public/Css/top.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  
  <body>
  <div id="top">
    <a href="/web/marx/index.php/Admin/Index/content"><span class='glyphicon glyphicon-home'></span></a>&nbsp;当前位置：<a href="/web/marx/index.php/Admin/First/search">首页设置</a>&nbsp;>>&nbsp;<a href="/web/marx/index.php/Admin/First/search">搜索页面</a>
    
  </div>
<div id="all" >
<form action="/web/marx/index.php/Admin/First/searchHandle" method="post" enctype="multipart/form-data">
  <table class="table table-bordered table-hover" >
    
    <tr>
      <td align="right" width="30%">图片展示：</td>
      <td>
        <?php if(!$pic): ?><!-- 不存在，添加 -->
            <input type="file" name="photo" style="display:inline-block"><span style="color:red">（图片大小1000*220像素）</span>
        <?php else: ?>
            <div id="photo" style="display:none">
              <input type="file" name="photo" style="display:inline-block"><span style="color:red">（图片大小1000*220像素）</span>
            </div>
            <img src="/web/marx/Public/Uploads/<?php echo ($pic["href"]); ?>" width='600px' height='132px'>
            <a class="btn btn-info btn-sm" id="change" style="margin:10px">更换图片</a><?php endif; ?>
       
      </td>
    </tr>
    
    <tr id="last">
      <td colspan='2' align="center" id="submitp">
        <input type="hidden" name="id" value="<?php echo ($pic["id"]); ?>">
        <input class="btn btn-success btn-sm" type="submit" <?php if(!$pic): ?>value="保存添加"<?php else: ?>value="保存修改"<?php endif; ?>  id="submit">
      </td>
    </tr> 
    
  </table>
  
</form>
    
</div>
    <script type="text/javascript">
      $(function(){
        $('#change').click(function(){
          $(this).css('display','none').prev().css('display','none');
          $('#photo').css('display','block');
        });
      })
     
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>-->
    <!-- Include all compiled plugins (below), or include individual files as needed 
    <script src="/web/marx/Application/Admin/View/Public/Js/bootstrap.min.js"></script>-->
  </body>
</html>