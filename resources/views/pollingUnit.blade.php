
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
        @include('partials/Poll_Unit.pollUnitItem')
        <hr class="d-none d-md-block">
        {{-- @include('partials/Poll Unit.pollUnitFooterCard') --}}
      </div>
    </div>

  </div>
</div>  

@endsection