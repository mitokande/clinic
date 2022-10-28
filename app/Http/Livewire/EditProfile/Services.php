<?php

namespace App\Http\Livewire\EditProfile;

use Illuminate\Http\Request;
use Livewire\Component;

class Services extends Component
{
    public $doctor;
    public $service = [];
    public $service_price = [];

//    public function mount($doctor){
//        $this->doctor = $doctor;
//
////        dd($this->service);
//    }
    public function add(){
        $serv = json_decode($this->doctor->service,true);
//        array_merge($serv,["a"=>""]);
        $serv[" "] = " ";
        $this->doctor->service = json_encode($serv);
        $this->doctor->save();
//        dd($this->doctor->service);
//        array_push($this->service,"");
    }
    public function save(Request $request){
        dd($request->input('serverMemo')['data']);
        dd($this->service);
    }

    public function delService($service){
        $serv = json_decode($this->doctor->service,true);


        unset($serv[$service]);
//        dd(json_encode($serv));
        $this->doctor->service = json_encode($serv);
//        dd($this->doctor->service);
        $this->doctor->save();
//        dd($serv);

    }

    public function render()
    {
        if($this->doctor->service != null){
            $this->service = array_keys(json_decode($this->doctor->service,true));
            $this->service_price = array_values(json_decode($this->doctor->service,true));

        }
        return view('livewire.edit-profile.services',['doctor'=>$this->doctor]);
    }
}
