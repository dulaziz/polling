{{-- Polling Unit header --}}
<div class="row my-2 d-flex align-items-center">
    {{-- Thumbnail Poll Unit --}}
    <div class="preview col-md-4 d-flex justify-content-center my-3">        
        <img src="img/default1.jpg" id="file-ip-1-preview" class="img-thumbnail" style="max-width: 260px; max-height: 274px;">
    </div>
    <div class="col-md-8 mb-2">
      {{-- File name thumbnail --}}
      <input class="form-control mb-3" type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);">
      {{-- Input title --}}
      <input type="text" class="form-control mb-3" placeholder="Title" aria-label="Title">
      {{-- Input description --}}
      <textarea class="form-control mb-3" placeholder="Description" id="floatingTextarea2" style="height: 100px"></textarea>
      {{-- Input date --}}
      <div class="row">
        <div class="col-md-6">
          <div class="form-floating">
            <input type="date" class="form-control" id="floatingInput" placeholder="Text">
            <label for="floatingInput title-text">Star from</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="date" class="form-control" id="floatingInput" placeholder="Text">
            <label for="floatingInput title-text">Expired</label>
          </div>
        </div>
      </div>
    </div> 
  </div>