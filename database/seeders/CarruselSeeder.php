<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Carrusel;

class CarruselSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("carousel")->insert([
            [
                "nombre" => "Spyro el Dragon",
                "descripcion" => "Pijama de Spyro el Dragon presenta un diseño vibrante y colorido del icónico dragón púrpura.",
                "img" => "img/dragon.jpeg",
                "link" => "#",
            ],
            [
                "nombre" => "Reno Navideño",
                "descripcion" => "Pijama kigurumi con una capucha que tiene astas y una cara de reno, y un cuerpo gris con detalles blancos.",
                "img" => "img/renogris.jpeg",
                "link" => "#",
            ],
            [
                "nombre" => "Unicornio Celeste",
                "descripcion" => "Pijama Unicornio Celeste con capucha que incluye un cuerno, orejas y crin de unicornio. (detalles en tonos pastel)",
                "img" => "img/UAzul.jpeg",
                "link" => "#",
            ],
            [
                "nombre" => "Mapache",
                "descripcion" => "Pijama de mapache estilo enterizo con capucha y orejas, diseño de franjas negras en brazos y piernas, y una cola rayada ajustable.",
                "img" => "img/mapache.jpeg",
                "link" => "#",
            ],
            [
                "nombre" => "Conejo",
                "descripcion" => "Pijama de conejito. Es de color gris con detalles en blanco y rosa, incluyendo una cara de conejo en la capucha.",
                "img" => "img/conejita.jpeg",
                "link" => "#",
            ],
            [
                "nombre" => "Explora con Estilo y Diversión",
                "descripcion" => "Aventúrate con nuestro exclusivo traje de unicornio. Confort y fantasía.",
                "img" => "img/INICIO3.jpg",
                "link" => "Producto.php",
            ],
            [
                "nombre" => "Dulce Diversión",
                "descripcion" => "Añade un toque de alegría a tus días.",
                "img" => "img/INICIO1.jpg",
                "link" => "Producto.php",
            ],
            [
                "nombre" => "Diversión y Comodidad en Casa",
                "descripcion" => "Relájate y disfruta con nuestro adorable traje de unicornio.",
                "img" => "img/INICIO2.jpg",
                "link" => "Producto.php",
            ],
        ]);
    }
}
