<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MessageController;
use App\Models\Inbox;
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
        return redirect()->route('patient.dashboard');
    }
    public function bookings(){
        return view('patients.bookings',[
            'patient'=>Auth::guard('patients')->user(),
        ]);
    }
    public function profile_edit(){

        return view('patients.edit-profile',[
            'patient'=> Auth::guard('patients')->user(),
        ]);
    }
    public function profile_save(Request $request){

        $doctor = Auth::guard('patients')->user();
        foreach ($request->keys() as $key){
            if($key != "_token"){
                $doctor->{$key} = $request->input($key);            }
        }
        $doctor->save();

        return redirect()->route('patient.profile-edit');
    }
    public function Messages(){
        return view('patients.messages',[
            'inboxes' => Inbox::all(),
            'patient' => Auth::guard('patients')->user()
        ]);
    }
    public function ShowInbox($id){
        $inbox = Inbox::find($id);
        return view('patients.message',[
            'messages' => $inbox->messages,
            'patient' => Auth::guard('patients')->user(),
            'inbox' => $inbox
        ]);
    }
    public function SendMessage(Request $request, $id){
        $sender = $request->input('sender');
        $receiver = $request->input('receiver');
        MessageController::SendMessageToInbox($request->input('content'),$sender,$receiver,$id);
        return redirect('/patient/dashboard/message/'.$id);
    }
}
