@extends('templates.plantilla')

@section('title', $title)

@section('title-header', "Gallery name")

@section('route-view', "ARTWORKS LIST")

@section('menu-content')
    <div class="col">
        <a href="/create"><button class="btn btn-light buttonMenu">Create Artwork</button></a>
    </div>
@endsection

@section('content')
    @if (isset($obras))
        @if (empty($obras->items))
            <p>There is no artwork created</p>
        @else
            {{var_dump($obras)}}
        @endif
    @else
        <h1>Esto es una prueba de incio</h1>
    @endif
@endsection