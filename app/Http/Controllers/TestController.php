<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Test;
use App\Course;
use App\Test_result;
use Auth;
use DB;
use App\Score;

class TestController extends Controller
{
    public function gettest($course_id){
    	$course = Course::where('id', $course_id)->first();
    	$test = Test::where('id_course', $course_id)->orderby('id')->get();
    	$countquestion = $test->count('id');

        $id_user = Auth::id();
        $id_test_first = $test->first()->id;
        $test_result = Test_Result::where('id_test',$id_test_first)
                                            ->where('id_user', $id_user)->count('id');
        if($test_result != 0){
            return redirect()->route('result', [$course_id]);
        }
    	return view('page.test', compact('course', 'test', 'countquestion'));
    }

    public function posttest(Request $req){

    	$course = Course::where('id', $req->course)->first();
    	foreach ($req->input('questions', []) as $key => $question) {
            Test_Result::create([
                'id_user' => Auth::User()->id,
                'id_test' => $question,
                'answer' => $req->input('answerss.'.$question),
            ]);
        }
        $id_user= Auth::id();
        $course_id=$req->course;
        $result = DB::table('tests')
            ->join('test_results','tests.id','=','test_results.id_test')
            ->where(['tests.id_course' => $course_id, 'test_results.id_user' => $id_user])
            ->select('tests.id as id', 'tests.content as content', 'tests.a as a', 'tests.b as b', 'tests.c as c', 'tests.d as d', 'tests.true as true', 'test_results.answer as answer')
            ->orderBy('id')->get();
        
        $counttrue = 0;
        foreach($result as $r){
        	if($r->answer == $r->true){
        		$counttrue += 1; 
        	}
        }

        $score= new Score();
        $score->id_user= Auth::id();
        $score->id_course=$req->course;
        $score->total=$counttrue;
        $score->save();
        return redirect()->route('result', [$course->id]);
    }

    public function gettestresult($course_id){
    	$id_user = Auth::id();
    	$test = Test::where('id_course', $course_id)->orderby('id')->get();
    	$id_test_first = $test->first()->id;
    	$test_result = Test_Result::where('id_test',$id_test_first)
											->where('id_user', $id_user)->first();
    	$countquestion = $test->count('id');
    	// $counttrue = DB::table('test')
     //        ->join('test_result','test.id','=','test_result.idtest')
     //        ->where(['test.id_course' => $course_id, 'test_result.id_user' => $id_user])
     //        ->where('test.keytrue', '=','test_result.keychoose')
     //        ->select('test.id')
     //        ->orderBy('id')->get()->count('id');

        $result = DB::table('tests')
            ->join('test_results','tests.id','=','test_results.id_test')
            ->where(['tests.id_course' => $course_id, 'test_results.id_user' => $id_user])
            ->select('tests.id as id', 'tests.content as content', 'tests.a as a', 'tests.b as b', 'tests.c as c', 'tests.d as d', 'tests.true as true', 'test_results.answer as answer')
            ->orderBy('id')->get();
        
        $counttrue = 0;
        foreach($result as $r){
        	if($r->answer == $r->true){
        		$counttrue += 1; 
        	}
        }

        
    	return view('page.result', compact('countquestion', 'counttrue', 'test_result', 'result'));
    }
}
