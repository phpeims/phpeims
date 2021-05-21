<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateAuthGroupAccessTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function change()
    {
        // 角色授权表
        $this->table('auth_group_access', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci'])
            ->addColumn(Column::unsignedInteger('user_id')->setComment('用户id'))
            ->addColumn(Column::unsignedInteger('auth_group_id')->setComment('用户组id'))
            ->addIndex('user_id')
            ->addIndex('auth_group_id')
            ->addIndex(['user_id', 'auth_group_id'], ['unique' => true])
            ->create();
    }
}
