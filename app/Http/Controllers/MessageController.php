<?php

namespace App\Http\Controllers;


use App\Http\Services\MessageService;
use App\Models\Inbox;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    //
    public static function SendMessage($content,$sender,$receiver){
        MessageService::SendMessage($content,$sender,$receiver);
    }
    public static function SendMessageToInbox($content,$sender,$receiver,$inbox){
        MessageService::SendMessageToInbox($content,$sender,$receiver,$inbox);
    }
}
