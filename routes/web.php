<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('trangchu', 'PageController@index');

//Đăng ký tài khoản
Route::get('signup', 'PageController@getSignup');
Route::post('signup', 'PageController@postSignup');

//Đăng Nhập
Route::get('login', 'PageController@getLogin');
Route::post('login', 'PageController@postLogin');

//Đăng xuất
Route::get('log-out',[
	'as'=>'logout',
	'uses'=>'PageController@getLogout'
]);

Route::get('details/{id}', 'PageController@getDetails');

// thông tin cá nhân

Route::get('student/info', 'PageController@getStudentInfo')->middleware('userlogin');

// Route::get('student/updateinfo', 'PageController@getUpdateInfo')->middleware('auth');

Route::post('updateinfo', 'PageController@postUpdateInfo')->middleware('userlogin');

Route::get('changepassword', 'PageController@getChangePassword')->middleware('auth');
Route::post('changepassword', 'PageController@postChangePassword');

Route::post('comment_post/{post_id}', 'CommentController@postCommentPost');


Route::get('courses/{id}', 'PageController@getcourses');

//test


// Route::get('test-result','PageController@getResult');

Route::get('post/{course_id}','PageController@post')->middleware('userlogin');
//admin
Route::get('admin/login','AdminController@getlogin');
Route::post('admin/login','AdminController@postLogin');

Route::get('admin/logout','AdminController@getlogout');
 
Route::get('admin/index','AdminController@index')->middleware('adminlogin');
// list user
Route::get('admin/listuser','AdminController@listuser')->name('listuser')->middleware('adminlogin');
Route::get('admin/deleteuser/{user_id}','AdminController@deleteuser');
Route::get('admin/adduser','AdminController@getadduser')->middleware('adminlogin');
Route::post('postadduser','AdminController@adduser');

//list course
Route::get('admin/listcourse','AdminController@listcourse')->name('listcourse')->middleware('adminlogin');
Route::get('admin/deletecourse/{course_id}','AdminController@deletecourse');
//list lesson
Route::get('admin/post/{course_id}', 'AdminController@listpost')->name('listpost')->middleware('adminlogin');

Route::get('deletepost/{post_id}','AdminController@deletepost');

Route::get('admin/addcourse','AdminController@addcourse')->middleware('adminlogin');
Route::post('postaddcourse','AdminController@postaddcourse');

//all lesson
Route::get('admin/post','AdminController@post')->middleware('adminlogin');

Route::get('admin/addpost/{course_id}', 'AdminController@getaddpost')->name('addpost')->middleware('adminlogin');
Route::post('postaddpost/{course_id}', 'AdminController@addpost');

// all test
Route::get('admin/test/{course_id}','AdminController@listtest')->name('listtest')->middleware('adminlogin');

Route::get('admin/addtest/{course_id}', 'AdminController@getaddtest')->name('addtest')->middleware('adminlogin');
Route::post('postaddtest/{course_id}','AdminController@postaddtest');
Route::get('deletetest/{test_id}','AdminController@deletetest');


Route::get('admin/alltest','AdminController@alltest')->name('alltest')->middleware('adminlogin');

Route::get('admin/result/{test_id}','AdminController@listresult')->name('listresult')->middleware('adminlogin');

//test
Route::get('test/{course_id}', 'TestController@gettest')->middleware('auth');
Route::post('post-test', 'TestController@posttest');
Route::get('result/{course_id}', 'TestController@gettestresult')->name('result')->middleware('auth');
