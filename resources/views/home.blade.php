
@extends('layouts.frontLayout.main')

@section('child')

<div class="container">

{{-- Banner --}}
@include('partials.banner')

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">

  @include('partials.cardPollUnit')

</div>

</div>  

@endsection