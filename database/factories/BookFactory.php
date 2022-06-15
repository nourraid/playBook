<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'description' => $this->faker->text(200),
            'author_id' =>Author::all()->random(),
            'publisher' => $this->faker->name(),
            'edition' => $this->faker->numberBetween(1,20),
            'language' => $this->faker->languageCode(),
            'page_number' => $this->faker->numberBetween(30,300),
            'available' => $this->faker->numberBetween(1,100),
            'price' => $this->faker->numberBetween(1,30),
            'category_id' =>Category::all()->random(),
            'imageName' => $this->faker->imageUrl(),
            'bookPDF' => $this->faker->url(),
            'created_at'=>Carbon::today()

        ];
    }
}
