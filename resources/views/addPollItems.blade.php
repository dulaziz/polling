@extends('layouts.main')

@section('child')

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">
    <h6 class="text-muted mb-5">{{ $title }}</h6>

    {{-- Polling Unit header --}}
    <div class="row my-5 d-flex align-items-center">
        <h4>Basic Profile</h4>
        {{-- Thumbnail Poll Unit --}}
        <div class="preview col-md-4 d-flex justify-content-center my-3">        
            <img src="img/default1.jpg" id="file-ip-1-preview" class="img-thumbnail img_thumb_2">
        </div>
        <div class="col-md-8 mb-2">
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

    <!-- <div class="my-5">
    <h4>More Profile</h4>
    <div class="card">
        <div class="card-header text-success">
            <small class="text-success fst-italic"><i class="fas fa-check-circle"></i> Premium Profile Items</small>
            <button type="button" class="btn btn-primary btn-sm add_item_btn float-end"><i class="fa-solid fa-plus"></i> Add Profile Items</button>
        </div>
        <div class="card-body">
            <div id="form_item_add">
                <div class="row my-5 d-flex align-items-center">
                    <div class=" col-md-3 d-flex justify-content-center my-3">
                        <img src="img/default2.jpg" id="file-ip-2-preview" class="img-thumbnail img_thumb_2 preview">
                    </div>
                  <div class="col-md-9 mb-2">
                    {{-- <label for="file-ip-1" class="form-label">Default file input example</label> --}}
                    <input class="form-control mb-3" type="file" id="file-ip-2" accept="image/*" onchange="showPreview2(event);">   
                    <input type="text" class="form-control mb-3" placeholder="Title" aria-label="Title">
                    <div class="form-floating">
                      <textarea class="form-control mb-3" placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea>
                      <label for="floatingTextarea2">Description</label>
                    </div>
                    <button type="button" class="btn btn-danger btn-sm remove_item_btn"><i class="fa-solid fa-trash"></i> Delete</button>
                  </div>   
                </div>
              </div>
        </div>
        <div class="card-footer text-center bg-white">
            <button type="button" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save Profile Items</button>
        </div>
    </div>
</div>

<h6>Poll Items in "Polling Unit Name"</h6>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Position</th>
            <th scope="col">Profile Items</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Dedie A Rachim</td>
            <td>Wakil Wali Kota Bogor</td>
            <td><small class="text-success fst-italic"><i class="fas fa-check-circle"></i> Premium Profile Items</small></td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Sendhy Pratama</td>
            <td>Kader Banteng</td>
            <td><small class="text-secondary fst-italic"><i class="fas fa-times-circle"></i> Basic Profile Items</small></td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Faisal</td>
            <td>Ketua DPR Kota Bogor</td>
            <td><small class="text-success fst-italic"><i class="fas fa-check-circle"></i> Premium Profile Items</small></td>
          </tr>
        </tbody>
      </table> -->

<div class="text-center">
    <button type="button" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save Profile Items</button>
</div>
<hr>
<div class="my-5">
<h6>Poll Items in "Polling Unit Name"</h6>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Position</th>
            <th scope="col">Profile Items</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Dedie A Rachim</td>
            <td>Wakil Wali Kota Bogor</td>
            <td><small class="text-success fst-italic"><i class="fas fa-check-circle"></i> Premium Profile Items</small></td>
            <td>
                <a href="/moreProfile" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add more profile</a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Sendhy Pratama</td>
            <td>Kader Banteng</td>
            <td><small class="text-secondary fst-italic"><i class="fas fa-times-circle"></i> Basic Profile Items</small></td>
            <td>
                <a href="/moreProfile" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add more profile</a>
            </td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Faisal</td>
            <td>Ketua DPR Kota Bogor</td>
            <td><small class="text-success fst-italic"><i class="fas fa-check-circle"></i> Premium Profile Items</small></td>
            <td>
                <a href="/moreProfile" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add more profile</a>
            </td>
          </tr>
        </tbody>
      </table>
      </div>

</div>
<script src="js/pollForm.js"></script>
{{-- cdn add form --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@endsection




