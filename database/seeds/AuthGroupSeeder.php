<?php

use think\facade\Db;
use think\migration\Seeder;

class AuthGroupSeeder extends Seeder
{
    public function run()
    {
        $result = Db::name('auth_groups')->count();
        if (empty($result)) {
            Db::name('auth_groups')->insert([
                'id' => 1,
                'title' => '超级管理员',
                'rules' => '1',
                'status' => 1,
            ]);
        }
    }
}
