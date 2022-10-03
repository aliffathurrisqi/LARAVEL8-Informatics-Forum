<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(2, 11),
            'judul' => $this->faker->sentence(mt_rand(2, 10)),
            'body' => $this->faker->sentence(mt_rand(5, 10)),
            'category_id' => mt_rand(1, 3)
        ];
    }
}
