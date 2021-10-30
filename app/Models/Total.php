<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detalle;

class Total extends Model
{
    use HasFactory;

    protected $table = 'totales';
    public $timestamps = false;
    protected $fillable=['articulos','tot_stock','total_lineas'];

    // public function Detalle()
    // {
    //     return $this->belongsTo(Detalle::class);
    // }
}
