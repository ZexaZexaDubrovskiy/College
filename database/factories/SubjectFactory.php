<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subject>
 */
class SubjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $myName = array(
            'ОДБ.02 - Русский язык',
            'ОДП.02 - Математика',
            'ОДБ.06 - Обществознание',
            'ИП.01 - Индивидуальный проект',
            'ОДП.03 - Информатика (2 подгр.)',
            'ОДБ.03 - Литература',
            'ОДБ.09 - Основы безопасности жизнедеятельности',
            'ОДБ.07 - Физическая культура',
            'Поднятие флага',
            'ОДБ.05 - История',
            'ОДБ.04 - Иностранный язык (1 подгр.)',
            'ОДП.03 - Информатика (2 подгр.)',
            'OДБ.04 - Иностранный язык (2 подгр.)',
            'ОДП.03 - Информатика (1 подгр.)',
            'ОДП.01 - Экономика',
            'ОДБ.08 - Астрономия',
        );


        return [
            'name' => $myName[random_int(0, 15)],
        ];
    }
}
