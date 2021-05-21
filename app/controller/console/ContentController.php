<?php

namespace app\controller\console;



/**
 * Class ContentController
 * @package app\controller\console
 */
class ContentController extends BaseController
{
    /**
     * 内容管理
     * @getMapping(parent_id=2, menu=1)
     * @return \think\response\View
     */
    public function index(): View
    {
        return view('content/index');
    }

    /**
     * 创建
     * @return \think\response\View
     */
    public function create(): View
    {
        return view('content/form');
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
        return view('content/form');
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
