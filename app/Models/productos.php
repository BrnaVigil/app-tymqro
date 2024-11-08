<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function ventas_caja(){
        return $this->belongsToMany('App\Models\cajas ');
    }
}
