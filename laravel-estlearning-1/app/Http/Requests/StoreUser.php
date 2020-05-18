<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'nom_user' => 'required|min:3',
            'prenom_user' => 'required|min:3',
            'date_naiss_user' => 'required|date',
            'num_tele_user' => 'required',
            'filiere_user' => 'required',
            'email_user' => 'required|email',
            'mdps_user' => 'required|min:5',
            'adresse_user' => 'required',
            'type_user' => 'required',
        ];
    }
}
