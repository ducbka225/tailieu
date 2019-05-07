<?php

namespace App;
use App\Post;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table= "comments";

    public function post()
    {
    	return $this->belongsto('App\Post','id_post','id');
    }
    public function user()
    {
    	return $this->belongsto('App\User','id_user','id');
    }

     public function course()
 {
 	return $this->belongsto('App\Course','id_course','id');
 }  
    public function repcomment()
    {
        return $this->hasMany('App\Repcomment','id_comment','id');
    }
}
