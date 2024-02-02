<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customers>
 */
class CustomersFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nik' => fake()->nik(),
            'nama' => fake()->name(),
            'telepon' => fake()->phoneNumber(),
            'alamat' => fake()->address(),
            'tgl_lahir' => fake()->date(),
            'foto_sim' => 'fotosim.png',
            'user_id' => rand(1, 4)
        ];
    }
}
