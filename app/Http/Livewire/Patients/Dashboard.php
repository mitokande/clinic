<?php

namespace App\Http\Livewire\Patients;

use Livewire\Component;

class Dashboard extends Component
{
    public $patient;

    public $age;
    public $gender;
    public $weight;
    public $height;

    public $isFullyRegistered = false;
    public function mount($patient){

        $this->patient = $patient;

    }
    public function save(){
        dd($this->age);
        $this->patient->age = $this->age;
        $this->patient->gender = $this->gender;
        $this->patient->weight = $this->weight;
        $this->patient->height = $this->height;
        $this->patient->save();
    }

    public function render()
    {
        if($this->patient->isFullyRegistered()){
            $this->isFullyRegistered = true;
        }
        return view('livewire.patients.dashboard',[
            'show' => $this->isFullyRegistered
        ]);

    }
}
