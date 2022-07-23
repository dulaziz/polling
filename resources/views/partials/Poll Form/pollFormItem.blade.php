<div id="form_item_add">
    <div class="row my-5 d-flex align-items-center">
        <div class=" col-md-3 d-flex justify-content-center my-3">
            <img src="img/default2.jpg" id="file-ip-2-preview" class="img-thumbnail preview" style="max-width: 160px; max-height: 174px;">
        </div>
      <div class="col-md-9 mb-2">
        {{-- <label for="file-ip-1" class="form-label">Default file input example</label> --}}
        <input class="form-control mb-3" type="file" id="file-ip-2" accept="image/*" onchange="showPreview2(event);">
        <div class="row">
          <div class="col-md-6">
            <input type="text" class="form-control mb-3" placeholder="Name" aria-label="Name">
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control mb-3" placeholder="Position" aria-label="Position">
          </div>
        </div>
        <div class="form-floating">
          <textarea class="form-control mb-3" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
          <label for="floatingTextarea2">Profile</label>
        </div>
        <button type="button" class="btn btn-danger btn-sm remove_item_btn"><i class="fa-solid fa-trash"></i> Delete</button>
      </div>   
    </div>
  </div>

<script src="js/pollForm.js"></script>
{{-- cdn add form --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>