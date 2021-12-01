<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainersRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:5|max:30',
            'surname' => 'required|min:5|max:30',
            'phone' => 'required|min:10',
            'special' => 'required|min:5|max:100'
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Поле имя является обязательным',
            'surname.required' => 'Поле фамилия является обязательным',
            'phone.required' => 'Поле телефон является обязательным',
            'special.required' => 'Поле специализация является обязательным',
            'name.min' => 'Имя должно содержать минимум 5 символов',
            'name.max' => 'Имя должно содержать не более 30 символов',
            'surname.min' => 'Фамилия должна содержать минимум 5 символов',
            'surname.max' => 'Фамилия должна содержать не более 30 символов'
        ];
    }
}
