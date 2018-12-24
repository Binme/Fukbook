<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Messages;
use App\User;
use DB;

class MessageController extends Controller
{
    public function getMessageByName(Request $sendTo){
    	$messages = Messages::where([["sendTo","=",$sendTo->sendTo],["author","=",$sendTo->author]])->orWhere([["sendTo","=",$sendTo->author],["author","=",$sendTo->sendTo]])->get();
    	// return dd($sendTo->all());
    	return response()->json($messages);
    }
    public function getUserMessage(Request $sendTo){
    	$author =  Messages::select('author','sendTo')->where("sendTo","=",$sendTo->data)->orWhere("author","=",$sendTo->data)->groupBy('author','sendTo')->get();
        if (!$author) {
            return response()->json("khong co ai");
        }
        return response()->json($author);
    }
}
