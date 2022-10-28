<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;



    public function GetSender(){
        return $this->sender_type::find($this->sender_id);
    }
    public function GetReceiver(){
        return $this->receiver_type::find($this->receiver_id);
    }

}
