<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrusel extends Model
{
    use HasFactory;

    // Opcional: Indica la tabla si el nombre no sigue la convención en plural
    protected $table = 'carousel';

    public function getImage()
    {
        return asset('storage/'.$this->img);
    }


}
