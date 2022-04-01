<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use App\Models\Producto;

class RelacionController extends Controller
{
    //
    public function index(){
        $productos = Producto::all();
        return view('categorias',compact('productos'));
    }
}
