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
        return view('nav/form');
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

    /**
     * 友情链接
     * @return \think\response\View
     */
    public function link(): View
    {
        return view('nav/link/index');
    }

    /**
     * 创建
     * @return \think\response\View
     */
    public function linkCreate(): View
    {
        return view('nav/link/form');
    }

    /**
     * 保存
     * @postMapping
     */
    public function linkStore()
    {

    }

    /**
     * 显示
     */
    public function linkShow()
    {

    }

    /**
     * 编辑
     * @return \think\response\View
     */
    public function linkEdit(): View
    {
        return view('nav/link/form');
    }

    /**
     * 更新
     * @postMapping
     */
    public function linkUpdate()
    {

    }

    /**
     * 删除
     * @postMapping
     */
    public function linkDestroy()
    {

    }
}
