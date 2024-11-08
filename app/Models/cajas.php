<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cajas extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ventas_productos(){
        return $this->belongsToMany('App\Models\productos');
    }
}
