<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Total;
use File;

class TotalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Total::truncate();

        $json = File::get(public_path("data/total.json"));
        $totales = json_decode($json);

        foreach ($totales->totales as $key => $value) {
            Total::create([
                "articulo" => $value->ARTICULO,
                "plataforma" => $value->PLATAFORMA,
                "cliente" => $value->CLIENTE,
                "tot_stock" => $value->TOT_STOCK,
                "total_lineas" => $value->TOTAL_LINEAS
            ]);
        }
    }
}
