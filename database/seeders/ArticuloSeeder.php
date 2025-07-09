<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Articulo;

class ArticuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("product")->insert([
            [
                "name" => "Pikachu",
                "description" => "El pijama de Pikachu, amarillo y con detalles como orejas puntiagudas y mejillas rojas, ofrece comodidad y diversion para dormir.",
                "price" => 25000,
                "img" => "img/pikachu.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Sullivan",
                "description" => "El pijama de Sullivan, inspirado en el personaje de Monsters, Inc., es de un azul vibrante con manchas moradas y tiene una capucha con cuernos, perfecto para los fans de Sulley.",
                "price" => 15000,
                "img" => "img/sullivan.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Abejita",
                "description" => "La pequeña abejita revoloteaba entre las flores, sus rayas amarillas y negras brillando bajo el cálido sol de la mañana, mientras recolectaba néctar con diligencia y precisión.",
                "price" => 15000,
                "img" => "img/abejita.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Igor",
                "description" => "Pijama Igor, el gato siames con melena oscura y ojos azules, descansaba tranquilamente en la ventana soleada.",
                "price" => 15000,
                "img" => "img/igorr.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Esqueleto",
                "description" => "Conjunto divertido con diseño de esqueleto, comodo y ligero para noches originales y confortables.",
                "price" => 25000,
                "img" => "img/esqueletoo.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Unicornio Rosa",
                "description" => "Conjunto adorable con diseño de unicornio en tonos rosados, perfecto para noches mágicas y acogedoras.",
                "price" => 25000,
                "img" => "img/URosa.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Unicornio Multicolor",
                "description" => "Conjunto encantador con diseño de unicornio en varios colores, ideal para noches llenas de magia y diversión.",
                "price" => 25000,
                "img" => "img/UMulti.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Unicornio con brillitos",
                "description" => "Conjunto adorable con detalles brillantes para noches que deslumbran y hacen brillar tus sueños.",
                "price" => 15000,
                "img" => "img/UBrillo.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Lobo",
                "description" => "Conjunto cómodo con diseño de lobo, perfecto para noches salvajes y reconfortantes.",
                "price" => 25000,
                "img" => "img/lobo.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Stich",
                "description" => "Conjunto adorable con diseño inspirado en Stitch, ideal para noches llenas de diversión y confort.",
                "price" => 15000,
                "img" => "img/stich.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Jirafa",
                "description" => "Conjunto adorable con diseño inspirado en Stitch, ideal para noches llenas de diversión y confort.",
                "price" => 25000,
                "img" => "img/jirafa.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Vaca",
                "description" => "Conjunto cómodo con diseño de vaca, ideal para noches divertidas y confortables.",
                "price" => 15000,
                "img" => "img/vaca.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Stich Rosado",
                "description" => "Conjunto adorable con diseño en tonos rosados inspirado en Stitch, perfecto para noches llenas de ternura y comodidad.",
                "price" => 25000,
                "img" => "img/Rstich.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Dinosaurio",
                "description" => "Conjunto cómodo con diseño de dinosaurio, ideal para noches llenas de aventura y diversión prehistórica.",
                "price" => 15000,
                "img" => "img/dinosaurio.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Reno",
                "description" => "Conjunto acogedor con diseño de reno, perfecto para noches navideñas y cálidas.",
                "price" => 25000,
                "img" => "img/reno.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Oso Panda",
                "description" => "Conjunto adorable con diseño de osos panda, ideal para noches cómodas y llenas de ternura.",
                "price" => 15000,
                "img" => "img/panda.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Charizard",
                "description" => "Conjunto cómodo con diseño de Charizard, perfecto para noches llenas de aventura y confort.",
                "price" => 25000,
                "img" => "img/charizard.jpeg",
                "stock" => 100,
            ],
            [
                "name" => "Chanchito",
                "description" => "Pijama Chanchito, el cerdito rosado con manchas blancas y una sonrisa traviesa, se acurrucaba felizmente bajo una manta suave en su camita.",
                "price" => 25000,
                "img" => "img/chanchito.jpeg",
                "stock" => 100,
            ],
        ]);
    }
}
