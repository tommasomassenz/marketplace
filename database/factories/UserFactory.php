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
            'first_name' => $this->faker->name(),
            'last_name'=> $this->faker->name(),
            'birth_day' => $this->faker->date(),
            'registration_day' => $this->faker->date(),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->e164PhoneNumber,
        ];
    }
}
