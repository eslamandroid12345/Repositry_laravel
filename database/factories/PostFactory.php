<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{

    protected $model = Post::class;

    public function definition()
    {
        return [

            'body' => $this->faker->text(),
            'description' => $this->faker->paragraph(),
            'user_id' => User::inRandomOrder()->first()->id
            
        ];
    }
}
