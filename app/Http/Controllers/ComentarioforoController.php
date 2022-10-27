<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreComentarioforoRequest;
use App\Http\Requests\UpdateComentarioforoRequest;
use App\Models\Comentarioforo;

class ComentarioforoController extends Controller
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
     * @param  \App\Http\Requests\StoreComentarioforoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreComentarioforoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comentarioforo  $comentarioforo
     * @return \Illuminate\Http\Response
     */
    public function show(Comentarioforo $comentarioforo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comentarioforo  $comentarioforo
     * @return \Illuminate\Http\Response
     */
    public function edit(Comentarioforo $comentarioforo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateComentarioforoRequest  $request
     * @param  \App\Models\Comentarioforo  $comentarioforo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateComentarioforoRequest $request, Comentarioforo $comentarioforo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comentarioforo  $comentarioforo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comentarioforo $comentarioforo)
    {
        //
    }
}
