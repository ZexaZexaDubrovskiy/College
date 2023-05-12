<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Specialization>
 */
class SpecializationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->jobTitle(),
            'direction' => $this->faker->ipv4(),
            'fullTime' => '3г 10м | 2г 10 м',
            'correspondence' => '3г 10м | 2г 10 м',
            'entranceExam' => 'Русский язык, Математика, Информатика',
            'description' => 'Очень востребованная профессия в будущем! Вступайте в наши ряды, ребята!',
            'budget' => random_int(0, 120000),
        ];
    }
}
