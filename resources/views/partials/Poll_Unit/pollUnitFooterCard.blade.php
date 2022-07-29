<div class="row d-flex align-items-center flex-row-reverse">
    <div class="col-md-4">
        <h5 class="float-md-end mb-3 mb-md-0">{{$total_user_vote}} Suara</h5>
    </div>
  <div class="col-md-8">
    <div class="d-grid d-md-flex gap-2">
      <a href="/editPolling" class="btn btn-success btn-sm mt-1" type="button"><i class="fas fa-pen"></i> Edit</a>
      <a href="/result" class="btn btn-primary btn-sm text-white mt-1" type="button"><i class="fa-solid fa-chart-bar"></i> Result</a>
      <button onClick="confirm( 'Apakah anda yakin ingin menutup polling ini' )" class="btn btn-warning btn-sm text-white mt-1" type="button"><i class="fa-solid fa-xmark"></i> Close</button>
      <button class="btn btn-danger btn-sm text-white mt-1" type="button"><i class="fa-solid fa-trash"></i> Delet</button>
      <a href="/admin" class="btn btn-secondary btn-sm mt-1" type="button"><i class="fas fa-reply"></i> Back</a>
    </div>
  </div>
</div>
