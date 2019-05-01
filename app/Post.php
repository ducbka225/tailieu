<?php

namespace App;

use App\User;
use App\Comment;
use App\Course;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "posts";
   
    public function comment(){
    	return $this->hasMany('App\Comment', 'id_post', 'id');
    }
    public function course()
 {
 	return $this->belongsto('App\Course','id_course','id');
 }  
}
