<?php

namespace app\model;

use think\Model;

/**
 * Class Comment
 * @package app\model
 */
class Comment extends Model
{
    /**
     * @var string
     */
    protected $table = 'comments';

    /**
     * @var string
     */
    protected $pk = 'id';
}
