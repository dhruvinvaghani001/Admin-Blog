<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;

class SettingController extends Controller
{
    public function index(){
        $setting = Setting::first();
       return view('backend.setting.index',compact(['setting']));
    }

    //storig data
    public function store(Request $request){
        $countData = Setting::count();
        if($countData==0){
            $setting = new Setting;
            $setting->comment_auto = $request->comment_auto;
            $setting->user_auto = $request->user_auto;
            $setting->recent_post_limit = $request->recent_post_limit;
            $setting->popular_post_limit = $request->popular_post_limit;
            $setting->comment_limit = $request->comment_limit;
            $setting->save();
        }
        else{
            $firstData = Setting::first();
            $setting = Setting::find($firstData->id);
            $setting->comment_auto = $request->comment_auto;
            $setting->user_auto = $request->user_auto;
            $setting->recent_post_limit = $request->recent_post_limit;
            $setting->popular_post_limit = $request->popular_post_limit;
            $setting->comment_limit = $request->comment_limit;
            $setting->save();
        }
        if($setting->save()){
            return redirect()->route('setting.index')->with('status1','Data has been added successfully');
        }
        else{
            return redirect()->route('setting.index')->with('status2','Record not added ! something happen wrong');
        }
   }

}
