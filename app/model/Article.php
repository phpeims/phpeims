<?php

namespace app\model;

use think\Model;

/**
 * Class Article
 * @package app\model
 */
class Article extends Model
{
    /**
     * @var string
     */
    protected $table = 'articles';

    /**
     * @var string
     */
    protected $pk = 'id';
}
