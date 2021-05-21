<?php

namespace app\model;

use think\Model;

/**
 * Class AuthGroup
 * @package app\model
 */
class AuthGroup extends Model
{
    /**
     * @var string
     */
    protected $table = 'auth_groups';

    /**
     * @var string
     */
    protected $pk = 'id';

    /**
     * @return \think\model\relation\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, AuthGroupAccess::class);
    }
}
