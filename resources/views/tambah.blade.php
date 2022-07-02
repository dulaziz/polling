
@extends('layouts.frontLayout.main')

@section('child')

<div class="container">

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="floatingInput" placeholder="Text">
        <label for="floatingInput">Title</label>
      </div>
    <div class="form-floating mb-3">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Excerpt</label>
      </div>

  <div class="card border-light rounded-3 shadow-sm">
    <div class="card-body">
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Text">
            <label for="floatingInput">Title Form</label>
          </div>
      <hr>
      <div id="form_item_tambah">
      <div class="row">
        <div class="ml-2 col-md-3">
          <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail" style="max-width: 160px; max-height: 174px;">
        </div>
        <div class="col-md-9 mb-2">
          <div id="msg"></div>
          <form method="post" id="image-form">
            <input type="file" name="img[]" class="file" accept="image/*">
            <div class="input-group my-3">
              <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
              <div class="input-group-append">
                <button type="button" class="browse btn btn-primary">Browse...</button>
              </div>
            </div>
          </form>
          <input type="text" class="form-control" placeholder="Nama" aria-label="Nama">
          <button type="button" class="btn btn-primary btn-sm mt-3 add_item_tambah"><i class="fa-solid fa-plus"></i> Tambah</button>
        </div>   
      </div>
    </div>
      <hr>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-success btn-sm" type="button"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
      </div>
    </div>
  </div>  

</div>

</div>  

<style>
  .file {
  visibility: hidden;
  position: absolute;
}
</style>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
$(document).on("click", ".browse", function() {
  var file = $(this).parents().find(".file");
  file.trigger("click");
});
$('input[type="file"]').change(function(e) {
  var fileName = e.target.files[0].name;
  $("#file").val(fileName);

  var reader = new FileReader();
  reader.onload = function(e) {
    // get loaded data and render thumbnail.
    document.getElementById("preview").src = e.target.result;
  };
  // read the image file as a data URL.
  reader.readAsDataURL(this.files[0]);
});

  $(document).ready(function() {
    $(".add_item_tambah").click(function(e) {
      e.preventDefault();
      $("#form_item_tambah").prepend(`<div class="row">
        <div class="ml-2 col-md-3">
          <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail" style="max-width: 160px; max-height: 174px;">
        </div>
        <div class="col-md-9 mb-2">
          <div id="msg"></div>
          <form method="post" id="image-form">
            <input type="file" name="img[]" class="file" accept="image/*">
            <div class="input-group my-3">
              <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
              <div class="input-group-append">
                <button type="button" class="browse btn btn-primary">Browse...</button>
              </div>
            </div>
          </form>
          <input type="text" class="form-control" placeholder="Nama" aria-label="Nama">
          <button type="button" class="btn btn-danger btn-sm mt-3 remove_item_tambah"><i class="fa-solid fa-trash"></i> Hapus</button>
        </div>   
      </div>`);
    });  

    $(document).on('click', '.remove_item_tambah', function(e) {
      e.preventDefault();
      let row_item = $(this).parent().parent();
      $(row_item).remove();
    });
  });
</script>

@endsection