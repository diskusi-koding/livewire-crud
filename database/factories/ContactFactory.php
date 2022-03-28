<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama_depan' => $this->faker->firstName,
            'nama_belakang' => $this->faker->lastName,
            'email' => $this->faker->email,
            'telepon' => $this->faker->phoneNumber,
            'alamat' => $this->faker->address,
            'status' => $this->faker->randomElement(['aktif', 'nonaktif']),

        ];
    }
}
