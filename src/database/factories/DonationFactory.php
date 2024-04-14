<?php
namespace Database\Factories;

use App\Models\Donation;
use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class DonationFactory extends Factory
{
    protected $model = Donation::class;

    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'image' => 'uploads/default.jpg',
            'description' => $this->faker->paragraph,
            'address' => $this->faker->address,
            'item_condition' => $this->faker->randomElement(['good', 'needs repair', 'damaged', 'exclusivity']),
            'status' => $this->faker->randomElement(['pending', 'approved', 'rejected']),
            'donor_availability' => $this->faker->randomElement(['weekend', 'evening', 'flexible']),
            'user_id' => User::factory()->create(['role' => 'donor']),
            'categorie_id' => Category::factory(),
        ];
    }
}
