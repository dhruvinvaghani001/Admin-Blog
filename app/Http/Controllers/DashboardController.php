<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Admin;
use App\Models\Bloguser;

class DashboardController extends Controller
{
    public function show(Request $request){
        $count_category = Category::count();
        $count_post = Post::count();
        $count_comment = Comment::count();
        $count_user = Bloguser::count();    

        return view('backend.dashboard',compact(['count_category','count_post','count_comment','count_user']));
    }
}
