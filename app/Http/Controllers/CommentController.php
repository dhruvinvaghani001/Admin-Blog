<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function add_comment(Request $request){
       $request->validate([
           'username' => 'required',
           'email' =>  'required',
           'message' => 'required'
       ]);

    //    $data=[
    //           'name' => $request->username,
    //           'email' => $request->email,
    //           'comment' => $request->message,
    //           'post_id' => $request->post_id,
    //         ];

        $comment = new Comment;
        $comment->name = $request->username;
        $comment->email = $request->email;
        $comment->comment = $request->message;
        $comment->post_id = $request->post_id;
        $comment->save();
        if($comment->save()){
            return redirect()->route('postdetail',[$request->post_id])->with('status1','Your comment added Succssessfully !');
        }
        else{
            return redirect()->route('postdetail',[$request->post_id])->with('status2','Your comment not added something happen wrong!');

        }
    }
}
