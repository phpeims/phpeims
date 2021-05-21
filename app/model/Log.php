<?php

namespace app\model;

use think\Model;

/**
 * Class Log
 * @package app\model
 */
class Log extends Model
{
    /**
     * @var string
     */
    protected $table = 'logs';

    /**
     * @var string
     */
    protected $pk = 'id';
}
