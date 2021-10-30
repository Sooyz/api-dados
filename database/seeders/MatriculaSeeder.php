<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Matricula;
use File;

class MatriculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Matricula::truncate();

        $json = File::get(public_path("data/matricula.json"));
        $matriculas = json_decode($json);

        foreach ($matriculas->matriculas as $key => $value) {
            Matricula::create([
                "id" => $value->ID,
                "plataforma" => $value->PLATAFORMA,
                "cliente" => $value->CLIENTE,
                "sscc" => $value->SSCC
            ]);
        }
    }
}
