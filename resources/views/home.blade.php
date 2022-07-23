@extends('layouts.main')

@section('child')

{{-- Banner --}}
@include('partials.banner')

{{-- Content --}}
<div class="col-md-10 mx-md-auto my-5">

  @include('partials/cardPollUnit')

</div>

<script src="js/script.js"></script>

@endsection