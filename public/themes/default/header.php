<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.6.7/dist/css/layui.css">
    <link rel="stylesheet" href="{:skin('css/app.css')}">
    <script src="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.6.7/dist/layui.js"></script>
    <script src="{:skin('js/app.js')}"></script>
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
    {:token_meta()}
</head>
<body>
<div>
    <ul class="layui-nav" lay-filter="">
        <li class="layui-nav-item"><a href="">最新活动</a></li>
        <li class="layui-nav-item layui-this"><a href="">产品</a></li>
        <li class="layui-nav-item"><a href="">大数据</a></li>
        <li class="layui-nav-item">
            <a href="javascript:;">解决方案</a>
            <dl class="layui-nav-child"> <!-- 二级菜单 -->
                <dd><a href="">移动模块</a></dd>
                <dd><a href="">后台模版</a></dd>
                <dd><a href="">电商平台</a></dd>
            </dl>
        </li>
        <li class="layui-nav-item"><a href="">社区</a></li>
    </ul>
</div>
