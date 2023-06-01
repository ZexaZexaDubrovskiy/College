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

        $text = str_repeat("Тут будет текст", 130);

        $myTitle = array(
            'Учебная тренировка сборного эвакуационного пункта ',
            'Результаты областной олимпиады «АРТ-ИДЕИ В ПОЛИГРАФИИ» профессионального мастерства',
            'Творческий конкурс "Безопасность в сети Интернет',
            'Конкурс чтецов «Поэт в России – больше, чем поэт»',
            'Областная олимпиада профессионального мастерства «АРТ-ИДЕИ В ПОЛИГРАФИИ»',
            'Библиотечный урок «Литературные премии 2022 года»',
            'Библиотечный урок «Сталинград – гордая память истории»',
            'Конкурс чтецов «И в мире нет таких вершин, что взять нельзя»',
            'Интерактивная выставка «Татьянин день»',
            'Наркотики и закон',
            'Памятки по безопасности',
            'Конкурс "Новогоднее творчество',
        );

        return [
            'title' => $myTitle[random_int(0, 11)],
            'text' => $text,
            'description' => $this->faker->text,
            'type' => random_int(0, 2),
        ];
    }
}
