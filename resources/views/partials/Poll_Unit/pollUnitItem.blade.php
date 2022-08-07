@php
    $i =1;
@endphp

{{-- Looping data polling --}}
@foreach ($polling_item as $pi)



    {{-- Cek jika user telah melakukan voting --}}
    @if ($pi->votings)
        {{-- Vote Item --}}
        <div class="row g-0 my-3">
            <div class="col-md-3 d-flex justify-content-center">
            {{-- Vote Thumbnail --}}
            <img src="{{ asset('storage/' . $pi->vote_image) }}" class="img-thumbnail img_card" alt="...">
            </div>
            <div class="col-md-9 d-flex align-items-center">
            <div class="card-body">
                {{-- Vote Name --}}
                <div class="d-flex">
                    <h5>{{$i++}}.</h5>
                    <div class="ms-1">
                        <h5 class="card-title mb-0">{{ $pi->vote_name }}</h5>
                        <p class="card-text mb-3"><small class="text-muted">{{ $pi->short_desc }}</small></p>
                    </div>
                </div>
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
                    @if ($total_vote === 0)
                        <div class="progress-bar text-dark" role="progressbar" style="width:100%; background-color:#d5d5d5;" aria-valuenow="{{ $total_vote }}" aria-valuemin="0" aria-valuemax="100">{{ $total_vote }}% / {{ $total_user_vote }} Suara</div>
                    @else
                        <div class="progress-bar" role="progressbar" style="width: {{ $total_vote }}%" aria-valuenow="{{ $total_vote }}" aria-valuemin="0" aria-valuemax="100">{{ $total_vote }}% / {{ $total_user_vote }} Suara</div>
                    @endif
                </div>
                <hr class="d-block d-md-none">
            </div>
            </div>
        </div>

    @else

       {{-- Vote Item --}}
       <form action="{{ '/pollSurvey' }}" method="post">
        @csrf

        {{-- Value Vote +1 --}}
        <input type="hidden" name="response" value="{{ $total_vote->total_vote +1 }}">
        {{-- Validasi User Login --}}
        {{-- @if (Auth::user()->id == $data_vote_user->user_vote) --}}
            <input type="hidden" name="user_vote" value="{{ Auth::user()->id }}">
        {{-- @endif --}}
            <input type="hidden" name="vote_unit_id" value="{{ $polling_unit->id }}">
        {{-- @foreach ($vote_unit as $v) --}}
        <input type="hidden" name="vote_item_id" value="{{$pi->id}}">
        {{-- @endforeach --}}

        <div class="row g-0 my-3">
            <div class="col-md-3 d-flex justify-content-center">
            {{-- Vote Thumbnail --}}
            <img src="{{ asset('storage/'.$pi->vote_image)}}" class=" img-thumbnail img_card" alt="...">
            </div>
            <div class="col-md-9 d-grid align-items-center py-3 ps-md-3">
            <div class="">
                {{-- Vote Name --}}
                <div class="d-flex mb-3">
                    <h5>{{$i++}}.</h5>
                    <div class="ms-1">
                        <h5 class="card-title mb-o">{{$pi->vote_name}}</h5>
                        <p class="card-text"><small class="text-muted">{{ $pi->vote_position }}</small></p>
                    </div>
                </div>
                <hr class="d-none d-md-block">
                {{-- Validasi User Login --}}
                @if (Auth::user())
                    {{-- Vote Button --}}
                    <div class="d-grid d-md-flex gap-2 col-md-2">
                        <a href="/profile/{{ $pi->id }}" class="btn btn-info btn-sm text-light px-5">Profile</a>
                        <button type="submit" class="btn btn-success btn-sm px-5">Vote</button>
                    </div>
                @else
                    {{-- Vote Button Redirect Login --}}
                    <div class="d-grid d-md-flex gap-2 col-md-2">
                        <a href="/profile/{{ $pi->id }}" class="btn btn-info btn-sm text-light px-5">Profile</a>
                        <a href="{{ route('google.login') }}" class="btn btn-success btn-sm px-5">Vote</a>
                    </div>
                @endif
            </div>
        </div>
        <hr class="d-md-none">
    </form>
</div>


    @endif


@endforeach
