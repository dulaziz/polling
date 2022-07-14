{{-- Card sub title --}}
<div class="form-floating mb-3">
    <input type="text" class="form-control" id="floatingInput" placeholder="Text" name="subtitle" value="{{ old('subtitle') }}">
    <label for="floatingInput">Sub Title*</label>
     {{-- Response notif form input title --}}
     @error('subtitle')
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>{{ $message }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @enderror
  </div>
