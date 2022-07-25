@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@foreach ($polling_unit as $pu)

<div class="alert alert-secondary">
    <div class="row d-flex align-items-center">
      <div class="col-md-2">
          <img src="{{ asset('storage/'.$pu->thumbnail) }}" alt="" class=" img-fluid rounded">
      </div>
      <div class="col-md-10">
          <a href="/pollingUnitBar"><h5><strong>{{ $pu->title }}</strong></h5></a>
        <p class="text-muted mb-1">{{ $pu->description }}</p>
        @php
           $epoch_start = $pu->date_start;
            $dt = new DateTime("@$epoch_start");  // convert UNIX timestamp to PHP DateTime
            $date_start = $dt->format('d-m-Y');

           $epoch_end = $pu->date_end;
            $dt = new DateTime("@$epoch_end");  // convert UNIX timestamp to PHP DateTime
            $date_end = $dt->format('d-m-Y');

            // $date = new DateTime('07/09/2022'); // format: MM/DD/YYYY
            // echo $date->format('U');

            // echo time();

            $times = round(microtime(true));
            $ts = new DateTime("@$times");
            $today = $ts->format('d-m-Y');

        @endphp

        <p class="fst-italic mb-1">Waktu Polling {{ $date_start }} s/d {{ $date_end }} </p>
            @if ($date_end <= $today)
            <small class="text-danger  fst-italic"><i class="fas fa-times-circle"></i> Closed Polling</small>
            @else
            <small class="text-success fst-italic"><i class="fas fa-check-circle"></i> Live Polling</small>
            @endif
        <div class="float-end">

            {{-- Link show voting --}}
            <a href="/pollingUnitBar/{{ $pu->id }}" class="btn btn-info text-light btn-sm text-white mt-1" type="button"><i class="fa-solid fa-eye"></i> View</a>

            @if ($date_end <= $today)

            @else

                <a href="/editPolling/{{ $pu->id  }}" class="btn btn-success btn-sm mt-1" type="button"><i class="fas fa-pen"></i> Edit</a>
                <a href="/addItems/{{ $pu->id  }}" class="btn btn-dark btn-sm mt-1" type="button"><i class="fas fa-pen"></i> Add Items</a>
                <button onClick="confirm( 'Apakah anda yakin ingin menutup polling ini' )" class="btn btn-warning btn-sm text-white mt-1" type="button"><i class="fa-solid fa-xmark"></i> Close</button>
            @endif
        <a href="/result/{{ $pu->id }}" class="btn btn-primary btn-sm text-white mt-1" type="button"><i class="fa-solid fa-chart-bar"></i> Result</a>
        <button class="btn btn-danger btn-sm text-white mt-1" type="button"><i class="fa-solid fa-trash"></i> Delete</button>
      </div>
      </div>
    </div>
</div>

@endforeach
