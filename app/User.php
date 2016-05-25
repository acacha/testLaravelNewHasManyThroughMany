<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The groups that belong to the user.
     */
    public function groups()
    {
        return $this->belongsToMany('App\Group','memberships')->withTimestamps();
    }

    /**
     * The groups that belong to the user.
     */
    public function groups2()
    {
        return $this->belongsToMany('App\Group')->withTimestamps();
    }

    /**
     * Get all of the notifications for the user.
     */
    public function notifications()
    {
        return $this->hasManyThroughMany('App\Notification', 'App\Membership','App\Group','user_id','group_id','group_id','id');
    }

    /**
     * Get all of the notifications for the user.
     */
    public function notifications2()
    {
        return $this->hasManyThroughMany('App\Notification', 'App\GroupUser','App\Group');
    }

}
