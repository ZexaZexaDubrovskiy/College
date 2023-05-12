<?php

namespace Database\Factories;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $text = str_repeat($this->faker->text, 50);

        return [
            'title' => $this->faker->streetName,
            'text' => $text,
            'description' => $this->faker->text,
            'type' => random_int(0, 2),
        ];
    }
}
