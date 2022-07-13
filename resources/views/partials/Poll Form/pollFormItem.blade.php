<div id="form_item_add">
    <div class="row my-5 d-flex align-items-center">
        <div class="preview col-md-3 d-flex justify-content-center my-3">
            <img src="img/default2.jpg" id="file-ip-2-preview" class="img-thumbnail" style="max-width: 160px; max-height: 174px;">
        </div>
      <div class="col-md-9 mb-2">
        {{-- <label for="file-ip-1" class="form-label">Default file input example</label> --}}
        <input class="form-control mb-3" type="file" id="file-ip-2" accept="image/*" onchange="showPreview2(event);">

        <input type="text" class="form-control mb-3" placeholder="Name" aria-label="Name">
        <input type="text" class="form-control mb-3" placeholder="Short desc" aria-label="Short desc">
        <button type="button" class="btn btn-danger btn-sm remove_item_btn"><i class="fa-solid fa-trash"></i> Delete</button>
      </div>   
    </div>
  </div>