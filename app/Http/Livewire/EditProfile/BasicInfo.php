<?php

namespace App\Http\Livewire\EditProfile;

use App\Http\Services\EditProfileComponent;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Livewire\Component;

class BasicInfo extends Component
{
    public $doctor;
    public $first_name;
    public $last_name;
    public $email;
    public $telephone;
    public $profile_picture;

    public function mount($doctor){
        $this->doctor = $doctor;
        $this->first_name = $doctor->first_name;
        $this->last_name = $doctor->last_name;
        $this->email = $doctor->email;
        $this->telephone = $doctor->telephone;
    }

    public function save()
    {
        $this->doctor->first_name = $this->first_name;
        $this->doctor->last_name = $this->last_name;
        $this->doctor->email = $this->email;
        $this->doctor->telephone = $this->telephone;
        $fileName = time().$this->profile_picture->getClientOriginalName();
        $this->doctor->profile_picture = $fileName;
        $this->doctor->profile_picture = $fileName;
        $this->profile_picture->move(public_path("/images/doctors/profile"), $fileName);
        $this->doctor->save();
    }

    public function render()
    {
        return view('livewire.edit-profile.basic-info',[
            'doctor'=>$this->doctor,
        ]);
    }
}
