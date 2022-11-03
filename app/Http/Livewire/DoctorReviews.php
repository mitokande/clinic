<?php

namespace App\Http\Livewire;

use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class DoctorReviews extends Component
{
    public $doctor;
    public $ratings;
    public $star;
    public $comment;

    public function starsComment($star,$comment){
        if(Auth::guard('patients')->check()){
            $this->doctor->rate($star,$comment);
            Mail::send("misc.email-review",["name"=>$this->doctor->getFullName(),"content"=>$comment,"star"=>$star],function ($message){
                $message->to($this->doctor->email,$this->doctor->getFullName())->subject("1 New Message");
            });
        }
    }
    public function render()
    {
        $this->ratings = Rating::query()->where('rateable_id','=',$this->doctor->id)->where('comment','!=', 'null')->get()->reverse();
        return view('livewire.doctor-reviews',[
            'ratings' => $this->ratings,
        ]);
    }
}
