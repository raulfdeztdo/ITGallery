@extends('templates.plantilla')

@section('title', "Create")

@section('title-header', "Gallery name")

@section('route-view', "EDIT ARTWORKS")

@section('menu-content')
    <div class="col">
        <button type="button" class="btn buttonMenu" data-bs-toggle="modal" data-bs-target="#modalUpdate"">Update</button>
        <a href="{{route('index')}}"><button type="button" class="btn buttonMenu">Cancel</button></a>
    </div>
@endsection

@section('content')
    @if (isset($art))
    <form action="{{route('update')}}" method="POST">
        @csrf
        <input type="hidden" name="id" id="id" value="{{$art->id}}">
        <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label form1">Title</label>
            <div class="col-sm-5">
                <input type="text" class="form-control form2" id="title" name="title" value="{{$art->nombreObra}}" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="artist" class="col-sm-2 col-form-label form1">Artist</label>
            <div class="col-sm-5">
                <input type="text" class="form-control form2" id="artist" name="artist" value="{{$art->nombreArtista}}" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="year" class="col-sm-2 col-form-label form1">Year</label>
            <div class="col-sm-5">
                <input type="number" class="form-control form2" id="year" name="year" value="{{$art->anio}}">
            </div>
        </div>
        <div class="row mb-3">
            <label for="invID" class="col-sm-2 col-form-label form1">Inventory ID</label>
            <div class="col-sm-5">
                <input type="text" class="form-control form2" id="invID" name="invID" value="{{$art->nInventario}}" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="dimensions" class="col-2 col-form-label form1"></label>
            <div class="col-5">
                <div class="row">
                    <div class="col-3"><input type="number" class="form-control form2" id="height" name="height" value="{{$art->alto}}" required></div>
                    <div class="col-3"><input type="number" class="form-control form2" id="width" name="width" value="{{$art->ancho}}" required></div>
                    <div class="col-3"><input type="number" class="form-control form2" id="depth" name="depth" value="{{$art->profundidad}}" required></div>
                    <div class="col-3">
                        <select class="form-select form2" name="formatD" id="formatD">
                            <option value="english" selected>cm</option>
                            <option value="spanish">in</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="button" class="btn buttonProject" data-bs-toggle="modal" data-bs-target="#modalUpdate"">Update</button>
                <a href="{{route('index')}}"><button type="button" class="btn buttonProject">Cancel</button></a>
                <button type="button" class="btn buttonProject" data-bs-toggle="modal" data-bs-target="#modalDelete"">Delete</button>
            </div>
        </div>
        <!-- Modal confirmation update -->
        <div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="modalUpdateLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modalProject">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalUpdateLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to edit this artwork?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn buttonProject" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn buttonProject">Update artwork</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal confirmation delete -->
        <div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="modalDeleteLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modalProject">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalDeleteLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete this artwork?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn buttonProject" data-bs-dismiss="modal">Close</button>
                        <a href="{{route('delete', $art->id)}}"><button type="button" class="btn buttonProject">Delete artwork</button></a>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @else
        <p>Do not exists this artwork</p>
    @endif
@endsection