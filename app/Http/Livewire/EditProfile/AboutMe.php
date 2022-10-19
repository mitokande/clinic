<?php

namespace App\Http\Livewire\EditProfile;

use App\Models\Specialization;
use Livewire\Component;

class AboutMe extends Component
{

    public $doctor;
    public $specialization = [];
    public $about;

    public function mount($doctor){
        $this->doctor = $doctor;
        $this->about = $doctor->about;
        $this->specialization = json_decode($doctor->specialization);
    }

    public function save(){
        $this->doctor->specialization = json_encode($this->specialization);
        $this->doctor->about = $this->about;
        //dd($this->doctor->specialization);
        foreach (json_decode($this->doctor->specialization) as $spec){
            $specialization = Specialization::firstOrCreate(array('name' => $spec));
        }
        $this->doctor->save();
    }

    public function render()
    {
        return view('livewire.edit-profile.about-me',['doctor'=>$this->doctor]);
    }
}
