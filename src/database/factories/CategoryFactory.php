<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->randomElement(['Clothing', 'Food', 'Furniture', 'Appliances', 'Baby and Child Care', 'Electronics and High Tech', 'Specialized Equipment', 'Leisure, Games, and Culture']),
            'image' => 'categories/default.jpg',
        ];
    }
}
