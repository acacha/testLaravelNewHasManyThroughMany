<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /**
     * Get the group that owns the notification.
     */
    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
