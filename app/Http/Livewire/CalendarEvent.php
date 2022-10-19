<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class CalendarEvent extends ModalComponent
{
    public $appointment_id;

    public function mount($appointment_id)
    {

    }
    public function render()
    {
        return view('livewire.calendar-event',[
            'appointment'=>Appointment::find($this->appointment_id),
        ]);
    }
}
