<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    //relacion polimorfica
    //el nombre del metodo debe ser igual al nombre del campo de la bd
    public function imageable(){
        return $this->morphTo();
    }
}
