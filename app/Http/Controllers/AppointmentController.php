<?php

namespace App\Http\Controllers;

use App\Http\Services\AppointmentService;
use App\Models\Appointment;
use App\Models\Doctor;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class AppointmentController extends Controller
{
    //
    public function Create($username,Request $request){
        AppointmentService::CreateZoomMeeting($username,$request);
    }
    public function BookNowWithDetailsPost($username, Request $request){
        dd($request);
    }
    public function BookNowWithDetails($username){
        $appointments = Appointment::all();
        $appointments = collect($appointments)->mapToGroups(function ($item,$key){
            return [explode(" ",$item['appointment_time'])[0] => $item];
        });
//        return($appointments->get('2022-10-06')[0]->appointment_time);
        return view('appointments.book-with-details',[
            'doctor'=>Doctor::query()->where('username','=',$username)->firstOrFail(),
            'bookings'=> $appointments,
        ]);
    }
}
