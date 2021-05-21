<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateContentsTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function change()
    {
        // 内容表
        $this->table('contents', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci'])
            ->addColumn(Column::text('content')->setComment('描述'))
            ->create();
    }
}
