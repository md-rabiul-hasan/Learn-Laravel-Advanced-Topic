<?php

namespace App\Http\Controllers;

use App\Http\Requests\FromValidationRequest;
use Illuminate\Http\Request;


class FromValidationController extends Controller
{
    public function create(){
        return view('form_velidation.create');
    }

    public function store(FromValidationRequest $request){
        return $request->all();
    }
}
