<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="card my-5">
        <form wire:submit.prevent="storeProfile" method="post" enctype="multipart/form-data">
            @csrf

            <div class="card-header"><small class="text-success fst-italic"><i class="fas fa-check-circle"></i> Premium Profile Items</small></div>
            <div class="card-body">
            <div class="row d-flex align-items-center">
                <h5>More Profile</h5>
                <div class=" col-md-3 d-flex justify-content-center mb-5">
                    @if ($icon_profile)
                            <img src="{{ $icon_profile->temporaryUrl(); }}" class="img-thumbnail img_thumb_2">
                        @else
                            <img src="{{asset('img/default2.jpg')}}" class="img-thumbnail img_thumb_2">
                    @endif
                </div>
                <div class="col-md-9 mb-2">
                    <input class="form-control mb-3" type="file" wire:model="icon_profile">
                    @error('icon_profile')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                    <input type="text" class="form-control mb-3" placeholder="Title" aria-label="Title" wire:model="title_profile">
                        @error('title_profile')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @enderror
                    <div class="form-floating">
                        <textarea class="form-control mb-3" placeholder="Description" id="floatingTextarea2" style="height: 100px" wire:model="desc_profile"></textarea>
                        <label for="floatingTextarea2">Description</label>
                        @error('desc_profile')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            {{-- Gallery upload --}}
            <h5>Gallery</h5>
            <div class="upload__box">
                <div class="upload__btn-box">
                    <label class="upload__btn">
                        <p>Upload images</p>
                        <input type="file" data-max_length="20" class="upload__inputfile" wire:model="gallery">
                        @error('gallery.*')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @enderror
                    </label>
                </div>
                <div class="upload__img-wrap">
                    @if($gallery)
                        @foreach ($gallery as $g)
                        {{-- <img src="{{ $g->temporaryUrl(); }}" alt="" class="img-thumbnail img_thumb_2"> --}}
                        <div class='upload__img-box'>
                                <div style='background-image: url("{{ $g->temporaryUrl(); }}")' class='img-bg' data-file='{{ $g->temporaryUrl(); }}'><div class='upload__img-close' wire:click="removeUpload('gallery','$g->temporaryUrl()')"></div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
            <div class="card-footer">
                <div class="d-grid d-md-block gap-2">
                    <button type="submit" class="btn btn-success float-end" wire:click="$emitUp('profileAdded')"><i class="fas fa-save"></i> Save Profile Items</button>
                </div>
            </div>
        </form>
    </div>

    {{-- Looping Data Profile --}}
    <div class="my-5">
        {{-- <h4></h4> --}}
        <div class="row">
            <div class="col-md-12 d-flex flex-column">
                <div class="col-md-12">
                    <h5>Profile</h5>
                    <div class="table-responsive">
                        <table class="table table-sm" style="width: 900px;">
                            <thead class="fw-normal">
                            <tr>
                                <th scope="col" style="width: 5%;" class="fw-normal">No</th>
                                <th scope="col" style="width: 20%;" class="fw-normal">Icon</th>
                                <th scope="col" style="width: 20%;" class="fw-normal">More Profile Title</th>
                                <th scope="col" style="width: 55%;" class="fw-normal">Desc</th>
                                <th scope="col" style="width: 20%;" class="fw-normal">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i=1;
                                @endphp
                                @foreach ($data_profile as $p)
                                <tr>
                                    <th scope="row">{{ $i++  }}</th>
                                    <td>
                                        <img src="{{asset('storage/'. $p->icon)}}" alt="" style="width:45px; height:45px;">
                                    </td>
                                    <td>{{ $p->title }}</td>
                                    <td>{{$p->description}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <h5>Gallery</h5>
                    <div class="upload__img-wrap">
                        @foreach ($data_profile as $p)
                            @foreach (json_decode($p->gallery) as $g)
                                <img src="{{ asset('storage/' .$g)  }}" alt="" style="width: 100px; width:100px; margin-right:25px;margin-top:25px;">
                            @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


