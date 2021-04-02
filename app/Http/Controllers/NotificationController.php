<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\MyFirstNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Notifications\TaskCompleated;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;

class NotificationController extends Controller
{
    public function notify(){
        $user = Auth::user();
        //$user->notify(new TaskCompleated);
        Notification::send($user,  new TaskCompleated());
    }

    public function sendNotification(){
        $user = User::first();
  
        $details = [
            'greeting'   => 'Hi Artisan',
            'body'       => 'This is my first notification from Laravel',
            'thanks'     => 'Thank you for using Laravel',
            'actionText' => 'View My Site',
            'actionURL'  => url('/'),
            'order_id'   => 101
        ];
  
        Notification::send($user, new MyFirstNotification($details));
   
        dd('done');
    }

    public function markAllRead(){
        Auth::user()->unreadNotifications->markAsRead();
        return redirect()->back();
    }
}
