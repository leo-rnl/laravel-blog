<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::truncate();
        \App\Models\Category::truncate();
        \App\Models\Post::truncate();


        $user = \App\Models\User::factory()->create();



        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);
        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);
        $hobby = Category::create([
            'name' => 'Hobby',
            'slug' => 'hobby'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-family-post',
            'exerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nam distinctio illo nemo itaque harum eaque consectetur placeat esse error rem excepturi, debitis totam unde voluptatem minus ipsam corrupti sapiente.</p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'exerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet nam distinctio illo nemo itaque harum eaque consectetur placeat esse error rem excepturi, debitis totam unde voluptatem minus ipsam corrupti sapiente.</p>'
        ]);
    }
}
