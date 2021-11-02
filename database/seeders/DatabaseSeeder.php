<?php

namespace Database\Seeders;

use App\Models\AmazingProduct;
use App\Models\Slider;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Slider::factory(3)->create();
        AmazingProduct::factory(9)->create();
    }
}
