<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreatePasswordResetsTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function change()
    {
        $this->table('password_resets', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci'])
            ->addColumn(Column::string('email'))
            ->addColumn(Column::string('token'))
            ->addColumn(Column::timestamp('created_at')->setNullable())
            ->addIndex('email')
            ->create();
    }
}
