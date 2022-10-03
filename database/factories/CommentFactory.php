<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => mt_rand(2, 10),
            'post_id' => mt_rand(1, 25),
            'body' => $this->faker->sentence(mt_rand(5, 8))
        ];
    }
}
