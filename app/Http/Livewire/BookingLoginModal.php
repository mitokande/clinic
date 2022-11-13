<?php

namespace App\Http\Livewire;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Patient;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class BookingLoginModal extends ModalComponent
{
    public $doctor;

    public $email;
    public $password;
    public function mount($doctorID){
        $this->doctor = Doctor::find($doctorID);
    }
    public function LoginBeforeMessage(){
        $model = Patient::query()->where('email',$this->email)->firstOrFail();

        if(!Hash::check($this->password,$model->password)){

            return back()->with('error','Email or Password is incorrect.');
        }

        Auth::guard('patients')->login($model);
        session(['guard'=>'patients']);
        Auth::guard('doctors')->logout();
        return redirect('/doctor/'.$this->doctor->username.'/book-now');
    }
    public function render()
    {
        return view('livewire.booking-login-modal');
    }
}
