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
       $user = \App\Models\User::factory()->create([
        'name' => 'LeoRnl'
       ]);

       \App\Models\Post::factory(5)->create([
        'user_id' => $user->id
       ]);

    }
}
