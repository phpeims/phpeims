<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateLogsTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function change()
    {
        // 日志表
        $this->table('logs', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci'])
            ->addColumn(Column::unsignedInteger('user_id')->setComment('用户ID'))
            ->addTimestamps()
            ->create();
    }
}
