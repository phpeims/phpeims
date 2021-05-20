<?php

namespace app\controller\web;

use app\service\ViewService;
use think\Request;
use think\response\View;

/**
 * Class IndexController
 * @package app\controller\web
 */
class IndexController extends BaseController
{
    /**
     * @param \think\Request $request
     * @param \app\service\ViewService $viewService
     * @return \think\response\View
     */
    public function index(Request $request, ViewService $viewService): View
    {
        $result = $viewService->render($request->pathinfo());

        return $this->display($result['template'], $result);
    }
}
