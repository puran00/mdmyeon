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

    public function edit(Category $category){
        return view('category.editCategory', ['category'=>$category]);

    }

    public function update(Request $request, Category $category){
        $category->title=$request->category;
        $category->update();
        return redirect()->route('admin');
    }

    public function destroy(Category $category){
        $category->delete();
        return redirect()->back();
    }
}
