<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginYRegisterController extends Controller
{
    public function index()
    {
        return view("auth.login&Register");
    }


    public function authenticate(Request $request){
        $credentials = $request->only(['email', 'password']);

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();

            return redirect()
                ->intended(route('inicio'))
                ->with('feedback.message', 'Sesion iniciada con exito!');
        }

        return redirect()
            ->back()
            ->withInput()
            ->with('feedback.message', 'Credenciales inválidas. Inténtalo nuevamente.');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3',
            'surname' => 'required|string|min:3',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ],[
            'name.required' => 'El nombre es obligatorio.',
            'name.min' => 'El nombre debe tener al menos :min caracteres.',
            'surname.required' => 'El apellido es obligatorio.',
            'surname.min' => 'El apellido debe tener al menos :min caracteres.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser válido.',
            'email.unique' => 'Este correo ya está registrado.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos :min caracteres.'
        ]);

        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    
        return redirect()
            ->route('acceso&registro') 
            ->with('feedback.message', 'El usuario se creó con éxito.');

    }

    public function logout(Request $request)
    {
        //cerrar la sesion
        auth()->logout();

        //invalidamos la sesion, creamos otra y regeneramos el token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('acceso&registro')
            ->with('feedback.message', 'sesion cerrada con exito, volve pronto!');
    }


}
