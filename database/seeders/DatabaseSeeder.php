<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        Category::create(['name' => "Akademik"]);
        Category::create(['name' => "Keuangan"]);
        Category::create(['name' => "Wisuda"]);;

        User::factory(10)->create();

        Post::factory(25)->create();

        Comment::factory(120)->create();
    }
}
