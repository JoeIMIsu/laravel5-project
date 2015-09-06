<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<=10;$i++) {
            DB::table('posts')->insert([
                'title'       => 'title-'.$i.'-'. str_random(10),
                'slug'        => 'slug-'.$i.'-'. str_random(10),
                'short'       => 'short-'.$i.'-'. str_random(100),
                'description' => 'description-'.$i.'-'. str_random(500),
                'status'      => rand(0, 1),
                'views'       => rand(1, 100),
                'created_at'   => new DateTime,
                'updated_at'   => new DateTime
            ]);
        }
    }
}
