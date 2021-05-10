<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

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
            'title'          => $this->faker->words(5, true),
            'authors_id'     => $this->faker->randomElement([1, 2, 3, 4]),
            'published_at'   => $this->faker->date(),
            'remember_token' => $this->faker->randomNumber(5, true),
            'description'    => $this->faker->paragraph(20)
        ];
    }
}
