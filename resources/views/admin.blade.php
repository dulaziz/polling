
@extends('layouts.main')

@section('child')

  {{-- Content --}}
  <div class="col-md-10 mx-auto my-5">

    <h6 class="text-muted mb-5">{{ $title }}</h6>

        {{-- Response --}}
        @if ($message = Session::get('message'))
        {{-- Allert after Vote --}}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{-- End Response --}}

      @include('partials.adminCardPollUnit')

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
      <a class="text-end text-decoration-none fw-bold" href="admin/addPolling" role="button">Add Polling <i class="fas fa-long-arrow-right"></i></a>
    </div>

  </div>

@endsection
