<?php

namespace App\Http\Livewire;

use App\Models\Rating;
use Illuminate\Support\Facades\Auth;
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
