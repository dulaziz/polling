@section('child')
<div>
  {{-- Content --}}
  <div class="col-md-10 mx-auto my-5">

    <h6 class="text-muted mb-5">{{ $title }}</h6>

    {{-- @include('partials.addPolling') --}}
    {{-- @include('partials/poll_items/poll-header-items') --}}

    {{-- Polling item --}}
    <div class="card border-light rounded-3 shadow-sm">
        <div class="card-body">
            @livewire('store-items', ['id_unit' => $id_unit,'vote_unit' => $vote_unit])
        </div>

    </div>

</div>
</div>
@endsection
