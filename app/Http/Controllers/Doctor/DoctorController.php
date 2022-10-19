<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    //
    public function index($username){
        $doctor = Doctor::query()->where('username','=',$username)->firstOrFail();
        views($doctor)->record();
        return view('doctors.index',[
            'doctor' => $doctor,
        ]);
    }
    public function list(){
        return view('doctors.list');
    }
}
