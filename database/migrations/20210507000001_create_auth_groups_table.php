<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateAuthGroupsTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function change()
    {
        // 角色表
        $this->table('auth_groups', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci'])
            ->addColumn(Column::string('title')->setDefault('')->setComment('用户组名称'))
            ->addColumn(Column::text('rules')->setComment('用户组拥有的规则id，多个规则","隔开'))
            ->addColumn(Column::tinyInteger('status')->setDefault(1)->setComment('状态：为1正常，为0禁用'))
            ->addTimestamps()
            ->addSoftDelete()
            ->create();
    }
}
