<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Models\Inbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('doctors.dashboard');
    }
    public function profile_edit(){

        return view('doctors.edit-profile',[
            'doctor'=> Auth::guard('doctors')->user(),
        ]);
    }
    public function bookings(){
        return view('doctors.bookings',[
            'doctor'=>Auth::guard('doctors')->user(),
        ]);
    }
    public function profile_save(Request $request){
        $service = array_combine($request->input('service'),$request->input('service_price'));
        foreach ($service as $serv=>$price){
            if(empty($serv)){
                unset($service[$serv]);
            }
        }

        $request['service'] = $service;

        unset($request['service_price']);

        $doctor = Auth::guard('doctors')->user();
        foreach ($request->keys() as $key){
            if($key != "_token"){
                $doctor->{$key} = $request->input($key);            }
            }
        $doctor->save();

        return redirect()->route('doctor.profile-edit');
    }
    public function Messages(){

    }
    public function ShowInbox($id){
        $inbox = Inbox::find($id);
        return view('doctors.messages',[
            'messages' => $inbox->messages,
            'doctor' => Auth::guard('doctors')->user()
        ]);
    }
}
