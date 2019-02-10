<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
   public $timestamps = false;

   public function Category(){

   	return $this->belongsTo('App\Category');

   }

   public function User (){

   	return $this->belongsTo('App\User');
   	
   }
   public function comments(){
   	return $this->hasMany('App\comment');
   }
}

