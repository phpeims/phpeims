<?php

use think\facade\Db;
use think\migration\Seeder;

class AuthRuleSeeder extends Seeder
{
    public function run()
    {
        $result = Db::name('auth_rules')->count();
        if (empty($result)) {
            $menu = [
                ['title' => '全局设置', 'name' => 'setting', 'icon' => 'icon-slider',],
                ['title' => '内容管理', 'name' => 'content', 'icon' => 'icon-form',],
                ['title' => '扩展模块', 'name' => 'extension', 'icon' => 'icon-app',],
                ['title' => '权限管理', 'name' => 'permission', 'icon' => 'icon-user',],
                ['title' => '系统管理', 'name' => 'system', 'icon' => 'icon-set',]
            ];

            foreach ($menu as $key => $item) {
                Db::name('auth_rules')->insert([
                    'id' => $key + 1,
                    'parent_id' => 0,
                    'name' => $item['name'],
                    'title' => $item['title'],
                    'icon' => $item['icon'],
                    'menu' => 1,
                ]);
            }
        }
    }
}
