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
        return view('admin',['categories'=>$categories]);
    }

    public function newCategory(){
        return view('category.newCategory');
    }

    public function content(){
        $categories = Category::all();
        return view('content.addContent
        ',['categories'=>$categories]);
    }

}
