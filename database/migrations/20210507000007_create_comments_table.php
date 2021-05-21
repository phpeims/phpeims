<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateCommentsTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function change()
    {
        // 内容评论表
        $this->table('comments', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci'])
            ->addTimestamps()
            ->addSoftDelete()
            ->create();
    }
}
