<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        if (auth()->check()) {
            return redirect()->route('dashboard.index');
        }else{
            return view('admin.auth.login');
        }
    }


    public function loginForm(Request $request)
    {
        $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ],
        );

        $credentials = $request->only('username', 'password');

        if (!Auth::attempt($credentials)) {
            return back()->withErrors([
                'message' => 'User or Password is Wrong !'
            ]);
        }
        return redirect()->route('dashboard.index');
    }
}
