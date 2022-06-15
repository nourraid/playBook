<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Favorite>
 */
class FavoriteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'book_id'=>Book::all()->random(),
            'user_id'=>Category::all()->random(),
            'created_at'=>Carbon::today()

        ];
    }
}
