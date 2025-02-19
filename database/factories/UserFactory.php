<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'username' => $this->faker->username(),
            'email' => $this->faker->email(),
            'password' => $this->faker->password(),
            'nome' => $this->faker->name(),
            'cognome'=> $this->faker->name(),
            'ddn' => $this->faker->date(),
            'ddr' => $this->faker->date(),
            'indirizzo' => $this->faker->address(),
            'numtelefono' => $this->faker->e164PhoneNumber,
        ];
    }
}
