<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/ip', function(Request $request){
    return $request->ip();
})->middleware('ipcheck');


Route::get('checkuser/{email}', function($email){
    return "Hello {$email}";
})->middleware(['auth', "checkuser:rabiul.fci@gmail.com,hasan"]);