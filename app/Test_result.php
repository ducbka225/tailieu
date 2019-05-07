<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test_result extends Model
{
    protected $table = "test_results";

    protected $fillable =[ 
    'id_user',
    'id_test',
    'answer',
    ];

     public function test()
 {
 	return $this->belongsto('App\Test','id_test','id');
 }  
}
