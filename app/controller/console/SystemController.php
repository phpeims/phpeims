<?php

namespace app\controller\console;



/**
 * Class SystemController
 * @package app\controller\console
 */
class SystemController extends BaseController
{
    /**
     * 系统管理
     * @getMapping(parent_id=5, menu=1)
     * @return \think\response\View
     */
    public function index(): View
    {
        return view('system/index');
    }

    /**
     * 关于我们
     * @return \think\response\View
     */
    public function about(): View
    {
        return view('system/about');
    }

    /**
     * 帮助手册
     * @return \think\response\View
     */
    public function help(): View
    {
        return view('system/help');
    }

    /**
     * 系统日志
     * @return \think\response\View
     */
    public function log(): View
    {
        return view('system/log');
    }
}
