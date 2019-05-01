<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test_result extends Model
{
    protected $table = "test_results";

     public function test()
 {
 	return $this->belongsto('App\Test','id_test','id');
 }  
}
