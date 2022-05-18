<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = new Category;
        $data = Category::all();

        return view('backend.category.index',compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = new Category;
        $request->validate([
            'title' => 'required',
            'image'=>'required',
        ]);
        $file= $request->file('image');
        $filename= date('YmdHi').$file->getClientOriginalName();
        $file-> move(public_path('public/Image'), $filename);
        $cat['image']= $filename;
        $cat->title = $request->title;
        $cat->detail  = $request->detail;
        $cat->save();




        if($cat->save()){
            return redirect()->route('category.index')->with('status1','your Record Added Successfully');
        }
        else{
            return redirect()->route('category.index')->with('status2',"Your Record Not added ! Something Hapeen Wrong");
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
    public function edit(Request $request,$id)
    {
        $cat = Category::find($id);
        return view('backend.category.update-form ',compact('cat'));

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
        $cat = Category::find($id);
        $cat->title = $request->title;
        $cat->detail = $request->detail;




        if($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('public/image'), $filename);
            $cat->image = $request->file('image')->getClientOriginalName();
        }

        $cat->update();
        // dd(url('public/image/'.$cat->image));


        if($cat->save()){
            return redirect()->route('category.index')->with('status1','your record Updated 1successfully');
        }else{
            return redirect()->route('category.index')->with('status2','your updating Process Failed');
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
        $cat = Category::find($id)->delete();
        if($cat){
            return redirect()->route('category.index')->with('status1','Record Deleted Succsessfully');
        }
        else{
            return redirect()->route('category.index')->with('status2','Record not Deleted something Happen Wrong');

        }
    }
}
