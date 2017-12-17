<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fragebogen extends Model
{
    //
    protected $fillable = ['name','id_kategorie','id_user'];
}
