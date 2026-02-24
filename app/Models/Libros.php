<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Libros extends Model
{
    protected $table = 'libro';

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'categoria_id');
    }

}
