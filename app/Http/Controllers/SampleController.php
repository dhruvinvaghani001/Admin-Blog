<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bloguser;

class SampleController extends Controller
{
    public function add(){
    $bloguser = new Bloguser;
    $bloguser->name = 'harry';
    $bloguser->email = 'harry@gmail.com';
    $bloguser->password = 'harry';
    $bloguser->save();
    }
}
