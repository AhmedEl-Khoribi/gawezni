<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;


class Female extends FormRequest
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
            'fname' => 'required|string',
            'lname' => 'required|string',
            'email' => 'required|email|unique:clients',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required',
            'username' => 'required|string',
            'phone' => 'required|string',
            'city_id' => 'required|numeric',
            'dob' => 'required|string',
            'image' => 'required|image',
        ];
    }
}
