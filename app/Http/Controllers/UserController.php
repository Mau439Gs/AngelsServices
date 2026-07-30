<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function quienes_somos()
    {
        return view('quienessomos');
    }

    public function servicios()
    {
        return view('servicios');
    }

    public function aviso_privacidad()
    {
        return view('aviso-privacidad');
    }

    public function guardar(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'servicio' => 'required|string|max:255',
            'mensaje' => 'required|string|max:1000',
        ]);

        User::create($validatedData);

        return redirect('/')->with('success', '¡Gracias por contactarnos! Nos pondremos en contacto contigo pronto.');
    }
}
