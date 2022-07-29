@include('partials/Login.loginHeader')

{{-- Content --}}
<div class="col-md-10 mx-auto d-flex align-items-center" style="height: 100vh;">

  <div class="mx-auto">
    <div class="mb-3 d-flex justify-content-center">
        <img src="{{ asset('img/LOGO-RADAR-150x111.png')}}" alt="" class="img-fluid rounded">
    </div>
    @include('partials/Login.loginForm')
  </div>

</div>

@include('partials/Login.loginFooter')
