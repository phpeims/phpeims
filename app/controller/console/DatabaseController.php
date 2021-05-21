<?php

namespace app\controller\console;



/**
 * Class DatabaseController
 * @package app\controller\console
 */
class DatabaseController extends BaseController
{
    /**
     * 数据库管理
     * @getMapping(parent_id=5, menu=1)
     * @return \think\response\View
     */
    public function index(): View
    {
        return view('database/index');
    }

    /**
     * 创建
     * @return \think\response\View
     */
    public function create(): View
    {
        return view('database/form');
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
        return view('database/form');
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
