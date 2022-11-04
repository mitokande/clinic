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
        if (!Auth::guard('patients')->user()->isFullyRegistered()) {
            return redirect('/patient/dashboard/');
        }
        return view('patients.bookings',[
            'patient'=>Auth::guard('patients')->user(),
        ]);
    }
    public function profile_edit(){
        if (!Auth::guard('patients')->user()->isFullyRegistered()) {
            return redirect('/patient/dashboard/');
        }
        return view('patients.edit-profile',[
            'patient'=> Auth::guard('patients')->user(),
        ]);
    }
    public function profile_save(Request $request){

        $patient = Auth::guard('patients')->user();

        if($request->file('profile_picture') != null){
            $fileName = time().$request->file('profile_picture')->getClientOriginalName();
            $patient->profile_picture = $fileName;
            $request->file('profile_picture')->move(public_path("/images/patients/profile"), $fileName);
        }
        foreach ($request->keys() as $key){
            if($key != "_token" &&   $key != "profile_picture"){
                $patient->{$key} = $request->input($key);            }
        }
        $patient->save();

        return redirect()->route('patient.profile-edit');
    }
    public function Messages(){
        if (!Auth::guard('patients')->user()->isFullyRegistered()) {
            return redirect('/patient/dashboard/');
        }
        return view('patients.messages',[
            'inboxes' => Inbox::all(),
            'patient' => Auth::guard('patients')->user()
        ]);
    }
    public function ShowInbox($id){
        if (!Auth::guard('patients')->user()->isFullyRegistered()) {
            return redirect('/patient/dashboard/');
        }
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
