<?php

namespace app\controller\console;

use app\service\RuleService;
use think\response\View;

/**
 * Class IndexController
 * @package app\controller\console
 */
class IndexController extends BaseController
{
    /**
     * @param \app\service\RuleService $ruleService
     * @return \think\response\View
     */
    public function index(RuleService $ruleService): View
    {
        return view('index', [
            'menu' => $ruleService->getRule(),
        ]);
    }

    /**
     * 起始页
     * @return \think\response\View
     */
    public function dashboard(): View
    {
        return view('dashboard');
    }
}
