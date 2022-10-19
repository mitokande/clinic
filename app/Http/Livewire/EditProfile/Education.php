<?php

namespace App\Http\Livewire\EditProfile;

use Livewire\Component;

class Education extends Component
{
    public $doctor;
    public $education = [];
    public function mount($doctor){
        $this->doctor = $doctor;
        $this->education = json_decode($doctor->education);
    }
    public function save(){
        $this->doctor->education = json_encode($this->education);
        $this->doctor->save();
    }
    public function render()
    {
        return view('livewire.edit-profile.education',['doctor'=>$this->doctor]);
    }
}
