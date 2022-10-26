<?php

namespace App\Http\Services;

use App\Models\Inbox;
use App\Models\Message;

class MessageService{

    public static function SendMessage($content,$sender,$receiver){
        $message = new Message();
        $inbox = self::CreateOrGetInbox($sender,$receiver);
        $inbox->sender_id = $sender->id;
        $inbox->sender_type = $sender::class;
        $inbox->receiver_id = $receiver->id;
        $inbox->receiver_type = $receiver::class;
        $inbox->save();
        $message->inbox_id = $inbox->id;
        $message->sender_id = $sender->id;
        $message->sender_type = $sender::class;
        $message->receiver_id = $receiver->id;
        $message->receiver_type = $receiver::class;
        $message->message = $content;
        $message->is_read = false;
        $message->is_deleted = false;
        $message->attachment_url = "";
        $message->save();
    }


    /**
     * @param $sender
     * @param $receiver
     * @return Inbox
     */
    public static function CreateOrGetInbox($sender, $receiver) : Inbox{
        $inbox = Inbox::query()->where([
            ['sender_type','=',$sender::class],
            ['sender_id','=',$sender->id],
            ['receiver_type','=',$receiver::class],
            ['receiver_id','=',$receiver->id]
        ])->orWhere([
            ['sender_type','=',$receiver::class],
            ['sender_id','=',$receiver->id],
            ['receiver_type','=',$sender::class],
            ['receiver_id','=',$sender->id]
        ])->firstOrCreate();
        return $inbox;
    }
    public static function SendMessageToInbox($content,$sender,$receiver,$inbox){
        $sender = json_decode($sender);
        $receiver = json_decode($receiver);
        $message = new Message();
        $message->inbox_id = $inbox;
        $message->sender_id = $sender[1];
        $message->sender_type = $sender[0];
        $message->receiver_id = $receiver[1];
        $message->receiver_type = $receiver[0];
        $message->message = $content;
        $message->is_read = false;
        $message->is_deleted = false;
        $message->attachment_url = "";
        $message->save();
    }
}
