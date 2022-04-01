<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HerramientaController extends Controller
{
    //
    public function inicio()
    {
        return view('inicio');
    }

    public function categorias()
    {
        return view('categorias');
    }

    public function api()
    {
        return view('api');
    }
}
