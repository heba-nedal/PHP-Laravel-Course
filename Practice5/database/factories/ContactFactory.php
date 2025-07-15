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
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique->email(),
            'phone' => $this->faker->phoneNumber(),
            'msg' => $this->faker->words(10, true),
            'image' => 'SiteOne_1752495039_667932582.bird-8788491_1280.jpg',
        ];
    }
}
