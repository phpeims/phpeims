{layout name="console/layout" /}

<div class="layui-container" style="margin-top: 320px;">
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
                    <label class="layui-form-label">密码框</label>
                    <div class="layui-input-inline">
                        <input type="password" name="password" required lay-verify="required" placeholder="请输入密码"
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
