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
Route::get('test/{course_id}','PageController@gettest');
Route::post('result/{course_id}','PageController@result');

Route::get('post/{course_id}','PageController@post');
//admin
Route::get('admin/login','AdminController@getlogin');
Route::post('admin/login','AdminController@postLogin');

Route::get('admin/logout','AdminController@getlogout');
 
Route::get('admin/index','AdminController@index');
// list user
Route::get('admin/listuser','AdminController@listuser');
//list course
Route::get('admin/listcourse','AdminController@listcourse');
//list lesson
Route::get('admin/post/{course_id}', 'AdminController@listpost')->name('listpost');

//all lesson
Route::get('admin/post','AdminController@post');

Route::get('admin/addpost/{course_id}', 'AdminController@getaddpost')->name('addpost');
Route::post('postaddpost/{course_id}', 'AdminController@addpost');

// all test
Route::get('admin/test/{course_id}','AdminController@listtest')->name('listtest');

Route::get('admin/alltest','AdminController@alltest')->name('alltest');

Route::get('admin/result/{test_id}','AdminController@listresult')->name('listresult');