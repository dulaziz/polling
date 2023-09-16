<div class="container mb-5">
    <div class="row">
        <div class="col-lg-12 d-flex justify-content-end">
            <div class="mr-5">
                <form action="/home" >
                    <div class="input-group">
                        <div class="form-outline">
                            <input type="search" id="search" name="search" class="form-control"
                                placeholder="search polling....." value="{{request('search')}}"/>
                        </div>
                        <button id="search-button" type="submit" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{{-- Looping Data Polling  --}}
@foreach ($data_polling as $dp)
    @php
        $epoch_start = $dp->date_start;
        $dt = new DateTime("@$epoch_start"); // convert UNIX timestamp to PHP DateTime
        $date_start = $dt->format('d-m-Y');

        $epoch_end = $dp->date_end;
        $dt = new DateTime("@$epoch_end"); // convert UNIX timestamp to PHP DateTime
        $date_end = $dt->format('d-m-Y');

        $times = round(microtime(true));
        $ts = new DateTime("@$times");
        $today = $ts->format('d-m-Y');
    @endphp

    <div class="container mt-5">
        <div class="col-md-10 mx-auto">

            <div class="row d-flex align-items-center mb-5 " data-aos="zoom-in">
                <div class="col-md-4 mb-3 mb-md-0">
                    <img src="{{ 'storage/' . $dp->thumbnail }}" class="pstr_thumb" alt="">
                </div>

                <div class="col-md-8">
                    @if ($date_end <= $today)
                        <a href="/pollingUnitBar/{{ $dp->slug }}" class="mb-3 text-decoration-none text-dark">
                            <h2><strong>{{ $dp->title }}</strong></h2>
                        </a>
                    @else
                        <a href="/polling/{{ $dp->slug }}" class="mb-3 text-decoration-none text-dark">
                            <h2><strong>{{ $dp->title }}</strong></h2>
                        </a>
                    @endif

                    <hr class="d-none d-md-block">

                    <div class="d-none d-md-block">
                        {!! $dp->description !!}
                    </div>

                    <div class="d-flex flex-column">
                        @if ($epoch_end <= $times)
                            <small class="text-danger fst-italic mb-1"><i class="fas fa-times-circle"></i> Closed
                                Polling</small>
                        @elseif(\Carbon\Carbon::parse(now())->lt($date_start))
                            <small class="text-primary fst-italic me-md-3"><i class="fas fa-check-circle mb-0"></i>
                                Coming Soon Polling </small>
                            <small>{{ $date_start }} s/d {{ $date_end }}</small>
                        @else
                            <small class="text-success fst-italic mb-1"><i class="fas fa-check-circle"></i> Live
                                Polling</small>
                            <small>{{ $date_start }} s/d {{ $date_end }}</small>
                        @endif
                    </div>

                    <div class="btn-group d-grid d-md-block mt-3">
                        @if ($epoch_end <= $times)
                            <a href="/pollingUnitBar/{{ $dp->slug }}" class="btn btn-primary mt-md-3"
                                type="button">Lihat Polling</a>
                        @else
                            <a href="/polling/{{ $dp->slug }}" class="btn btn-primary mt-md-3" type="button">Ikuti
                                Polling</a>
                        @endif
                    </div>
                    <hr class="d-block d-md-none">

                </div>
            </div>
        </div>
    </div>
@endforeach

<div class="d-flex justify-content-center">
    {{ $data_polling->links() }}
</div>
