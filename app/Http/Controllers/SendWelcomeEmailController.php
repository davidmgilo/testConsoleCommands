<?php

namespace App\Http\Controllers;

use App\Services\SendwelcomeEmail;
use Illuminate\Http\Request;

class SendWelcomeEmailController extends Controller
{
    //
    public $email;

    /**
     * SendWelcomeEmailController constructor.
     * @param $email
     */
    public function __construct(SendwelcomeEmail $email)
    {
        $this->email = $email;
    }


    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $this->email->send();

        //$data = [];
        //return view('sendWelcomeEmail',$data);
    }

}
