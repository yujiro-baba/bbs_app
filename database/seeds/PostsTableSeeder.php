<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = ['食べ物', '仕事', '旅行'];

        foreach ($titles as $title) {
            DB::table('posts')->insert([
                'title' => $title,
                'talktheme' => "${title}について話し合いましょう！",
                'post_time' => Carbon::now('Asia/Tokyo'),
            ]);
        }
    }
}
