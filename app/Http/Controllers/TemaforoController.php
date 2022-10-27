<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTemaforoRequest;
use App\Http\Requests\UpdateTemaforoRequest;
use App\Models\Temaforo;

class TemaforoController extends Controller
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
     * @param  \App\Http\Requests\StoreTemaforoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTemaforoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Temaforo  $temaforo
     * @return \Illuminate\Http\Response
     */
    public function show(Temaforo $temaforo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Temaforo  $temaforo
     * @return \Illuminate\Http\Response
     */
    public function edit(Temaforo $temaforo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTemaforoRequest  $request
     * @param  \App\Models\Temaforo  $temaforo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTemaforoRequest $request, Temaforo $temaforo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Temaforo  $temaforo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Temaforo $temaforo)
    {
        //
    }
}
