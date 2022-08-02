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


<div class="card border border-0 shadow-sm rounded-3 mb-3" data-aos="zoom-out">
    <div class="card-body">
      <div class="row d-flex align-items-center">
          <div class="col-md-3 d-flex justify-content-center justify-content-md-start">
              <img src="{{ 'storage/' . $dp->thumbnail }}" alt="" class="img-fluid rounded img_card mb-3 mb-md-0">
        </div>
        <div class="col-md-9">
            {{-- Validasi date polling time --}}
          @if ( $date_end <= $today)
            <a href="/pollingUnitBar/{{ $dp->id }}"><h5 class="mb-3"><strong>{{ $dp->title }}</strong></h5></a>
          @else
            <a href="/pollingUnit/{{ $dp->id }}"><h5 class="mb-3"><strong>{{ $dp->title }}</strong></h5></a>
          @endif
            <p class="text-muted mb-3">{{$dp->description}}</p>

            <div class="row d-flex align-items-center">
              <div class="col-md-8 mb-3 mb-md-0">
                @if ( $date_end <= $today)
                <p class="text-danger float-md-start fst-italic me-2 mb-0"><i class="fas fa-times-circle"></i> Closed Polling</p>
                @else
                <p class="text-success float-md-start fst-italic me-2 mb-0"><i class="fas fa-check-circle"></i> Live Polling</p>
                @endif
                <p class="fst-italic mb-0">{{$date_start}} s/d {{$date_end}}</p>
              </div>
              <div class="col-md-4">
                {{-- Validasi date polling time --}}
                @if ( $date_end <= $today)
                <div class="d-grid d-md-block gap-2">
                  <a href="/pollingUnitBar/{{ $dp->id }}" class="btn btn-outline-primary btn-sm float-end" type="button">Lihat Polling</a>
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
{{-- </div> --}}

  @endforeach
