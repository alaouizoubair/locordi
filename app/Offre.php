<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    protected $table = 'offres';

    protected $fillable = ['user_id','ordinateur_id','date_debut','date_fin','montant','vue'];


    public function ordinateur(){
    	return $this->belongsTo('App\Ordinateur');
    }

}
