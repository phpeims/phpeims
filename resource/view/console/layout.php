<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>PHPEIMS</title>
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.6.7/dist/css/layui.css">
    <link rel="stylesheet" href="{:asset('static/css/app.css')}">
    <script src="https://cdn.jsdelivr.net/gh/sentsin/layui@v2.6.7/dist/layui.js"></script>
    <script src="{:asset('static/js/app.js')}"></script>
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/npm/html5shiv@3.7.3/dist/html5shiv.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/respond.js@1.4.2/dest/respond.min.js"></script>
    <![endif]-->
    {:token_meta()}
</head>
<body>
{__CONTENT__}
</body>
</html>
