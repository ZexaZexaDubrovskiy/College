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
    public function definition()
    {
        $i = random_int(1, 14);

        $file = file_get_contents('myimages/' . $i .'.jpg');

        return [
            'FIO' => $this->faker->name,
            'post' => $this->faker->jobTitle(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'workTime' => '9:00-18:00',
            'education' => 'Высшее, неполное дошкольное, среднее проф. образование',
            'experience' => random_int(1, 20),
            'description' => '-',
            'avatar' => $file,
        ];
    }
}
