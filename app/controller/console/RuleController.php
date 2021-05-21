<?php

namespace app\controller\console;

use app\model\AuthRule;

/**
 * Class RuleController
 * @package app\controller\console
 */
class RuleController extends BaseController
{
    /**
     * 权限管理
     * @getMapping(parent_id=4, menu=1)
     * @return \think\response\View
     */
    public function index(): View
    {
        $rules = AuthRule::get();

        return view('rule/index', ['rules' => $rules->toArray()]);
    }

    /**
     * 创建
     * @return \think\response\View
     */
    public function create(): View
    {
        return view('rule/form');
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
        return view('rule/form');
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
