@extends('layouts.main')

@section('child')

<link rel="stylesheet" href="{{ asset('css/slider.css') }}">

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">
  <h6 class="text-muted mb-5">{{ $title }}</h6>

  {{-- Basic Profile --}}
  <div class="row g-0 d-flex align-items-center my-5">
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
            <hr class="mt-1 mb-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi doloribus incidunt quo excepturi consectetur dolorem natus officia! Voluptatibus possimus accusamus fuga tempora, vero fugit nesciunt facilis soluta sed quos corporis nulla magnam aperiam cupiditate velit neque magni dolor impedit, deleniti mollitia eos ipsum placeat omnis! Quo, doloremque reprehenderit adipisci explicabo natus provident aliquam quas consequatur deserunt numquam impedit a rem accusantium minima esse voluptates, odio hic optio saepe, dolores exercitationem quod sint. Distinctio officiis earum possimus nulla alias molestias suscipit laboriosam nemo nisi non. Iusto sunt molestias repellat voluptatum perferendis sapiente, debitis quibusdam possimus, fugit, aliquam cumque deserunt porro distinctio!</p>
        </div>
    </div>
  </div>

  {{-- More Profile --}}
  <div class="my-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="history-tab" data-bs-toggle="tab" data-bs-target="#history" type="button" role="tab" aria-controls="history" aria-selected="true" data-aos="fade-up" >History</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false" data-aos="fade-up" >Prestasi</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false" data-aos="fade-up" >Visi & Misi</button>
      </li>
    </ul>
    <div class="tab-content py-3" id="myTabContent">
      <div class="tab-pane fade show active" id="history" role="tabpanel" aria-labelledby="history-tab">
        <div class="row g-0 d-flex align-items-center">
          <div class="col-md-3 d-flex justify-content-center">
              <img src="/img/parchment.png" alt="..." class="img-fluid" style="max-width: 150px;" data-aos="fade-up" data-aos-duration="1500">
          </div>
          <div class="col-md-9">
            <div class="card-body" data-aos="fade-down" data-aos-duration="1000">
              <h4 class="card-title text-uppercase mb-1">Desdie A Rachim</h4>
              <h6 class="text-muted ">Wakil Wali Kota Bogor</h6>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi doloribus incidunt quo excepturi consectetur dolorem natus officia! Voluptatibus possimus accusamus fuga tempora, vero fugit nesciunt facilis soluta sed quos corporis nulla magnam aperiam cupiditate velit neque magni dolor impedit, deleniti mollitia eos ipsum placeat omnis! Quo</p>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="row g-0 d-flex align-items-center">
          <div class="col-md-3 d-flex justify-content-center">
              <img src="/img/graph.png" alt="..." class="img-fluid" style="max-width: 150px;">
          </div>
          <div class="col-md-9">
            <div class="card-body">
              <h4 class="card-title text-uppercase mb-1">Prestasi 1</h4>
              <h6 class="text-muted ">Wakil Wali Kota Bogor</h6>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi doloribus incidunt quo excepturi consectetur dolorem natus officia! Voluptatibus possimus accusamus fuga tempora, vero fugit nesciunt facilis soluta sed quos corporis nulla magnam aperiam cupiditate velit neque magni dolor impedit, deleniti mollitia eos ipsum placeat omnis! Quo</p>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="row g-0 mb-3 d-flex align-items-center">
          <div class="col-md-3 d-flex justify-content-center">
              <img src="/img/businessman.png" alt="..." class="img-fluid" style="max-width: 150px;">
          </div>
          <div class="col-md-9">
            <div class="card-body">
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
            <div class="card-body">
              <h4 class="card-title text-uppercase mb-1">Misi</h4>
              <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi doloribus incidunt quo excepturi consectetur dolorem natus officia! Voluptatibus possimus accusamus fuga tempora, vero fugit nesciunt facilis soluta sed quos corporis nulla magnam aperiam cupiditate velit neque magni dolor impedit, deleniti mollitia eos ipsum placeat omnis! Quo</p>
            </div>
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


</div>
  
<style>
  .item{
    transition: .3s ease-in-out;
  }
  .item:hover{
    filter: brightness(80%);
  }
</style>

</script>
<script src="js/slider.js" type="text/javascript"></script>

@endsection