<?php

namespace App\Http\Controllers;


use App\Http\Services\MessageService;
use App\Models\Inbox;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    //
    public static function SendMessage($content,$sender,$receiver){
        MessageService::SendMessage($content,$sender,$receiver);
        Mail::send("misc.email-inbox",["name"=>$receiver->getFullName(),"content"=>$content],function ($message) use(&$receiver){
            $message->to($receiver->email,$receiver->getFullName())->subject("1 New Message");
        });
    }
    public static function SendMessageToInbox($content,$sender,$receiver,$inbox){
        MessageService::SendMessageToInbox($content,$sender,$receiver,$inbox);
    }
}
