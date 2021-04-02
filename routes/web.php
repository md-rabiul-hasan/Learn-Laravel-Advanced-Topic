<?php

use App\Http\Controllers\EventListenerController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\FromValidationController;
use App\Http\Controllers\GateController;
use App\Http\Controllers\GatePolicyController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\QueueController;
use App\Http\Controllers\SendMessageEventController;
use Illuminate\Notifications\Notification;

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

##############################################
# Laravel Form Validation
##############################################
Route::get('form-validation',[FromValidationController::class, 'create']);
Route::post('form-validation',[FromValidationController::class, 'store'])->name('form_velidation.store');

##############################################
# Lravel Localization
##############################################
Route::get('/locale/{lang?}', function($lang = null){
    App::setLocale($lang);
    return view('navbar');
});

##############################################
# Lravel Queue
##############################################
Route::get('sendmail', [QueueController::class, 'sendMail']);

##############################################
# Lravel Event Listener
##############################################
Route::get('event-listener', [EventListenerController::class, 'eventListener']);


##############################################
# Lravel Event Listener Broadcast Pusher Echo
##############################################
Route::get('event', [SendMessageEventController::class, 'sendMessage']);

##############################################
# Lravel Gate
##############################################
Route::get('subscribe', [GateController::class, 'subscribe']);

##############################################
# Lravel Gate & Policy
##############################################
Route::get('gatepolicy', [GatePolicyController::class, 'delete'])->middleware('can:is_admin');

##############################################
# Lravel Notification
##############################################
Route::get('notification', [NotificationController::class, 'notify']);
Route::get('send-notification', [NotificationController::class, 'sendNotification']);
Route::get('notification-mark-all-read', [NotificationController::class, 'markAllRead'])->name('notification_all_read');