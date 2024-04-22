<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MetodoPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('metodo_pagos')->insert([
            'metodoPago' => 'Efectivo',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('metodo_pagos')->insert([
            'metodoPago' => 'Transferencia',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('metodo_pagos')->insert([
            'metodoPago' => 'Tres meses',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('metodo_pagos')->insert([
            'metodoPago' => 'Seis meses',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
