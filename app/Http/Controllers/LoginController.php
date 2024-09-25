<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request){

        $datalogin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if (Auth::attempt($datalogin)){
            return redirect('dashboard');
        }
        else {
            return redirect()->back()->withErrors('akun tidak ditemukan');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

}
