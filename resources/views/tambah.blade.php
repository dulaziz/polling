
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
        <div class="col-md-5 mb-2">
          <input type="file" class="form-control" placeholder="Foto" aria-label="Foto">
        </div>
        <div class="col-md-6 mb-2">
          <input type="text" class="form-control" placeholder="Nama" aria-label="Nama">
        </div>
        <div class="d-grid col-md-1 mb-2 mx-auto">
            <button type="button" class="btn btn-primary add_item_tambah"><i class="fa-solid fa-plus"></i></button>
        </div>
      </div>
      </div>
      <hr>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button class="btn btn-success" type="button"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
      </div>
    </div>
  </div>  

</div>

</div>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $(".add_item_tambah").click(function(e) {
      e.preventDefault();
      $("#form_item_tambah").prepend(`<div class="row">
        <div class="col-md-5 mb-2">
          <input type="file" class="form-control" placeholder="Foto" aria-label="Foto">
        </div>
        <div class="col-md-6 mb-2">
          <input type="text" class="form-control" placeholder="Nama" aria-label="Nama">
        </div>
        <div class="d-grid col-md-1 mb-2 mx-auto">
            <button type="button" class="btn btn-danger remove_item_tambah"><i class="fa-solid fa-trash"></i></button>
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