<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class Dashboardcontroller extends Controller
{

  public function index(){

    return view('admin.dashboard');
  }



}
