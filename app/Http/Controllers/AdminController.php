<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use App\Course;
use App\Post;
use App\Test;
use App\Test_result;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getlogin()
    {
    	return view('admin.login');
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
            return redirect('admin/index');
        }

        else{
            return redirect('admin/login')->with('message','Đăng Nhập thất bại');
        }
        
    }

    public function getlogout(){
        Auth::logout();
        return redirect('admin/login');
    }


    public function listcourse(){
    	$listcourse = Course::all();
    	return view('admin.listcourse', compact('listcourse'));
    }

    public function index()
    {
    	return view('admin.index');
    }

     public function listuser(){
    	$listuser = User::all();
    	return view('admin.listuser', compact('listuser'));

    }
    public function listpost($course_id)
    {
        $listpost=Post::where('id_course',$course_id)->get();
        return view('admin.listpost',compact('listpost','course_id'));
    }

    public function post(){
        $allpost = Post::all();
        return view('admin.allpost', compact('allpost'));
    }

     public function getaddpost($course_id){

        return view('admin.addpost', compact('course_id'));
    }

   public function addpost($course_id, Request $req){

        $post = new Post;
        $post->id_course = $course_id;
        $post->title = $req->txtTitle;
        $post->avatar = $req->txtAvatar;
        $post->subcontent = $req->txtSubcontent;
        $post->content=$req->txtContent;
        $post->save();
        return redirect()->route('listpost', $course_id)->with('message', 'Thêm Thành Công');
    }

    //all test
    public function listtest($course_id){
        $listtest = Test::where('id_course',$course_id)->get();
        return view('admin.listtest', compact('listtest','course_id'));
    }

    public function alltest()
    {
        $alltest=Test::all();
        return view('admin.alltest',compact('alltest'));
    }

    public function listresult($test_id)
    {
        $listresult=Test_result::where('id_test',$test_id)->get();
        return view('admin.listresult',compact('listresult','test_id'));
    }
}
