
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

      <div class="d-grid d-md-flex gap-2 justify-content-md-center">
        <a class="btn btn-primary btn-sm px-5" href="/result" role="button"><i class="fa-solid fa-chart-bar"></i> Print result</a>
        @if (Auth::guard('admin')->user())
            <a href="{{ route('admin.home') }}" class="btn btn-secondary btn-sm float-end d-block d-md-none">Back <i class="fas fa-reply"></i></a>
            @else
            <a href="{{ '/' }}" class="btn btn-secondary btn-sm float-end d-block d-md-none">Back <i class="fas fa-reply"></i></a>
        @endif
      </div>

  </div>
</div>

@endsection
