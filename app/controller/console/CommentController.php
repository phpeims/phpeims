<?php

namespace app\controller\console;

/**
 * Class CommentController
 * @package app\controller\console
 */
class CommentController extends BaseController
{
    /**
     * 评论管理
     * @getMapping(parent_id=2, menu=1)
     * @return \think\response\View
     */
    public function index(): View
    {
        return view('comment/index');
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
