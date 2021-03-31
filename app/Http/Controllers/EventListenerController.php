<?php

namespace App\Http\Controllers;

use App\Events\TaskEvent;
use Illuminate\Http\Request;

class EventListenerController extends Controller
{
    public function eventListener(){
        event(new TaskEvent("Hey Rabiul How is life"));
    }
}
