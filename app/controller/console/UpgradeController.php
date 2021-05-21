<?php

namespace app\controller\console;



/**
 * Class UpgradeController
 * @package app\controller\console
 */
class UpgradeController extends BaseController
{
    /**
     * 在线更新
     * @getMapping(parent_id=5, menu=1)
     * @return \think\response\View
     */
    public function index(): View
    {
        return view('upgrade/index');
    }
}
