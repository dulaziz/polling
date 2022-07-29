@extends('layouts.main')

@section('child')

<link rel="stylesheet" href="{{ asset('css/uploadGalleryBox.css') }}">

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">
  <h6 class="text-muted mb-5">{{ $title }}</h6>

  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>


  <div class="card my-5">
    <div class="card-header">
      <small class="text-secondary"><i class="fas fa-pen"></i> Edit Profile <strong>Dedie A Rachim</strong></small>
    </div>
    <div class="card-body">
      <div class="row d-flex align-items-center mb-5">
        <h5 class="text-muted">Basic Profile</h5>
        <div class="col-md-4 d-flex justify-content-center mb-3 mb-md-0">
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

      <div class="row d-flex align-items-center mb-5">
        <h5 class="text-muted">More Profile</h5>
        <div class="col-md-4 d-flex justify-content-center mb-3 mb-md-0">
          <img src="img/default2.jpg" class="img-thumbnail img_thumb_2">
        </div>
        <div class="col-md-8">
          <input class="form-control mb-3" type="file">
          <input type="text" class="form-control mb-3" placeholder="Title" aria-label="Title">
          <div class="form-floating">
            <textarea class="form-control" placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Description</label>
          </div>
        </div>
      </div>

      <h5 class="mb-3 text-muted">Gallery: <span class="badge bg-success fw-normal">Dedie A Rachim</span></h5>
      <div class="upload__box">
        <div class="upload__btn-box">
          <label class="upload__btn">
            <p>Upload images</p>
            <input type="file" multiple="" data-max_length="20" class="upload__inputfile">
          </label>
        </div>
        <div class="upload__img-wrap">
          <img src="/img/Dedi A Rachim.jpg" class="img-fluid img_gallery" alt="...">
          <img src="/img/Dedi A Rachim.jpg" class="img-fluid img_gallery" alt="...">
          <img src="/img/Dedi A Rachim.jpg" class="img-fluid img_gallery" alt="...">
          <img src="/img/Dedi A Rachim.jpg" class="img-fluid img_gallery" alt="...">
          <img src="/img/Dedi A Rachim.jpg" class="img-fluid img_gallery" alt="...">
          <img src="/img/Dedi A Rachim.jpg" class="img-fluid img_gallery" alt="...">
          <img src="/img/Dedi A Rachim.jpg" class="img-fluid img_gallery" alt="...">
        </div>
      </div>

    </div>
    <div class="card-footer">
      <div class="d-flex gap-2 float-end">
        <button type="button" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save More Profile</button>
        <a href="/addPollItems" class="btn btn-secondary btn-sm" type="button"><i class="fas fa-reply"></i> Back</a>
      </div>
    </div>
  </div>

</div>
<script src="js/pollForm.js"></script>
{{-- cdn add form --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@endsection