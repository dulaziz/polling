<div id="form_item_add">
    <input type="hidden" name="vote_unit_id" value="{{ $vote_unit_id_latest }}">
    <div class="row my-5 d-flex align-items-center">
        <div class="preview col-md-3 d-flex justify-content-center my-3">
            <img src="img/default2.jpg" id="file-ip-2-preview" class="img-thumbnail" style="max-width: 160px; max-height: 174px;">
        </div>
      <div class="col-md-9 mb-2">
        {{-- <label for="file-ip-1" class="form-label">Default file input example</label> --}}
        <input class="form-control mb-3" type="file" id="file-ip-2" accept="image/*" onchange="showPreview2(event);" name="vote_image">
            {{-- Response notif form input vote image --}}
            @error('vote_image')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
        <input type="text" class="form-control mb-3" placeholder="Name*" aria-label="Name" name="vote_name" value="{{ old('vote_name') }}">
            {{-- Response notif form input vote name --}}
            @error('vote_name')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
        <input type="text" class="form-control mb-3" placeholder="Short desc*" aria-label="Short desc" name="short_desc" value="{{ old('short_desc') }}">
            {{-- Response notif form input short desc --}}
            @error('short_desc')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
        <button type="button" class="btn btn-danger btn-sm remove_item_btn"><i class="fa-solid fa-trash"></i> Delete</button>
      </div>
    </div>
  </div>

<script src="js/pollForm.js"></script>
{{-- cdn add form --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
