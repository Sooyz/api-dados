<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Matricula;
use App\Models\Total;

class Detalle extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable=['articulo','almacem','ubicacion','matriculas','lote','unidades'];

    // public function Matricula()
    // {
    //     return $this->belongsTo(Matricula::class);
    // }

    // public function Total()
    // {
    //     return $this->hasMany(Total::class);
    // }
}
