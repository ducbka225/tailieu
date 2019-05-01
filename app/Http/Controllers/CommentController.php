<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Comment;
use App\Post;
class CommentController extends Controller
{
    public function postCommentPost($post_id, Request $req){
    	$comment = new Comment;
    	$comment->id_post = $post_id;
    	$comment->id_user = Auth::user()->id;
    	$comment->content = $req->commentpost;
    	$comment->save();
    	return redirect()->back()->with('thongbao', 'Viết bình luận thành công!');
    	// $comment=new Comment(array(
     //      'post_id'=> $Request->get('post_id'),
     //      'content'=>$Request->get('content')
    	// ));
    	// $comment->save();
    	// return redirect()->back()->with('status','your comment has been created!');
    }
}
