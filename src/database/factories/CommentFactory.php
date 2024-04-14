<?php
namespace Database\Factories;

use App\Models\BlogPost;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'content' => $this->faker->paragraph,
            'user_id' => User::factory()->create([
                'role' => $this->faker->randomElement(['user', 'donor'])
            ])->id,
            'blog_post_id' => BlogPost::factory()->create()->id,
        ];
    }
}
