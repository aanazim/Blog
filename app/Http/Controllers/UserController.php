<?php

namespace App\Http\Controllers;


use App\comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function user(){
    $user = Auth::user();
   $comments = comment::orderBy('id','desc')->where('user_id',$user->id)->limit('5')->get();
   	return view('site.dashboard',compact('user','comments'));
   }
}
