<?php

namespace App\Http\Requests\Specialization;

use Illuminate\Foundation\Http\FormRequest;

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
    public function rules()
    {
        return [
            'direction' => 'required|string',
            'title' => 'required|string',
            'fullTime' => 'string',
            'correspondence' => 'string',
            'entranceExam' => 'string',
            'description' => 'string',
            'budget' => 'integer',
        ];
    }
}
