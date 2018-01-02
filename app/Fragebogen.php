<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fragebogen extends Model
{
    //
    protected $fillable = ['name','id_kategorie','id_user'];

    public function users()
    {
        return $this->belongsToMany('App\User')->using('App\UserRole');
    }

}
