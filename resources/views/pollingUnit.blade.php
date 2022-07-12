
@extends('layouts.main')

@section('child')

<div class="container">

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">

  {{-- Title --}}
  <h3 class="fw-bold">Bogor Memilih 2024, Siapa Kandidat Balon Wali Kota Bogor Terfavorit?</h3>

  {{-- Desc --}}
  <p class="mt-4 text-secondary">PEMILIHAN  Wali Kota Bogor akan digelar pada 2024 mendatang. Sejumlah nama digadang-gadang bakal maju menjadi orang nomor satu di Kota Bogor. 
    Siapa kandidat bakal calon Wali Kota Bogor 2024, pilihan Anda? 
    Yuk, ikut poling berikut:</p>
  
  <p class="fst-italic mb-3">Waktu Polling 04 Juli 2022 s/d 11 Juli 2022</p>

  {{-- Allert after Vote --}}
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Tanggapan Anda telah tersimpan,</strong> Terimakasih telah mengikuti Polling kami.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>

    {{-- Card Vote --}}
  <div class="card border-light rounded-3 shadow-sm mb-3">
    <div class="card-body">

      {{-- Sub Title --}}
      <div class="row d-flex align-items-center">
        <div class="col-md-3">
          <small class="text-success fst-italic"><i class="fas fa-check-circle"></i> Live Polling</small>
          {{-- <small class="text-danger  fst-italic"><i class="fas fa-times-circle"></i> Closed Polling</small> --}}
        </div>
        <div class="col-md-6">
          <h4 class="card-title text-md-center fw-bold">Bakal Calon Wali Kota Bogor</h4>  
        </div>
        <div class="col-md-3">

        </div>
      </div>
      <hr>

      {{-- Vote Item --}}
      <div class="row g-0 my-3">
        <div class="col-md-2">
          {{-- Vote Thumbnail --}}
          <img src="/img/Dedi A Rachim.jpg" class="img-fluid img-thumbnail rounded" alt="...">
        </div>
        <div class="col-md-10 d-flex align-items-center">
          <div class="card-body">
            {{-- Vote Name --}}
            <h5 class="card-title fw-bold">Dedie A Rachim</h5> 
            <p class="card-text"><small class="text-muted">Wakil Wali Kota Bogor</small></p>
            {{-- Vote Button --}}
            <div class="d-grid col-md-2">
            <button type="button" class="btn btn-primary btn-sm">VOTE</button>
          </div>
          </div>
        </div>
      </div>


      {{-- Vote Item --}}
      <div class="row g-0 my-3">
        <div class="col-md-2">
          <img src="/img/Atang Trisnanto.jpg" class="img-fluid img-thumbnail rounded" alt="...">
        </div>
        <div class="col-md-10">
          <div class="card-body">
            <h5 class="card-title">Atang Trisnanto</h5>  
            <p class="card-text"><small class="text-muted">Wakil Wali Kota Bogor</small></p>
            <div class="progress" style="height: 2rem">
              <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65% / 6500 Suara</div>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <h5 class="float-end">85.000 Suara</h5>
    </div>
  </div>
  
  <div class="d-grid gap-2 col-md-3 mx-auto">
    <a href="/" class="btn btn-secondary btn-sm" type="button"><i class="fas fa-reply"></i> Back</a>
  </div>

</div>

</div>  

@endsection