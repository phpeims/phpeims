<?php

namespace app\service;

use app\model\AuthRule;

/**
 * Class RuleService
 * @package app\service
 */
class RuleService
{
    /**
     * 获取管理资源链接
     * @param int $menu 是否仅显示菜单
     * @param int $status 显示状态
     * @return array
     */
    public function getRule(int $menu = 1, int $status = 1): array
    {
        $collection = AuthRule::where('status', $status)
            ->where('menu', $menu)
            ->order('sort', 'asc')
            ->order('id', 'asc')
            ->selectOrFail();

        $data = collect($collection)->toArray();

        $menu = [];
        foreach ($data as $item) {
            if ($item['parent_id'] == 0) {
                $filtered = $collection->filter(function ($v) use ($item) {
                    return $v['parent_id'] == $item['id'];
                });

                $sub = [];
                foreach ($filtered->all() as $v) {
                    $sub[] = [
                        'name' => $v['title'],
                        'url' => route('admin.' . $v['name']),
                        'icon' => $v['icon'],
                    ];
                }

                $menu[] = [
                    'name' => $item['title'],
                    'url' => 'javascript:void(0);',
                    'icon' => $item['icon'],
                    'sub' => $sub,
                ];
            }
        }

        return $menu;
    }
}
