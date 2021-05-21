{layout name="console/layout" /}


<div class="layui-fluid">
    <div class="layui-card">
        <div class="layui-card-header layuiadmin-card-header-auto">
            <button class="layui-btn layuiadmin-btn-tags" data-type="add">添加</button>
        </div>
        <div class="layui-card-body">
            <table id="LAY-app-content-tags" lay-filter="LAY-app-content-tags"></table>
            <script type="text/html" id="layuiadmin-app-cont-tagsbar">
                <a class="layui-btn layui-btn-normal layui-btn-xs" lay-event="edit"><i
                        class="layui-icon layui-icon-edit"></i>编辑</a>
                <a class="layui-btn layui-btn-danger layui-btn-xs" lay-event="del"><i
                        class="layui-icon layui-icon-delete"></i>删除</a>
            </script>
        </div>
    </div>
</div>

<script>
    function () {

        var table = layui.table;
        var $ = layui.$, active = {
            add: function () {
                layer.open({
                    type: 2
                    , title: '添加分类'
                    , content: 'tagsform.html'
                    , area: ['450px', '200px']
                    , btn: ['确定', '取消']
                    , yes: function (index, layero) {
                        var othis = layero.find('iframe').contents().find("#layuiadmin-app-form-tags")
                            , tags = othis.find('input[name="tags"]').val();

                        if (!tags.replace(/\s/g, '')) return;

                        table.reload('LAY-app-content-tags');
                        layer.close(index);
                    }
                });
            }
        }
        $('.layui-btn.layuiadmin-btn-tags').on('click', function () {
            var type = $(this).data('type');
            active[type] ? active[type].call(this) : '';
        });
    }
</script>

