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
        Category::create(['name' => "Wisuda"]);

        User::create(
            [
                'username' => "5180411327",
                'name' => "Aliffathur Risqi Hidayat",
                'password' => md5("5180411327")
            ]
        );

        User::create(
            [
                'username' => "5180411095",
                'name' => "Khoirun Nisa",
                'password' => md5("5180411095")
            ]
        );

        User::create(
            [
                'username' => "5180411330",
                'name' => "Ariga Fiandanu",
                'password' => md5("5180411330")
            ]
        );

        User::create(
            [
                'username' => "5180411329",
                'name' => "Aprilyani Sanjaya",
                'password' => md5("5180411329")
            ]
        );

        User::factory(8)->create();

        Post::factory(25)->create();

        Comment::factory(120)->create();
    }
}
