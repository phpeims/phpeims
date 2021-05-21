<?php

namespace app\controller\console;



/**
 * Class FormController
 * @package app\controller\console
 */
class FormController extends BaseController
{
    /**
     * 表单管理
     * @getMapping(parent_id=3, menu=1)
     * @return \think\response\View
     */
    public function index(): View
    {
        return view('form/index');
    }

    /**
     * 创建
     * @return \think\response\View
     */
    public function create(): View
    {
        return view('form/form');
    }

    /**
     * 保存
     * @postMapping
     */
    public function store()
    {

    }

    /**
     * 显示
     */
    public function show()
    {

    }

    /**
     * 编辑
     * @return \think\response\View
     */
    public function edit(): View
    {
        return view('form/form');
    }

    /**
     * 更新
     * @postMapping
     */
    public function update()
    {

    }

    /**
     * 删除
     * @postMapping
     */
    public function destroy()
    {

    }
}
