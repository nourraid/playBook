<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'BD'=> $this->faker->date(),
            'address'=> $this->faker->address(),
            'email' => $this->faker->unique()->safeEmail(),
            'created_at'=>Carbon::today()
        ];
    }
}
