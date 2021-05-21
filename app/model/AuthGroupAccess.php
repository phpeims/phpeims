<?php

namespace app\model;

use think\model\Pivot;

/**
 * Class AuthGroupAccess
 * @package app\model
 */
class AuthGroupAccess extends Pivot
{
    /**
     * @var string
     */
    protected $table = 'auth_group_access';
}
