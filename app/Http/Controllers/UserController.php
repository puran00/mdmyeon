<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request){
        $user = new User();
        $user->firstname=$request->firstname;
        $user->lastname=$request->lastname;
        $user->login=$request->login;
        $user->phone=$request->phone;
        $user->email=$request->email;
        $user->password=md5($request->password);
        $user->is_admin=false;

        $user->save();

        return redirect()->route('auth');
    }

    public function authorization(Request $request){
        $user=User::query()->where('login', $request->login)
            ->where('password', md5($request->password))->first();

        if ($user){
            Auth::login($user);
            if($user->is_admin==1){
                return redirect()->route('admin');
            }
            if($user->is_admin==0){
                return redirect()->route('welcome');
            }
        } else{
            return redirect()->back();
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }

}
