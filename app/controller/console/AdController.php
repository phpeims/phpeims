<?php

namespace app\controller\console;

/**
 * Class AdController
 * @package app\controller\console
 */
class AdController extends BaseController
{
    /**
     * 广告列表
     * @return \think\response\View
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * 创建广告
     * @return \think\response\View
     */
    public function create(): View
    {
        return view('create');
    }

    /**
     * 保存广告
     * @postMapping
     */
    public function storeHandler()
    {

    }

    /**
     * 显示广告
     */
    public function show()
    {

    }

    /**
     * 编辑广告
     * @return \think\response\View
     */
    public function edit(): View
    {
        return view('create');
    }

    /**
     * 更新广告
     * @postMapping
     */
    public function updateHandler()
    {

    }

    /**
     * 删除广告
     * @postMapping
     */
    public function destroyHandler()
    {

    }
}
