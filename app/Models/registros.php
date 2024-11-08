<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registros extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function eventos_registros()
    {
        return $this->hasOne(eventos::class, 'id', 'evento_id');
    }
}
