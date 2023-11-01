<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'pais', 'descripcion'];

    public function discos()
    {
        return $this->hasMany(Disco::class);
    }
}
