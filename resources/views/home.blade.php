
@extends('layouts.frontLayout.main')

@section('child')

<div class="container">

{{-- Banner --}}
  <div class="row d-flex align-items-center py-5 col-md-10 mx-auto">
      <div class="col-md-6">
          <h1 class="fw-bold">Selamat datang di polling Radar Bogor</h1>
          <p class="mt-4 text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam accusamus, molestias consectetur minima id saepe voluptatum iure mollitia adipisci quam magni fuga facere, nihil rem alias quidem a! Repellat, quibusdam.</p>
      </div>
      <div class="col-md-6">
          <img src="img/vote illustrator.png" alt="" class="float-end img-fluid">
      </div>
  </div>

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">

  <h3 class="fw-bold">Bogor Memilih 2024, Siapa Kandidat Balon Wali Kota Bogor Terfavorit?</h3>
  <p class="mt-4 text-secondary">PEMILIHAN  Wali Kota Bogor akan digelar pada 2024 mendatang. Sejumlah nama digadang-gadang bakal maju menjadi orang nomor satu di Kota Bogor. 
    Siapa kandidat bakal calon Wali Kota Bogor 2024, pilihan Anda? 
    Yuk, ikut poling berikut:</p>

  <div class="card border-light rounded-3 shadow-sm">
    <div class="card-body">

      <h4 class="card-title text-center fw-bold">Bakal Calon Wali Kota Bogor</h4>
      <hr>
      <div class="row g-0 my-3">
        <div class="col-md-2">
          <img src="/img/Dedi A Rachim.jpg" class="img-fluid img-thumbnail rounded" alt="...">
        </div>
        <div class="col-md-10">
          <div class="card-body">
            <h5 class="card-title">Dedie A Rachim (Wakil Wali Kota Bogor)</h5>  
            <p class="card-text"><small class="text-muted">85% / 8500 Suara</small></p>
            <div class="progress" style="height: 2rem;">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
            </div>
          </div>
        </div>
      </div>

      <div class="row g-0 my-3">
        <div class="col-md-2">
          <img src="/img/Atang Trisnanto.jpg" class="img-fluid img-thumbnail rounded" alt="...">
        </div>
        <div class="col-md-10">
          <div class="card-body">
            <h5 class="card-title">Atang Trisnanto (Wakil Wali Kota Bogor)</h5>  
            <p class="card-text"><small class="text-muted">65% / 6500 Suara</small></p>
            <div class="progress" style="height: 2rem">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
            </div>
          </div>
        </div>
      </div>

      <div class="row g-0 my-3">
        <div class="col-md-2">
          <img src="/img/Jenal Mutaqin.jpg" class="img-fluid img-thumbnail rounded" alt="...">
        </div>
        <div class="col-md-10">
          <div class="card-body">
            <h5 class="card-title">Jenal Mutaqin (Wakil Wali Kota Bogor)</h5>  
            <p class="card-text"><small class="text-muted">45% / 4500 Suara</small></p>
            <div class="progress" style="height: 2rem">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 45%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
            </div>
          </div>
        </div>
      </div>

      <div class="row g-0 my-3">
        <div class="col-md-2">
          <img src="/img/Yane Ardian.jpg" class="img-fluid img-thumbnail rounded" alt="...">
        </div>
        <div class="col-md-10">
          <div class="card-body">
            <h5 class="card-title">Yane Ardian (Wakil Wali Kota Bogor)</h5>  
            <p class="card-text"><small class="text-muted">25% / 2500 Suara</small></p>
            <div class="progress" style="height: 2rem">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
          </div>
        </div>
      </div>  

      <div class="row g-0 my-3">
        <div class="col-md-2">
          <img src="/img/Syarifah Sofiah.jpeg" class="img-fluid img-thumbnail rounded" alt="...">
        </div>
        <div class="col-md-10">
          <div class="card-body">
            <h5 class="card-title">Syarifah Sofiah (Wakil Wali Kota Bogor)</h5>  
            <p class="card-text"><small class="text-muted">25% / 2500 Suara</small></p>
            <div class="progress" style="height: 2rem">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
          </div>
        </div>
      </div>  

      <div class="row g-0 my-3">
        <div class="col-md-2">
          <img src="/img/Rusli Prihatevy.png" class="img-fluid img-thumbnail rounded" alt="...">
        </div>
        <div class="col-md-10">
          <div class="card-body">
            <h5 class="card-title">Rusli Prihatevy (Wakil Wali Kota Bogor)</h5>  
            <p class="card-text"><small class="text-muted">25% / 2500 Suara</small></p>
            <div class="progress" style="height: 2rem">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
          </div>
        </div>
      </div>  

      <div class="row g-0 my-3">
        <div class="col-md-2">
          <img src="/img/Pasha Ungu.jpg" class="img-fluid img-thumbnail rounded" alt="...">
        </div>
        <div class="col-md-10">
          <div class="card-body">
            <h5 class="card-title">Pasha Ungu (Wakil Wali Kota Bogor)</h5>  
            <p class="card-text"><small class="text-muted">25% / 2500 Suara</small></p>
            <div class="progress" style="height: 2rem">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
          </div>
        </div>
      </div>  

      <div class="row g-0 my-3">
        <div class="col-md-2">
          <img src="/img/Muzakkir.jpg" class="img-fluid img-thumbnail rounded" alt="...">
        </div>
        <div class="col-md-10">
          <div class="card-body">
            <h5 class="card-title">Muzakkir (Wakil Wali Kota Bogor)</h5>  
            <p class="card-text"><small class="text-muted">25% / 2500 Suara</small></p>
            <div class="progress" style="height: 2rem">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
          </div>
        </div>
      </div>  

      <div class="row g-0 my-3">
        <div class="col-md-2">
          <img src="/img/Zaenul Mutaqin.jpg" class="img-fluid img-thumbnail rounded" alt="...">
        </div>
        <div class="col-md-10">
          <div class="card-body">
            <h5 class="card-title">Zaenul Mutaqin (Wakil Wali Kota Bogor)</h5>  
            <p class="card-text"><small class="text-muted">25% / 2500 Suara</small></p>
            <div class="progress" style="height: 2rem">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
          </div>
        </div>
      </div>  

      <div class="row g-0 my-3">
        <div class="col-md-2">
          <img src="/img/Ilustrasi.jpg" class="img-fluid img-thumbnail rounded" alt="...">
        </div>
        <div class="col-md-10">
          <div class="card-body">
            <h5 class="card-title">Calon Lainnya (Wakil Wali Kota Bogor)</h5>  
            <p class="card-text"><small class="text-muted">25% / 2500 Suara</small></p>
            <div class="progress" style="height: 2rem">
              <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
            </div>
          </div>
        </div>
      </div>  

      <hr>
      <h5 class="float-end">85.000 Suara</h5>
    </div>
  </div>  

</div>

</div>  

@endsection