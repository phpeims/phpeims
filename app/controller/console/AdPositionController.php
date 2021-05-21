<?php

namespace app\controller\console;

/**
 * Class AdPositionController
 * @package app\controller\console
 */
class AdPositionController extends BaseController
{
    /**
     * 广告位管理
     * @getMapping(parent_id=3, menu=1)
     * @return \think\response\View
     */
    public function index(): View
    {
        return view('index');
    }

    /**
     * 创建广告位
     * @return \think\response\View
     */
    public function create(): View
    {
        return view('create');
    }

    /**
     * 保存广告位
     * @postMapping
     */
    public function storeHandler()
    {

    }

    /**
     * 显示广告位
     */
    public function show()
    {

    }

    /**
     * 编辑广告位
     * @return \think\response\View
     */
    public function edit(): View
    {
        return view('create');
    }

    /**
     * 更新广告位
     * @postMapping
     */
    public function updateHandler()
    {

    }

    /**
     * 删除广告位
     * @postMapping
     */
    public function destroyHandler()
    {

    }
}
