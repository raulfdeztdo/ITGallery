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
        @if (count($obras) == 0)
            <p>There is no artwork created</p>
        @else
            <table class="table">
                <thead>
                    <th>Name</th>
                    <th>Artist</th>
                    <th>Year</th>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($obras as $artwork)
                    <tr>
                        <td>{{$artwork->getAttributes()["nombreObra"]}}</td>
                        <td>{{$artwork->getAttributes()["nombreArtista"]}}</td>
                        <td>{{$artwork->getAttributes()["anio"]}}</td>
                        <td><a href="{{route('show',$artwork->id)}}"><button>See details</button></a></td>
                        <td><a href="{{route('edit',$artwork->id)}}"><button><i class="fa-solid fa-pen"></i></button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    @else
        <p>Do not exists variable of Controller</p>
    @endif
@endsection