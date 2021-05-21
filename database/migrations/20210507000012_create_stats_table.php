<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateStatsTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function change()
    {
        // 统计表
        $this->table('stats', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci'])
            ->addTimestamps()
            ->create();
    }
}
