@extends('layouts.main')

@section('child')

<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

{{-- Content --}}
<div class="col-md-10 mx-auto my-3 my-md-5">
  <h6 class="text-muted mb-4">{{ $title }}</h6>

  {{-- Basic Profile --}}
  <div class="row g-0 d-flex align-items-center mb-5">
    <div class="col-md-4 mb-2 mb-md-0 d-flex justify-content-center justify-content-md-start">
        <img class="img_thumb img-fluid" data-aos="fade-up" data-aos-duration="1500" src="/img/Dedi A Rachim.jpg" alt="...">
    </div>
      <div class="col-md-8 p-md-3">
        <div data-aos="fade-down" data-aos-duration="1000">
            <div class="d-flex mb-3">
              <h4>1.</h4>
              <div class="ms-1">
                <h4 class="card-title mb-0">Dedie A Rachim</h4> 
                <p class="card-text"><small class="text-muted">Wakil Wali Kota Bogor</small></p>
              </div>
            </div>
            <hr class="mt-1 mb-3 d-none d-md-block">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi doloribus incidunt quo excepturi consectetur dolorem natus officia! Voluptatibus possimus accusamus fuga tempora, vero fugit nesciunt facilis soluta sed quos corporis nulla magnam aperiam cupiditate velit neque magni dolor impedit, deleniti mollitia eos ipsum placeat omnis! Quo, doloremque reprehenderit adipisci explicabo natus provident aliquam quas consequatur deserunt numquam impedit a rem accusantium minima esse voluptates, odio hic optio saepe, dolores exercitationem quod sint. Distinctio officiis earum possimus nulla alias molestias suscipit laboriosam nemo nisi non. Iusto sunt molestias repellat voluptatum perferendis sapiente, debitis quibusdam possimus, fugit, aliquam cumque deserunt porro distinctio!</p>
        </div>
    </div>
  </div>

  {{-- More Profile --}}
  <ul class="nav nav-pills mb-3 d-flex justify-content-between justify-content-md-start" id="pills-tab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">History</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Prestasi</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Visi & Misi</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</button>
    </li>
  </ul>
  <hr>
  <div class="tab-content" id="pills-tabContent">
    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
      <div class="row g-0 d-flex align-items-center">
        <div class="col-md-3 d-flex justify-content-center">
            <img src="/img/parchment.png" alt="..." class="img-fluid" style="max-width: 150px;" data-aos="fade-up" data-aos-duration="1500">
        </div>
        <div class="col-md-9">
          <div class="card-body px-0 px-md-3" data-aos="fade-down" data-aos-duration="1000">
            <h4 class="card-title text-uppercase mb-1">Desdie A Rachim</h4>
            <h6 class="text-muted ">Wakil Wali Kota Bogor</h6>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi doloribus incidunt quo excepturi consectetur dolorem natus officia! Voluptatibus possimus accusamus fuga tempora, vero fugit nesciunt facilis soluta sed quos corporis nulla magnam aperiam cupiditate velit neque magni dolor impedit, deleniti mollitia eos ipsum placeat omnis! Quo</p>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
      <div class="row g-0 d-flex align-items-center">
        <div class="col-md-3 d-flex justify-content-center">
            <img src="/img/graph.png" alt="..." class="img-fluid" style="max-width: 150px;">
        </div>
        <div class="col-md-9">
          <div class="card-body px-0 px-md-3">
            <h4 class="card-title text-uppercase mb-1">Prestasi 1</h4>
            <h6 class="text-muted ">Wakil Wali Kota Bogor</h6>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi doloribus incidunt quo excepturi consectetur dolorem natus officia! Voluptatibus possimus accusamus fuga tempora, vero fugit nesciunt facilis soluta sed quos corporis nulla magnam aperiam cupiditate velit neque magni dolor impedit, deleniti mollitia eos ipsum placeat omnis! Quo</p>
          </div>
        </div>
      </div>
    </div>
    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      <div class="row g-0 mb-3 d-flex align-items-center">
        <div class="col-md-3 d-flex justify-content-center">
            <img src="/img/businessman.png" alt="..." class="img-fluid" style="max-width: 150px;">
        </div>
        <div class="col-md-9">
          <div class="card-body px-0 px-md-3">
            <h4 class="card-title text-uppercase mb-1">Visi</h4>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi doloribus incidunt quo excepturi consectetur dolorem natus officia! Voluptatibus possimus accusamus fuga tempora, vero fugit nesciunt facilis soluta sed quos corporis nulla magnam aperiam cupiditate velit neque magni dolor impedit, deleniti mollitia eos ipsum placeat omnis! Quo</p>
          </div>
        </div>
      </div>
      <div class="row g-0 d-flex align-items-center">
        <div class="col-md-3 d-flex justify-content-center">
            <img src="/img/darts.png" alt="..." class="img-fluid" style="max-width: 150px;">
        </div>
        <div class="col-md-9">
          <div class="card-body px-0 px-md-3">
            <h4 class="card-title text-uppercase mb-1">Misi</h4>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi doloribus incidunt quo excepturi consectetur dolorem natus officia! Voluptatibus possimus accusamus fuga tempora, vero fugit nesciunt facilis soluta sed quos corporis nulla magnam aperiam cupiditate velit neque magni dolor impedit, deleniti mollitia eos ipsum placeat omnis! Quo</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Gallery --}}
  <div class="my-5">
    <h5 class="border-start border-danger border-4 text-uppercase ps-2 fw-bold rb-blue-tx" data-aos="fade-down" data-aos-duration="1000">Foto Kegiatan</h5>
      <div class="slider">
          <a href="/img/Dedi A Rachim.jpg" class="fancybox item" data-fancybox="gallery1">
            <img src="/img/Dedi A Rachim.jpg" class="img-fluid" alt="...">
          </a>
          <a href="/img/Dedi A Rachim.jpg" class="fancybox item" data-fancybox="gallery1">
            <img src="/img/Dedi A Rachim.jpg" class="img-fluid" alt="...">
          </a>
          <a href="/img/Dedi A Rachim.jpg" class="fancybox item" data-fancybox="gallery1">
            <img src="/img/Dedi A Rachim.jpg" class="img-fluid" alt="...">
          </a>
          <a href="/img/Dedi A Rachim.jpg" class="fancybox item" data-fancybox="gallery1">
            <img src="/img/Dedi A Rachim.jpg" class="img-fluid" alt="...">
          </a>
          <a href="/img/Dedi A Rachim.jpg" class="fancybox item" data-fancybox="gallery1">
            <img src="/img/Dedi A Rachim.jpg" class="img-fluid" alt="...">
          </a>
          <a href="/img/Dedi A Rachim.jpg" class="fancybox item" data-fancybox="gallery1">
            <img src="/img/Dedi A Rachim.jpg" class="img-fluid" alt="...">
          </a>
          <a href="/img/Dedi A Rachim.jpg" class="fancybox item" data-fancybox="gallery1">
            <img src="/img/Dedi A Rachim.jpg" class="img-fluid" alt="...">
          </a>
          <a href="/img/Dedi A Rachim.jpg" class="fancybox item" data-fancybox="gallery1">
            <img src="/img/Dedi A Rachim.jpg" class="img-fluid" alt="...">
          </a>
          <a href="/img/Dedi A Rachim.jpg" class="fancybox item" data-fancybox="gallery1">
            <img src="/img/Dedi A Rachim.jpg" class="img-fluid" alt="...">
          </a>
      </div>
  </div>

  <div class="d-grid gap-2 d-md-flex justify-content-md-center">
    <a class="btn btn-success px-5" href="" role="button"><i class="fas fa-hand-pointer"></i> Vote</a>
    <a class="btn btn-secondary px-5" href="" role="button"><i class="fas fa-reply"></i> Back</a>
  </div>

</div>

<script src="js/slider.js" type="text/javascript"></script>

@endsection