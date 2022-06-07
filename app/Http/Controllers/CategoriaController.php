<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    //
    public function index()
    {
        $categorias = Categoria::All();
        return view('categoria.index')->with('categorias', $categorias);
    }

    public function create()
    {

        return view('categoria.create');
    }

    public function insert(Request $request)
    {
        //dd($request);
        $categoria = new Categoria();
        $categoria->descripcion = $request->descripcion;
        $categoria->estado = 1;
        $categoria->save();
        return redirect('/categorias');
    }

    public function edit($id)
    {
        $categoria = Categoria::find($id);
        return view('categoria.edit')->with('categoria',$categoria);

    }

    public function update(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        return redirect('/categorias');
    }

    public function delete($id)
    {
        $categoria = Categoria::find($id);
        $categoria->delete();
        return redirect('/categorias');
    }

}
