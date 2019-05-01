<?php

namespace App;
use App\Course;
use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
 protected $table= "lessons"
 
 public function comment()
 {
 	return $this->hasMany('App\Comment','id_lesson','id');
 } 
}
