<?php

use think\facade\Db;
use think\helper\Str;
use think\migration\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $result = Db::name('users')->count();
        if (empty($result)) {
            Db::name('users')->insert([
                'id' => 1,
                'name' => '李四',
                'avatar' => 'avatar url',
                'mobile' => '13013013030',
                'mobile_verified_at' => time(),
                'email' => 'admin@domain.com',
                'email_verified_at' => time(),
                'username' => 'admin',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                'remember_token' => Str::random(32),
            ]);
        }
    }
}
