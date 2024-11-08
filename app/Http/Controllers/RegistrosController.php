<?php

namespace App\Http\Controllers;

use App\Models\registros;
use App\Models\eventos;
use Illuminate\Http\Request;

class RegistrosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = eventos::pluck('nombre', 'id');
        $registros = registros::orderBy('id', 'desc')->paginate(4);
        return view('tymqro.registros.index', compact('eventos','registros'));
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
        $registro = registros::create($request->all());
        return redirect()->route('registros.show', $registro);
    }

    /**
     * Display the specified resource.
     */
    public function show(registros $registro)
    {
        $evento = eventos::pluck('nombre', 'id');
        return view('tymqro.registros.show', compact('evento', 'registro'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(registros $registros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, registros $registro)
    {
        $registro->update($request->all());
        return redirect()->route('registros.show', $registro);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(registros $registros)
    {
        //
    }
}
