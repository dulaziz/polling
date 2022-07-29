  {{-- Title --}}
  <h3 class="fw-bold" data-aos="fade-right">{{ $polling_unit->title }}</h3>

  {{-- Desc --}}
  <p class="mt-4 text-secondary" data-aos="fade-right">{{ $polling_unit->description }}</p>

  @php
  $epoch_start = $polling_unit->date_start;
   $dt = new DateTime("@$epoch_start");  // convert UNIX timestamp to PHP DateTime
   $date_start = $dt->format('d-m-Y');

  $epoch_end = $polling_unit->date_end;
   $dt = new DateTime("@$epoch_end");  // convert UNIX timestamp to PHP DateTime
   $date_end = $dt->format('d-m-Y');

   // $date = new DateTime('07/09/2022'); // format: MM/DD/YYYY
   // echo $date->format('U');

//    echo time();

   $times = round(microtime(true));
   $ts = new DateTime("@$times");
   $today = $ts->format('d-m-Y');

@endphp

  {{-- Date --}}
  <p class="fst-italic mb-3" data-aos="fade-right">Waktu Polling {{ $date_start }} s/d {{ $date_end }}</p>

{{-- Response --}}
@if ($message = Session::get('success'))
{{-- Allert after Vote --}}
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
{{-- End Response --}}

