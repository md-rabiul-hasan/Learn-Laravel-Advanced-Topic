<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Channel;

class ChannelController extends Controller
{
    public function index(){
        $channels = Channel::orderBy('name')->get();
        return view('channel.index', compact('channels'));
    }


    public function postCreate(){
        $channels = Channel::orderBy('name')->get();
        return view('post.create', compact('channels'));
    }

}
