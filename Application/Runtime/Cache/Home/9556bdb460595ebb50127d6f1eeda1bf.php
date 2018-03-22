<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <!--引入jQuery文件-->
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
        <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/web/marx/Public/css/main.css">
    <link rel="javascript" href="/web/marx/Public/js/main.js">
    <link rel="stylesheet" href="/web/marx/Public/css/ft-carousel.css">
    <script type="text/javascript" src="/web/marx/Public/js/ft-carousel.min.js"></script>
    <title>马克思主义学院</title>
</head>
<body>
<img src="/web/marx/Public/images/head2.png" class="img-responsive center-block">
<!--<div class="container"style="margin-top: -29px">
    <div class="btn-group btn-group-sm col-md-offset-3" role="group">
        <button type="button" class="btn btn-default"><a href="<?php echo U('Index/index');?>">首页</a></button>
        <div class="btn-group mousedown btn-group-sm" role="group">&lt;!&ndash;open there&ndash;&gt;
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <div class="btn-group mousedown btn-group-sm" role="group">&lt;!&ndash;open there&ndash;&gt;
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <div class="btn-group mousedown btn-group-sm" role="group">&lt;!&ndash;open there&ndash;&gt;
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <div class="btn-group mousedown btn-group-sm" role="group">&lt;!&ndash;open there&ndash;&gt;
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <div class="btn-group mousedown btn-group-sm" role="group">&lt;!&ndash;open there&ndash;&gt;
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <div class="btn-group mousedown btn-group-sm" role="group">&lt;!&ndash;open there&ndash;&gt;
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                Dropdown
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu">
                <li><a href="#">Dropdown link</a></li>
                <li><a href="#">Dropdown link</a></li>
            </ul>
        </div>
        <button type="button" class="btn btn-default"><a href="<?php echo U('Lists/index?cid=27');?>">下载中心</a></button>
    </div>
</div>
<script>

    $('.mousedown').mouseover(function() {

        $(this).addClass('open');    }).mouseout(function() {        $(this).removeClass('open');    });

</script>-->
<div class="toplink container col-md-offset-3 col-md-8" style="margin-top: -30px">
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
                <li><a href="<?php echo U('Lists/index?cid=22');?>">心理园地</a></li>
                <li><a href="<?php echo U('Lists/index?cid=23');?>">心理测试</a></li>
                <li><a href="<?php echo U('Lists/index?cid=24');?>">心理活动</a></li>
                <li><a href="<?php echo U('Lists/index?cid=25');?>">心灵烛台</a></li>
                <li><a href="<?php echo U('Lists/index?cid=26');?>">关于我们</a></li>
            </ul>
        </li>
        <li><a href="<?php echo U('Lists/index?cid=27');?>" style="color: white">下载中心</a>

        </li>
    </ul>
    </div>




<body>
<div class="show" style="text-align: left">
    <h3 style="text-align: center">师资队伍</h3><br>
    院长：<a href="<?php echo U('Show/index?id=307');?>">赵冰梅</a><br>
    直属党支部书记：<a href="<?php echo U('Show/index?id=294');?>">吕健</a><br>
    副院长：<a href="<?php echo U('Show/index?id=298');?>">曲洪波</a>、<a href="<?php echo U('Show/index?id=310');?>">周琳娜</a><br>
    办公室主任：<a href="<?php echo U('Show/index?id=311');?>">仇梦欢</a><br>
    办公室成员：<a href="<?php echo U('Show/index?id=308');?>">赵丹</a><br>
    <br>
    马克思主义中国化教研室主任：<a href="<?php echo U('Show/index?id=297');?>">齐艳霞</a><br>
    成员：<a href="<?php echo U('Show/index?id=291');?>">李莹</a>、<a href="<?php echo U('Show/index?id=293');?>">卢海燕</a>、<a href="<?php echo U('Show/index?id=292');?>">刘春霞</a>、<a href="<?php echo U('Show/index?id=301');?>">王旭</a><br>
    <br>
    马克思主义基本原理教研室主任：<a href="<?php echo U('Show/index?id=287');?>">傅畅梅</a><br>
    成员：<a href="<?php echo U('Show/index?id=289');?>">金梦兰</a>、<a href="<?php echo U('Show/index?id=288');?>">姜爱华</a>、<a href="<?php echo U('Show/index?id=286');?>">白蔚</a><br>
    <br>
    德育教研室主任：<a href="<?php echo U('Show/index?id=303');?>">岳宏杰</a><br>
    成员：<a href="<?php echo U('Show/index?id=290');?>">李金华</a>、<a href="<?php echo U('Show/index?id=295');?>">马新凤</a>、<a href="<?php echo U('Show/index?id=299');?>">田克</a>、<a href="<?php echo U('Show/index?id=309');?>">郑晓娜</a><br>
    <br>
    文学艺术教研室主任：<a href="<?php echo U('Show/index?id=310');?>">周琳娜</a><br>
    成员：<a href="<?php echo U('Show/index?id=312');?>">郭小伟</a>、<a href="<?php echo U('Show/index?id=304');?>">张彩霞</a>、<a href="<?php echo U('Show/index?id=306');?>">张晓茜</a><br>
    <br>
    心理研究所主任：<a href="<?php echo U('Show/index?id=305');?>">张澜</a><br>
    成员：<a href="<?php echo U('Show/index?id=296');?>">欧阳辉</a>、<a href="<?php echo U('Show/index?id=302');?>">闫华</a>、<a href="<?php echo U('Show/index?id=300');?>">田雪</a><br>


</div>
</body>
<footer class="detfoot" >
    <a href="http://www.sau.edu.cn">沈航官网</a> |
    <a href="http://i.sau.edu.cn">数字沈航</a> |
    <a href="http://lib.sau.edu.cn">沈航图书馆</a><br>
    <a href="mailto:316433179@qq.com" style="color: #232323; text-decoration: none;">Power by dlink </a><br>
    版权所有 沈阳航空航天大学马克思主义学院&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;辽宁省沈阳市沈北新区道义南大街37号  联系电话：89724408
    <br>&nbsp;
</footer>
</body>
</html>