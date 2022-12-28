<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppoinmentController extends Controller
{
    public function index()
    {
        $appointments = Appointment::paginate(5);
        return view('admin.appoinments.index', compact('appointments'));
    }



    public function delete(Request $request,$id)
    {
        $app = Appointment::find($id);
        $app->delete();
        return redirect()->back()->with('success', 'appointment Deleted Successfully');
    }
}
