<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateArticlesTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function change()
    {
        // 内容表
        $this->table('articles', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci'])
            ->addColumn(Column::string('title')->setComment('标题'))
            ->addColumn(Column::string('keywords')->setComment('关键词'))
            ->addColumn(Column::string('description')->setComment('描述'))
            ->addTimestamps()
            ->addSoftDelete()
            ->create();
    }
}
