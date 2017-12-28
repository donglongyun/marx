<?php if (!defined('THINK_PATH')) exit();?><!--文章浏览页面-->
﻿<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <!--引入jQuery文件-->
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/web/marx/Public/css/main.css">
    <link rel="javascript" href="/web/marx/Public/js/main.js">
    <link rel="stylesheet" href="/web/marx/Public/css/ft-carousel.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <!-- <script src="https://cdn.bootcss.com/jquery/2.1.1/jquery.min.js"></script>-->
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/web/marx/Public/js/ft-carousel.min.js"></script>
    <script type="text/javascript">
        $("#carousel_1").FtCarousel();

        $("#carousel_2").FtCarousel({
            index: 1,
            auto: false
        });

        $("#carousel_3").FtCarousel({
            index: 0,
            auto: true,
            time: 3000,
            indicators: false,
            buttons: true
        });
    </script>
    <title>马克思主义学院</title>
</head>
<body>
    <img src="/web/marx/Public/images/head.png" alt="headimg" width="100%" class="topimg">

    <div class="toplink">
        <ul id="nav" style="border-radius: 10px 10px 0px 0px">
        <li><a href="<?php echo U('Index/index');?>" style="color: white">首页</a>
        </li>
        <li><a href="#" style="color: white">学院概况</a>
            <ul>
                <li><a href="<?php echo U('Show/showdet?cid=3');?>">学院简介</a></li>
                <li><a href="<?php echo U('Lists/index?cid=4');?>">机构设置</a></li>
                <li><a href="<?php echo U('Lists/index?cid=5');?>">师资队伍</a></li>
                <li><a href="<?php echo U('Lists/index?cid=6');?>">规章制度</a></li>
            </ul>
        </li>
        <li><a href="#" style="color: white">教学工作</a>
            <ul>
                <li><a href="<?php echo U('Lists/index?cid=7');?>">课程建设</a></li>
                <li><a href="<?php echo U('Lists/index?cid=8');?>">教学改革</a></li>
                <li><a href="<?php echo U('Lists/index?cid=9');?>">教学管理</a></li>
                <li><a href="<?php echo U('Lists/index?cid=10');?>">精品课程</a></li>
                <li><a href="<?php echo U('Lists/index?cid=11');?>">实践教学</a></li>
            </ul>
        </li>
        <li><a href="#" style="color: white">科学研究</a>
            <ul>
                <li><a href="<?php echo U('Lists/index?cid=12');?>">学术动态</a></li>
                <li><a href="<?php echo U('Lists/index?cid=13');?>">科研项目</a></li>
                <li><a href="<?php echo U('Lists/index?cid=14');?>">科研成果</a></li>
            </ul>
        </li>
        <li><a href="#" style="color: white">学科建设</a>
            <ul>
                <li><a href="<?php echo U('Lists/index?cid=15');?>">学科现状</a></li>
                <li><a href="<?php echo U('Lists/index?cid=16');?>">导师简介</a></li>
                <li><a href="<?php echo U('Lists/index?cid=17');?>">研究生培养</a></li>
            </ul>
        </li>
        <li><a href="#" style="color: white">党群工作</a>
            <ul>
                <li><a href="<?php echo U('Lists/index?cid=18');?>">党群动态</a></li>
                <li><a href="<?php echo U('Lists/index?cid=19');?>">理论学习</a></li>
                <li><a href="<?php echo U('Lists/index?cid=20');?>">工会活动</a></li>
            </ul>
        </li>
        <li><a href="#" style="color: white">心理健康之家 </a>
            <ul>
                <li><a href="<?php echo U('Lists/index?cid=21');?>">中心概况</a></li>
                <li><a href="<?php echo U('Show/index?id=356');?>">心理园地</a></li>
                <li><a href="<?php echo U('Lists/index?cid=23');?>">心理测试</a></li>
                <li><a href="<?php echo U('Lists/index?cid=24');?>">心理活动</a></li>
                <li><a href="<?php echo U('Lists/index?cid=25');?>">心灵烛台</a></li>
                <li><a href="<?php echo U('Show/index?id=384');?>">关于我们</a></li>
            </ul>
        </li>
        <li><a href="<?php echo U('Lists/index?cid=27');?>" style="color: white">下载中心</a>

        </li>
    </ul>
    </div>



<body>
<div class="show" style="overflow:auto;">
    <div class="showtit"><h3 style="text-align: center;" class=""><?php echo ($blogs[0]['title']); ?></h3><br>
        <small><p style="float: right">作者：<?php echo ($blogs[0]['author']); ?>&nbsp;&nbsp;&nbsp;阅读量：<?php echo ($blogs[0]['click']); ?>&nbsp;&nbsp;</small></p><br></div><br>
    <p><?php echo ($blogs[0]['content']); ?></p>
</div>
</body>
<footer class="detfoot" >
    <a href="">沈航官网</a> |
    <a href="">数字沈航</a> |
    <a href="">沈航图书馆</a><br>
    <a href="mailto:316433179@qq.com" style="color: #232323; text-decoration: none;">Power by dlink </a><br>
    版权所有 沈阳航空航天大学马克思主义学院  &nbsp;&nbsp;&nbsp;辽宁省沈阳市沈北新区道义南大街37号  联系电话：89724408
    <br>&nbsp;
</footer>
</body>
</html>