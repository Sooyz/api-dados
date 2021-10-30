<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Detalle;
use File;


class DetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Detalle::truncate();

        $json = File::get(public_path("data/detalle.json"));
        $detalles = json_decode($json);

        foreach ($detalles->detalles as $key => $value) {
            Detalle::create([
                "articulo" => $value->ARTICULO,
                "almacem" => $value->ALMACEN,
                "ubicacion" => $value->UBICACION,
                "id" => $value->ID,
                "plataforma" => $value->PLATAFORMA,
                "cliente" => $value->CLIENTE,
                "lote" => $value->LOTE,
                "unidades" => $value->UNIDADES
            ]);
        }
    }
}
