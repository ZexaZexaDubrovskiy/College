<?php

namespace Database\Factories;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PostPhoto>
 */
class PostPhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $i = random_int(1, 20);
        $j = random_int(1, 20);

        return [
            'post_id' => $i,
            'photo_id' => $j,
        ];
    }
}
