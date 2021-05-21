<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateFormsTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function change()
    {
        // 表单表
        $this->table('forms', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci'])
            ->addTimestamps()
            ->addSoftDelete()
            ->create();
    }
}
