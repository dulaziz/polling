@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@foreach ($polling_unit as $pu)

<div class="alert alert-secondary">
    <div class="row d-flex align-items-center">
      <div class="col-md-3">
          <img src="{{ asset('storage/'.$pu->thumbnail) }}" alt="" class="img-fluid img_card">
      </div>
      <div class="col-md-9">
          <a href="admin/pollingUnitBar/{{ $pu->id }}"><h5><strong>{{ $pu->title }}</strong></h5></a>
        <p class="text-muted mb-1">{{ $pu->description }}</p>
        @php
           $epoch_start = $pu->date_start;
            $dt = new DateTime("@$epoch_start");  // convert UNIX timestamp to PHP DateTime
            $date_start = $dt->format('d-m-Y');

            $epoch_end = $pu->date_end;
            $dt = new DateTime("@$epoch_end"); // convert UNIX timestamp to PHP DateTime
            $date_end = $dt->format('d-m-Y');

            // $date = new DateTime('07/09/2022'); // format: MM/DD/YYYY
            // echo $date->format('U');

            // echo time();

            $times = round(microtime(true));
            $ts = new DateTime("@$times");
            $today = $ts->format('d-m-Y');

            @endphp

        <p class="fst-italic mb-1">Waktu Polling {{ $date_start }} s/d {{ $date_end }} </p>
            @if ($epoch_end <= $times)
            <small class="text-danger  fst-italic"><i class="fas fa-times-circle"></i> Closed Polling</small>
            @else
            <small class="text-success fst-italic"><i class="fas fa-check-circle"></i> Live Polling</small>
            @endif
        <div class="d-grid d-md-flex gap-2 float-md-end">
            {{-- Link show voting --}}
            {{-- <a href="admin/pollingUnitBar/{{ $pu->id }}" class="btn btn-info text-light btn-sm mt-1" type="button"><i class="fa-solid fa-eye"></i> View</a> --}}
            <a href="admin/pollingUnitBar/{{ $pu->id }}" class="btn btn-info text-light btn-sm mt-1"><i class="fa-solid fa-eye"></i> View</a>


            @if ($epoch_end <= $times)

            @else
            <a href="admin/addItems/{{ $pu->id }}" class="btn btn-success btn-sm mt-1" type="button"><i class="fa-solid fa-users"></i> Poll items</a>
            <a href="admin/editPolling/{{ $pu->id  }}" class="btn btn-dark btn-sm mt-1" type="button"><i class="fas fa-pen"></i> Edit</a>
            {{-- Close Polling Unit --}}
            <form action="{{ route('admin.close') }}" method="post">
                @csrf
                {{-- Convert time today to date --}}
                @php
                     $times = round(microtime(true));
                            $ts = new DateTime("@$times");
                            $today = $ts->format('d-m-Y');
                @endphp
                <input type="hidden" name="id" value="{{ $pu->id }}">
                <input type="hidden" name="date_end" value="{{ $today }}">
                <div class="d-grid d-md-flex gap-2 float-md-end">
                <button onclick="return confirm('Apakah anda yakin ingin menutup polling ini?' )" class="btn btn-warning btn-sm mt-1 text-light" type="submit"><i class="fa-solid fa-xmark"></i> Close</button>
                </div>
            </form>
            @endif
            <a href="admin/result/{{ $pu->id }}" class="btn btn-primary btn-sm mt-1"><i class="fa-solid fa-chart-bar"></i> Result</a>
            {{-- Delete Unit --}}
            <form action="{{ route('admin.delete') }}" method="post">
                @csrf
                <input type="hidden" name="id" value="{{ $pu->id }}">
                <div class="d-grid d-md-flex gap-2 float-md-end">
                <button class="btn btn-danger btn-sm mt-1" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data?')"><i class="fa-solid fa-trash"></i> Delete</button>
                </div>
            </form>
      </div>
      </div>
    </div>
</div>

@endforeach

