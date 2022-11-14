<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MessageController;
use App\Models\Inbox;
use App\Models\Rating;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class DashboardController extends Controller
{
    //
    public function index(){
        return view('doctors.dashboard',[
            'doctor'=> Auth::guard('doctors')->user(),
        ]);
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
        $doctor = Auth::guard('doctors')->user();

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
            return redirect()->route('doctor.profile-edit');

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

        return redirect()->route('doctor.profile-edit');
    }
    public function Messages(){
        return view('doctors.messages',[
            'inboxes' => Inbox::all(),
            'doctor' => Auth::guard('doctors')->user()
        ]);
    }
    public function ShowInbox($id){
        $inbox = Inbox::find($id);
        return view('doctors.message',[
            'messages' => $inbox->messages,
            'doctor' => Auth::guard('doctors')->user(),
            'inbox' => $inbox
        ]);
    }
    public function SendMessage(Request $request, $id){
        $sender = $request->input('sender');
        $receiver = $request->input('receiver');
        MessageController::SendMessageToInbox($request->input('content'),$sender,$receiver,$id);
        return redirect('/doctor/dashboard/message/'.$id);
    }
    public function Reviews(){
        $reviews = Rating::query()->where('rateable_id' ,'=', Auth::guard('doctors')->user()->id)->get();
        return view('doctors.reviews',[
            'reviews' => $reviews,
            'doctor'=> Auth::guard('doctors')->user(),
        ]);
    }
    public function blogs(){
        return view('doctors.blogs',[
            'doctor'=>Auth::guard('doctors')->user()
        ]);
    }

    public function ReviewAnswer(Request $request, $reviewID){
        $review = Rating::find($reviewID);
        $review->answer = $request->answer;
        $review->save();
        return redirect('/doctor/dashboard/reviews');
    }
}
