<?php

use think\facade\Db;
use think\migration\Seeder;

class AuthGroupAccessSeeder extends Seeder
{
    public function run()
    {
        $result = Db::name('auth_group_access')->count();
        if (empty($result)) {
            Db::name('auth_group_access')->insert([
                'user_id' => 1,
                'auth_group_id' => 1,
            ]);
        }
    }
}
