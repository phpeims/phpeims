<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateUsersTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function change()
    {
        $this->table('users', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci'])
            ->addColumn(Column::string('username')->setComment('用户名'))
            ->addColumn(Column::string('password')->setComment('登录密码'))
            ->addColumn(Column::string('email')->setUnique()->setComment('电子邮箱'))
            ->addColumn(Column::timestamp('email_verified_at')->setNullable())
            ->addColumn(Column::string('mobile')->setUnique()->setComment('手机号码'))
            ->addColumn(Column::timestamp('mobile_verified_at')->setNullable())
            ->addColumn(Column::string('name')->setComment('昵称'))
            ->addColumn(Column::string('avatar')->setComment('头像'))
            ->addColumn(Column::string('remember_token')->setComment('token'))
            ->addTimestamps()
            ->addSoftDelete()
            ->create();
    }
}
