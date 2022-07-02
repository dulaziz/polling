
@extends('layouts.frontLayout.main')

@section('child')

<div class="container">

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">

  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Title</label>
    <textarea class="form-control fw-bold fs-3" id="exampleFormControlTextarea1" rows="2">Bogor Memilih 2024, Siapa Kandidat Balon Wali Kota Bogor Terfavorit?
    </textarea>
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Excerpt</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">PEMILIHAN  Wali Kota Bogor akan digelar pada 2024 mendatang. Sejumlah nama digadang-gadang bakal maju menjadi orang nomor satu di Kota Bogor. Siapa kandidat bakal calon Wali Kota Bogor 2024, pilihan Anda? Yuk, ikut poling berikut:
    </textarea>
  </div>

  <div class="card border-light rounded-3 shadow-sm mb-5">
    <div class="card-body">

      <textarea class="form-control fw-bold fs-4" id="exampleFormControlTextarea1" rows="2">Bakal Calon Wali Kota Bogor
      </textarea>
      <hr>
      <div id="form_item">
      <div class="row g-0 my-3 d-flex align-items-center">
        <div class="col-md-2">
          <img src="/img/Dedi A Rachim.jpg" class="img-fluid img-thumbnail rounded" alt="...">
        </div>
        <div class="col-md-10">
          <div class="card-body">
            <textarea class="form-control fw-bold" id="exampleFormControlTextarea1" rows="2">Dedie A Rachim (Wakil Wali Kota Bogor)
            </textarea>
            <p class="card-text"><small class="text-muted">85% / 8500 Suara</small></p>
            <div class="progress" style="height: 2rem;">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
            </div>
          </div>
        </div>
        <div class="d-grid col-5 col-md-3 mx-auto">  
          <button class="btn btn-danger btn-sm remove_item_btn" type="button"><i class="fa-solid fa-trash"></i> Hapus</button>      
        </div>
      </div>
    </div>
    <button class="btn btn-secondary btn-sm add_item_btn" type="button"><i class="fa-solid fa-plus"></i> Tambah</button>

      <hr>
      
      <h5 class="float-md-end">85.000 Suara</h5>
      <div class="d-grid gap-2 d-md-flex">
        <button class="btn btn-success btn-sm" type="button"><i class="fa-solid fa-floppy-disk"></i> Simpan</button>
        <button class="btn btn-warning btn-sm text-white" type="button"><i class="fa-solid fa-xmark"></i> Tutup</button>
        <button class="btn btn-info btn-sm text-white" type="button"><i class="fa-solid fa-print"></i> Cetak</button>
        <button class="btn btn-danger btn-sm text-white" type="button"><i class="fa-solid fa-trash"></i> Hapus</button>
      </div>
    </div>
  </div>

  <a class="btn btn-primary" href="/tambah" role="button"><i class="fa-solid fa-plus"></i> Tambah Polling</a>      

</div>

</div>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $(".add_item_btn").click(function(e) {
      e.preventDefault();
      $("#form_item").prepend(`<div class="row">
        <div class="col-md-5 mb-2">
          <input type="file" class="form-control" placeholder="Foto" aria-label="Foto">
        </div>
        <div class="col-md-6 mb-2">
          <input type="text" class="form-control" placeholder="Nama" aria-label="Nama">
        </div>
        <div class="d-grid col-md-1 mb-2 mx-auto">
            <button type="button" class="btn btn-danger remove_item_btn"><i class="fa-solid fa-trash"></i></button>
        </div>
      </div>`);
    });  

    $(document).on('click', '.remove_item_btn', function(e) {
      e.preventDefault();
      let row_item = $(this).parent().parent();
      $(row_item).remove();
    });
  });
</script>

@endsection