{{-- Polling Unit header --}}
<div class="row my-2 d-flex align-items-center">
    {{-- Thumbnail Poll Unit --}}
    <div class="preview col-md-4 d-flex justify-content-center my-3">
        <img src="img/default1.jpg" id="file-ip-1-preview" class="img-thumbnail" style="max-width: 260px; max-height: 274px;">
    </div>
    <div class="col-md-8 mb-2">
      {{-- File name thumbnail --}}
      <input class="form-control mb-3" type="file" id="file-ip-1" name="thumbnail" value="{{ old('thumbnail') }}" accept="image/*" onchange="showPreview(event);">
        {{-- Response notif form input thumbnail --}}
        @error('thumbnail')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
      {{-- Input title --}}
      <input type="text" class="form-control mb-3" placeholder="Title*" aria-label="Title" name="title" value="{{ old('title') }}">
        {{-- Response notif form input title --}}
        @error('title')
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @enderror
      {{-- Input description --}}
      <textarea class="form-control mb-3" placeholder="Description" id="floatingTextarea2" style="height: 100px" name="description" value="{{ old('description') }}">{{ old('description') }}</textarea>
      {{-- Input date --}}
      <div class="row">
        <div class="col-md-6">
          <div class="form-floating">
            <input type="date" class="form-control" id="floatingInput" placeholder="Text" name="date_start" value="{{ old('date_start') }}">
            <label for="floatingInput title-text">Start from*</label>
             {{-- Response notif form input date start --}}
            @error('date_start')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-floating">
            <input type="date" class="form-control" id="floatingInput" placeholder="Text" name="date_end" value="{{ old('date_end') }}">
            <label for="floatingInput title-text">Expired*</label>
             {{-- Response notif form input date expired --}}
            @error('date_end')
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @enderror
          </div>
        </div>
      </div>
    </div>
  </div>
