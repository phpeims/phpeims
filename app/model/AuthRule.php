<?php

namespace app\model;

use think\Model;

/**
 * Class AuthRule
 * @package app\model
 */
class AuthRule extends Model
{
    /**
     * @var string
     */
    protected $table = 'auth_rules';

    /**
     * @var string
     */
    protected $pk = 'id';
}
