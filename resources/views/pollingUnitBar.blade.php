
@extends('layouts.main')

@section('child')

<div class="container">
  {{-- Content --}}
  <div class="col-md-10 mx-auto my-5">

    @include('partials/Poll_Unit.pollUnitHeader')
      {{-- Card Poll --}}
      <div class="card border-light rounded-3 shadow-sm mb-3" data-aos="zoom-in" data-aos-duration="1000">
        <div class="card-body">
          @include('partials/Poll_Unit.pollUnitHeaderCard')
          <hr>
          @include('partials/Poll_Unit.pollUnitItemBar')
          <hr>
          @include('partials/Poll_Unit.pollUnitfooterCard')
        </div>
      </div>

      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a class="text-end text-decoration-none fw-bold" href="/result" role="button">Print result <i class="fas fa-long-arrow-right"></i></a>
      </div>

  </div>
</div>

@endsection
