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
                            'nombre' =>  "LAPTOP ASUS X415EA",
                            'precio' => 436.71,
                            'imagen' => "laptopasusx415_001",
                            'desCorta' => "Intel® Core™ i3-1115G4 Processor 3.0 GHz, RAM 8GB, 512GB SSD, DISPLAY 14¨ FREE DOS TRANSPARENT SILVER 
                            - CON NUMBERPAD ",
                            'descripción' => "PORTATIL ASUS X415EA CI3 - 1115G4 RAM 8GB 512GB SSD DISPLAY 14¨ FREE DOS TRANSPARENT SILVER 
                            - CON NUMBERPAD ",
                            'link'=>"https://www.asus.com/laptops/for-home/all-series/asus-x415-11th-gen-intel/techspec/",
                            'categoria_id' => 1,
                            'disponible' => true,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
    
            ),
                    array(
                            'nombre' =>  "LAPTOP ASUS VIVOBOOK 16(X1605ZA)",
                            'precio' => 771.52,
                            'imagen' => "laptopasusx1605_001",
                            'desCorta' => "Intel® Core™ i5-12500H Processor 2.5 GHz, RAM 16GB, 512GB SSD, Display 16 WUXGA FREE DOS Color Indie Black
                            -con Numberpad ",
                            'descripción' => "ASUS VIVOBOOK 16 X1605ZA CI5 12500H RAM 16GB (8GB ON BOARD + 8GB SO-DIMM DDR4) SSD 512 DISPLAY 16 WUXGA FREE DOS COLOR INDIE BLACK 
                            - ESTANDAR DE GRADO MILITAR US MIL-STD 810H
                            - DETECTOR DE HUELLA",
                            'link'=>"https://www.asus.com/laptops/for-home/vivobook/vivobook-16-oled-x1605/techspec/",
                            'categoria_id' => 1,
                            'disponible' => true,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
            ),
                    array(
                            'nombre' =>  "LAPTOP ASUS VIVOBOOK 15(X1504ZA)",
                            'precio' => 841.39,
                            'imagen' => "laptopx15x1504_001",
                            'desCorta' =>"Intel® Core™ i7-1255U,Ram 8gb, SSD 512 display 15¨fhd free dos color quiet blue",
                            'descripción' => "ASUS VIVOBOOK 15 X1504ZA CI7 1255U RAM 8GB SSD 512 DISPLAY 15¨FHD FREE DOS COLOR QUIET BLUE 
                            - ESTANDAR DE GRADO MILITAR US MIL-STD 810H
                            - DETECTOR DE HUELLA",
                            'link'=>"https://www.asus.com/ec/laptops/for-home/vivobook/asus-vivobook-15-x1504/",
                            'categoria_id' => 1,
                            'disponible' => true,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
            ),
                    array(
                            'nombre' =>  "LAPTOP ASUS TUF GAMING F17 FX707ZC4",
                            'precio' => 1492.09,
                            'imagen' => "laptopasusgaming _001",
                            'desCorta' =>"12th Gen Intel® Core™ i7-12700H Processor 2.3 GHz,Ram 16gb, 1TB SSD, Tarjeta de video 4gb gddr6 nvidia® geforce rtx™  3050  display 17¨fhd free 
                             dos color mecha gray",
                            'descripción' => "ASUS TUF GAMING F17 FX707ZC4 CI 7-12700H 
                            RAM 16GB (1 SLOT 16GB + 1 SLOT SO-DIMM DDR4 - MAX 32GB) SSD 1TB 
                            TARJETA DE VIDEO 4GB GDDR6 NVIDIA® GeForce RTX™  3050  DISPLAY 17¨FHD FREE 
                            DOS COLOR MECHA GRAY",
                            'link'=>"https://www.asus.com/laptops/for-gaming/tuf-gaming/asus-tuf-gaming-f17-2022/techspec/",
                            'categoria_id' => 1,
                            'disponible' => true,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
    
            ),
                                array(
                            'nombre' =>  "Ricoh B/N Multifunción M320F",
                            'precio' => 571.55,
                            'imagen' => "m320f",
                            'desCorta' => "Impresora láser Ricoh  B/N - Imprime 
                            - Copia - Escanea - Resolución máx 1200 x 1200 ppp",
                            'descripción' => "Imprime a 32 ppm (A4)/34 ppm (Carta)
                            copia, escanea y envía faxes
                           -Resolución máx 1200 x 1200 ppp
                           -Capacidad de papel de hasta 550 hojas",
                            'link' => "https://www.ricoh-americalatina.com/files/18917/M_320F_P_311_Brochure_Es_La.pdf",
                            'categoria_id' => 2,
                            'disponible' => true,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
            ),
                    array(
                            'nombre' =>  "Ricoh B/N Multifunción MP 301SPF",
                            'precio' => 1023.5,
                            'imagen' => "mp301spf",
                            'desCorta' => "Impresora láser Ricoh  B/N - Imprime 
                            - Copia - Escanea - Panel táctil a color de 4,3 pulgadas",
                            'descripción' => "Imprime a 31 ppm - copia, escanea y envía faxes
                           - Resolución max 600 x 600 dpi
                           - Capacidad de papel de hasta 500 hojas x 1 ó 2 Bandejas
                           - Panel táctil a color de 4,3 pulgadas",
                            'link' => "https://www.ricohleon.com.mx/equipos-ricoh/aficio-mp-301-spf/aficiomp301spf.pdf",
                            'categoria_id' => 2,
                            'disponible' => true,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
            ),
                    array(
                            'nombre' =>  "Ricoh B/N Multifunción MP 305SPF",
                            'precio' => 1138.5,
                            'imagen' => "mp305spf",
                            'desCorta' => "Impresora láser Ricoh  B/N - Imprime 
                            - Copia - Escanea - Panel táctil a color de 10.1 pulgadas",
                            'descripción' => "Imprime a 30 ppm
                            copiado, escaneado y fax
                            Resolución máx  de 600 x 600 dpi
                            Capacidad de papel de  760 páginas
                            Personaliza los flujos de trabajo con la pantalla táctil del panel inteligente de 10.1 pulgadas",
                            'link' => "https://copiadorasenventa.com/wp-content/uploads/brochure-espa%C3%B1ol/Ricoh-MP-305SPF-Folleto.pdf",
                            'categoria_id' => 2,
                            'disponible' => true,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
            ),
                    array(
                            'nombre' =>  "Lenovo Tab M9",
                            'precio' => 225.63,
                            'imagen' => "lenovotabm9_001",
                            'desCorta' => "Media teck helio g80 - 4gb ram - 64 rom - android 12 
                            - lenguaje español- display 9 color frost blue",
                            'descripción' => "Lenovo tab m9 media teck helio g80 -4gb ram 64 rom- android 12 
                            - lenguaje español- display 9 color frost blue",
                            'link' => "https://www.gsmarena.com/lenovo_tab_m9-12052.php",
                            'categoria_id' => 3,
                            'disponible' => true,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
             ),
                    array(
                            'nombre' =>  "Samsung Galaxy TabA9 LTE",
                            'precio' => 217.72,
                            'imagen' => "samtab9_001",
                            'desCorta' => "4GB de RAM Y 64GB de Memoria Interna - Gris -Sonido 3D con una claridad y profundidad asombrosas",
                            'descripción' => "Tablet Samsung Galaxy Tab A9 LTE 4GB De 64GB Interna 8.7 GRAY ",
                            'link' => "https://www.samsung.com/es/tablets/galaxy-tab-a/galaxy-tab-a9-wifi-graphite-64gb-sm-x110nzaaeub/",
                            'categoria_id' => 3,
                            'disponible' => true,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
            ),
                    array(
                            'nombre' =>  "Samsung Galaxy Tab S9 FE",
                            'precio' => 500.85,
                            'imagen' => "samtabs9_001",
                            'desCorta' => "6GB de RAM + 128GB ROM - GRIS -WIFI - (SPEN Y ESTUCHE) TAMAÑO 10,9, GPS ",
                            'descripción' => "Tablet Samsung TAB S9 FE (6GB + 128GB) - GRAY -WIFI - (SPEN Y ESTUCHE) TAMAÑO 10,9, GPS ",
                            'link' => "https://www.samsung.com/es/tablets/galaxy-tab-s/galaxy-tab-s9-fe-wifi-gray-256gb-sm-x510nzaeeub/",
                            'categoria_id' => 3,
                            'disponible' => true,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
            ),
                    
                    array(
                            'nombre' =>  "MONITOR LENOVO THINK VISION M15",
                            'precio' => 378.48,
                            'imagen' => "monitorm15_001",
                            'desCorta' => "Tamaño de pantalla: 15,6 Brillo:250 cd/m² (típico)
                             Contraste: 1000:1, Retroiluminación: WLED",
                            'descripción' => "Tamaño de pantalla	15,6 pulgadas, Brillo	250 cd/m² (típico)
                            ,Proporción	16:9
                            ,Contraste	1000:1
                            ,Retroiluminación	WLED",
                            'link'=>"https://news.lenovo.com/wp-content/uploads/2021/06/ThinkVision-M15_Datasheet.pdf",
                            'categoria_id' => 4,
                            'disponible' => true,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
    
            ),
                
                    array(
                            'nombre' =>  "COMBO TECLADO MOUSE LENOVO INALÁMBRICO",
                            'precio' => 43.67,
                            'imagen' => "mouteclkb_001",
                            'desCorta' =>"Combo teclado y mouse Marca Lenovo, Modelo Essential Wirelles",
                            'descripción' => "Teclado y mouse Marca Lenovo, Modelo Essential Wirelles, Bateria factor de forma Tipo AA
                            Interfaz 2.4 GHz, Teclado Español(Latinoamericano) Tecnologia de conectividad Inalambrico, Color Negro",
                            'link'=>"https://support.lenovo.com/ec/es/solutions/acc100349",
                            'categoria_id' => 5,
                            'disponible' => true,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),

            ),
                    array(
                            'nombre' =>  "COMBO TECLADO MOUSE LENOVO ALAMBRICO ",
                            'precio' => 29.11,
                            'imagen' => "mouteclalm_001",
                            'desCorta' =>"Combo teclado y mouse Marca Lenovo, Modelo Essential, Alambrico",
                            'descripción' => "Combo teclado y mouse Marca Lenovo, Modelo Essential Wired Combo, Interfaz USB
                            , Teclado Español(Latinoamericano) Tecnologia de conectividad Cableado, Color Negro, Sistema Operativo Microsoft Windows XP/7/8/8.1/10",
                            'link'=>"https://support.lenovo.com/ar/es/solutions/acc100326-lenovo-essential-wired-keyboard-and-mouse-combo-overview-and-service-parts",
                            'categoria_id' => 5,
                            'disponible' => true,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
    
            ),

                    array(
                            'nombre' =>  "AURICULARES ANALOGICOS ESTEREO LENOVO ESSENTIAL ",
                            'precio' => 29.11,
                            'imagen' => "audlen_001",
                            'desCorta' =>"Auriculares Marca Lenovo Modelo Essential, brazo de microfono facil de girar, Auricular mono de ajuste comodo",
                            'descripción' => "Auriculares Marca Lenovo Modelo Essential, brazo de microfono facil de girar, Auricular mono de ajuste comodo, 
                            Microfono de 180°, Conectividad puerto estandar de 3.5mm",
                            'link'=>"https://www.lapstars.de/product.html?info=23657&dl_media=5036",
                            'categoria_id' => 6,
                            'disponible' => true,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
    
            ),
    
                    array(
                            'nombre' =>  "AURICULARES ANC CON CABLE LENOVO GO ",
                            'precio' => 132.47,
                            'imagen' => "audlengo_001",
                            'desCorta' =>"Lenovo Modelo GO, Certificación Microsoft Teams,Cancelación activa de ruido avanzada.",
                            'descripción' => "Auriculares Marca Lenovo Modelo GO, Certificación Microsoft Teams
                            Cancelación activa de ruido avanzada, cancelación de ruido ambiental y conversación    
                            Uso del lado izquierdo y derecho, Voltear para silenciar micrófonos, Admite conectividad USB-C
                            Estuche de transporte compacto, Compatible con Lenovo Go Central (software)",
                            'link'=>"https://www.lenovo.com/content/dam/lenovo/pcsd/global/en/products/accessories/lenovo-go/datasheet/lenovo-go-wired-anc-headset/LenovoGo-Wired-ANC-Headset_Com_DS_7626-220928_AEM.pdf?refId=7196e71d-6ed0-4d4a-8d71-61e0b981a33a",
                            'categoria_id' => 6,
                            'disponible' => true,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
    
            ),
    
                    array(
                            'nombre' => "Lenovo Go Wireless ANC Headset (Thunder Black)",
                            'imagen' => "aurlengoanc_001",
                            'precio' => 225.63,
                            'desCorta' =>"Certificación Microsoft Teams-Cancelación activa de ruido avanzada",
                            'descripción' => "Certificación Microsoft Teams-Cancelación activa de ruido avanzada, cancelación de ruido ambiental y comunicación directa
                            Uso del lado izquierdo y derecho, Voltear para silenciar micrófonos, Triple conectividad: Doble Bluetooth + Audio USB
                            Emparejamiento rápido / Emparejamiento rápido, 1,5 horas de carga completa, hasta 35 horas de reproducción
                            Compatible con Lenovo Go Central (software)",
                            'link'=>"https://www.lenovo.com/content/dam/lenovo/pcsd/global/en/products/accessories/lenovo-go/datasheet/lenovo-go-wireless-anc-headset/Lenovo%20Go%20WIreless%20ANC%20Headset_DS.pdf?refId=6fd676ba-6509-4e99-a048-37c876b15184",
                            'categoria_id' => 6,
                            'disponible' => true,
                            'created_at' => Carbon::now(),
                            'updated_at' => Carbon::now(),
    
            ),
            array(
                'nombre' =>  "ZTE A54 + COMBO",
                'precio' => 232.91,
                'imagen' => "ztea54combo1_001",
                'desCorta' => "Celular + Parlante + Bono",
                'descripción' => "JBL FLIP6 + ZTE A54(COLORES: AZUL O NEGRO)+BONO FAVORITO ",
                'link'=>"https://www.devicespecifications.com/es/model/43095e2e",
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
), 
        array(  
                'nombre' =>  "ZTE V50 + COMBO",
                'precio' => 289.68,
                'imagen' => "ztev50combo2_001",
                'desCorta' => "Celular + Parlante + Bono",
                'descripción' => "HARMAN ONYX + ZTE V50 (COLORES: MORADO O NEGRO) + BONO FAVORITO ",
                'link'=>"https://www.devicespecifications.com/es/model/43095e2e",
                'categoria_id' => 7,
                'disponible' => true,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
),      
                     array(
                             'nombre' =>  "Samsung S23FE",
                             'precio' => 841.39,
                             'imagen' => "sams23fe_001",
                             'desCorta' => "Procesador Exynos 2200, Velocidad CPU:2.8 GHz",
                             'descripción' => "Celular Samsung S23Fe, procesador Exynos 2200, Velocidad CPU:2.8 GHz, Memoria Rom 256gb, Ram 8gb
                             Sistema Operativo Android 13, Red: 2g / 3g/ 4g/ 5g, Camara trasera 50.0 Mp + 12,0 Mp + 8,0 Mp delantera: 10,0 Mp
                              Pantalla tamaño 6.4 pulgadas resolucion: 1080 x 2340(FHD+) Tipo: AMOLED dinamico 2x, Frecuencia de actualizacion: 120HZ",
                             'link' => "https://www.samsung.com/latin/smartphones/galaxy-s/galaxy-s23-fe-mint-128gb-sm-s711blgjgto//",
                             'categoria_id' => 7,
                             'disponible' => true,
                             'created_at' => Carbon::now(),
                             'updated_at' => Carbon::now(),
             ),
                     array(
                             'nombre' =>  "Samsung S24",
                             'precio' => 1244.62,
                             'imagen' => "sams24_001",
                             'desCorta' => "Procesador Qualcomm SM8650-AC Snapdragon 8 Gen 3- 6.2 pulgada",
                             'descripción' => " SSamsung Galaxy S24
                             Tamaño de Pantalla: 6.2  Rectangulo completo
                             Resolución 2340 x 1080 (FHD+)
                             Tecnología Dynamic AMOLED 2X
                             Número de colores 16M
                             Frecuencia de actualización máxima 120 Hz
                             Velocidad CPU: 3.2GHz, 2.9GHz, 2.6GHz, 1.95GHz
                             Tipo CPU: Deca-Core
                             Sistema Operativo: Android
                             Memoria RAM: 8 GB
                             Almacenamiento interno 256 GB
                             Cámara Principal Multiple: 50.0 MP + 10.0 MP + 12.0 MP
                             Cámara Frontal: 12.0 MP",
                             'link' => "https://www.samsung.com/latin/smartphones/galaxy-s24/",
                             'categoria_id' => 7,
                             'disponible' => true,
                             'created_at' => Carbon::now(),
                             'updated_at' => Carbon::now(),
                ),
                     array(
                             'nombre' =>  "ZTE A54 DARK GRAY",
                             'precio' => 113.54,
                             'imagen' => "ztea54_001",
                             'desCorta' => "Pantalla 6.6″, 8GB RAM 128GB Android 13",
                             'descripción' => "DIMENSIONES Y PESO: 164 x 75.80 x 8.50 mm,185 gramos
                             PANTALLA: Panel IPS de 6,6 pulgadas, Resolución HD+ de 20*1612 píxeles
                             PROCESADOR:Octa-Core Unisoc,RAM: 4GB + 4GB, ALMACENAMIENTO: 128 GB",
                             'link' => "https://www.devicespecifications.com/es/model/43095e2e",
                             'categoria_id' => 7,
                             'disponible' => true,
                             'created_at' => Carbon::now(),
                             'updated_at' => Carbon::now(),
                ),
                     array(
                             'nombre' =>  "ZTE A54 SKY BLUE",
                             'precio' => 113.54,
                             'imagen' => "ztea54sky_001",
                             'desCorta' => "Pantalla 6.6″, 8GB RAM 128GB Android 13",
                             'descripción' => "CELULAR A54 /  RAM-MEMORIA (4+4)+ 128COLOR SKY BLUE  DISPLAY 6,6",
                             'link' =>"https://www.devicespecifications.com/es/model/43095e2e",
                             'categoria_id' => 7,
                             'disponible' => true,
                             'created_at' => Carbon::now(),
                             'updated_at' => Carbon::now(),
             ),
                     array(
                             'nombre' =>"ZTE V50 PURPLE",
                             'precio' => 163.04,
                             'imagen' => "ztev50_001",
                             'desCorta' => "RAM-MEMORIA (6+10)+ 256 COLOR PURPLE DISPLAY 6,6 ",
                            'descripción' => "PANTALLA:
                            Panel IPS de 6,6 pulgadas-
                            Resolución FHD+ de 2.408 x 1.080 ppíxeles, PROCESADOR:Unisoc T606,RAM:6GB + 10GB, ALMACENAMIENTO: 256 GB",
                             'link' =>"https://www.xatakandroid.com/moviles-android/zte-blade-v50-design-5g-caracteristicas-precio-ficha-tecnica",
                             'categoria_id' => 7,
                             'disponible' => true,
                             'created_at' => Carbon::now(),
                             'updated_at' => Carbon::now(),
             ),
                    array(
                             'nombre' =>  "CUBO DE ENERGIA SUPRESOR DE SOBRETENCIONES TLP 366",
                             'precio' => 49.49,
                             'imagen' => "triplite_001",
                             'desCorta' =>"Cubo de Alimentación Supresor de Sobretensiones Protect It!,Marca TRIPP LITE, con 3 Tomacorrientes 
                             - 6 Puertos USB, Cable de 1.83 m, 540 Joules, Negro",
                             'descripción' => "Cubo de Alimentación Supresor de Sobretensiones Protect It!,Marca TRIPP LITE, con 3 Tomacorrientes 
                             - 6 Puertos USB A (7.2A Compartidos), Cable de 1.83 m [6 pies], 540 Joules, Negro",
                             'link'=>"https://objects.icecat.biz/objects/mmo_70341542_1570022913_6121_13449.pdf",
                             'categoria_id' => 8,
                             'disponible' => true,
                             'created_at' => Carbon::now(),
                             'updated_at' => Carbon::now(),
             ),
    
                     array(
                             'nombre' =>  "Inversor de Auto Ultracompacto de 200W  TLP PV200CUSB ",
                             'precio' => 49.49,
                             'imagen' => "rrienitrippliteauto_001",
                             'desCorta' =>"Inversor de Auto Ultracompacto de 200W con 2
                             Tomacorrientes de CA y 2 Puertos de Carga USB",
                             'descripción' => "Inverso de Auto Ultracompacto de 200W, Marca TRIP LITE, 2 puertos de carga USB, Carga múltiples dispositivos
                             electrónicos en su vehículo., Cuenta con 2 tomacorrientes de CA, puerto USB de 2.1A y puerto USB de 1.0A.
                             Encaja perfectamente en el portavasos de su vehículo, Se enchufa en cualquier contacto de encendedor de
                             cigarrillos, Durable gabinete de plástico",
                             'link'=>"https://assets.tripplite.com/product-pdfs/es/PV200CUSB.pdf",
                             'categoria_id' => 8,
                             'disponible' => true,
                             'created_at' => Carbon::now(),
                             'updated_at' => Carbon::now(),
    
             ),
    
                     array(
                             'nombre' =>  "UPS INTERACTIVO TLP AVR550U ",
                             'precio' => 133.92,
                             'imagen' => "upsavr550u_001",
                             'desCorta' =>"UPS interactivo serie AVR de 120V, 550VA y
                             300W, ultracompacto con puerto USB",
                             'descripción' => "UPS Interactivo Marca TRIP LITE, Modelo AVR550U, de 550VA 300W - 8 Tomacorrientes NEMA 5-15R, 
                             AVR, 120V, 50/60Hz, USB, Instalación en pared o escritorio",
                             'link'=>"https://assets.tripplite.com/product-pdfs/es/AVR550U.pdf",
                             'categoria_id' => 8,
                             'disponible' => true,
                             'created_at' => Carbon::now(),
                             'updated_at' => Carbon::now(),
              ),
                     array(
                                'nombre' =>  "TOMA CORRIENTE EZVIZ T30 ",
                                'precio' => 12.33,
                                'imagen' => "ezvizt30_001",
                                'desCorta' =>"Controle sus electrodomésticos desde cualquier lugar
                                Control Remoto a Través de la Aplicación Móvil. Soporta Wi-Fi de 2.4 GHz",
                                'descripción' => "Ezviz T30 - Controle sus electrodomésticos desde cualquier lugar.
                                Control Remoto a Través de la Aplicación Móvil. Soporta Wi-Fi de 2.4 GHz. Horarios 
                                y Temporizador. Resistencia al Fuego hasta 750°C. Ahorro de Energía. Control por 
                                Voz a través del Asistente de Google y Alexa.",
                                'link'=>"https://www.ezviz.com/la/product/T30-10A-US/29559",
                                'categoria_id' => 8,
                                'disponible' => true,
                                'created_at' => Carbon::now(),
                                'updated_at' => Carbon::now(),
                ),  
                        array(
                               'nombre' =>  "CAMARA INTERIOR EZVIZ H1C ",
                               'precio' => 33.48,
                               'imagen' => "ezvizh1c_01",
                              'desCorta' =>"Cámara Wi-Fi inteligente para el hogar Conectividad: Wifi
                              •	Resolución: 2MP (1920 x 1080)",
                              'descripción' => "Ezviz H1C
                            •	Conectividad: Wifi
                            •	Resolución: 2MP (1920 x 1080)
                            •	IR distance: 10m
                            •	Audio Bidireccional: Incorporado
                            •	Detección de Movimiento: Incorporado
                            •	Visión Nocturna: IR
                            •	Almacenamiento: Local	Ranura para tarjetas microSD (512 GB, máx.)
                            •	Compresión de Video:H.264, H.265
                            •	Almacenamiento en la Nube EZVIZ Cloud: Opcional",
                              'link'=>"https://www.ezviz.com/la/product/H1c/50221",
                              'categoria_id' => 9,
                              'disponible' => true,
                              'created_at' => Carbon::now(),
                              'updated_at' => Carbon::now(),
  
              ),
    
                      array(
                              'nombre' =>  "AMARA INTERIOR EZVIZ TY1 ",
                              'precio' => 36.39,
                              'imagen' => "ezvizty1_001",
                              'desCorta' =>"Cámara Wi-Fi inteligente para el hogar",
                              'descripción' => "Ezviz TY1 de 1080P.
                              •	Conectividad: Wifi/ RJ45
                              •	Resolución: 2MP (1920 x 1080)
                              •	Visión Nocturna: IR
                              •	IR distance:	10m
                            •	Audio Bidireccional: Incorporado
                            •	Modo Privacidad: Incorporado
                            •	Zona de alerta personalizada: Incorporado
                            •	Seguimiento Inteligente: Incorporado
                            •	Cobertura 360° Panorama: Incorporado
                              •	Detección de Movimiento: Incorporado
                              •	Compresión de Video: H.264
                              •	Almacenamiento Local: Ranura para tarjetas microSD (256 GB, máx.)",
                              'link'=>"https://www.ezviz.com/la/product/TY1/29213",
                              'categoria_id' => 9,
                              'disponible' => true,
                              'created_at' => Carbon::now(),
                              'updated_at' => Carbon::now(),
              ),
  
    
                      array(
                              'nombre' =>  "CAMARA EXTERIOR EZVIZ H3 ",
                              'precio' => 69.87,
                              'imagen' => "ezvizh3_001",
                              'desCorta' =>"Conectividad: Wifi/ RJ45
                              •	Resolución: 2K
                              •	Grado IP:IP67",
                            'descripción' => "Ezviz H3.
                            •	Conectividad: Wifi/ RJ45
                            •	Resolución: 2K
                            •	Grado IP:IP67
                            •	IR distance	30m
                            •	Defensa Activa:  Luz Estroboscopica y Sirena
                            •	Audio Bidireccional: Incorporado
                            •	Alertas de Voz Personalizables: Incorporado",
                              'link'=>"https://www.ezviz.com/la/product/H3-2K/42443",
                              'categoria_id' => 9,
                              'disponible' => true,
                              'created_at' => Carbon::now(),
                              'updated_at' => Carbon::now(),
  
              ),
    
                      array(
                              'nombre' =>  "CAMARA EXTERIOR EZVIZ H8C ",
                              'precio' => 72.78,
                              'imagen' => "ezvizh8c_001",
                              'desCorta' =>"Conectividad: Wifi/ RJ45
                              •	Resolución: 2MP (1920X1080)
                              •	Grado IP: Diseño a prueba de agua
                              •	IR distance: 30m",
                              'descripción' => "Ezviz H8C,
                              •	Conectividad: Wifi/ RJ45
                              •	Resolución: 2MP (1920X1080)
                              •	Grado IP: Diseño a prueba de agua
                              •	IR distance: 30m
                              •	Defensa Activa: Luz Estroboscopica y Sirena
                              •	Audio Bidireccional: Incorporado
                              •	Zona de alerta personalizada: Incorporado
                              •	Cobertura 360° Panorama: Incorporado
                              •	Detección de Movimiento: Incorporado
                              •	Detección Silueta Humana: Incorporado
                              •	Visión Nocturna: Color
                              •	Compresión de Video: 👍H.264, H.265",
                              'link'=>"https://www.ezviz.com/la/product/H8c/44445",
                              'categoria_id' => 9,
                              'disponible' => true,
                              'created_at' => Carbon::now(),
                              'updated_at' => Carbon::now(),
    
              ),
                      array(
                              'nombre' => "CAMARA DE BATERIA EZVIZ CB1 ",
                              'precio' => 55.32,
                              'imagen' => "ezvizcb1_001",
                              'desCorta' =>"Conectividad: Wifi, Resolución: 2MP(1920 x 1080),IR distance: hasta 5 m, Audio Bidireccional: Incorporado, Base Magnética: Incorporado",
                              'descripción' => "Ezviz CB1. 
                              •	Conectividad: Wifi 
                              •	Resolución: 2MP(1920 x 1080) 
                              •	IR distance: hasta 5 m
                              •	Audio Bidireccional: Incorporado
                              •	Base Magnética: Incorporado
                              •	Compresión de Video: H.264, H.265	
                              •	Almacenamiento Local: Memoria MicroSD hasta 512
                              •	Almacenamiento en la Nube EZVIZ Cloud: Opcional
                              •	1.600 MAH Bateria de Litio recargable",
                              'link'=>"https://www.ezviz.com/la/product/CB1/55599",
                              'categoria_id' => 9,
                              'disponible' => true,
                              'created_at' => Carbon::now(),
                              'updated_at' => Carbon::now(),
    
              ),
    
                      array(
                              'nombre' =>  "CAMARA DE BATERIA EZVIZ CS-BM1 ",
                              'precio' => 122.28,
                              'imagen' => "ezvizcb1_001",
                              'desCorta' =>"Conectividad: Wifi 
                              •	Resolución: 1080
                              •	Detección de llanto
                              •	Alertas de falta de cuna
                              •	Audio Bidireccional: Incorporado",
                              'descripción' => "Ezviz CS-BM1
                              •	Conectividad: Wifi 
                              •	Resolución: 1080
                              •	Detección de llanto
                              •	Alertas de falta de cuna
                              •	Audio Bidireccional: Incorporado
                              •	Detección de actividad del bebé (impulsada por un algoritmo de forma humana)
                              •	Música relajante de reproducción automática
                              •	Visión nocturna clara sin luz roja visible	
                              •	Almacenamiento Local: Memoria MICRO SSD Hata 256GB
                              •	Base magnética: Incorporado
                              •	Almacenamiento en la Nube EZVIZ Cloud: Opcional
                              •	Bateria  (12.000 mAh)",
                              'link'=>"https://www.ezviz.com/la/product/BM1/42981",
                              'categoria_id' => 9,
                              'disponible' => true,
                              'created_at' => Carbon::now(),
                              'updated_at' => Carbon::now(),   
                        ),
    
                      array(
                              'nombre' =>  "VIDEO PORTERO EZVIZ DB2C ",
                              'precio' => 141.20,
                              'imagen' => "ezvizdb2c_001",
                              'desCorta' =>"Conectividad: wifi
                              •	Resolución: Video 1080P 
                              •	Campo de visión: Vertical de 160°
                              •	Detección avanzada de personas PIR",
                              'descripción' => "Ezviz DB2C.
                              •	Conectividad: wifi
                              •	Resolución: Video 1080P 
                              •	Campo de visión: Vertical de 160°
                              •	Detección avanzada de personas PIR
                              •	Alarma anti-sabotaje
                              •	Batería: Recargable de litio de 5200 mAh
                              •	Visión Nocturna: hasta 6m
                              •	Compresión de Video: 👍H.265
                              •	Sirena Wifi: Incluido
                              •	Almacenamiento Local: Ranura para tarjetas microSD (2556 GB, máx.)
                              •	Almacenamiento en la Nube EZVIZ Cloud: Opcional",
                              'link'=>"https://www.ezviz.com/la/product/HP7/49169",
                              'categoria_id' => 9,
                              'disponible' => true,
                              'created_at' => Carbon::now(),
                              'updated_at' => Carbon::now(),
                ),
        ];
        DB::table('productos')->insert($datos);
    }
}
