{{-- Looping data polling --}}
@foreach ($polling_item as $pi)

    {{-- Cek jika user telah melakukan voting --}}

    @if ($data_vote_user)
        {{-- Vote Item --}}
        <div class="row g-0 my-3">
            <div class="col-md-2">
            {{-- Vote Thumbnail --}}
            <img src="{{ asset('storage/' . $pi->vote_image) }}" class="img-fluid img-thumbnail rounded" alt="...">
            </div>
            <div class="col-md-10 d-flex align-items-center">
            <div class="card-body">
                {{-- Vote Name --}}
                <h5 class="card-title fw-bold">{{ $pi->vote_name }}</h5>
                <p class="card-text"><small class="text-muted">{{ $pi->short_desc }}</small></p>
                <div class="progress" style="height: 2rem">
                    {{-- Cari jumlah persentase dari pemilih --}}
                    @php
                        // Cek apakah ada data total user vote
                        if($total_user_vote > 0){
                            $total_vote = $pi->response / $total_user_vote * 100;
                        }else {
                            $total_user_vote = 0;
                            # jika tidak ada data total user vote
                            $total_vote = $pi->response;
                        }
                    @endphp
                    @if ($total_vote == 0)
                    <div class="progress-bar text-dark" role="progressbar" style="width:100%; background-color:#d5d5d5;" aria-valuenow="{{ $total_vote }}" aria-valuemin="0" aria-valuemax="100">{{ $total_vote }}% / {{ $total_user_vote }} Suara</div>
                    @else
                    <div class="progress-bar" role="progressbar" style="width: {{ $total_vote }}%" aria-valuenow="{{ $total_vote }}" aria-valuemin="0" aria-valuemax="100">{{ $total_vote }}% / {{ $total_user_vote }} Suara</div>
                    @endif
                </div>
            </div>
            </div>
        </div>

    @else

    {{-- Vote Item --}}
        <form action="{{ '/pollSurvey' }}" method="post">
            @csrf

            {{-- Value Vote +1 --}}
            <input type="hidden" name="response" value="{{ $total_vote->total_vote +1 }}">
            <input type="hidden" name="user_vote" value="2">
            <input type="hidden" name="vote_unit_id" value="{{ $polling_unit->id }}">
            {{-- @foreach ($vote_unit as $v) --}}
            <input type="hidden" name="vote_item_id" value="{{$pi->id}}">
            {{-- @endforeach --}}

        <div class="row g-0 my-3">
                <div class="col-md-2">
                {{-- Vote Thumbnail --}}
                <img src="{{ asset('storage/'.$pi->vote_image)}}" class="img-fluid img-thumbnail rounded" alt="...">
                </div>
                <div class="col-md-10 d-flex align-items-center">
                <div class="card-body">
                    {{-- Vote Name --}}
                    <h5 class="card-title fw-bold">{{$pi->vote_name}}</h5>
                    <p class="card-text"><small class="text-muted">Wakil Wali Kota Bogor</small></p>
                    {{-- Vote Button --}}
                    <div class="d-grid col-md-2">
                        <button type="submit" class="btn btn-primary btn-sm">VOTE</button>
                    </div>
                </div>
            </div>
        </form>
        </div>

        </div>

    @endif

@endforeach

<script type="text/javascript">
    // $(function(){
    //     alert("ok");
    //   $.ajax({
    //     url:"getPollingUnit",
    //     type: "GET",
    //     dataType: "JSON",
    //     success: function(data){
    //       var nomor = 0;
    //       for(i=0; i<data.length; i++){
    //         nomor++;
    //         $('#result').append('<tr><td>'+nomor+'</td><td>'+data[i].vote_name+'</td><td>'+data[i].short_desc+'</td></tr>');
    //       }
    //     },
    //     error: function(data){
    //      alert("Terjadi Kesalahan!");
    //    }
    //  });
    // });

  </script>
