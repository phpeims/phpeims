<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateTypesTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function change()
    {
        // 内容模型表
        $this->table('types', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci'])
            ->addColumn(Column::string('name')->setDefault('')->setComment('模型名称'))
            ->addColumn(Column::string('intro')->setDefault('')->setComment('模型描述'))
            ->addColumn(Column::text('fields')->setComment('模型附加字段'))
            ->addColumn(Column::boolean('system')->setDefault(0)->setComment('系统模型'))
            ->addColumn(Column::boolean('status')->setDefault(0)->setComment('状态'))
            ->addTimestamps()
            ->addSoftDelete()
            ->create();
    }
}
