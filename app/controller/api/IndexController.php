<?php

namespace app\controller\api;

use app\controller\Controller;
use think\response\Json;

/**
 * @OA\Info(title="PHPEIMS API", version="1.0", contact={"email": "support@phpeims.com"})
 * Class IndexController
 * @package app\controller\api
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *  path="/",
     *  summary="首页",
     *  description="首页的详细描述",
     *  operationId="index",
     *  @OA\Response(response="200", description="An example resource")
     * )
     * @return \think\response\Json
     */
    public function index(): Json
    {
        return $this->succeed('api data');
    }
}
