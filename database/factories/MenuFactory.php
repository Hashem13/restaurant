<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Menu;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Menu>
 */
class MenuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Menu::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'category' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 5, 50),
            'description' => $this->faker->sentence,
            'image_path' => $this->faker->imageUrl(),
            'is_house_special' => $this->faker->boolean,
            'created_by' => User::findOrFail(1)->id, // Set to an actual user ID if needed
            'is_available' => $this->faker->boolean,
        ];
    }
}
