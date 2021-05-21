<?php

namespace app\controller\console;



/**
 * Class SettingController
 * @package app\controller\console
 */
class SettingController extends BaseController
{
    /**
     * 基本参数
     * @requestMapping(parent_id=1, menu=1)
     * @return \think\response\View
     */
    public function index(): View
    {
        return view('setting/index');
    }

    /**
     * 公司信息
     * @requestMapping(parent_id=1, menu=1)
     * @return \think\response\View
     */
    public function company(): View
    {
        return view('setting/company');
    }

    /**
     * 网站信息
     * @requestMapping(parent_id=1, menu=1)
     * @return \think\response\View
     */
    public function site(): View
    {
        return view('setting/site');
    }

    /**
     * 邮件设置
     * @requestMapping(parent_id=1, menu=1)
     * @return \think\response\View
     */
    public function email(): View
    {
        return view('setting/email');
    }
}
