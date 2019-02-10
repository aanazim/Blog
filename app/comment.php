<?php

namespace App;

use Illuminate\Database\Eloquent\Concerns\belongsTo;
use Illuminate\Database\Eloquent\Model;

class comment extends Model
{


   public function user()
   {
   	return $this->belongsTo('App\User');
   }
   public function post(){
   	return $this->belongsTo('App\post');
   }
}
