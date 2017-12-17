<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Frage extends Model
{
    protected $fillable = ['frage','typ','id_antwort','id_fragebogen'];
}
