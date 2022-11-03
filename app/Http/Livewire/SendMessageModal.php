<?php

namespace App\Http\Livewire;

use App\Http\Controllers\MessageController;
use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class SendMessageModal extends ModalComponent
{
    public $doctor;
    public $content;
    public $email;
    public $test;
    public $password;
    public function mount($doctorID){
        $this->doctor = Doctor::find($doctorID);
    }
    public function SendMessage(){
        MessageController::SendMessage($this->content,Auth::guard('patients')->user(),$this->doctor);
        $this->emit('closeModal');
    }
    public function LoginBeforeMessage(){
        $model = Patient::query()->where('email',$this->email)->firstOrFail();

        if(!Hash::check($this->password,$model->password)){

            return back()->with('error','Email or Password is incorrect.');
        }

        Auth::guard('patients')->login($model);
        Auth::guard('doctors')->logout();
    }
    public function render()
    {

        if(Auth::guard('patients')->check()){
            return view('livewire.send-message-modal',[
                'doctor'=>$this->doctor,
                'test' =>$this->test,
            ]);
        }
        else{
            return view('livewire.send-message-modal-login',[
                'doctor'=>$this->doctor
            ]);
        }
    }
}
