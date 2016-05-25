<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class UserNotificationsController extends Controller
{
    public function showNotifications($user_id)
    {
        $user = User::findOrFail($user_id);
        foreach ($user->notifications as $notification) {
            echo "Message: " . $notification->message . " | group_id: " . $notification->group_id . " | notification_id: " . $notification->id . "<br/>";
        }
    }

    public function showNotifications2($user_id)
    {
        $user = User::findOrFail($user_id);
        foreach ($user->notifications2 as $notification) {
            echo "Message: " . $notification->message . " | group_id: " . $notification->group_id . " | notification_id: " . $notification->id . "<br/>";
        }
    }
}
