<?php

namespace App\Http\Controllers;

use App\Models\Arriendo;
use App\Models\Tipo;
use Illuminate\Http\Request;
use App\Http\Requests\ArriendoRequest;


class ArriendosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $arriendos = Arriendo::all();
        return view('arriendos.index', compact('arriendos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tipos =Tipo::all();
        return view('arriendos.create', compact('tipos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArriendoRequest $request)
    {
        $arriendo = new Arriendo();

        $arriendo->rut = $request->rut;
        $arriendo->nombre = $request->nombre;
        $arriendo->apellido = $request->apellido;
        $arriendo->email = $request->email;
        $arriendo->tipo = $request->tipo;
        $arriendo->fechaI = $request->fechaI;
        $arriendo->fechaT= $request->fechaT;

        $arriendo->save();

        return redirect()->route('arriendos.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Arriendo $arriendo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Arriendo $arriendo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Arriendo $arriendo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Arriendo $arriendo)
    {
        $arriendo->delete();
        return redirect()->route('arriendos.index');
    }
}
