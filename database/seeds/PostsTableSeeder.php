<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'author' => str_random(10),
            'text' => str_random(500),
            'title' => str_random(10),
        ]);
    }
}
