<?php

namespace App\Services;

use App\Mail\WelcomeEmail;
use Mail;

class SendwelcomeEmail
{
    public function send()
    {
        Mail::to('davidmgilo@gmail.com')->send(new WelcomeEmail());
        dump("Sending email!");
    }
}