<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(Request $request){
        $category = new Category();
        $category->title=$request->category;

        $category->save();

        return redirect()->route('admin');
    }
}
