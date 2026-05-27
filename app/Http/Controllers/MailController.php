<?php

namespace App\Http\Controllers;

use App\Jobs\SendWelcomeEmail;
use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request)
    {
        if ($request->method() === 'POST') {
            SendWelcomeEmail::dispatch()->onQueue('send-emails');
//            dispatch(new \App\Jobs\SendWelcomeEmail());
        }
        return view('jobtester');
    }
}
