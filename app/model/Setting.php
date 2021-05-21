<?php

namespace app\model;

use think\Model;

/**
 * Class Setting
 * @package app\model
 */
class Setting extends Model
{
    /**
     * @var string
     */
    protected $table = 'settings';

    /**
     * @var string
     */
    protected $pk = 'id';
}
