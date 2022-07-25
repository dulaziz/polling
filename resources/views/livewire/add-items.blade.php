@section('child')
<div>
  {{-- Content --}}
  <div class="col-md-10 mx-auto my-5">

    <h6 class="text-muted mb-5">{{ $title }}</h6>

    {{-- @include('partials.addPolling') --}}
    @include('partials/poll_items/poll-header-items')

    {{-- Polling item --}}
    <div class="card border-light rounded-3 shadow-sm">
        <div class="card-body">
            {{-- {{ $id_unit }} --}}
            {{-- <livewire:store-items id_unit="$id_unit"/> --}}
            @livewire('store-items', ['id_unit' => $id_unit])
            {{-- <hr> --}}
            {{-- @livewire('items', ['id_unit' => $id_unit]) --}}
            {{-- <livewire:items :unit={{ $unit }}/> --}}
            {{-- @include('partials/poll_items/poll-content-items') --}}
        </div>

    </div>

</div>
</div>
@endsection
