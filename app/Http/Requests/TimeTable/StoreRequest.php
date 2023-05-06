<?php

namespace App\Http\Requests\TimeTable;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    //'direction' => 'required|string',
    public function rules()
    {
        return [
            'description' => '',
            'group_id' => 'required|int',
            'subject_id' => 'required|int',
            'room_id' => 'required|int',
            'teacher_id' => 'required|int',
            'date_time_table_id' => 'required|int',
            'lesson_id' => 'required|int',
        ];
    }
}
