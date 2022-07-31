@extends('layouts.main')

@section('child')

    {{-- Content --}}
    <div class="col-md-10 mx-auto my-5">

        <h6 class="text-muted mb-5">{{ $title }}</h6>

            {{-- Response --}}
                @if ($message = Session::get('success'))
                {{-- Allert after Vote --}}
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            {{-- End Response --}}

        <div class="card">
            <form action="{{ route('admin.add-unit') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-header">
                    <h6 class="mb-0">Polling Unit</h6>
                </div>
                <div class="card-body">
                    <div class="row my-2 d-flex align-items-center">
                        {{-- Thumbnail Poll Unit --}}
                        <div class="preview col-md-4 d-flex justify-content-center my-3">
                            <img src="{{ asset('img/default1.jpg') }}" id="file-ip-1-preview" class="img-thumbnail img_thumb" style="max-width: 260px; max-height: 274px;">
                        </div>
                        <div class="col-md-8 mb-2">
                        {{-- File name thumbnail --}}
                        <input class="form-control mb-3" type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);" name="thumbnail">
                        {{-- Response notif form input thumbnail --}}
                        @error('thumbnail')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @enderror
                        {{-- Input title --}}
                        <input type="text" class="form-control mb-3" placeholder="Title" aria-label="Title" name="title">
                        {{-- Response notif form input title --}}
                        @error('title')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @enderror
                        {{-- Input subtitle --}}
                        <input type="text" class="form-control mb-3" placeholder="Subtitle" aria-label="Subtitle" name="subtitle">
                         {{-- Response notif form input subtitle --}}
                        @error('subtitle')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @enderror
                         {{-- Response notif form input subtitle --}}
                        @error('name')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @enderror
                        {{-- Input description --}}
                        <textarea class="form-control mb-3" placeholder="Description" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
                         {{-- Response notif form input description --}}
                        @error('description')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @enderror
                        {{-- Input date --}}
                        <div class="row">
                            <div class="col-md-6 mb-3 mb-md-0">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="floatingInput" placeholder="Text" name="date_start">
                                    <label for="floatingInput title-text">Star from</label>
                                </div>
                                {{-- Response notif form input date start --}}
                                @error('date_start')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="floatingInput" placeholder="Text" name="date_end">
                                    <label for="floatingInput title-text">Expired</label>
                                </div>
                                {{-- Response notif form input date end --}}
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
                <div class="card-footer">
                    <div class="d-flex gap-2 float-end">
                        <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save Polling Unit</button>
                        <a href="/admin" class="btn btn-secondary btn-sm" type="button"><i class="fas fa-reply"></i> Back</a>
                    </div>
                </div>
            </form>
        </div>

    </div>

<script src="{{ asset('js/previewImg.js')}}"></script>
{{-- cdn add form --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@endsection

