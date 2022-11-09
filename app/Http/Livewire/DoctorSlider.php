<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DoctorSlider extends Component
{
    public $doctors;
    public function render()
    {
        return view('livewire.doctor-slider');
    }
}
