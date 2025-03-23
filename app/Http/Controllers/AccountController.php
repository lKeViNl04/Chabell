<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\User;


class AccountController extends Controller
{
    public function index(){
        
        $UserAuth= Auth()->user();
        return view("account",[
            'DatosUsuario' => $UserAuth
        ]);
    }


    public function update(int $id, Request $request)
{
    $user = User::findOrFail($id);
    $input = $request->except(['_token', '_method']);

    $request->validate([
        'name' => 'required|string|min:3',
        'surname' => 'required|string|min:3',
        'email' => "required|email|unique:users,email,$id",
        'password' => 'nullable|min:8',
    ],[
        'name.required' => 'El nombre es obligatorio.',
        'name.min' => 'El nombre debe tener al menos :min caracteres.',
        'surname.required' => 'El apellido es obligatorio.',
        'surname.min' => 'El apellido debe tener al menos :min caracteres.',
        'email.required' => 'El correo electrónico es obligatorio.',
        'email.email' => 'El correo electrónico debe ser válido.',
        'email.unique' => 'Este correo ya está registrado.',
        'password.min' => 'La contraseña debe tener al menos :min caracteres.'
    ]);

    $updateData = [
        'name' => $request->name,
        'surname' => $request->surname,
        'email' => $request->email,
    ];

    if ($request->filled('password')) {
        $updateData['password'] = bcrypt($request->password);
    }

    $user->update($updateData);

    return redirect()
        ->route('inicio')
        ->with('feedback.message', 'El usuario se actualizó con éxito.');
}

public function destroy(int $id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()
            ->route('acceso&registro')
            ->with('feedback.message', 'el Usuario se elimino con exito');
    }




}




