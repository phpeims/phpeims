<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="utf-8">
    <title>Login</title>
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
<div class="layui-container">
    <div class="layui-row">
        <a href="{:url('/')}">logo</a>
    </div>
    <div class="layui-row">
        <div class="layui-col-md6">
            &nbsp;
        </div>
        <div class="layui-col-md6">
            <form class="layui-form" action="">
                <div class="layui-form-item">
                    <label class="layui-form-label">输入框</label>
                    <div class="layui-input-inline">
                        <input type="text" name="title" required lay-verify="required" placeholder="请输入标题"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">密码框</label>
                    <div class="layui-input-inline">
                        <input type="password" name="password" required lay-verify="required" placeholder="请输入密码"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">验证码</label>
                    <div class="layui-input-inline">
                        <input type="password" name="password" required lay-verify="required" placeholder="请输入验证码"
                               autocomplete="off" class="layui-input">
                    </div>
                </div>
                <div class="layui-form-item">
                    <div class="layui-input-block">
                        <button class="layui-btn" lay-submit lay-filter="formDemo">登录</button>
                    </div>
                </div>
                {:token_field()}
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    layui.use('form', function () {
        var form = layui.form;

        //监听提交
        form.on('submit(formDemo)', function (data) {
            layer.msg(JSON.stringify(data.field));
            return false;
        });
    });
</script>
</body>
</html>
