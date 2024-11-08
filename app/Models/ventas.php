<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ventas_caja()
    {
        return $this->hasOne(cajas::class, 'id', 'venta_id');
    }

    public function ventas_productos()
    {
        return $this->hasOne(productos::class, 'id', 'productos_id');
    }
}
