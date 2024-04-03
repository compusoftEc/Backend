<?php

namespace Database\Seeders;


use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            array(
                'nombre' =>  "ASUS Vivobook K6502",
                'precio' => 1200.90,
                'imagen' => "Asus1",
                'descripción' => "loren aasdffff aaaaaaaaaaaaa  asdd aaaaaaaaaaaa aaaaaaaa aaaaaaaaaaaaa ",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' =>  "laptop",
                'precio' => 59.9,
                'imagen' => "Asus2",
                'descripción' => "loren aasdffff aaaaaaaaaaaaa  asdd aaaaaaaaaaaa aaaaaaaa aaaaaaaaaaaaa ",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' =>  "laptop",
                'precio' => 59.9,
                'imagen' => "Asus3",
                'descripción' => "loren aasdffff aaaaaaaaaaaaa  asdd aaaaaaaaaaaa aaaaaaaa aaaaaaaaaaaaa ",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' =>  "laptop",
                'precio' => 59.9,
                'imagen' => "Asus4",
                'descripción' => "loren aasdffff aaaaaaaaaaaaa  asdd aaaaaaaaaaaa aaaaaaaa aaaaaaaaaaaaa ",
                'categoria_id' => 1,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
        ];
        DB::table('productos')->insert($datos);
    }
}
