@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

@foreach ($polling_unit as $pu)

<div class="card mb-3 border-0 shadow-sm">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-4">
        <img src="{{ 'storage/' . $pu->thumbnail }}" class="img-fluid img_card3" alt="...">
      </div>
      <div class="col-lg-8">
        <div class="card-body py-lg-0">

            <a href="admin/pollingUnitBar/{{ $pu->id }}"><h5 class="mb-3"><strong>{{ $pu->title }}</strong></h5></a>
            <p class="text-muted mb-3 mb-md-2 card_desc">{{ $pu->description }}</p>
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

                <div class="row d-flex align-items-center">
                    <div class="col-md-8 mb-0">
                        <p class="d-grid d-md-flex fst-italic mb-3 mb-md-0">
                            @if ($epoch_end <= $times)
                            <small class="text-danger fst-italic"><i class="fas fa-times-circle mb-0"></i> Closed Polling </small>
                            @else
                            <small class="text-success fst-italic me-md-3"><i class="fas fa-check-circle mb-0"></i> Live Polling </small>
                            {{ $date_start }} s/d {{ $date_end }}
                        </p>
                            @endif
                    </div>
                    <div class="col-md-4 d-md-flex justify-content-end">
                        <div class="btn-group d-grid gap-2">
                            <button type="button" class="btn btn-outline-primary dropdown-toggle btn-sm" data-bs-toggle="dropdown" aria-expanded="false">
                            Action
                            </button>
                            <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-lg-end my-2" style="width: 100%;">
                            <li>
                                <a href="admin/pollingUnitBar/{{ $pu->id }}" class="dropdown-item"><i class="fa-solid fa-eye"></i> View</a>
                            </li>
                            @if ($epoch_end <= $times)
                                @else
                            <li>
                                <a href="admin/addItems/{{ $pu->id }}" class="dropdown-item"><i class="fa-solid fa-users"></i> Poll items</a>
                                <a href="admin/editPolling/{{ $pu->id  }}" class="dropdown-item"><i class="fas fa-pen"></i> Edit</a>
                            </li>
                            <li><hr class="dropdown-divider"></li>
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
                                <button onclick="return confirm('Apakah anda yakin ingin menutup polling ini?' )" class="dropdown-item" type="submit"><i class="fa-solid fa-xmark"></i> Close</button>
                            </form>
                            @endif
                            <li>
                                <a href="admin/result/{{ $pu->id }}" class="dropdown-item"><i class="fa-solid fa-chart-bar"></i> Result</a>
                            </li>
                            {{-- Delete Unit --}}
                            <form action="{{ route('admin.delete') }}" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $pu->id }}">
                                <li>
                                    <button onclick="return confirm('Apakah anda yakin ingin menghapus Polling ini?' )" class="dropdown-item" type="submit"><i class="fa-solid fa-trash"></i> Delete</button>
                                {{-- <button class="dropdown-items" type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus Polling ini?')"><i class="fa-solid fa-trash"></i> Delete</button> --}}
                                </li>
                            </form>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </div>



@endforeach

