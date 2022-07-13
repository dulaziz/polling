
@extends('layouts.frontLayout.main')

@section('child')


{{-- Content --}}
<div class="col-md-10 mx-auto my-5">
<h6 class="text-muted mb-5">{{ $title }}</h6>

    @include('partials.adminCardPollUnit')


<div class="d-grid gap-2 d-md-flex justify-content-md-end">
  <a class="text-end text-decoration-none fw-bold" href="/addPolling" role="button">Add Polling <i class="fas fa-long-arrow-right"></i></a>
</div>

</div>


@endsection
