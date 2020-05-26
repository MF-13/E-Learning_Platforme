<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'filiere_id','filiere','filiere_description','departement'
    ];
    
    protected $primarykey = 'filiere_id' ;
}
