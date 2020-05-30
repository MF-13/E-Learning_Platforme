<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','id_filiere', 'code_prof', 'commantaire', 'id_cour','type_cour','nbr_telechargement','date_ajoute','nom_pdf','pdf_lien','titre'
    ];


    public function user(){
        return $this->belongsTo('App\User');
    }
    
}
