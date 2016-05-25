<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    /**
     * The users that belong to the group.
     */
    public function users()
    {
        return $this->belongsToMany('App\User','memberships')->withTimestamps();
    }

    /**
     * Get the group's notifications .
     */
    public function notifications()
    {
        return $this->hasMany('App\Notification');
    }
}
