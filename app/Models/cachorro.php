<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cachorro extends Model
{
    protected $fillable = ['nome_tutor', 'end_tutor', 'tel_tutor', 'idade_animal', 'peso_animal'];
}
