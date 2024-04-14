<?php
namespace Database\Factories;

use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BlogPostFactory extends Factory
{
    protected $model = BlogPost::class;

    public function definition()
    {
        return [
            'user_id' => User::factory()->create(['role' => 'association']),
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph,
            'reading_time' => $this->faker->numberBetween(1, 30), 
            'views_count' => $this->faker->numberBetween(0, 1000),
        ];
    }
}
