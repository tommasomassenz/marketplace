<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //'id_utente' => $this->faker->numberBetween(1, 10),
            //'id_prodotto' => $this->faker->numberBetween(1, 10),
            'voto' => $this->faker->numberBetween(1, 5),
            'commento' => $this->faker->sentence(),
            'data_recensione' => $this->faker->date(),
            //
        ];
    }
}
