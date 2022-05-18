<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = new Post;
        $data = Post::all();
        $cat = Category::all();
        return view('backend.post.index',compact(['data','cat']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats = Category::all();
        return view('backend.post.add',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = Category::find($request->category);

        $post = new Post;
        $post->user_id = 0;
        $request->validate([
            'title' => 'required',
            'image'=>'required',
            'detail'=>'required',
            'tags'=>'required',
        ]);
        $post->category_id=$request->category;
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/post-image'), $filename);
        $post['fullimage']= $filename;
        $post->title = $request->title;
        $post->detail  = $request->detail;
        $post->tags = $request->tags;
        $category->post()->Save($post);




        if($post->save()){
            return redirect()->route('post.index')->with('status1','your Record Added Successfully');
        }
        else{
            return redirect()->route('post.index')->with('status2',"Your Record Not added ! Something Hapeen Wrong");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        $cat = Category::all();
        $curenr_cat = Category::find($post->category_id);
        return view('backend.post.update-form ',compact(['post','cat','curenr_cat']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->detail = $request->detail;
        $post->category_id = $request->category;
        $post->tags=$request->tags;


        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('public/post-image'), $filename);
            $post->fullimage = $request->file('image')->getClientOriginalName();
        }

        $post->update();
        // dd(url('public/image/'.$cat->image));


        if($post->save()){
            return redirect()->route('post.index')->with('status1','your record Updated 1successfully');
        }else{
            return redirect()->route('post.index')->with('status2','your updating Process Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id)->delete();
        if($post){
            return redirect()->route('post.index')->with('status1','Record Deleted Succsessfully');
        }
        else{
            return redirect()->route('post.index')->with('status2','Record not Deleted something Happen Wrong');

        }
    }
}
