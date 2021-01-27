<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name,
            'isbn' => $this->faker->isbn13,
            'price' => $this->faker->randomDigit,
            'stock' => $this->faker->randomDigit,
            'author_id' => $this->faker->randomDigit
        ];
    }
}
