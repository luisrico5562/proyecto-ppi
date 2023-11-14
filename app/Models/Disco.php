<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
    use HasFactory;

    protected $fillable = ['artista_id', 'nombre', 'genero', 'year', 'precio'];

    public function artista()
    {
        return $this->belongsTo(Artista::class);
    }

    public function carritos()
    {
        return $this->belongsToMany(Carrito::class);
    }
}
