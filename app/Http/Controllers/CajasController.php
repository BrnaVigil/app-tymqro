<?php

namespace App\Http\Controllers;

use App\Models\cajas;
use App\Models\productos;
use Illuminate\Http\Request;

class CajasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cajas = cajas::orderBy('id','desc')->paginate(10);
        return view ('cajas.index', compact('cajas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('cajas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        cajas::create($request->all());
        return redirect()->route('cajas.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(cajas $cajas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(cajas $cajas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, cajas $cajas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(cajas $cajas)
    {
        //
    }

}
