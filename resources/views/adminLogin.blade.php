<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Polling Radar Bogor | {{ $title }}</title>
  </head>
  <body class="bg-light">
    
    {{-- Content --}}
    <div class="col-md-10 mx-auto d-flex align-items-center" style="height: 100vh;">

        <div class="mx-auto">
        <div class="mb-3 d-flex justify-content-center">
            <img src="img/LOGO-RADAR-150x111.png" alt="" class="img-fluid rounded">
        </div>
        <div class="card shadow-sm" style="width: 19rem;">
            <div class="card-body">
              <h6 class="card-title text-muted mb-4">Login</h6>
              <form>
                <div class="mb-3">
                  <input type="text" class="form-control bg-light" placeholder="Username" id="username" aria-describedby="username">
                  {{-- <div id="emailHelp" class="form-text text-danger">We'll never share your email with anyone else.</div> --}}
                </div>
                <div class="mb-3">
                  
                  <input type="password" class="form-control bg-light" placeholder="Password" id="exampleInputPassword1">
                </div>
                <hr>
                <div class="d-grid">
                    <button class="btn btn-outline-primary btn-sm" type="button">Login</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        
    
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>