<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\Symptom;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        if (auth()->check()) {
            $sympotoms = Symptom::all();
            return view('front.index', compact('sympotoms'));
        } else {
            return view('front.auth.login');
        }
    }

    public function sympotomForm(Request $request)
    {
        $sympotom = Symptom::where('id', $request->sympotom)->get();
        foreach ($sympotom as $item) {
            if ($item->is_need == 1) {
                return redirect()->route('need.doctor');
            } else {
                return redirect()->route('NoNeed.doctor');
            }
        }
    }

    public function ISNeed()
    {
        return view('front.output1');
    }

    public function NoNeed()
    {
        return view('front.output2');
    }


    public function appoinment(Request $request)
    {
       Appointment::create([
        'user_id' => auth()->id(),
        'appintment_date' => $request->appintment_date,
       ]);
       return redirect()->back()->with('success', 'Message Sent Successfully');
    }
}
