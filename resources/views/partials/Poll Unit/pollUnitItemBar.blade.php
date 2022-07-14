{{-- Looping data vote item --}}

@foreach ($polling_item as $item)


{{-- Vote Item --}}
<div class="row g-0 my-3">
  <div class="col-md-2">
    {{-- Vote Thumbnail --}}
    <img src="{{ asset('storage/' . $item->vote_image) }}" class="img-fluid img-thumbnail rounded" alt="...">
  </div>
  <div class="col-md-10 d-flex align-items-center">
    <div class="card-body">
      {{-- Vote Name --}}
      <h5 class="card-title fw-bold">{{ $item->vote_name }}</h5>
      <p class="card-text"><small class="text-muted">{{ $item->short_desc }}</small></p>
      <div class="progress" style="height: 2rem">
          {{-- Cari jumlah persentase dari pemilih --}}
          @php
              $total_vote = $item->response / $total_user_vote * 100;
          @endphp
          <div class="progress-bar" role="progressbar" style="width: {{ $total_vote }}%" aria-valuenow="{{ $total_vote }}" aria-valuemin="0" aria-valuemax="100">{{ $total_vote }}% / {{ $total_user_vote }} Suara</div>
        </div>
    </div>
  </div>
</div>


@endforeach

