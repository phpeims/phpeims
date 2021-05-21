<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateAuthRulesTable extends Migrator
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function change()
    {
        // 权限表
        $this->table('auth_rules', ['engine' => 'InnoDB', 'collation' => 'utf8mb4_general_ci'])
            ->addColumn(Column::unsignedInteger('parent_id')->setDefault(0)->setComment('父级ID'))
            ->addColumn(Column::string('name')->setUnique()->setDefault('')->setComment('规则标识'))
            ->addColumn(Column::string('title')->setDefault('')->setComment('规则名称'))
            ->addColumn(Column::string('icon')->setDefault('')->setComment('ICON图标'))
            ->addColumn(Column::boolean('menu')->setDefault(0)->setComment('是否为管理菜单'))
            ->addColumn(Column::tinyInteger('type')->setDefault(1)->setComment('验证类型'))
            ->addColumn(Column::tinyInteger('status')->setDefault(1)->setComment('状态：为1正常，为0禁用'))
            ->addColumn(Column::string('condition')->setDefault('')->setComment('规则表达式，为空表示存在就验证，不为空表示按照条件验证'))
            ->addColumn(Column::unsignedInteger('sort')->setDefault(0)->setComment('菜单排序'))
            ->create();
    }
}
