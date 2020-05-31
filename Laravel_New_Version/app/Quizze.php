<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quizze extends Model
{
    //
    protected $fillable = [
        'id_quiz','nom_quiz', 'id_prof', 'id_filiere', 'dernier_delai'
    ];

    protected $primarykey = 'id_quiz' ;
}
