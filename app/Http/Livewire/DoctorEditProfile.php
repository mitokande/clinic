<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DoctorEditProfile extends Component
{
    public $doctor;
    public function mount(){
        $this->doctor = Auth::guard('doctors')->user();
    }
    public function delService($service){
        $serv = json_decode($this->doctor->service,true);


        unset($serv[$service]);
//        dd(json_encode($serv));
        $this->doctor->service = json_encode($serv);
//        dd($this->doctor->service);
        $this->doctor->save();
//        dd($serv);

    }
    public function render()
    {

        return view('livewire.doctor-edit-profile',[
            'doctor' => $this->doctor,
        ]);
    }
}
