<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'id_quiz','id_etudiant', 'resultat', 'quesiont_corrcete', 'question_incorrecte'
    ];
}
