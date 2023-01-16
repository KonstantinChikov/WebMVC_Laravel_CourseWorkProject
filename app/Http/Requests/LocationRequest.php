<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LocationRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required'
        ];
    }
    public function messages(){
        $rules =  [ 'name.required' => 'Location name is required'];
        return $rules;
    }
}
