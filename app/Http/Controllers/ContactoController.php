<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("contact");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone_number' => 'numeric',
            'menssage' => 'required|min:15'
        ],[
            'name.min' => 'el Nombre debe tener al menos :min caracteres',
            'email.email'=> 'debe ser un Email',
            'phone_number.numeric' => 'debe ser un Numero de telefono o celular',
            'menssage.min' => 'la consulta debe tener al menos :min caracteres'
        ]);

        $input = $request->all();
        Contacto::create($input);
        return redirect()
        ->route('inicio')
        ->with('feedback.message', 'La Consulta se envio con exito');

    }

    /**
     * Display the specified resource.
     */
    public function show(Contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contacto $contacto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contacto $contacto)
    {
        //
    }
}
