<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreField extends FormRequest
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
            //
            'filiere_id' =>  'required|max:4',
            'filiere' => 'required|max:500',
            'departement' => 'required',
            'filiere_description' => 'required'
        ];
    }
}
