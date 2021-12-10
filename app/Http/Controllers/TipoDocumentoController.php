<?php

namespace App\Http\Controllers;

use App\Models\tipo_documento;
use App\Http\Requests\Storetipo_documentoRequest;
use App\Http\Requests\Updatetipo_documentoRequest;

class TipoDocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storetipo_documentoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Storetipo_documentoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tipo_documento  $tipo_documento
     * @return \Illuminate\Http\Response
     */
    public function show(tipo_documento $tipo_documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tipo_documento  $tipo_documento
     * @return \Illuminate\Http\Response
     */
    public function edit(tipo_documento $tipo_documento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatetipo_documentoRequest  $request
     * @param  \App\Models\tipo_documento  $tipo_documento
     * @return \Illuminate\Http\Response
     */
    public function update(Updatetipo_documentoRequest $request, tipo_documento $tipo_documento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tipo_documento  $tipo_documento
     * @return \Illuminate\Http\Response
     */
    public function destroy(tipo_documento $tipo_documento)
    {
        //
    }
}
