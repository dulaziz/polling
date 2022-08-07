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
              <div class="ms-1">
                <h4 class="card-title mb-0">{{$data_item->vote_name}}</h4>
                <p class="card-text"><small class="text-muted">{{$data_item->vote_position}}</small></p>
              </div>
            </div>
            <hr class="mt-1 mb-3 d-none d-md-block">
            <p>{{$data_item->short_desc}}</p>
        </div>
    </div>
  </div>

  @if ($data_item->voteProfile)
  {{-- {{$data_item->voteProfile->title}} --}}
    {{-- looping Data More Profile --}}
    {{-- @foreach ($data_item->voteProfile  as $d) --}}

    {{-- More Profile --}}
    <ul class="nav nav-pills mb-3 d-flex justify-content-between justify-content-md-start" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#{{ $data_item->voteProfile->title }}" type="button" role="tab" aria-controls="pills-home" aria-selected="true">{{$data_item->voteProfile->title}}</button>
        </li>
    </ul>



    {{-- @endforeach --}}

    <hr>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="row g-0 d-flex align-items-center">
            <div class="col-md-3 d-flex justify-content-center">
                <img src="{{ asset('storage/' . $data_item->voteProfile->icon)}}" alt="..." class="img-fluid" style="max-width: 150px;" data-aos="fade-up" data-aos-duration="1500">
            </div>
            <div class="col-md-9">
            <div class="card-body px-0 px-md-3" data-aos="fade-down" data-aos-duration="1000">
                <h4 class="card-title text-uppercase mb-1">{{ $data_item->voteProfile->title }}</h4>
                <p class="card-text">{{$data_item->voteProfile->description}}</p>
            </div>
            </div>
        </div>
        </div>
        <div class="tab-pane fade" id="pills-{{ $data_item->voteProfile->title }}" role="tabpanel" aria-labelledby="pills-{{ $data_item->voteProfile->title }}-tab">
            <div class="row g-0 d-flex align-items-center">
                <div class="col-md-3 d-flex justify-content-center">
                    <img src="/img/graph.png" alt="..." class="img-fluid" style="max-width: 150px;">
                </div>
                <div class="col-md-9">
                <div class="card-body px-0 px-md-3">
                    <h4 class="card-title text-uppercase mb-1">{{ $data_item->voteProfile->title }}</h4>
                    <p class="card-text">{{$data_item->voteProfile->description}}</p>
                </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Gallery --}}
    @if ($data_item->voteProfiles)
    <div class="my-5">
        <h5 class="border-start border-danger border-4 text-uppercase ps-2 fw-bold rb-blue-tx" data-aos="fade-down" data-aos-duration="1000">Foto Kegiatan</h5>
            {{-- Lopping Image --}}
            @foreach ($data_item->voteProfiles as $item)
            <div class="slider">
                    @foreach (json_decode($item->gallery) as $g)
                    <a href="{{asset('storage/' . $g)}}" class="fancybox item" data-fancybox="gallery1">
                    <img src="{{asset('storage/' . $g)}}" class="img-fluid" alt="...">
                    @endforeach
                </div>
            @endforeach
    </div>
    @endif

    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
        @if (Auth::guard('admin')->user())
        {{-- <a href="editPollItems" type="button" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Edit Profile</button> --}}
            <a href="/admin/addItems/{{$data_item->vote_unit_id}}" class="btn btn-secondary btn-sm px-5" type="button"><i class="fas fa-reply"></i> Back</a>
        @endif
        {{-- <a href="/pollingUnit/{{$data_item->vote_unit_id}}" class="btn btn-secondary btn-sm px-5" type="button"><i class="fas fa-reply"></i> Back</a> --}}
    </div>

    @endif
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
        <a href="/pollingUnit/{{$data_item->vote_unit_id}}" class="btn btn-secondary btn-sm px-5" type="button"><i class="fas fa-reply"></i> Back</a>
    </div>
</div>

<script src="{{ asset('js/slider.js')}}" type="text/javascript"></script>

@endsection
