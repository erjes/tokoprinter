<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;

class logacontroller extends Controller
{
    public function index(){
        return view('admin.login');
    }
    public function login(Request $request){
        $email   = $request->email;
        $password = $request->password;

        $user = user::where('email', $email)->where('password', $password)->first();

        if ($user) {
            return view('admin.index');
        }
        else {
            // return response()->json(['message' => 'Username atau Password Salah'], 401);
            return redirect()->back()->withErrors([
             'Email atau Password Salah',
            ]);
        }
    }
}
