
@extends('layouts.main')

@section('child')

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">
    
<h6 class="text-muted mb-5">{{ $title }}</h6>

    @include('partials/Poll Form Edit.pollFormEdit')

</div>

@endsection