<link rel="stylesheet" href="{{ asset('css/global.css') }}">

{{-- Looping Data Vote Unit with vote item --}}
@foreach ($vote_unit_with_items as $vote_unit_item)

<form action="{{ '/editPolling/' . $vote_unit_item->id }}" method="post" enctype="multipart/form-data">
    @csrf

{{-- Polling Unit --}}
  <div class="row my-2 d-flex align-items-center">

    {{-- Response --}}
    @if ($message = Session::get('success'))
    {{-- Allert after Vote --}}
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    {{-- End Response --}}

    {{-- Thumbnail Poll Unit --}}
    <div class="preview col-md-4 d-flex justify-content-center my-3">
        <img src="{{ asset('storage/' . $vote_unit_item->thumbnail  )   }}" id="file-ip-1-preview" class="img-thumbnail" style="max-width: 260px; max-height: 274px;">
    </div>
    <div class="col-md-8 mb-2">
      {{-- File name thumbnail --}}
      <input class="form-control mb-3" type="hidden" value="{{ $vote_unit_item->thumbnail }}" name="thumbnail_old">
      <input class="form-control mb-3" type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);" name="thumbnail">
      {{-- Input title --}}
      <input type="text" class="form-control mb-3" placeholder="Title" aria-label="Title" name="title" value="{{ $vote_unit_item->title  }}">
      {{-- Input description --}}
      <textarea class="form-control mb-3" placeholder="Description" id="floatingTextarea2" style="height: 100px" name="description" value="{{ $vote_unit_item->description }}" >{{ $vote_unit_item->description }}</textarea>
      {{-- Input date --}}
      <div class="row">

          @php
            $epoch_start = $vote_unit_item->date_start;
            $dt = new DateTime("@$epoch_start");  // convert UNIX timestamp to PHP DateTime
            $date_start = $dt->format('d/m/Y');

            $epoch_end = $vote_unit_item->date_end;
            $dt = new DateTime("@$epoch_end");  // convert UNIX timestamp to PHP DateTime
            $date_end = $dt->format('d/m/Y');

            // $date = new DateTime('07/09/2022'); // format: MM/DD/YYYY
            // echo $date->format('U');

            //    echo time();

            $times = round(microtime(true));
            $ts = new DateTime("@$times");
            $today = $ts->format('d-m-Y');

        @endphp

        <div class="col-md-6">
          <div class="form-floating">
            <input class="form-control-edit" type="hidden" name="date_start_old" id="floatingInput" value="{{ $date_start }}">
            <input class="form-control-edit" type="text" name="date_start" id="floatingInput" placeholder="{{$date_start}}" onfocus="(this.type='date')">
            <label for="floatingInput title-text" class="label-form-control-input">Start Date</label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-floating">
            <input class="form-control-edit" type="hidden" name="date_end_old" id="floatingInput" value="{{ $date_end }}">
            <input type="text" class="form-control-edit" id="floatingInput" placeholder="{{ $date_end }}" name="date_end" onfocus="(this.type='date')">
            <label for="floatingInput title-text" class="label-form-control-input">Expired</label>
          </div>
        </div>
      </div>
    </div>
  </div>


  <hr>

  {{-- Polling item --}}
  <div class="card border-light rounded-3 shadow-sm">
      <div class="card-body">
          {{-- Card sub title --}}
          <div class="form-floating mb-3">
              <input type="text" class="form-control" id="floatingInput" placeholder="Text" value="{{ $vote_unit_item->subtitle }}" name="subtitle">
              <label for="floatingInput">Sub Title</label>
            </div>

    <hr>
    {{-- Poll Item form --}}
    <div class="row d-flex align-items-center mb-3">
        <div class="col-md-3 text-center text-muted">
        <h6>Polling Items</h6>
        </div>
        <div class="col-md-9 d-grid">
        <button type="button" class="btn btn-outline-primary add_item_tambah"><i class="fa-solid fa-plus"></i> Add Poll Items</button>
        </div>
    </div>

    {{-- Looping data vote items di dalam data vote units --}}
    @foreach ($vote_unit_item->vote_items as $item)


        <div id="form_item_tambah">
            <div class="row my-2 d-flex align-items-center">
                <div class="preview col-md-3 d-flex justify-content-center my-3">
                    <img src="{{ asset('storage/' . $item->vote_image ) }}" id="file-ip-2-preview" class="img-thumbnail" style="max-width: 160px; max-height: 174px;">
                </div>
                <div class="col-md-9 mb-2">
                {{-- <label for="file-ip-1" class="form-label">Default file input example</label> --}}
                <input class="form-control mb-3" type="hidden" name="unit_id[]" value="{{ $item->id }}">
                <input class="form-control mb-3" type="hidden" name="vote_image_old[]" value="{{ $item->vote_image }}">
                <input class="form-control mb-3" type="file" id="file-ip-2" accept="image/*" onchange="showPreview2(event);" name="vote_image[]">
                <input type="text" class="form-control mb-3" placeholder="{{ $item->vote_name  }}" aria-label="Name" name="vote_name[]" value="{{ $item->vote_name }}">
                <input type="text" class="form-control mb-3" placeholder="{{ $item->short_desc  }}" aria-label="Short desc" name="short_desc[]" value="{{ $item->short_desc  }}">
                <button type="button" class="btn btn-danger btn-sm remove_item_tambah"><i class="fa-solid fa-trash"></i> Delete</button>
                <button type="button" class="btn btn-primary btn-sm"><i class="fa-solid fa-pen"></i> Add Profile</button>
            </div>
        </div>
</div>
    @endforeach

@endforeach
    <hr>

  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-success btn-sm" type="submit"><i class="fa-solid fa-floppy-disk"></i> Save</button>
    <a href="/admin" class="btn btn-secondary btn-sm" type="button"><i class="fas fa-reply"></i> Back</a>
  </div>

</form>
</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

// Fucntion merubah file dari input thumbnail
$('#input-file-thumbnail').change(function(e) {
  var fileName = e.target.files[0].name;
  $("#file-thumbnail").val(fileName);

  var reader = new FileReader();
  reader.onload = function(e) {
    // get loaded data and render thumbnail.
    document.getElementById("preview-thumbnail").src = e.target.result;
  };
  // read the image file as a data URL.
  reader.readAsDataURL(this.files[0]);
});


// Thumbnail Preview
function showPreview(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-1-preview");
    preview.src = src;
  }
}
// Thumbnail poll items preview
function showPreview2(event){
  if(event.target.files.length > 0){
    var src = URL.createObjectURL(event.target.files[0]);
    var preview = document.getElementById("file-ip-2-preview");
    preview.src = src;
  }
}

// Add poll item form
$(document).ready(function() {
    $(".add_item_tambah").click(function(e) {
      e.preventDefault();
      $("#form_item_tambah").prepend(`<div class="row my-2 d-flex align-items-center">
        <div class="preview col-md-3 d-flex justify-content-center mb-3">
            <img src="img/default2.jpg" id="file-ip-2-preview" class="img-thumbnail" style="max-width: 160px; max-height: 174px;">
        </div>
      <div class="col-md-9 mb-2">
        {{-- <label for="file-ip-1" class="form-label">Default file input example</label> --}}
        <input class="form-control mb-3" type="file" id="file-ip-2" accept="image/*" onchange="showPreview2(event);">

        <input type="text" class="form-control mb-3" placeholder="Name" aria-label="Name">
        <input type="text" class="form-control mb-3" placeholder="Short desc" aria-label="Short desc">
        <button type="button" class="btn btn-danger btn-sm remove_item_tambah"><i class="fa-solid fa-trash"></i> Delete</button>
      </div>
    </div> <hr>`);
    });

    $(document).on('click', '.remove_item_tambah', function(e) {
      e.preventDefault();
      let row_item = $(this).parent().parent();
      $(row_item).remove();
    });
  });

</script>
{{-- <script src="js/script.js"></script> --}}

