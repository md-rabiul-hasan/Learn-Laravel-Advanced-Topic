<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\TaskCompleated;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    public function notify(){
        $user = Auth::user();
        //$user->notify(new TaskCompleated);
        Notification::send($user,  new TaskCompleated() );
    }
}
