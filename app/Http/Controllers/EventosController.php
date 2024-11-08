<?php

namespace App\Http\Controllers;

use App\Models\eventos;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $eventos = eventos::orderBy('id', 'desc')->paginate(05);
        return view('tymqro.eventos.index',compact('eventos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        eventos::create($request->all());

        return redirect()->route('eventos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(eventos $evento)
    {
        return view('tymqro.eventos.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(eventos $eventos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, eventos $evento)
    {
        $evento->update($request->all());
        return redirect()->route('eventos.show', $evento);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(eventos $eventos)
    {
        //
    }
}
