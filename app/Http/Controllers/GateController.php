<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GateController extends Controller
{
    public function subscribe(){
        if (Gate::allows('subsciber-check', Auth::user())) {
            return "You are my old Subscriber";
        }else{
            return "Your subscription successfully";
        }
    }
}
