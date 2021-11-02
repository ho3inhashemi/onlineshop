<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AmazingProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            // 'category_id' =>$this->faker->numberBetween(1,4),
            'Fa_name' => $this->faker->name(),
            'En_name' => $this->faker->name(),
            'slug' => $this->faker->unique()->slug(),
            'price' => $this->faker->buildingNumber(),
            'explanation' => $this->faker->text(),
            'status' => $this ->faker->boolean(),
            'img' => $this->faker->imageUrl(),
            'views' => $this->faker->buildingNumber(),
            'discount' => $this->faker->buildingNumber()
        ];
    }
}
