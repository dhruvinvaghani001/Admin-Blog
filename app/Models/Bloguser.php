<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Bloguser extends Model
{
    use HasFactory;

    protected $fillable = ['name','email','password'];

    public function setPasswordAttribute($password){
            $this->attributes['password'] = Hash::make($password);
    }
}
