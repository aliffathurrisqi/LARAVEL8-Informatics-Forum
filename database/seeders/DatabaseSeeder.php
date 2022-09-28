<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Post::create(
            [
                'user_id' => 1,
                'judul' => "Lorem ipsum dolor sit amet consectetur.",
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto numquam asperiores distinctio nam animi aut labore dolor aliquid voluptate quasi, quae inventore quis adipisci eligendi totam minus repudiandae corrupti delectus.",
                'category_id' => 1
            ]
        );

        Post::create(
            [
                'user_id' => 2,
                'judul' => "Lorem ipsum dolor sit amet consectetur.",
                'body' => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, possimus.",
                'category_id' => 1
            ]
        );

        Post::create([
            'user_id' => 3,
            'judul' => "Lorem ipsum dolor sit amet consectetur.",
            'body' => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi tempora, possimus eligendi repudiandae similique labore quibusdam rem optio odio quis.",
            'category_id' => 1
        ]);

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
    }
}
