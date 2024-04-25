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
                'nombre' =>  "Samsung Galaxy Tab9 LTE",
                'precio' => 217.72,
                'imagen' => "samtab9_001",
                'desCorta' => "4GB De 64GB Interna 8.7 GRAY",
                'descripción' => "Tablet Samsung Galaxy Tab A9 LTE 4GB De 64GB Interna 8.7 GRAY ablet Samsung Galaxy Tab A9 LTE 4GB De 64GB Interna 8.7 GRAY 
                ablet Samsung Galaxy Tab A9 LTE 4GB De 64GB Interna 8.7 GRAY ",
                'link' => "https://www.samsung.com/latin/tablets/galaxy-tab-s/galaxy-tab-s6-lite-10-4-inch-gray-64gb-lte-sm-p615nzalgto/",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' =>  "Samsung Galaxy Tab S9 FE",
                'precio' => 500.85,
                'imagen' => "samtabs9_001",
                'desCorta' => "(6GB + 128GB) - GRAY -WIFI - (SPEN Y ESTUCHE) TAMAÑO 10,9, GPS",
                'descripción' => "Tablet Samsung TAB S9 FE (6GB + 128GB) - GRAY -WIFI - (SPEN Y ESTUCHE)
                 TAMAÑO 10,9, GPS ",
                'link' => "https://www.samsung.com/latin/tablets/galaxy-tab-s/galaxy-tab-s6-lite-10-4-inch-gray-64gb-lte-sm-p615nzalgto/",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' =>  "Lenovo Tab M9",
                'precio' => 225.63,
                'imagen' => "lenovotabm9_001",
                'desCorta' => "MEDIA TECK HELIO G80 -4GB RAM 64 ROM- ANDROID 12 
                - LENGUAJE ESPAÑOL- DISPLAY 9 COLOR FROST BLUE",
                'descripción' => "LENOVO TAB M9 MEDIA TECK HELIO G80 -4GB RAM 64 ROM- ANDROID 12 
                                - LENGUAJE ESPAÑOL- DISPLAY 9 COLOR FROST BLUE ",
                'link' => "https://www.samsung.com/latin/tablets/galaxy-tab-s/galaxy-tab-s6-lite-10-4-inch-gray-64gb-lte-sm-p615nzalgto/",
                'categoria_id' => 3,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' =>  "Samsung S23FE",
                'precio' => 841.39,
                'imagen' => "sams23fe_001",
                'desCorta' => "procesador Exynos 2200, Velocidad CPU:2.8 GHz",
                'descripción' => "Celular Samsung S23Fe, procesador Exynos 2200, Velocidad CPU:2.8 GHz",
                'link' => "https://www.samsung.com/latin/tablets/galaxy-tab-s/galaxy-tab-s6-lite-10-4-inch-gray-64gb-lte-sm-p615nzalgto/",
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ),
            array(
                'nombre' =>  "Samsung S24",
                'precio' => 1244.62,
                'imagen' => "sams24_001",
                'desCorta' => "sams24_001 Tamaño de Pantalla: 6.2  Rectangulo completo",
                'descripción' => " Samsung Galaxy S24
                            Tamaño de Pantalla: 6.2  Rectangulo completo
                            ",
                'link' => "https://www.samsung.com/latin/tablets/galaxy-tab-s/galaxy-tab-s6-lite-10-4-inch-gray-64gb-lte-sm-p615nzalgto/",
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ),
            array(
                'nombre' =>  "ZTE A54 DARK GRAY",
                'precio' => 113.54,
                'imagen' => "ztea54_001",
                'desCorta' => "CELULAR ZTE A54 /  RAM-MEMORIA (4+4)+ 128COLOR DARK GRAY DISPLAY 6,6",
                'descripción' => "CELULAR ZTE A54 /  RAM-MEMORIA (4+4)+ 128COLOR DARK GRAY DISPLAY 6,6",
                'link' => "https://www.samsung.com/latin/tablets/galaxy-tab-s/galaxy-tab-s6-lite-10-4-inch-gray-64gb-lte-sm-p615nzalgto/",
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ),
    //         array(
    //             'nombre' =>  "ZTE A54 SKY BLUE",
    //             'precio' => 113.54,
    //             'imagen' => "ztea54sky_001",
    //             'descripción' => "CELULAR A54 /  RAM-MEMORIA (4+4)+ 128COLOR SKY BLUE  DISPLAY 6,6",
    //             'categoria_id' => 7,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),
    //         array(
    //             'nombre' =>  "ZTE V50 PURPLE",
    //             'precio' => 163.04,
    //             'imagen' => "ztev50_001",
    //             'descripción' => "CELULAR V50 DESIGN  /  RAM-MEMORIA (6+10)+ 256 COLOR PURPLE DISPLAY 6,6 ",
    //             'categoria_id' => 7,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),
    //         array(
    //             'nombre' =>  "ZTE A54 + COMBO",
    //             'precio' => 232.91,
    //             'imagen' => "ztea54combo1_001",
    //             'descripción' => "JBL FLIP6 + ZTE A54(COLORES: AZUL O NEGRO)+BONO FAVORITO ",
    //             'categoria_id' => 7,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),
    //         array(
    //             'nombre' =>  "ZTE V50 + COMBO",
    //             'precio' => 289.68,
    //             'imagen' => "ztev50combo2_001",
    //             'descripción' => "HARMAN ONYX + ZTE V50 (COLORES: MORADO O NEGRO) + BONO FAVORITO ",
    //             'categoria_id' => 7,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),

    //         array(
    //             'nombre' =>  "MONITOR LENOVO THINK VISION M15",
    //             'precio' => 378.48,
    //             'imagen' => "monitorm15_001",
    //             'descripción' => "ThinkVision M15 15.6” FHD Mobile Monitor ",
    //             'categoria_id' => 4,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),
    //         array(
    //             'nombre' =>  "LAPTOP ASUS X415EA CI3-1115G4",
    //             'precio' => 436.71,
    //             'imagen' => "laptopasusx415_001",
    //             'descripción' => "PORTATIL ASUS X415EA CI3 - 1115G4 RAM 8GB 512GB SSD DISPLAY 14¨ FREE DOS 
    //             TRANSPARENT SILVER - CON NUMBERPAD ",
    //             'categoria_id' => 1,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),
    //         array(
    //             'nombre' =>  "LAPTOP ASUS VIVOBOOK 16X1605ZA CI5-12500H",
    //             'precio' => 771.52,
    //             'imagen' => "laptopasusx1605_001",
    //             'descripción' => "ASUS VIVOBOOK 16 X1605ZA CI5 12500H RAM 16GB (8GB ON BOARD + 8GB SO-DIMM 
    //             DDR4) ",
    //             'categoria_id' => 1,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),
    //         array(
    //             'nombre' =>  "LAPTOP ASUS VIVOBOOK 15 X1504ZA CI7-1255U",
    //             'precio' => 841.39,
    //             'imagen' => "laptopx15x1504_001",
    //             'descripción' => "ASUS VIVOBOOK 15 X1504ZA CI7 1255U RAM 8GB SSD 512 DISPLAY ",
    //             'categoria_id' => 1,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),

    //         array(
    //             'nombre' =>  "LAPTOP ASUS GAMING F17 FX707ZC4 CI7-12700H",
    //             'precio' => 1492.09,
    //             'imagen' => "laptopasusgaming _001",
    //             'descripción' => "ASUS TUF GAMING F17 FX707ZC4 CI 7-12700H 
    //             RAM 16GB (1 SLOT 16GB + 1 SLOT SO-DIMM DDR4 - MAX 32GB) SSD 1TB 
    //            ",
    //             'categoria_id' => 1,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),

    //         array(
    //             'nombre' =>  "COMBO TECLADO MOUSE LENOVO WIRELESS ",
    //             'precio' => 43.67,
    //             'imagen' => "mouteclkb_001",
    //             'descripción' => "Combo teclado y mouse Marca Lenovo, Modelo Essential Wi Color Negro",
    //             'categoria_id' => 5,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),

    //         array(
    //             'nombre' =>  "COMBO TECLADO MOUSE LENOVO ALAMBRICO ",
    //             'precio' => 29.11,
    //             'imagen' => "mouteclalm_001",
    //             'descripción' => "Combo teclado y mouse Marca Lenovo, Modelo Essential Color Negro, Sistema Operativo Microsoft Windows XP/7/8/8.1/10",
    //             'categoria_id' => 5,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),

    //         array(
    //             'nombre' =>  "AURICULARES ANALOGICOS ESTEREO LENOVO ESSENTIAL ",
    //             'precio' => 29.11,
    //             'imagen' => "mouteclalm_001",
    //             'descripción' => "Auriculares Marca Lenovo Modelo e 3.5mm",
    //             'categoria_id' => 6,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),

    //         array(
    //             'nombre' =>  "AURICULARES ANC CON CABLE LENOVO GO ",
    //             'precio' => 132.47,
    //             'imagen' => "audlengo_001",
    //             'descripción' => "Auriculares Marca Lenovo Modelo GO, Certificación Microsoft Teams
    //             Cancelación activa de ruido avanzada, cancelación de ruido ambiental)",
    //             'categoria_id' => 6,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),

    //         array(
    //             'nombre' =>  "AURICULARES ANC CON CABLE LENOVO GO (THUNDER BLACK)",
    //             'precio' => 225.63,
    //             'imagen' => "aurlengoanc_001",
    //             'descripción' => "Auriculares Marca Lenovo Modelo GO (THUNDER BLACK), Certificación Microsoft Teams
    //             Cancelación activa de ruido avanzad)",
    //             'categoria_id' => 6,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),

    //         array(
    //             'nombre' =>  "CUBO DE ENERGIA SUPRESOR DE SOBRETENCIONES TLP 366 ",
    //             'precio' => 49.49,
    //             'imagen' => "triplite_001",
    //             'descripción' => "Cubo de Alimentación Supresor de Sobretensiones Protect It!,Marca TRIPP LITE, con 3 Tomacorrientes 
    // - 6 Puertos USB A (7.2A Compartidos), Cable de 1.83 m [6 pies], 540 Joules, Negro",
    //             'categoria_id' => 8,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),
    //         ),

    //         array(
    //             'nombre' =>  "Inversor de Auto Ultracompacto de 200W  TLP PV200CUSB ",
    //             'precio' => 49.49,
    //             'imagen' => "rrienitrippliteauto_001",
    //             'descripción' => "Inverso de Auto Ultracompacto de 200W, Marca TRIP LITE, 2 puertos de carga USB, Carga múltiples dispositivos
    //             electrónicos en su vehículo., Cuenta con 2 tomacorrientes de CA, puerto USB de 2.1A y puerto USB de 1.0A.
    //             Encajao",
    //             'categoria_id' => 8,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),


    //         array(
    //             'nombre' =>  "UPS INTERACTIVO TLP AVR550U ",
    //             'precio' => 133.92,
    //             'imagen' => "upsavr550u_001",
    //             'descripción' => "UPS Interactivo Marca TRIP LITE, Modelo AVR550U, de 550VA 300W - 8 Tomacorrientes NEMA 5-15R, 
    //             AVR, 120V, 50/60Hz, USB, Instalación en pared o escritorio",
    //             'categoria_id' => 8,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),

    //         array(
    //             'nombre' =>  "CAMARA INTERIOR EZVIZ H1C ",
    //             'precio' => 33.48,
    //             'imagen' => "ezvizh1c_01",
    //             'descripción' => "Ezviz H1C
    //             •	Conectividad: Wifi
    //             •	Resolución: 2MP (1920 x 1080)
    //             •	IR distance: 10m",
    //             'categoria_id' => 9,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),



    //         array(
    //             'nombre' =>  "AMARA INTERIOR EZVIZ TY1 ",
    //             'precio' => 36.39,
    //             'imagen' => "ezvizty1_001",
    //             'descripción' => "Ezviz TY1 de 1080P.
    //         	Conectividad: Wifi/ RJ45
    //             •	Resolución: 2MP (1920 x 1080)
    //             •	Visión Nocturna: IR",
    //             'categoria_id' => 9,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),


    //         array(
    //             'nombre' =>  "CAMARA EXTERIOR EZVIZ H3 ",
    //             'precio' => 69.87,
    //             'imagen' => "ezvizh3_001",
    //             'descripción' => "Ezviz H3.
    //             •	Conectividad: Wifi/ RJ45
    //             •	Resolución: 2K
    //             •	Grado IP:IP67",
    //             'categoria_id' => 9,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),

    //         array(
    //             'nombre' =>  "CAMARA EXTERIOR EZVIZ H8C ",
    //             'precio' => 72.78,
    //             'imagen' => "ezvizh8c_001",
    //             'descripción' => "Ezviz H8C
    //             •	Conectividad: Wifi/ RJ45
    //             •	Resolución: 2MP (1920X1080)
    //             •	Grado IP: Diseño a prueba de agua5",
    //             'categoria_id' => 9,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),

    //         array(
    //             'nombre' =>  "CAMARA DE BATERIA EZVIZ CB1 ",
    //             'precio' => 55.32,
    //             'imagen' => "ezvizcb1_001",
    //             'descripción' => "Ezviz CB1. 
    //             •	Conectividad: Wifi 
    //             •	Resolución: 2MP(1920 x 1080) 
    //             •	IR distance: hasta 5 m
    //             •	Audio Bidireccional: Incorporado",
    //             'categoria_id' => 9,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),

    //         array(
    //             'nombre' =>  "CAMARA DE BATERIA EZVIZ CS-BM1 ",
    //             'precio' => 122.28,
    //             'imagen' => "ezvizcb1_001",
    //             'descripción' => "Ezviz CS-BM1
    //             •	Conectividad: Wifi 
    //             •	Resolución: 1080
    //             •	Detección de llanto
    //             •	Alertas de falta de cuna",
    //             'categoria_id' => 9,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),

    //         array(
    //             'nombre' =>  "VIDEO PORTERO EZVIZ DB2C ",
    //             'precio' => 141.20,
    //             'imagen' => "ezvizdb2c_001",
    //             'descripción' => "Ezviz DB2C.
    //             •	Conectividad: wifi
    //             •	Resolución: Video 1080P 
    //             •	Campo de visión: Vertical de 160°",
    //             'categoria_id' => 9,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),

    //         array(
    //             'nombre' =>  "TOMA CORRIENTE EZVIZ DB2C ",
    //             'precio' => 12.33,
    //             'imagen' => "ezvizt30_001",
    //             'descripción' => "Ezviz T30 - Controle sus electrodomésticos desde cualquier lugar.
    //             Control Remoto a Través de la Aplicación Móvil. Soporta Wi-Fi de 2.4 GHz. Horarios .",
    //             'categoria_id' => 9,
    //             'disponible' => true,
    //             'created_at' => Carbon::now(),
    //             'updated_at' => Carbon::now(),

    //         ),
        ];
        DB::table('productos')->insert($datos);
    }
}
