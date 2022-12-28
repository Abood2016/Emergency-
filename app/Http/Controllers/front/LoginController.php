<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function PatientLogin()
    {
        if (auth()->check()) {
            return redirect()->route('front.index');
        } else {
            return view('front.auth.login');
        }
    }


    public function PatientLoginForm(Request $request)
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
        return redirect()->route('front.index');
    }
}
