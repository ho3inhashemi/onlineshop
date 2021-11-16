<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */


    public function definition()
    {
        return [
            // 'category_id' =>$this->faker->numberBetween(0,5),
            'name' => $this->faker->name(),
            'explanation' => $this->faker->text(),
            'price' => $this->faker->buildingNumber(),
            'count' =>$this->faker->numberBetween(2,13),
            'image' => $this->faker->imageUrl(),
            'images' => json_encode(['first' => $this->faker->imageUrl(),
                                    'second' => $this->faker->imageUrl(),
                                    'third' => $this->faker->imageUrl()]),


            'images' => json_encode([$this->faker->imageUrl(),
                                     $this->faker->imageUrl(),
                                     $this->faker->imageUrl()]),

        ];
    }
}
