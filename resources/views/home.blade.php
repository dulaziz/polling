
@extends('layouts.frontLayout.main')

@section('child')

<div class="container">

{{-- Banner --}}
@include('partials.banner')

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">

  @include('partials.cardPollUnit')

<<<<<<< HEAD
  {{-- Sample card poll unit--}}
  <div class="card border border-0 shadow-sm rounded-3 mb-3">
    <div class="card-body text-secondary">
      <div class="row d-flex align-items-center">
=======
  <div class="card border-light rounded-3 shadow-sm">
    <div class="card-body">

      <h4 class="card-title text-center fw-bold">Bakal Calon Wali Kota Bogor</h4>
      <hr>
      <div class="row g-0 my-3 d-flex jusitfy-content-center">
>>>>>>> 4f5a6adc59d819ca683d04a848cf5caf65400e93
        <div class="col-md-2">
          <img src="img/wisata bgr.png" alt="" class="float-end img-fluid rounded">
        </div>
        <div class="col-md-10">
<<<<<<< HEAD
          <a href=""><h5><strong>Wisata Favorit di Koata Bogor 2022</strong></h5></a>
          <p>Daftar Tempat Wisata Bogor Populer. Devoyage Bogor, Taman Buah Mekarsari, The Ranch Cisarua, Little Venice, Curug Cibaliung, Curug Bidadari Sentul Paradise Park. Mana kah Tempat wisata favorit anda....</p>
          <small class="text-muted fst-italic">Waktu Polling 04 Juli 2022 s/d 11 Juli 2022</small>
          <button class="btn btn-outline-primary btn-sm float-md-end" type="button">Ikuti Polling</button>
=======
          <div class="card-body">
            <h5 class="card-title">Dedie A Rachim (Wakil Wali Kota Bogor)</h5>  
            {{-- <p class="card-text"><small class="text-muted">85% / 8500 Suara</small></p> --}}
            {{-- <div class="progress" style="height: 2rem;">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
            </div> --}}

            <div class="col-md-2">
              <div class="button btn-sm btn-primary text-center">Vote</div>
            </div>

          </div>
>>>>>>> 4f5a6adc59d819ca683d04a848cf5caf65400e93
        </div>
      </div>
    </div>
  </div> 

</div>

</div>  

@endsection