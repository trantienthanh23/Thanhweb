<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPassword extends Controller
{
    public function forgot(){
        return view('auth.passwords.reset');
    }
    public function password(Request $request){
        dd($request->all());
    }
}
