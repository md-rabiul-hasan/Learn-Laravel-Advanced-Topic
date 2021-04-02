<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class GatePolicyController extends Controller
{
    public function delete(){
        $this->authorize('is_admin', Auth::user());
        dd("rabiul");
    }
}
