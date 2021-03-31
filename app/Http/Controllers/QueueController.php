<?php

namespace App\Http\Controllers;

use App\Jobs\SendMailJob;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QueueController extends Controller
{
    public function sendMail(){
        $details['to']      = 'nazrul@venturnxt.com';
        $details['name']    = 'Md.Nazrul Islam';
        $details['subject'] = 'About Cavid-19';
        $details['message'] = 'Please stay home, stay safe :)';

        SendMailJob::dispatch($details);
        return "mail sent successfully";
    }
}
