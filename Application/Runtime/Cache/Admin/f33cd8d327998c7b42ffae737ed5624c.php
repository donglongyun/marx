<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">

    <title></title>

 
    <link href="/web/marx/Application/Admin/View/Public/Css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/web/marx/Application/Admin/View/Public/Css/top.css" />

    <script type="text/javascript" src="/web/marx/Application/Admin/View/Public/Js/ueditor/ueditor.config.js"></script>  <!-- 配置文件 -->
    <script type="text/javascript" src="/web/marx/Application/Admin/View/Public/Js/ueditor/ueditor.all.min.js"></script>  <!-- 编辑器源码文件 -->
    <script type="text/javascript" >
      //window.UEDITOR_HOME_URL = '/web/marx/Application/Admin/View/Public/Js/ueditor/';
      window.onload = function(){
        //window.UEDITOR_CONFIG.initialFrameWidth = 1200;  //指定编辑器宽度
        window.UEDITOR_CONFIG.initialFrameHeight = 400;  //指定编辑器高度
        
        var ue = UE.getEditor('content');  // 实例化编辑器
        //editor.setContent('<h1>建国</h1>');
      }
  </script>
  </head>

<body>
  <div id="top">
      <a href="/web/marx/index.php/Admin/Index/content"><span class='glyphicon glyphicon-home'></span></a>&nbsp;当前位置：<a href="/web/marx/index.php/Admin/Blog/index">文章管理</a>&nbsp;>>&nbsp;<a href="/web/marx/index.php/Admin/Blog/InfoList">简介文章</a>&nbsp;>>&nbsp;
      <?php if($blog[id]): ?><a href="/web/marx/index.php/Admin/Blog/addInfo?cid=<?php echo ($cid); ?>">修改文章</a>
      <?php else: ?>
        <a href="/web/marx/index.php/Admin/Blog/addInfo?cid=<?php echo ($cid); ?>">发布文章</a><?php endif; ?>
  </div>
  <div id="all">
    <form action="/web/marx/index.php/Admin/Blog/addInfoHandle" method='post'>
      <table class="table table-bordered table-hover" >
        <tr>
          <td align="right" width='30%'>栏目名称：</td>
          <td>
            <?php if($cate['pname']): echo ($cate["pname"]); ?> --<?php endif; echo ($cate["name"]); ?>
          </td>
        </tr>
        <tr>
          <td align="right" width='30%'>作者：</td>
          <td>
            <?php if($blog[id]): echo ($blog["author"]); ?><input type="hidden" name="author" value='<?php echo ($blog["author"]); ?>'>
            <?php else: echo ($_SESSION["username"]); ?><input type="hidden" name="author" value='<?php echo ($_SESSION["username"]); ?>'><?php endif; ?> 
          </td>
        </tr>
        <tr>
          <td align="right" width='30%'>数据更新日期：</td>
          <td>
            <input class="form-control" style="width:180px" type="text" name="time" <?php if($blog['id']): ?>value="<?php echo (date('Y-m-d H:i:s',$blog["time"])); ?>"<?php else: ?>value="<?php echo (date('Y-m-d H:i:s',$time)); ?>"<?php endif; ?>>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center"> 
            <textarea name="content" id="content"><?php echo ($blog["content"]); ?></textarea>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="center"> 
            <input type="hidden" name="title" value="<?php echo ($cate["name"]); ?>">
            <input type="hidden" name="cid" value="<?php echo ($cid); ?>">
            <input type="hidden" name="id" value="<?php echo ($blog['id']); ?>">
            <input class="btn btn-success btn-sm" type="submit" value=<?php if($blog['id']): ?>"保存修改"<?php else: ?>"发布文章"<?php endif; ?>>
          </td>
        </tr>
      </table>
    </form>
  </div>

  </body>
</html>