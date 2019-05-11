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
        // $comment->id = $request->get('comment_id');
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
    public function delete(Request $request)
    {
      $comment = Comment::find($request->get('comment_id'));
      if ($comment==null) return response()->json(['success'=>""]);
      $user_id = $request->get('user_id');
      if ($user_id != \Auth::user()->id && \Auth::user()->id !=1 ) {
        return response()->json(['success'=>"Bạn không có quyền xoá bình luận người khác!"]);
      } else {
        $comment->delete();
      }
      return response()->json(['success'=>""]);
    }
}
