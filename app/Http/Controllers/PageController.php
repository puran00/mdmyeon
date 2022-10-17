<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        $categories = Category::all();

        return view('admin');
    }

    public function newCategory(){
        return view('category.newCategory');
    }

}
