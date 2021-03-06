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
            'En_name' => $this->faker->name(),
            'slug' => $this->faker->slug(),
            'explanation' => $this->faker->text(),
            'price' => $this->faker->buildingNumber(),
            'count' =>$this->faker->numberBetween(2,13),
            'img' => $this->faker->imageUrl(),
            'images' => json_encode([$this->faker->imageUrl(),
                                     $this->faker->imageUrl(),
                                     $this->faker->imageUrl()]),

        ];
    }
}
