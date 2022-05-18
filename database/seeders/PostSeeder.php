<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[
            ['food has a important role ?','food is necessary for health life and also food is neccacery for our healthy life and also important role for our mind and etc.','#food#foodimportant',1],
            ['technology ruined people life ?','technology is imporatnt for future devlopment and also imporatnt role on the devlopment of country and also life nof people','#technology#techworld',2],
            ['vr technology has future ?','basically  vr technology is imporatnt for virtual technology vr technology has more concept all about virtual world','#vrtechnology#vrWorld',3],
            ['travel has imporatnt role on life ?','traveling is important for mid fresh','#travel#traveling',4]
        ];

        for($i=0;$i<4;$i++){
          $post = new Post;
          $post->title = $data[$i][0];
          $post->detail = $data[$i][1];
          $post->tags= $data[$i][2];
          $post->category_id = $data[$i][3];
          $post->user_id = 0;
          $post->fullimage = "hello";
          $post->save();
        }
    }
}
