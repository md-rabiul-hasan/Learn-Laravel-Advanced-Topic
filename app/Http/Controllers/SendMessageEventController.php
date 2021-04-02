<?php

namespace App\Http\Controllers;

use App\Events\SendMessageEvent;
use Illuminate\Http\Request;

class SendMessageEventController extends Controller
{
    public function sendMessage(){
        event(new SendMessageEvent("Hey man how are  you"));
    }
}
