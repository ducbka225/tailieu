<?php

namespace App;

use App\User;
use App\Course;
use App\Test_result;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = "tests";

     public function course()
 {
 	return $this->belongsto('App\Course','id_course','id');
 }  

 public function user()
    {
    	return $this->belongsto('App\User','id_user','id');
    }
public function test_result()
    {
    	return $this->hasMany('App\Test_result','id_test','id');
    }


}
