@extends('layouts.main')

@section('child')

<link rel="stylesheet" href="{{ asset('css/uploadGalleryBox.css') }}">

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">
    <h6 class="text-muted mb-5">{{ $title }}</h6>

    <div class="card my-5">
        <div class="card-header"><small class="text-secondary fst-italic"><i class="fas fa-times-circle"></i> Basic Profile Items</small>
        </div>
        <div class="card-body">
          <div class="row d-flex align-items-center">
            <div class=" col-md-4 d-flex justify-content-center">
              <img src="img/Dedi A Rachim.jpg" class="img-thumbnail img_thumb_2">
            </div>
            <div class="col-md-8">
              {{-- File name thumbnail --}}
              <input class="form-control mb-3" type="file">
              {{-- Input Name & title --}}
              <div class="row">
                  <div class="col-md-6">
                      <input type="text" class="form-control mb-3" placeholder="Name" aria-label="Name">
                  </div>
                  <div class="col-md-6">
                      <input type="text" class="form-control mb-3" placeholder="Position" aria-label="Position">
                  </div>
              </div>
              {{-- Input description --}}
              <textarea class="form-control mb-3" placeholder="Bio" id="floatingTextarea2" style="height: 100px"></textarea>
            </div>
          </div>
        </div>
      </div>

    
    <div class="card my-5">
        <div class="card-header"><small class="text-success fst-italic"><i class="fas fa-check-circle"></i> Premium Profile Items</small></div>
        <div class="card-body">
            <div class="row d-flex align-items-center">
                <h5>More Profile</h5>
                <div class=" col-md-3 d-flex justify-content-center mb-5">
                    <img src="img/default2.jpg" class="img-thumbnail img_thumb_2">
                </div>
                <div class="col-md-9 mb-2">
                    <input class="form-control mb-3" type="file">   
                    <input type="text" class="form-control mb-3" placeholder="Title" aria-label="Title">
                    <div class="form-floating">
                        <textarea class="form-control mb-3" placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Description</label>
                    </div>
                </div>   
            </div>
            {{-- Gallery upload --}}
            <h5>Gallery</h5>
            <div class="upload__box">
                <div class="upload__btn-box">
                    <label class="upload__btn">
                        <p>Upload images</p>
                        <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
                    </label>
                </div>
                <div class="upload__img-wrap"></div>
            </div>
        </div>
        <div class="card-footer">
            <div class="d-grid d-md-block gap-2 float-end">
                <button type="button" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save More Profile</button>
                <a href="/addPollItems" class="btn btn-secondary btn-sm" type="button"><i class="fas fa-reply"></i> Back</a>
            </div>
        </div>
    </div>

    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Holy guacamole!</strong> You should check in on some of those fields below.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>


<div class="my-5">
    <h6 class="mb-3">More Profile: <span class="badge bg-success">Dedie A Rachim</span></h6>
    <div class="table-responsive">
        <table class="table table-sm" style="width: 900px;">
            <thead class="fw-normal">
            <tr>
                <th scope="col" style="width: 5%;">No</th>
                <th scope="col" style="width: 20%;">More Profile Title</th>
                <th scope="col" style="width: 55%;">Desc</th>
                <th scope="col" style="width: 20%;">Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">1</th>
                <td>History</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Edit</button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Prestasi</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                <td>
                    <a href="/editMoreProfile" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Edit</a>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

</div>

<script src="js/uploadGalleryBox.js" type="text/javascript"></script>

@endsection




