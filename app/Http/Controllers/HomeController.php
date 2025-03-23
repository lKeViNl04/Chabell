<?php

namespace App\Http\Controllers;
use App\Models\Carrusel;
use App\Models\Articulo;

class HomeController extends Controller
{
    public function index(){
        $carruseles = Carrusel::orderBy('id_carrusel', 'desc')->take(3)->get();
        $Articulo = Articulo::orderBy('price', 'desc')->take(3)->get();

        return view("home",[
            "Carruseles" =>  $carruseles,
            "Articulos" =>$Articulo
        ]);
    }


}
