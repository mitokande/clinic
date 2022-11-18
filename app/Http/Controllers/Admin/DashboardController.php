<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
    public function profile_update(Request $request,$doctorID){
        $doctor =Doctor::find($doctorID);

        if(!empty($request->first_name)){
            foreach ($request->keys() as $key){
                if($key != "_token" && $key != "profile_picture"){
                    $doctor->{$key} = $request->input($key);            }
                }
            $fileName = time().$request->file('profile_picture')->getClientOriginalName();
            $doctor->profile_picture = $fileName;
            $doctor->profile_picture = $fileName;
            $request->file('profile_picture')->move(public_path() . '/images/doctors/profile/', $fileName);
            $doctor->save();
            return redirect('doctor/dashboard/edit-profile/'.$doctor->id);

        }
        $service = array_combine($request->input('service'),$request->input('service_price'));
        foreach ($service as $serv=>$price){
            if(empty($serv)){
                unset($service[$serv]);
            }
        }

        $request['service'] = $service;

        unset($request['service_price']);

        foreach ($request->keys() as $key){
            if($key != "_token"){
                $doctor->{$key} = $request->input($key);            }
        }
        $doctor->save();

        return redirect('doctor/dashboard/edit-profile/'.$doctor->id);
    }
    public function add_doctor(){
        return view('admin.add-doctor');
    }

    public function create_doctor(Request $request){

        $doctor = new Doctor();


        $fileName = time().$request->file('profile_picture')->getClientOriginalName();
        $request->file('profile_picture')->move(public_path() . '/images/doctors/profile/', $fileName);
        $service = array_combine($request->input('service'),$request->input('service_price'));
        foreach ($service as $serv=>$price){
            if(empty($serv)){
                unset($service[$serv]);
            }
        }

        $request['service'] = $service;

        unset($request['service_price']);

        $doctor->first_name = $request->first_name;
        $doctor->last_name = $request->last_name;
        $doctor->email = $request->email;
        $doctor->password = Hash::make('123123123');

        $doctor->medicine_field_id = $request->medicine_field_id;
        $doctor->doctor_title_id = $request->doctor_title_id;

        $doctor->telephone = $request->telephone;
        $doctor->profile_picture = $fileName;

        $doctor->specialization = json_encode($request->specialization);
        $doctor->education = json_encode($request->education);

        $doctor->about = $request->about;
        $doctor->city = $request->city;
        $doctor->state = $request->state;
        $doctor->zipcode = $request->zipcode;
        $doctor->address = $request->address;
        $doctor->username = Doctor::getUsername($doctor->title()->title_name.' '.$doctor->getFullName());

        $doctor->service = json_encode($request['service']);
        //dd($doctor);
        $doctor->save();
        return redirect('doctor/dashboard/doctors');

    }
    public function delete_doctor($doctorID){
        Doctor::findOrFail($doctorID)->delete();
        return redirect('doctor/dashboard/doctors');
    }

}
