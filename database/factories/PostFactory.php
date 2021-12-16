<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;


class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    protected $model = Post::class;

    public function definition()
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->sentence(1),
            'description' => $this->faker->paragraph(1)
        ];
    }
}
