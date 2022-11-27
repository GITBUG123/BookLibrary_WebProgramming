<?php

namespace Database\Factories;

use App\Models\Publisher;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'publisher_id' => $this->faker->numberBetween(1, 4),
            'author' => $this->faker->name(),
            'year' => $this->faker->year(),
            'synopsis' => $this->faker->paragraph(2, true)
        ];
    }
}
