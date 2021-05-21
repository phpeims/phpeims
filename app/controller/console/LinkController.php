<?php

namespace app\controller\console;

/**
 * Class LinkController
 * @package app\controller\console
 */
class LinkController extends BaseController
{
    /**
     * 友情链接
     * @return \think\response\View
     */
    public function index(): View
    {
        return view('nav/link/index');
    }

    /**
     * 创建
     * @return \think\response\View
     */
    public function create(): View
    {
        return view('nav/link/form');
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
        return view('nav/link/form');
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
