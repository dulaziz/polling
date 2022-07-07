
@extends('layouts.frontLayout.main')

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
            <div class="progress" style="height: 2rem">
                <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85% / 8500 Suara</div>
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
      <div class="row d-flex flex-row-reverse">
          <div class="col-md-7">
              <h5 class="float-md-end">85.000 Suara</h5>
          </div>
        <div class="col-md-5">
            <a href="/editPolling" class="btn btn-success btn-sm mt-1" type="button"><i class="fas fa-pen"></i> Edit</a>
            <a href="/result" class="btn btn-primary btn-sm text-white mt-1" type="button"><i class="fa-solid fa-chart-bar"></i> Result</a>
            <button class="btn btn-warning btn-sm text-white mt-1" type="button"><i class="fa-solid fa-xmark"></i> Close</button>
            <button class="btn btn-danger btn-sm text-white mt-1" type="button"><i class="fa-solid fa-trash"></i> Delet</button>
            <a href="/admin" class="btn btn-secondary btn-sm mt-1" type="button"><i class="fas fa-reply"></i> Back</a>
        </div>
      </div>
    </div>
  </div>

</div>

</div>  

@endsection