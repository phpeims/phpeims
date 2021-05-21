<?php

namespace app\controller\console;

/**
 * Class RoleController
 * @package app\controller\console
 */
class RoleController extends BaseController
{
    /**
     * 角色管理
     * @getMapping(parent_id=4, menu=1)
     * @return \think\response\View
     */
    public function index(): View
    {
        return view('role/index');
    }

    /**
     * 创建
     * @return \think\response\View
     */
    public function create(): View
    {
        return view('role/form');
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
        return view('role/form');
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
