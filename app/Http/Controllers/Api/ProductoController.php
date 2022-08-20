<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return 123;
        $Producto=Producto::all();
        return $Producto;
    }

    public function store(Request $request)
    {
        $Producto=new Producto();
        $Producto->descripcion=$request->descripcion;
        $Producto->precio=$request->precio;
        $Producto->stock=$request->stock;
        $Producto->save();
        return $Producto;
    }

    public function show($id)
    {
    $Producto=Producto::find($id);
    return $Producto;
    }

    public function update(Request $request, $id)
    {
        $Producto=Producto::find($id);
        $Producto->descripcion=$request->descripcion;
        $Producto->precio=$request->precio;
        $Producto->stock=$request->stock;
        $Producto->save();
        return $Producto;
    }

    public function destroy($id)
    {
        $Producto=Producto::destroy($id);
        // $Producto=Producto::find($id);
        // $Producto->delete();
        return $Producto;
    }
}
