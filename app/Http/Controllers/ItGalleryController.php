<?php

namespace App\Http\Controllers;

use App\Models\ItGallery;
use Illuminate\Http\Request;

class ItGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $viewVar["title"] = "Home";
        $viewVar["obras"] = ItGallery::all();
        return \view("inicio", $viewVar);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;

        $obra = new ItGallery();
        $obra->nombreObra = $request->nombreObra;
        $obra->nombreArtista = $request->nombreArtista;
        $obra->foto = $request->foto;
        $obra->anio = $request->anio;
        $obra->nInventario = $request->nInventario;
        $obra->alto = $request->alto;
        $obra->ancho = $request->ancho;
        $obra->profundidad = $request->profundidad;

        $obra->save();

        return redirect()->route('show', $obra->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ItGallery  $itGallery
     * @return \Illuminate\Http\Response
     */
    public function show(ItGallery $itGallery)
    {
        $obra = ItGallery::findOrFail($request->id);
        return $obra;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ItGallery  $itGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(ItGallery $itGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ItGallery  $itGallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ItGallery $obra)
    {
        $obra = ItGallery::findOrFail($request->id);

        $obra = new ItGallery();
        $obra->nombreObra = $request->nombreObra;
        $obra->nombreArtista = $request->nombreArtista;
        $obra->foto = $request->foto;
        $obra->anio = $request->anio;
        $obra->nInventario = $request->nInventario;
        $obra->alto = $request->alto;
        $obra->ancho = $request->ancho;
        $obra->profundidad = $request->profundidad;

        $obra->save();

        return $obra;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ItGallery  $itGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(ItGallery $itGallery)
    {
        $obra = ItGallery::destroy($itGallery->id);
        return $obra;
    }
}
