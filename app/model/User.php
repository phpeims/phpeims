<?php

namespace app\model;

use think\Model;

/**
 * Class User
 * @package app\model
 */
class User extends Model
{
    /**
     * @var string
     */
    protected $table = 'users';

    /**
     * @var string
     */
    protected $pk = 'id';

    /**
     * @return \think\model\relation\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(AuthGroup::class, AuthGroupAccess::class);
    }
}
