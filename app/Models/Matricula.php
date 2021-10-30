<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Detalle;
use App\Models\Total;

class Matricula extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable= ['id','plataforma','cliente','sscc'];

    // public function Detalle()
    // {
    //     return $this->hasMany(Detalle::class);
    // }
    // public function Total()
    // {
    //     return $this->belongsTo(Total::class);
    // }
}
