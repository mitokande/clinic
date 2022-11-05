<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function list(){
        $doctors = Doctor::all();
        return view('admin.doctors',[
            'doctors'=>$doctors
        ]);
    }

    public function profile_edit($doctorID){
        return view('doctors.edit-profile',[
            'doctor'=> Doctor::find($doctorID),
        ]);
    }
    public function profile_save(Request $request,$doctorID){
        $service = array_combine($request->input('service'),$request->input('service_price'));
        foreach ($service as $serv=>$price){
            if(empty($serv)){
                unset($service[$serv]);
            }
        }

        $request['service'] = $service;

        unset($request['service_price']);

        $doctor = Doctor::find($doctorID);
        foreach ($request->keys() as $key){
            if($key != "_token"){
                $doctor->{$key} = $request->input($key);            }
        }
        $doctor->save();

        return redirect()->route('doctors.profile-edit');
    }
    public function add_doctor(){
        return view('admin.add-doctor');
    }
}
