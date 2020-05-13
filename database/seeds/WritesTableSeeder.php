<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WritesTableSeeder extends Seeder
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
            DB::table('writes')->insert([
                'post_id' => 1,
                'content' => "${title}は僕も好きです！",
                'write_time' => Carbon::now(),
            ]);
        }
    }
}
