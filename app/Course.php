<?php

namespace App;

use App\Post;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table= "courses";

     public function user(){
    	return $this->belongsTo('App\User', 'id_user', 'id');
    }

    public function post()
    {
    	return $this->hasMany('App\Post','id_course','id');
    }

    public function comment(){
    	return $this->hasMany('App\Comment', 'id_course', 'id');
    }

}
