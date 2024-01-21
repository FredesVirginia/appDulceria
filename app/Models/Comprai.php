<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprai extends Model
{
    use HasFactory;
    protected $fillable = ['precio_total']; // Ajusta según tus necesidades

    public function productos()
    {
       
        return $this->belongsToMany(Producto::class, 'compra_productos')->withPivot('cantidad');
    }
}
