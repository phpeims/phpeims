<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateSegmentsTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function change()
    {
        // 内容片段表
        $this->table('segments', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci'])
            ->addTimestamps()
            ->addSoftDelete()
            ->create();
    }
}
