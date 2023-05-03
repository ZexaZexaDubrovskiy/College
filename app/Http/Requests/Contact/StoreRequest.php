<?php

namespace App\Http\Requests\Contact;

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

            'FIO' => 'required|string',
            'post' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string',
            'workTime' => 'required|string',
            'education' => 'required|string',
            'experience' => 'required|string',
            'description' => 'required|string',
            'avatar' => "required | mimes:jpeg,jpg,png | max:1000",


        ];
    }
}
