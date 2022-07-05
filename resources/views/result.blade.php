
@extends('layouts.frontLayout.main')

@section('child')

<div class="container">

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">

{{-- Vote Elelment --}}
<h6 class="text-muted mb-5">{{ $title }}</h6>

<div class="mb-4">
<h2 class="fw-bold">Bogor Memilih 2024, Siapa Kandidat Balon Wali Kota Bogor Terfavorit?</h2>
<hr>
</div>
<div class="row d-flex align-items-center mb-2">
    <div class="col-md-3">
        <h5 class="mb-0">Dedie A Rachim</h5>
    </div>
    <div class="col-md-2">
        <p class="mb-0">85% | 850 Suara</p>
    </div>
    <div class="col-md-7">
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>

<div class="row d-flex align-items-center mb-2">
    <div class="col-md-3">
        <h5 class="mb-0">Atang Trisnanto</h5>
    </div>
    <div class="col-md-2">
        <p class="mb-0">65% | 650 Suara</p>
    </div>
    <div class="col-md-7">
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>

<div class="row d-flex align-items-center mb-2">
    <div class="col-md-3">
        <h5 class="mb-0">Muzakir</h5>
    </div>
    <div class="col-md-2">
        <p class="mb-0">45% | 450 Suara</p>
    </div>
    <div class="col-md-7">
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
    </div>
</div>

<div class="row d-flex align-items-center mt-4">
    <div class="col-md-3">
        <h5 class="mb-0 text-muted">Total</h5>
    </div>
    <div class="col-md-2">
        <p class="mb-0">100% | 1950 Suara</p>
    </div>
    <div class="col-md-7">
        <div class="float-end">
            <a href="/result" class="btn btn-info btn-sm text-white" type="button"><i class="fa-solid fa-print"></i> Print</a>
            <a href="/admin" class="btn btn-secondary btn-sm" type="button"><i class="fas fa-reply"></i> Back</a>
    </div>
    </div>
</div>

</div>

</div>

@endsection