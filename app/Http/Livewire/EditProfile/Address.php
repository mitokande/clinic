<?php

namespace App\Http\Livewire\EditProfile;

use Livewire\Component;

class Address extends Component
{
    public $doctor;
    public $city;
    public $address;
    public $state;
    public $zipcode;

    public function mount($doctor){
        $this->doctor = $doctor;

        $this->city = $doctor->city;
        $this->address = $doctor->address;
        $this->state = $doctor->state;
        $this->zipcode = $doctor->zipcode;
    }
    public function save(){
        $this->doctor->city = $this->city;
        $this->doctor->state = $this->state;
        $this->doctor->zipcode = $this->zipcode;
        $this->doctor->address = $this->address;
        $this->doctor->save();
    }
    public function render()
    {
        return view('livewire.edit-profile.address');
    }
}
