@extends('layouts.main')

@section('child')

    {{-- Content --}}
    <div class="col-md-10 mx-auto my-5">
        
        <h6 class="text-muted mb-5">{{ $title }}</h6>

        {{-- @include('partials.addPolling') --}}
        {{-- @include('partials/Poll Form.pollForm') --}}
        {{-- Polling Unit header --}}

        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

        <div class="card">
            <div class="card-header">
                <h6 class="mb-0">Polling Unit</h6>
            </div>
            <div class="card-body">
                <div class="row my-2 d-flex align-items-center">
                    {{-- Thumbnail Poll Unit --}}
                    <div class="preview col-md-4 d-flex justify-content-center my-3">        
                        <img src="img/default1.jpg" id="file-ip-1-preview" class="img-thumbnail img_thumb" style="max-width: 260px; max-height: 274px;">
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
            </div>
            <div class="card-footer">
                <div class="d-grid d-md-block gap-2 float-end">
                    <button type="button" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save Polling Unit</button>
                    <a href="/admin" class="btn btn-secondary btn-sm" type="button"><i class="fas fa-reply"></i> Back</a>
                </div>
            </div>
        </div>

    </div>

<script src="js/pollForm.js"></script>
{{-- cdn add form --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@endsection