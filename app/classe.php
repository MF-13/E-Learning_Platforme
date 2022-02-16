<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classe extends Model
{
    //
    protected $primarykey = 'id_cour' ;

    public function field(){
        return $this->belongsTo('App\Field');
    }
}
