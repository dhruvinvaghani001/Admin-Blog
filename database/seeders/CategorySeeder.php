<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use Dotenv\Util\Str;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data =[
          ['food','food is necessary for health life'],
          ['technology','technology is imporatnt for future devlopment'],
          ['vr technology','basically  vr technology is imporatnt for virtual technology'],
          ['travel','traveling is important for mid fresh']
      ];

      for($i=0;$i<4;$i++){
        $cat = new Category;
        $cat->title = $data[$i][0];
        $cat->detail = $data[$i][1];
        $cat->save();
      }

    }


}
