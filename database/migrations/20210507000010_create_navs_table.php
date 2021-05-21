<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateNavsTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function change()
    {
        // 导航表
        $this->table('navs', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci'])
            ->addTimestamps()
            ->addSoftDelete()
            ->create();
    }
}
