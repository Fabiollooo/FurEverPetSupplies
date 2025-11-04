<?php

namespace App\Controllers;

class LoginController extends BaseController
{
    public function index2()
    {      
        return view('templates/header')
                    .view('loginform');
    }

    /* Add functionability of the form here (leter) */
}
