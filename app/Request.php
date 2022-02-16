<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
        'nom','prenom', 'date_naiss','filiere','num_tele', 'email', 'password','type_user','etat','adresse'
    ];

}
