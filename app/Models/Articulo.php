<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;

    // Opcional: Indica la tabla si el nombre no sigue la convención en plural
    protected $table = 'product';

    protected $primaryKey = 'id_product';

    protected $fillable = [
        'name',
        'description',
        'price',
        'img',
        'stock'
    ];


    public function getDescripcion_parcial()
    {

        $array_palabra = explode(" ", $this->description);
        $num_palabras = count($array_palabra);

        if ($num_palabras < 10) {
            return $this->description;
        } else {
            $array_secundario = array_slice($array_palabra, 0, 10);
            return implode(" ", $array_secundario) . "...";
        }

    }

    public function getImage()
    {
        return asset('storage/'.$this->img);
    }


    
}
