<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
        'id_quiz','n_question', 'question', 'rep_correcte', 'rep2','rep3'
    ];

}
