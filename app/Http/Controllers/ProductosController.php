<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $texto = trim ($request->get('texto'));
        $productos = DB::table('productos')
                ->select('id', 'producto', 'cantidad', 'costo')
                ->where('producto', 'LIKE', '%' . $texto . '%')
                ->orWhere('cantidad', 'LIKE', '%' . $texto . '%')
                ->orWhere('costo', 'LIKE', '%' . $texto . '%')
                ->orderBy('producto', 'asc')
                ->paginate(10);
        return view('productos.index', compact('productos','texto'));
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
        productos::create($request->all());
        return redirect()->route('productos.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(productos $producto)
    {
        return view('productos.show',compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(productos $productos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, productos $producto)
    {
        $producto->update($request->all());
        return redirect()->route('productos.show', $producto);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(productos $productos)
    {
        //
    }
}
