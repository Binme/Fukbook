<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications;
use App\Events\NotificationEvent;

class NotificationController extends Controller
{
    public function makeNotification(Request $request)	{
    	$createNotification = new Notifications;
        $createNotification = $request->all();
        $createNotification['category'] = "message";
    	$notifications = Notifications::create($createNotification);
    	event(
    		$n = new NotificationEvent($notifications)
    	);
    	return $notifications;
    }
}
