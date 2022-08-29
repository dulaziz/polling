@extends('layouts.main')

@section('child')

{{-- @include('layouts.navHome') --}}
{{-- Banner --}}
<div class="bg-bg bnr">
  <div class="container">
    @include('partials.banner')
  </div>
</div>

{{-- Content --}}
<div class="container">
<div class="col-md-10 mx-md-auto my-5 pt-md-5">
  @include('partials/cardPollUnit')
</div>
</div>

<script src="{{ asset('js/script.js')}}"></script>

@endsection
