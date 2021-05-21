<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateAdsTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function change()
    {
        // 广告表
        $this->table('ads', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci'])
            ->addTimestamps()
            ->addSoftDelete()
            ->create();
    }
}
