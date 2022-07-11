@extends('templates.plantilla')

@section('title', "Create")

@section('title-header', "Gallery name")

@section('route-view', "CREATE ARTWORKS")

@section('menu-content')
    <div class="col">
        <button type="button" class="btn btn-light buttonMenu" data-bs-toggle="modal" data-bs-target="#modalSave">Save</button>
        <a href="{{route('index')}}"><button type="button" class="btn btn-light buttonMenu">Cancel</button></a>
    </div>
@endsection

@section('content')
    <form action="{{route('store')}}" method="POST">
        @csrf
        <div class="row mb-3">
            <label for="language" class="col-2 col-form-label form1">Language</label>
            <div class="col-5">
            <select class="form-select form2" name="language" id="language">
                <option value="english" selected>English</option>
                <option value="spanish">Spanish</option>
                <option value="french">French</option>
            </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label form1">Title</label>
            <div class="col-sm-5">
                <input type="text" class="form-control form2" id="title" name="title" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="serieName" class="col-sm-2 col-form-label form1">Serie name</label>
            <div class="col-sm-5">
                <input type="text" class="form-control form2" id="serieName" name="serieName">
            </div>
        </div>
        <div class="row mb-3">
            <label for="artist" class="col-sm-2 col-form-label form1">Artist</label>
            <div class="col-sm-5">
                <input type="text" class="form-control form2" id="artist" name="artist" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="year" class="col-sm-2 col-form-label form1">Year</label>
            <div class="col-sm-5">
                <input type="number" class="form-control form2" id="year" name="year">
            </div>
        </div>
        <div class="row mb-3">
            <label for="invID" class="col-sm-2 col-form-label form1">Inventory ID</label>
            <div class="col-sm-5">
                <input type="text" class="form-control form2" id="invID" name="invID" value="ITG-" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="status" class="col-2 col-form-label form1">Status</label required>
            <div class="col-5">
            <select class="form-select form2" name="status" id="status">
                <option value="reserved" selected>Reserved</option>
                <option value="onsale">On sale</option>
            </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="availability" class="col-2 col-form-label form1">Availability</label required>
            <div class="col-5">
            <select class="form-select form2" name="availability" id="availability">
                <option value="1" selected>Available</option>
                <option value="0">Not available</option>
            </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="ownership" class="col-2 col-form-label form1">Ownership</label>
            <div class="col-5">
            <select class="form-select form2" name="ownership" id="ownership">
                <option value="" selected>Select an option</option>
            </select>
            </div>
        </div>
        <div class="row mb-3">
            <label for="tags" class="col-2 col-form-label form1">Tags</label>
            <div class="col-5">
                <input type="text" class="form-control form2" id="tags" name="tags">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2 col-form-label form1" style="display: block !important; text-align: inherit !important;">
                <label for="dimensionsButtons" >Dimensions</label></br>
                <small>(Height x Width x Depth)</small>
            </div>
            <div class="col-5">
                <div class="row">
                    <div class="col-6 justify-content-center"><button class="btn buttonInForm">Add dimensions</button></div>
                    <div class="col-6 justify-content-center">
                        <div class="form-check form-switch">
                            <input class="form-check-input inputCheck" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                            <label class="form-check-label" for="flexSwitchCheckChecked">Variable dimensions</label>
                         </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="dimensions" class="col-2 col-form-label form1"></label>
            <div class="col-5">
                <div class="row">
                    <div class="col-3"><input type="number" class="form-control form2" id="height" name="height" required></div>
                    <div class="col-3"><input type="number" class="form-control form2" id="width" name="width" required></div>
                    <div class="col-3"><input type="number" class="form-control form2" id="depth" name="depth" required></div>
                    <div class="col-3">
                        <select class="form-select form2" name="formatD" id="formatD">
                            <option value="english" selected>cm</option>
                            <option value="spanish">in</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-2 col-form-label form1" style="display: block !important; text-align: inherit !important;">
                <label for="duration" >Duration(video)</label></br>
                <small>(Hrs x  Min x Seg)</small>
            </div>
            <div class="col-5">
                <div class="row">
                    <div class="col-4"><input type="number" class="form-control form2" id="durH" name="durH"></div>
                    <div class="col-4"><input type="number" class="form-control form2" id="durM" name="durM"></div>
                    <div class="col-4"><input type="number" class="form-control form2" id="durS" name="durS"></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button type="button" class="btn buttonProject" data-bs-toggle="modal" data-bs-target="#modalSave">Save</button>
                <a href="{{route('index')}}"><button type="button" class="btn buttonProject">Cancel</button></a>
            </div>
        </div>
        <!-- Modal confirmation save -->
        <div class="modal fade" id="modalSave" tabindex="-1" aria-labelledby="modalSaveLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content modalProject">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalSaveLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to create this artwork?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn buttonProject" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn buttonProject">Create artwork</button>
                    </div>
                </div>
            </div>
        </div>
      </form>
@endsection