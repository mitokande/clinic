<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DoctorStats extends Component
{
    public $doctor;


    public function star($star){
        if(Auth::guard('patients')->check()){
            $this->doctor->rate($star,"memnun oldum");
        }
    }
    public function render()
    {
        return view('livewire.doctor-stats',[
            'rating' => $this->doctor->averageRating,
            'views' => views($this->doctor)->count(),
            'patients' => Appointment::query()->where('doctor_id','=',$this->doctor->id)->count(),
        ]);
    }
}
