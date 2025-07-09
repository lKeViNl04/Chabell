<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contacto extends Model
{
    use HasFactory;

    public $timestamps = true;
    protected $table = 'contact';

    protected $fillable = [
        'name',
        'phone_number',
        'email',
        'menssage',
    ];
}
