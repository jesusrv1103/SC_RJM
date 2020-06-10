<?php

namespace App\Agenda;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected  $table="personas";
    protected $dates = ['fecha_nacimiento'];
}
