@extends('layouts.main')

@section('child')

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">
    <h6 class="text-muted mb-5">{{ $title }}</h6>

    <h6>Polling Unit: <a href=""> Bogor Memilih 2024, Siapa Kandidat Balon Wali Kota Bogor Terfavorit?</a></h6>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Holy guacamole!</strong> You should check in on some of those fields below.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

    <div class="card mb-5">
      <div class="card-header"><small class="text-secondary fst-italic"><i class="fas fa-times-circle"></i> Basic Profile Items</small>
      </div>
        <div class="card-body">
            <div class="row d-flex align-items-center">
            <div class="preview col-md-4 d-flex justify-content-center mb-3 mb-md-0">
                <img src="{{asset('img/default1.jpg')}}" id="file-ip-1-preview" class="img-thumbnail img_thumb_2">
            </div>
            <div class="col-md-8">
                {{-- File name thumbnail --}}
                <input class="form-control mb-3" type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
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
        <div class="card-footer">
            <div class="d-flex gap-2 float-end">
              <button type="button" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save Polling Item</button>
              <a href="/admin" class="btn btn-secondary btn-sm" type="button"><i class="fas fa-reply"></i> Back</a>
            </div>
          </div>
    </div>
  </div>

  <div class="my-5">
    <div class="table-responsive">
      <table class="table table-sm" style="width: 900px;">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Position</th>
            <th scope="col">Profile Items</th>
            <th scope="col">More Profile</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Dedie A Rachim</td>
            <td>Wakil Wali Kota Bogor</td>
            <td><small class="text-success fst-italic"><i class="fas fa-check-circle"></i> Premium Profile Items</small></td>
            <td>
              <a href="/viewProfileItems" class="btn btn-info btn-sm text-light"><i class="fas fa-eye"></i> View</a>
              <a href="/editPollItems" class="btn btn-primary btn-sm text-light"><i class="fas fa-pen"></i> Edit</a>
              <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Sendhy Pratama</td>
            <td>Kader Banteng</td>
            <td><small class="text-secondary fst-italic"><i class="fas fa-times-circle"></i> Basic Profile Items</small></td>
            <td>
              <a href="/addMoreProfile" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Add</a>
              <a href="/editPollItems" class="btn btn-primary btn-sm text-light"><i class="fas fa-pen"></i> Edit</a>
              <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Faisal</td>
            <td>Ketua DPR Kota Bogor</td>
            <td><small class="text-success fst-italic"><i class="fas fa-check-circle"></i> Premium Profile Items</small></td>
            <td>
              <a href="/viewProfileItems" class="btn btn-info btn-sm text-light"><i class="fas fa-eye"></i> View</a>
              <a href="/editPollItems" class="btn btn-primary btn-sm text-light"><i class="fas fa-pen"></i> Edit</a>
              <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

</div>
<script src="js/previewImg.js"></script>
{{-- cdn add form --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@endsection
