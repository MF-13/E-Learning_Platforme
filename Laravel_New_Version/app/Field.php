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
    // protected $primaryKey  = 'filiere_id' ;

    protected $fillable = [
        'filiere_id','filiere','filiere_description','departement'
    ];
    

    public function classes(){
        return $this->hasMany('App\classe');
    }

    public function users(){
        return $this->hasMany('App\User');
    }

}
