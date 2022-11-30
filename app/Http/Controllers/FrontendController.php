<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function frontendHome(){
        return view('frontend.index');
    }

    public function LoginFrontend(){
        return view('frontend.login');
    }
}
