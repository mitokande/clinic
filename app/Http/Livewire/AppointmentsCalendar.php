<?php

namespace App\Http\Livewire;

use App\Models\Appointment;
use Jantinnerezo\LivewireAlert\LivewireAlert;

use Asantibanez\LivewireCalendar\LivewireCalendar;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Livewire\Component;
use RealRashid\SweetAlert\Facades\Alert;

class AppointmentsCalendar extends LivewireCalendar
{
    use LivewireAlert;

    public $appointment = [];
    public function events(): Collection
    {
        return Appointment::all()->map(function (Appointment $model) {
            return [
                'id' => $model->id,
                'title' => $model->patient->getFullName() . " ile " . explode(" ",$model->appointment_time)[1] . " toplantısı",
                'description' => $model->appointment_subject,
                'date' => $model->appointment_time,
            ];
        });
    }

    public function onEventDropped($eventId, $year, $month, $day)
    {

        $appointment = Appointment::find($eventId);
        $date = explode(" ",$appointment->appointment_time);
        $date[0] = $year . "-" . $month . "-" . $day;
        $newdate = implode(" ",$date);
        $newdate = new Carbon($newdate);
        $appointment_mirror = Appointment::query()->where('appointment_time','=',$newdate)->first();
        if($appointment_mirror != null){
            $this->alert('error', 'Aynı Tarih Saatte Başka Bir Randevu Var.',[
                'position' => 'center',
                'showConfirmButton' => true,
                'confirmButtonText' => 'Tamam'
            ]);
        }else{
            $appointment->appointment_time = $newdate;
            $appointment->save();
        }





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
