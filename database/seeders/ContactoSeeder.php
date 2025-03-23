<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("contact")->insert( [
            [
                "name" => "kevin",
                "email" => "kevin_flores@hotmail.com",
                "phone_number" => "1161759977",
                "menssage" => "PazMental",
            ],
            [
                "name" => "elias",
                "email" => "elias.tabare@davinci.edu.ar",
                "phone_number" => "51531645",
                "menssage" => "esto hice para enviar al admin",
            ],
        ]);

    }
}
