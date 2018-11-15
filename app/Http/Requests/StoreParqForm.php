<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreParqForm extends FormRequest
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
          'name' => 'required',
          'email' => 'required|string|email|max:255',
          'dob' => 'required',
          'gender' => 'required',
          'q1More' => 'required_if:q1,true',
          'q2More' => 'required_if:q2,true',
          'q3More' => 'required_if:q3,true',
          'q4More' => 'required_if:q4,true',
          'q5More' => 'required_if:q5,true',
          'q6More' => 'required_if:q6,true',
          'q7More' => 'required_if:q7,true',
          'q8More' => 'required_if:q8,true',
          'q9More' => 'required_if:q9,true',
          'q10More' => 'required_if:q10,true',
        ];
    }
    public function messages()
    {
        return [
          'required' => '* Required',
          'required_if' => '* Required if answered YES'
        ];
    }
}
