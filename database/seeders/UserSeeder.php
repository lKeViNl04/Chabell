<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("users")->insert(
            [
                [
                "id"=>1,
                "name"=>"admin",
                "surname"=>"admin",
                "email" =>"admin@admin.com",
                "password"=>Hash::make("password"),
                "role" => 1,
                "created_at"=>now(),
                "updated_at"=>now()
                ],
                [
                    "id"=>2,
                    "name"=>"kevin",
                    "surname"=>"flores",
                    "email" =>"kevin@kevin.com",
                    "password"=>Hash::make("kevin123456"),
                    "role" => 2,
                    "created_at"=>now(),
                    "updated_at"=>now()
                ],
                [
                    "id"=>3,
                    "name"=>"elias",
                    "surname"=>"tabare",
                    "email" =>"elias@tabare.com",
                    "password"=>Hash::make("elias123456"),
                    "role" => 2,
                    "created_at"=>now(),
                    "updated_at"=>now()
                ]
            ]
        );

    }
}
