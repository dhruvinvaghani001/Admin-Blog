<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Comment;

class HomeController extends Controller
{
    public function  show(Request $request){
        $posts = Post::paginate(4);
        $cat = Category::all();
        $setting = Setting::first();

        return view('frontend.home',compact(['posts','cat','setting']));
    }
    public function postdetail(Request $request , $id){
        $post = Post::find($id);
        $comment = Comment::where('post_id',$id)->get();
        $cat = Category::all();

        return view('frontend.blog-detail-page.blog-details',compact(['post','cat','comment']));
    }
    public function showblogdetail(Request $request){
        $posts = Post::paginate(2);
        $cat = Category::all();
        $setting = Setting::first();
        return view('frontend.blog-detail-page.blog-list',compact(['posts','cat','setting']));
    }
}
