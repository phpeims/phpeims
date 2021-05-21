<?php

namespace app\controller\console;

/**
 * Class SegmentController
 * @package app\controller\console
 */
class SegmentController extends BaseController
{
    /**
     * 定指标签
     * @getMapping(parent_id=3, menu=1)
     * @return \think\response\View
     */
    public function index(): View
    {
        return view('segment/index');
    }

    /**
     * 创建
     * @return \think\response\View
     */
    public function create(): View
    {
        return view('segment/form');
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
        return view('segment/form');
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
