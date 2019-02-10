<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    public function post (){
    	return $this->hasMany('App\post');
    }
}
