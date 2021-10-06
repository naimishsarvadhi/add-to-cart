<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email',$request->email)->first();

        if($user && $user->email == $request->email){
            session()->put('user',$user);
            return redirect('/dashboard');
        }else{
            return redirect()->back()->with('error','invalid username and password');
        }
    }

    public function logout()
    {
        session()->forget('user');
        return redirect('/');
    }
}
