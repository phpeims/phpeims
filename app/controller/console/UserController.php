<?php

namespace app\controller\console;



/**
 * Class UserController
 * @package app\controller\console
 */
class UserController extends BaseController
{
    /**
     * 用户管理
     * @getMapping(parent_id=4, menu=1)
     * @return \think\response\View
     */
    public function index(): View
    {
        return view('user/index');
    }

    /**
     * 创建
     * @return \think\response\View
     */
    public function create(): View
    {
        return view('user/form');
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
        return view('user/form');
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
     * 个人资料
     * @return \think\response\View
     */
    public function profile(): View
    {
        return view('user/profile');
    }

    /**
     * 修改密码
     * @return \think\response\View
     */
    public function password(): View
    {
        return view('user/password');
    }
}
