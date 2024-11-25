<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'content' => fake()->sentence(3, true),
            'slug' => fake()->unique()->slug(4, true),
            'article_id' => Article::factory()->create()->id,
            'user_id' => User::factory()->create()->id,
        ];
    }
}
