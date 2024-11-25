<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'slug' => fake()->unique()->slug(4, true),
            'content' => fake()->paragraph(),
            'published_at' => fake()->dateTime(),
            'category_id' => Category::factory()->create()->id,
            'user_id' => User::factory()->create()->id,
        ];
    }
}
