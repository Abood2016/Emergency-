<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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


    public function register()
    {
        return view('front.auth.register');
    }

    public function registerForm(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user =  User::create([
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->route('patient.login');
    }


    public function logout(Request $request)
    {
        // dd($request->all());
        auth()->logout();
        return redirect()->route('front.index');
    }
}
