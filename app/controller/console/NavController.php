<?php

namespace app\controller\console;

/**
 * Class NavController
 * @package app\controller\console
 */
class NavController extends BaseController
{
    /**
     * 导航管理
     * @getMapping(parent_id=3, menu=1)
     * @return \think\response\View
     */
    public function index(): View
    {
        return view('nav/index');
    }

    /**
     * 创建
     * @return \think\response\View
     */
    public function create(): View
    {
        return view('nav/form');
    }

    /**
     * 保存
     * @postMapping
     */
    public function storeHandler()
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
        return view('nav/form');
    }

    /**
     * 更新
     * @postMapping
     */
    public function updateHandler()
    {

    }

    /**
     * 删除
     * @postMapping
     */
    public function destroyHandler()
    {

    }
}
