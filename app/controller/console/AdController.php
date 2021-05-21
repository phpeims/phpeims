<?php

namespace app\controller\console;


/**
 * Class AdController
 * @package app\controller\console
 */
class AdController extends BaseController
{
    /**
     * 广告位管理
     * @getMapping(parent_id=3, menu=1)
     * @return \think\response\View
     */
    public function index(): View
    {
        return view('ad/index');
    }

    /**
     * 创建广告位
     * @return \think\response\View
     */
    public function positionCreate(): View
    {
        return view('ad/position/form');
    }

    /**
     * 保存广告位
     * @postMapping
     */
    public function positionStore()
    {

    }

    /**
     * 显示广告位
     */
    public function positionShow()
    {

    }

    /**
     * 编辑广告位
     * @return \think\response\View
     */
    public function positionEdit(): View
    {
        return view('ad/position/form');
    }

    /**
     * 更新广告位
     * @postMapping
     */
    public function positionUpdate()
    {

    }

    /**
     * 删除广告位
     * @postMapping
     */
    public function positionDestroy()
    {

    }

    /**
     * 广告列表
     * @return \think\response\View
     */
    public function ad(): View
    {
        return view('ad/index');
    }

    /**
     * 创建广告
     * @return \think\response\View
     */
    public function create(): View
    {
        return view('ad/form');
    }

    /**
     * 保存广告
     * @postMapping
     */
    public function store()
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
        return view('ad/form');
    }

    /**
     * 更新广告
     * @postMapping
     */
    public function update()
    {

    }

    /**
     * 删除广告
     * @postMapping
     */
    public function destroy()
    {

    }
}
