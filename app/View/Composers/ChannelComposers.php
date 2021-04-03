<?php
namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\Channel;

class ChannelComposers{
    public function compose(View $view){
        return $view->with('channels', Channel::select('id','name')->orderBy('name')->get());
    }
}