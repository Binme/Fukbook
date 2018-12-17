<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Messages;

class MessageController extends Controller
{
    public function getMessageByName(Request $sendTo){
    	$messages = Messages::where("author","=",$sendTo->author)->where("sendTo","=",$sendTo->sendTo)->get();
    	// return dd($messages);
    	return response()->json($messages);
    }
    public function getUserMessage(Request $author){
    	$sendTo =  Messages::where("author","=",$author->data)->select('sendTo')->groupBy('sendTo')->orderBy('created_at','DESC')->get();
    	// return dd($sendTo);
    	return response()->json($sendTo);
    }
}
