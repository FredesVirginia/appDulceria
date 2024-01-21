<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    public function compras()
    {
        return $this->belongsToMany(Compra::class, 'compra_producto', 'producto_id', 'compra_id')->withPivot('cantidad');
    }
}
