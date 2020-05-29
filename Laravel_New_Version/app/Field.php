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
        'id','filiere','filiere_description','departement'
    ];
    

    public function classes(){
        return $this->hasMany('App\classe');
    }

    public function users(){
        return $this->hasMany('App\User');
    }

}
