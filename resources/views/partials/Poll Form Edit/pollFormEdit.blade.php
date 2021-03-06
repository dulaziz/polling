<link rel="stylesheet" href="css/global.css">

{{-- Polling Unit --}}
  <div class="row my-2 d-flex align-items-center">
    {{-- Thumbnail Poll Unit --}}
    <div class="preview col-md-4 d-flex justify-content-center my-3">        
        <img src="img/default1.jpg" id="file-ip-1-preview" class="img-thumbnail" style="max-width: 260px; max-height: 274px;">
    </div>
    <div class="col-md-8 mb-2">
      {{-- File name thumbnail --}}
      <input class="form-control mb-3" type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
      {{-- Input title --}}
      <input type="text" class="form-control mb-3" placeholder="Title" aria-label="Title">
      {{-- Input description --}}
      <textarea class="form-control mb-3" placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea>
      {{-- Input date --}}
      <div class="row">
        <div class="col-md-6">
          <div class="form-floating">
            <input type="date" class="form-control" id="floatingInput" placeholder="Text">
            <label for="floatingInput title-text">Star from</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="date" class="form-control" id="floatingInput" placeholder="Text">
            <label for="floatingInput title-text">Expired</label>
          </div>
        </div>
      </div>
    </div> 
  </div>
<hr>
{{-- Polling item --}}
<div class="card border-light rounded-3 shadow-sm">
<div class="card-body">
  {{-- Card sub title --}}
  <div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Text">
    <label for="floatingInput">Sub Title</label>
  </div>
  <hr>
  {{-- Poll Item form --}}
  <div class="row d-flex align-items-center mb-3">
    <div class="col-md-3 text-center text-muted">
      <h6>Polling Items</h6>
    </div>
    <div class="col-md-9 d-grid">
      <button type="button" class="btn btn-outline-primary add_item_tambah"><i class="fa-solid fa-plus"></i> Add Poll Items</button>
    </div>
  </div>

  <div id="form_item_tambah">
    <div class="row my-2 d-flex align-items-center">
        <div class="preview col-md-3 d-flex justify-content-center my-3">
            <img src="img/default2.jpg" id="file-ip-2-preview" class="img-thumbnail" style="max-width: 160px; max-height: 174px;">
        </div>
      <div class="col-md-9 mb-2">
        {{-- <label for="file-ip-1" class="form-label">Default file input example</label> --}}
        <input class="form-control mb-3" type="file" id="file-ip-2" accept="image/*" onchange="showPreview2(event);">

        <input type="text" class="form-control mb-3" placeholder="Name" aria-label="Name">
        <input type="text" class="form-control mb-3" placeholder="Short desc" aria-label="Short desc">
        <button type="button" class="btn btn-danger btn-sm remove_item_tambah"><i class="fa-solid fa-trash"></i> Delete</button>
      </div>   
    </div>
  </div>

  <hr>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-success btn-sm" type="button"><i class="fa-solid fa-floppy-disk"></i> Save</button>
    <a href="/admin" class="btn btn-secondary btn-sm" type="button"><i class="fas fa-reply"></i> Back</a>
  </div>

</div>
</div>  


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

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

</script>
{{-- <script src="js/script.js"></script> --}}

