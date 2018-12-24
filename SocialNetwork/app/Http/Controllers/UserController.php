<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateSignInRequest;
// use Illuminate\Support\Facades\Auth;
use Auth;
use App\Messages;
use App\Notifications;

class UserController extends Controller
{
    public function login(CreateSignInRequest $request)
    {
        $Email = $request->Email;
        $Password = ($request->Password);
        if(Auth::attempt(['email' => $Email, 'password' => $Password])) {
            return redirect('user/body');
        }
        return redirect()->back()->with('flash_message','Invalid Email or password.');  
    }
    public function logout(){
    	Auth::logout();
    	return redirect('/');
    }
    public function viewBody(){
        $user = Auth::user();
        $messageTimeLines = Messages::where("sendTo","=","Local")->orderBy('created_at','DESC')->get();
        $notifications = Notifications::where("sendTo","=",$user->name)->orderBy('created_at','DESC')->get();
        return view('body',compact('user','messageTimeLines','notifications'));
    }
}
