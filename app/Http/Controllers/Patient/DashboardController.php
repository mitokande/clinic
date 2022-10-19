<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{

    public function index(){
        return view('patients.dashboard',[
            'patient'=> Auth::guard('patients')->user(),
        ]);
    }
    public function FinishOnboard(Request $request){
        $patient = Auth::guard('patients')->user();
        $patient->age = $request->age;
        $patient->weight = $request->weight;
        $patient->height = $request->height;
        $patient->gender = $request->gender;
        $patient->save();
        return redirect('patients.dashboard');
    }
    public function bookings(){
        return view('patients.bookings',[
            'patient'=>Auth::guard('patients')->user(),
        ]);
    }
}
