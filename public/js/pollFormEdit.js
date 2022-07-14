// Thumbnail Preview
function showPreview(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-ip-1-preview");
      preview.src = src;
    }
  }
  // Thumbnail poll items preview
  function showPreview2(event){
    if(event.target.files.length > 0){
      var src = URL.createObjectURL(event.target.files[0]);
      var preview = document.getElementById("file-ip-2-preview");
      preview.src = src;
    }
  }
  
  // Add poll item form
  $(document).ready(function() {
      $(".add_item_tambah").click(function(e) {
        e.preventDefault();
        $("#form_item_tambah").prepend(`<div class="row my-2 d-flex align-items-center">
          <div class="preview col-md-3 d-flex justify-content-center mb-3">
              <img src="img/default2.jpg" id="file-ip-2-preview" class="img-thumbnail" style="max-width: 160px; max-height: 174px;">
          </div>
        <div class="col-md-9 mb-2">
          {{-- <label for="file-ip-1" class="form-label">Default file input example</label> --}}
          <input class="form-control mb-3" type="file" id="file-ip-2" accept="image/*" onchange="showPreview2(event);">
  
          <input type="text" class="form-control mb-3" placeholder="Name" aria-label="Name">
          <input type="text" class="form-control mb-3" placeholder="Short desc" aria-label="Short desc">
          <button type="button" class="btn btn-danger btn-sm remove_item_tambah"><i class="fa-solid fa-trash"></i> Delete</button>
        </div>   
      </div> <hr>`);
      });  
  
      $(document).on('click', '.remove_item_tambah', function(e) {
        e.preventDefault();
        let row_item = $(this).parent().parent();
        $(row_item).remove();
      });
    });