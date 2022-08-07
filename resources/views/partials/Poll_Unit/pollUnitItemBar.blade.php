{{-- Loop Iteration --}}
@php
    $i = 1;
@endphp

{{-- Looping data vote item --}}
@foreach ($polling_item as $item)


{{-- Vote Item --}}
<div class="row g-0 my-3">
  <div class="col-md-3 d-flex justify-content-center">
    {{-- Vote Thumbnail --}}
    <img src="{{ asset('storage/' . $item->vote_image) }}" class="img-thumbnail img_card" alt="...">
  </div>
  <div class="col-md-9 d-flex align-items-center">
    <div class="card-body">
      {{-- Vote Name --}}
      <div class="d-flex mb-3">
        <h5>{{$i++}}.</h5>
        <div class="ms-1">
            <h5 class="card-title mb-0">{{ $item->vote_name }}</h5>
            <p class="card-text"><small class="text-muted">Wakil Wali Kota Bogor</small></p>
            {{-- <p class="card-text"><small class="text-muted">{{ $item->short_desc }}</small></p> --}}
        </div>
      </div>
      <div class="progress" style="height: 2rem">
          {{-- Cari jumlah persentase dari pemilih --}}
          @php
                // Cek apakah ada data total user vote
                if($total_user_vote > 0){
                            $total_vote = $item->response / $total_user_vote * 100;
                        }else {
                            $total_user_vote = 0;
                            # jika tidak ada data total user vote
                            $total_vote = $item->response;
                        }
          @endphp
          {{-- Validasi Login Role Admin --}}
            @if ($total_vote == 0)
                <div class="progress-bar text-dark" role="progressbar" style="width:100%; background-color:#d5d5d5;" aria-valuenow="{{ $total_vote }}" aria-valuemin="0" aria-valuemax="100">{{ $total_vote }}% / {{ $total_user_vote }} Suara</div>
            @else
                <div class="progress-bar" role="progressbar" style="width: {{ $total_vote }}%" aria-valuenow="{{ $total_vote }}" aria-valuemin="0" aria-valuemax="100">{{ $total_vote }}% / {{ $total_user_vote }} Suara</div>
            @endif
        </div>
    </div>
  </div>
</div>


@endforeach
