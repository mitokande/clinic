<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inbox extends Model
{
    use HasFactory;

    public function messages()
    {
        return $this->hasMany('App\Models\Message');
    }
    public function GetInboxPartipicients(){
        return [$this->sender_type::find($this->sender_id),$this->receiver_type::find($this->receiver_id)];
    }
}
