
@extends('layouts.frontLayout.main')

@section('child')

<div class="container">

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">

{{-- Vote Elelment --}}
<h6 class="text-muted mb-5">{{ $title }}</h6>

@include('partials.adminCardPollUnit')

{{-- Sample Card Poll Unit --}}
<div class="alert alert-secondary">
  <div class="row d-flex align-items-center">
    <div class="col-md-2">
      <img src="img/wisata bgr.png" alt="" class=" img-fluid rounded">
    </div>
    <div class="col-md-10">
      <strong>Wisata Favorit di Koata Bogor 2022</strong> 
      <p>Daftar Tempat Wisata Bogor Populer. Devoyage Bogor, Taman Buah Mekarsari, The Ranch Cisarua, Little Venice, Curug Cibaliung, Curug Bidadari Sentul Paradise Park. Mana kah Tempat wisata favorit anda....</p>
      <small class="fst-italic">Waktu Polling 04 Juli 2022 s/d 11 Juli 2022</small>
      <div class="float-end">
      <button class="btn btn-success btn-sm" type="button"><i class="fas fa-pen"></i> Edit</button>
      <button class="btn btn-warning btn-sm text-white" type="button"><i class="fa-solid fa-xmark"></i> Close</button>
      <button class="btn btn-info btn-sm text-white" type="button"><i class="fa-solid fa-print"></i> Result</button>
      <button class="btn btn-danger btn-sm text-white" type="button"><i class="fa-solid fa-trash"></i> Delet</button>
    </div>
    </div>
  </div>
</div>

<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class="text-end text-decoration-none fw-bold" href="/addPolling" role="button">Add Polling <i class="fas fa-long-arrow-right"></i></a>
</div>

</div>

</div>

@endsection