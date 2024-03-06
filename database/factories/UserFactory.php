<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $increment = 0; // Inisialisasi variabel $increment sebagai bilangan bulat

        $increment++;
        $kodeUser = 'USR' . str_pad($increment, 3, '0', STR_PAD_LEFT);

        return [
            'role_id' => mt_rand(1, 4),
            'kode_user' => $kodeUser,
            'nama' => fake()->name(),
            'alamat' => $this->faker->address(),
            'no_telpon' => mt_rand(18101, 82101),
            'username' => $this->faker->userName(),
            'password' => static::$password ??= Hash::make('password'),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
