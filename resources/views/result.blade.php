
@extends('layouts.main')

@section('child')

{{-- Print style --}}
<link rel="stylesheet" type="text/css" media="print" href="css/print.css">

<div class="container">

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">

{{-- Polling unit --}}
<h6 class="text-muted mb-5">{{ $title }}</h6>

<div class="print-container">

{{-- Poll unit title & date --}}
<div class="mb-4">
<h2 class="fw-bold">Bogor Memilih 2024, Siapa Kandidat Balon Wali Kota Bogor Terfavorit?</h2>
<p class="fst-italic">Waktu Polling 04 Juli 2022 s/d 11 Juli 2022</p>
</div>

{{-- Poll unit table result --}}
<div class="table-responsive">
<table class="table table-sm" style="width: 900px;">
    <thead>
      <tr>
        <th scope="col" style="width: 20px;">No</th>
        <th scope="col" style="width: 200px;">Name</th>
        <th scope="col"style="width: 520px;">Progressbar</th>
        <th scope="col">Response</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Dedie A Rachim</td>
        <td>
            <div class="progress mt-1">
                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </td>
        <td>
            <p class="mb-0">85% | 850 Suara</p>
        </td>
      </tr>

      <tr>
        <th scope="row">2</th>
        <td>Atang Trisnanto</td>
        <td>
            <div class="progress mt-1">
                <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </td>
        <td>65% | 650 Suara</td>
      </tr>

      <tr>
        <th scope="row">3</th>
        <td>Muzakir</td>
        <td>
            <div class="progress mt-1">
                <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </td>
        <td>45% | 450 Suara</td>
      </tr>

      <tr>
        <td colspan="3"><strong>Total Response</strong></td>
        <td><strong> 100% | 1950 Suara</strong></td>
      </tr>

    </tbody>
  </table>
</div>

</div>

{{-- Print button --}}
<div class="float-end">
  <a onclick="window.print()" class="btn btn-info btn-sm text-white" type="button"><i class="fa-solid fa-print"></i> Print</a>
  <a href="/admin" class="btn btn-secondary btn-sm" type="button"><i class="fas fa-reply"></i> Back</a>
</div>

</div>

</div>


@endsection