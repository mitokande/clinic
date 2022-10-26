<?php

namespace App\Http\Livewire\Patients;

use App\Models\Appointment;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Asantibanez\LivewireCalendar\LivewireCalendar;

use Illuminate\Support\Facades\Auth;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AppointmentsCalendar extends LivewireCalendar
{
    use LivewireAlert;

    public $appointment = [];


    public function events(): Collection
    {
        $patient = Auth::guard('patients')->user();
        return Appointment::query()->where('patient_id',$patient->id)->get()->map(function (Appointment $model) {
            return [
                'id' => $model->id,
                'title' => $model->patient->name . " ile " . explode(" ",$model->appointment_time)[1] . " toplantısı",
                'description' => $model->appointment_subject,
                'date' => $model->appointment_time,
            ];
        });
    }

    public function onEventDropped($eventId, $year, $month, $day)
    {

            $this->alert('error', 'Randevunuzu değiştiremezsiniz.',[
                'position' => 'center',
                'showConfirmButton' => true,
                'confirmButtonText' => 'Tamam'
            ]);






        // This event will fire when an event is dragged and dropped into another calendar day
        // You will get the event id, year, month and day where it was dragged to
    }
    public function onEventClick($eventId)
    {
        $this->emit('openModal','calendar-event',['appointment_id'=>$eventId]);
        // This event is triggered when an event card is clicked
        // You will be given the event id that was clicked

    }
}
