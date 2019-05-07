<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repcomment extends Model
{
    protected $table = "repcomments";

     public function comment(){
    	return $this->belongsto('App\Comment', 'id_comment', 'id');
    }
     public function user()
    {
    	return $this->belongsto('App\User','id_user','id');
    }
}
