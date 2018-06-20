<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Male extends FormRequest
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
            'email' => 'required|email',
            'password' => 'required|string|confirmed',
            'password_confirmation' => 'required',
            'username' => 'required|string',
            'phone' => 'required|string',
            'main_description' => 'required|string',
            'city_id' => 'required|numeric',
            'other_person_description' => 'required|string',
            'dob' => 'required|string',
            'social_status' => 'required',Rule::in(['single','married','divorced','willow']),
            'weight' => 'required|string',
            'height' => 'required|string',
            'skin_color' => 'required',Rule::in(['white','black','dark_brown','brown','7enty_dark','7enty_white']),
            'physique' => 'required',Rule::in(['thin','medium_thin','sporty','fat','huge']),
            'education' => 'required',Rule::in(['medium_school','high_school','university','PHD','self_study']),
            'financial_status' => 'required',Rule::in(['poor','lower_than_medium','medium','more_than_medium','good','mastora','rich']),
            'health_details' => 'required|string',
            'career_field' => 'required|string',
            'job' => 'required|string',
            'salary' => 'required|numeric',
            'image' => 'required|image',
        ];
    }
}
