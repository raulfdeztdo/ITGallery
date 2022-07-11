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
        $obra = new ItGallery();
        $obra->nombreObra = $request->title;
        $obra->nombreArtista = $request->artist;
        // $obra->foto = $request->foto;
        $obra->anio = $request->year;
        $obra->nInventario = (!is_null($request->invID)) ? "ITG-".$request->invID : "ITG-NULL";
        $obra->alto = $request->height;
        $obra->ancho = $request->width;
        $obra->profundidad = $request->depth;

        $obra->save();

        return redirect()->route('show', $obra->id);
    }


    /**
     * It takes an integer as a parameter, finds the artwork with that ID in the database, and returns
     * a view with the artwork's information
     *
     * @param int id The id of the artwork to be shown.
     *
     * @return The view "artwork" with the variable
     */
    public function show(int $id)
    {
        $viewVar["art"] = ItGallery::findOrFail($id);
        $viewVar["title"] = $viewVar["art"]->nombreObra;
        return \view("artwork", $viewVar);
    }

    /**
     * Receive id and return data of this artwork for update its data
     *
     * @param int id The id of the record to be edited.
     *
     * @return The view "edit" with the variable
     */
    public function edit(int $id)
    {
        $viewVar["art"] = ItGallery::findOrFail($id);
        $viewVar["title"] = $viewVar["art"]->nombreObra;
        return \view("edit", $viewVar);
    }

    /**
     * It takes a request, finds the obra with the id in the request, and then updates the obra with
     * the data in the request
     *
     * @param Request request The request object.
     * @param ItGallery obra The model instance that you are updating.
     *
     * @return The updated object.
     */
    public function update(Request $request)
    {
        $obra = ItGallery::findOrFail($request->id);

        $obra->nombreObra = $request->title;
        $obra->nombreArtista = $request->artist;
        // $obra->foto = $request->foto;
        $obra->anio = $request->year;
        $obra->nInventario = $request->invID;
        $obra->alto = $request->height;
        $obra->ancho = $request->width;
        $obra->profundidad = $request->depth;

        $obra->save();

        return redirect()->route('show', $obra->id);
    }

    /**
     * It deletes the record with the id passed as a parameter
     *
     * @param int id The id of the resource to be deleted.
     */
    public function delete(int $id)
    {
        $obra = ItGallery::destroy($id);
        return redirect()->route('index');
    }
}
