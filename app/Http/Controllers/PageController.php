<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class
PageController extends Controller
{
    public function RegPage(){
        return view('registration');
    }

    public function auth(){
        return view('auth');
    }

    public function admin(){
        return view('admin');
    }

}
