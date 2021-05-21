;!function(){
	var $ = layui.jquery,
	    form = layui.form;

	$.ajaxSetup({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}
    });

    // 获取url参数
    function getQueryVariable(variable) {
        let query = window.location.search.substring(1);
        let vars = query.split("&");

        for (let i = 0; i < vars.length; i++) {
            let pair = vars[i].split("=");
            if (pair[0] === variable) {
                return pair[1];
            }
        }

        return false;
    }

    var data = form.val('loginForm');
    // JSON.stringify(data.field)
    $.post('/passport/login', data.field, function (res) {
        if (res.status === 'failed') {
            layer.msg(res.errors.message);
            $('.captcha img').click();
            return false;
        }

        window.location.href = decodeURIComponent(getQueryVariable('callback'));
    }, 'json');
  
}();