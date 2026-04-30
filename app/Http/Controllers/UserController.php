<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
