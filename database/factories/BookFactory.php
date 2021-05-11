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
            'author'         => $this->faker->name(),
            'pages'          => $this->faker->randomNumber(3, true),
            'published_at'   => $this->faker->date(),
            'user_id'        => 1,
            'description'    => $this->faker->paragraph(20),
        ];
    }
}
