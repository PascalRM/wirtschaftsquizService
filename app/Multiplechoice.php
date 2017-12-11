<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Multiplechoice extends Model
{
    //
    protected $fillable = ['antwort','falscheantwort1','falscheantwort2','falscheantwort3'];
}
