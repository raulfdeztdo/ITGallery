@extends('templates.plantilla')

@section('title', $title)

@section('title-header', "Gallery name")

@section('route-view', "ARTWORK DETAILS")

@section('menu-content')
    <div class="col">
        <button class="btn btn-light buttonMenu">Summary</button>
        <button class="btn btn-light buttonMenu">General</button>
        <button class="btn btn-light buttonMenu">Images</button>
        <button class="btn btn-light buttonMenu">Actions</button>
        <button class="btn btn-light buttonMenu">Additional info</button>
        <button class="btn btn-light buttonMenu">Documents</button>
        <button class="btn btn-light buttonMenu">Exhibitions</button>
    </div>
@endsection

@section('content')
    @if (isset($art))
        <div class="row">
            <div class="col-sm-5 col-md-5">
                <img src="@if (is_null($art->foto)) {{URL::asset('img/default.png')}} @else {{$art->foto}} @endif" alt="img_{{$art->nombreObra}}" style="width: 100%">
            </div>
            <div class="col-sm-5 col-md-5">
                <h1>{{$art->nombreObra}}</h1>
                <small>From series: Interventions</small>
                <p style="color: orange">{{$art->nombreArtista}}</p>
                <div class="row mb-2">
                    <div class="col-6"><i class="fa-solid fa-circle-small" style="color: orange"></i><small>Reserved</small></div>
                    <div class="col-6"><i class="fa-solid fa-circle-small" style="color: green"></i><small>Available</small></div>
                </div>
                <p>{{$art->nInventario}}</p>
                <p>{{$art->anio}}</p>
                <p>{{$art->alto}}x{{$art->ancho}}x{{$art->profundidad}} cm</p>
                <p>800€ · 1,299 USD · 700€ with discount</p>
                <div class="row">
                    <div class="col-2"><a href="{{route('edit',$art->id)}}"><button style="width: 100%"><i class="fa-solid fa-pen"></i></button></a></div>
                    <div class="col-5"><button style="width: 100%">Export PDF</button></div>
                    <div class="col-5"><button style="width: 100%">Export & send PDF</button></div>
                </div>
            </div>
            <div class="col-sm-2 col-md-2">
                <button><i class="fa-solid fa-angle-left"></i></button>
                <button><i class="fa-solid fa-angle-right"></i></button>
            </div>
        </div>
    @else
        <p>Do not exists this artwork</p>
    @endif
@endsection