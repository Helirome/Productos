<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    public function index() 
    {
        $productos = DB::select('SELECT * FROM productos WHERE activo = 1');
        return view('productos.index', ['lista' => $productos]);
    }

    public function show($nombre)
    {
        return view('productos.show', ['producto' => $nombre]);
    }

    public function create() 
    {
        return view('productos.create');
    }

    public function store(Request $request)
    {
        echo "<pre>";
        echo $request->input('nombre');
        echo $request->input('precio');
        echo "</pre>";
    }

    public function edit($id)
    {
        return view('productos.edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        echo "<pre>";
        echo $id.' - ';
        echo $request->input('nombre').' - ';
        echo $request->input('precio').' - ';
        echo "</pre>";
    }

    public function destroy($id)
    {
        echo "Resgistro $id eliminado";
    }
}