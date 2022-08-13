{{-- Looping Data Polling  --}}
@foreach ($data_polling as $dp)

    @php
    $epoch_start = $dp->date_start;
    $dt = new DateTime("@$epoch_start");  // convert UNIX timestamp to PHP DateTime
    $date_start = $dt->format('d-m-Y');

    $epoch_end = $dp->date_end;
    $dt = new DateTime("@$epoch_end");  // convert UNIX timestamp to PHP DateTime
    $date_end = $dt->format('d-m-Y');

    // $date = new DateTime('07/09/2022'); // format: MM/DD/YYYY
    // echo $date->format('U');

    //    echo time();

    $times = round(microtime(true));
    $ts = new DateTime("@$times");
    $today = $ts->format('d-m-Y');
    @endphp

  <div class="card mb-3 border-0 shadow-sm" data-aos="zoom-in">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-md-4">
        <img src="{{ 'storage/' . $dp->thumbnail }}" class="img-fluid img_card3" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
            {{-- Validasi date polling time --}}
            @if ( $date_end <= $today)
              <a href="/pollingUnitBar/{{ $dp->id }}"><h5 class="mb-3"><strong>{{ $dp->title }}</strong></h5></a>
            @else
              <a href="/pollingUnit/{{ $dp->id }}"><h5 class="mb-3"><strong>{{ $dp->title }}</strong></h5></a>
            @endif
              <p class="text-muted mb-3 card_desc">{{$dp->description}}
              </p>

              <div class="row d-flex align-items-center">

                <div class="col-md-8 mb-3 mb-md-0">
                  <p class="d-grid d-md-flex fst-italic mb-3 mb-md-1">
                    @if ($epoch_end <= $times)
                    <small class="text-danger fst-italic"><i class="fas fa-times-circle mb-3 mb-lg-1"></i> Closed Polling </small>
                    @else
                    <small class="text-success fst-italic me-md-3"><i class="fas fa-check-circle mb-3 mb-lg-1"></i> Live Polling </small>
                    {{ $date_start }} s/d {{ $date_end }}
                </p>
                @endif
                  {{-- @if ( $date_end <= $today)
                  <p class="text-danger float-md-start fst-italic me-2 mb-0"><i class="fas fa-times-circle"></i> Closed Polling</p>
                  @else
                  <p class="text-success float-md-start fst-italic me-2 mb-0"><i class="fas fa-check-circle"></i> Live Polling</p>
                  @endif
                  <p class="fst-italic mt-1 mt-md-0 mb-0">{{$date_start}} s/d {{$date_end}}</p> --}}
                </div>

                <div class="col-md-4 d-flex justify-content-end">
                  {{-- Validasi date polling time --}}
                  @if ( $date_end <= $today)
                    <div class="d-grid d-md-block gap-2">
                        <a href="/pollingUnitBar/{{ $dp->id }}" class="btn btn-outline-primary btn-sm" type="button">Lihat Polling</a>
                    </div>
                  @else
                    <div class="d-grid d-md-block gap-2">
                        <a href="/pollingUnit/{{ $dp->id }}" class="btn btn-outline-primary btn-sm float-end" type="button">Ikuti Polling</a>
                    </div>
                  @endif
                </div>

              </div>
        </div>
      </div>
    </div>
  </div>


@endforeach
