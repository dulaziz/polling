
@extends('layouts.frontLayout.main')

@section('child')

<div class="container">

{{-- Banner --}}
@include('partials.banner')

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">

  @include('partials.cardPollUnit')

  {{-- Sample card poll unit--}}
  <div class="card border border-0 shadow-sm rounded-3 mb-3">
    <div class="card-body text-secondary">
      <div class="row d-flex align-items-center">
        <div class="col-md-2">
          <img src="img/wisata bgr.png" alt="" class="float-end img-fluid rounded">
        </div>
        <div class="col-md-10">
          <a href=""><h5><strong>Wisata Favorit di Koata Bogor 2022</strong></h5></a>
          <p>Daftar Tempat Wisata Bogor Populer. Devoyage Bogor, Taman Buah Mekarsari, The Ranch Cisarua, Little Venice, Curug Cibaliung, Curug Bidadari Sentul Paradise Park. Mana kah Tempat wisata favorit anda....</p>
          <small class="text-muted fst-italic">Waktu Polling 04 Juli 2022 s/d 11 Juli 2022</small>
          <button class="btn btn-outline-primary btn-sm float-md-end" type="button">Ikuti Polling</button>
        </div>
      </div>
    </div>
  </div> 

</div>

</div>  

@endsection