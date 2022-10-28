<?php

namespace App\Http\Livewire;

use App\Http\Controllers\MessageController;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use LivewireUI\Modal\ModalComponent;

class SendMessageModal extends ModalComponent
{
    public $doctor;
    public $content;
    public function mount(){
        $this->doctor = Doctor::find(1);
    }
    public function SendMessage(){
        MessageController::SendMessage($this->content,Auth::guard('patients')->user(),$this->doctor);
        $this->emit('closeModal');
    }
    public function render()
    {
        return view('livewire.send-message-modal');
    }
}
