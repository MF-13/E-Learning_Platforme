<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nom_user' => ['required', 'string', 'max:255'],
            'prenom_user' => ['required', 'string', 'max:255'],
            'date_naiss_user' => ['required'],
            'num_tele_user' => ['required'],
            'filiere_user' => ['required'],
            'email_user' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'mdps_user' => ['required', 'string', 'min:8'],
            'adresse_user' => ['required'],
            'type_user' => ['required'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'nom_user' => $data['nom_user'],
            'prenom_user' => $data['prenom_user'],
            'date_naiss_user' => $data['date_naiss_user'],
            'num_tele_user' => $data['num_tele_user'],
            'filiere_user' => $data['filiere_user'],
            'email_user' => $data['email_user'],
            'mdps_user' => Hash::make($data['mdps_user']),
            'adresse_user' => $data['adresse_user'],
            'type_user' => $data['type_user'],
        ]);

    }
}
