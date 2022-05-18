<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\User;

class AdminController extends Controller
{
    //login
    public function login(){
        return view('backend.login');
    }
    public function submit_login(Request $request){

        $request->validate([
            'username' => 'required',
            'password' =>'required'
        ]);
        $usercheck = Admin::where(['username'=>$request->username , 'password'=>$request->password])->count();

        if($usercheck>0){
            $userData=Admin::where(['username'=>$request->username , 'password'=>$request->password])->first();
            session(['admindata'=>$userData]);
            return redirect()->route('admin.dashboard')->with('status1','You are logged in');
        }
        else{
            return redirect()->route('admin.login')->with('status2','admin user does not exist');
        }


    }
    public function dashboard(){
        return view('backend.dashboard');
    }


    public function logout(){
        session()->forget(['admindata']);
        return redirect('admin/login');
    }
}
