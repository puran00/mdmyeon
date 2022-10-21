<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{

    public function create(Request $request){
        $path_img='';
        if($request->file('img')){
            $path_img=$request->file('img')->store('/public/img');
        }
        $content = new Content();
        $content->title=$request->title;
        $content->content=$request->content_post;
        $content->category_id=$request->category_id;
        $content->user_id=Auth::id();
        $content->img='/storage/'.$path_img;

        $content->save();

        return redirect()->route('admin');
    }

    public function edit(Content $content){
        return view('content.editContent', ['content'=>$content]);
    }


}
