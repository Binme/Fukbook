<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use App\Notifications;
use App\Events\RedisEvent;
use App\Events\NotificationEvent;

class RedisController extends Controller
{
    public function index(){
        $messages = Messages::all();
        return view('messages',compact('messages'));
    }
    public function postSendMessage(Request $request){
        $messages = Messages::create($request->all());
    	event(
    		$e = new RedisEvent($messages)
    	);
        $createNotification = new Notifications;
        $createNotification = $request->all();
        $createNotification['category'] = "message";
        $createNotification['content'] = "send you a message";
        $notifications = Notifications::create($createNotification);
        event(
            $n = new NotificationEvent($notifications)
        );
        return $messages;
    }

}