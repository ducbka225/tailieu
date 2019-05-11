<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Course;
use App\Post;
use App\Test;
use App\Test_result;

class TeacherController extends Controller
{
     public function getlogin()
    {
    	return view('teacher.login');
    }
     public function postlogin(Request $request){    
           $this->validate($request,
            [
                'email'=>'required|email',
                'password'=>'required|min:6',
                
            ],
            [
                'email.required'=>'Vui lòng nhập email!',
                'email.email'=>'Không đúng định dạng email',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu có ít nhất 6 ký tự',
            ]
        );
        
        $user = array('email'=>$request->email, 'password'=>$request->password, 'role'=>$request->role);

        if(Auth::attempt($user)){
            return redirect('teacher/index');
        }

        else{
            return redirect('teacher/login')->with('message','Đăng Nhập thất bại');
        }
        
    }

    public function getlogout(){
        Auth::logout();
        return redirect('teacher/login');
    }

     public function index()
    {
    	return view('teacher.index');
    }

    public function addcourse(){

        return view('teacher.addcourse');
    }

    public function postaddcourse(Request $req){

        $course = new Course;
       
        $course->course_number = $req->txtCourse_number;
        $course->title= $req->txtTitle;
        $course->course_avatar = $req->txtCourse_avatar;
        $course->lenght=$req->txtLenght;
        $course->id_user=Auth::User()->id;
        $course->save();
        return redirect()->route('listcourse',compact('course','id_user'))->with('message', 'Thêm Thành Công');
    }


    public function listcourse(){
    	$user_id= Auth::User()->id;
    	$listcourse = Course::where('id_user',$user_id)->get();
    	return view('teacher.listcourse', compact('listcourse'));
    }
     public function listpost($course_id)
    {
        $listpost=Post::where('id_course',$course_id)->get();
        return view('teacher.listpost',compact('listpost','course_id'));
    }

     public function getaddpost($course_id){

        return view('teacher.addpost', compact('course_id'));
    }

   public function addpost($course_id, Request $req){

        $post = new Post;
        $post->id_course = $course_id;
        $post->title = $req->txtTitle;
        $post->avatar = $req->txtAvatar;
        $post->subcontent = $req->txtSubcontent;
        $post->content=$req->txtContent;
        if($req->hasFile('filename')){
            $file = $req->File('filename');
            $name = $file->getClientOriginalName();
            $duoi = $file->getClientOriginalExtension();
            if($duoi != 'mp3'){
                return redirect()->back()->with('error', 'file không đúng định dạng');
            }

            $savefile = str_random(4)."_".$name;
            while(file_exists("ezuca/audio/".$savefile))
            {
                $savefile = str_random(4)."_".$name;
            }
            $file->move("ezuca/audio/", $savefile);
            $post->subcontent = $savefile;  
        }
        else{
            $post->subcontent = "";
        }    
        $post->save();
        return redirect()->route('listpost', $course_id)->with('message', 'Thêm Thành Công');
    }

    public function deletepost($post_id)
    {
      $post =Post::where('id',$post_id)->first();
      $post->delete();
        
    
     return redirect()->back();
    }

     //all test
    public function listtest($course_id){
        $listtest = Test::where('id_course',$course_id)->get();
        return view('teacher.listtest', compact('listtest','course_id'));
    }

    public function getaddtest($course_id){

        return view('teacher.addtest', compact('course_id'));
    }
     public function postaddtest($course_id, Request $req){

        $test = new Test;
        $test->id_user = Auth::user()->id;
        $test->id_course = $course_id;
        $test->content = $req->txtContent;
        $test->a = $req->txtA;
        $test->b = $req->txtB;
        $test->c = $req->txtC;
        $test->d = $req->txtD;
        $test->true = $req->txtTrue;
        $test->save();
        return redirect()->route('listtest',compact('course_id'))->with('message', 'Thêm Thành Công');
    }

    public function deletetest($test_id)
    {
        $test =Test::where('id',$test_id)->first();
        $test->delete();
        return redirect()->back();
    }

    public function listresult($test_id)
    {
        $listresult=Test_result::where('id_test',$test_id)->get();
        return view('teacher.listresult',compact('listresult','test_id'));
    }



}
