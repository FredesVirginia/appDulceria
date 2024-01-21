<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;
    protected $fillable = ['precio_total' , 'user']; // Ajusta según tus necesidades

    public function productos()
{
    return $this->belongsToMany(Producto::class, 'compra_producto', 'compra_id', 'producto_id')->withPivot('cantidad');
}
}