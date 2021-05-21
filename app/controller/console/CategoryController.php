<?php

namespace app\controller\console;

/**
 * Class CategoryController
 * @package app\controller\console
 */
class CategoryController extends BaseController
{
    /**
     * 栏目管理
     * @getMapping(parent_id=2, menu=1)
     * @return \think\response\View
     */
    public function index(): View
    {
        return view('category/index');
    }

    /**
     * 创建
     * @return \think\response\View
     */
    public function create(): View
    {
        return view('category/form');
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
        return view('category/form');
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
