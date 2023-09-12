{{-- ----------- EDIT POLL ITEMS ----------- --}}

<div>
    {{-- Do your work, then step back. --}}

    <div class="card">
        <form method="post" wire:submit.prevent="update">
            @csrf
            <input type="hidden" wire:model="postId">
            <div class="card-header d-flex justify-content-between align-items-center">
                <small class="text-secondary"><i class="fas fa-pen"></i> Edit Profile
                    <strong>{{ $data_item->vote_name }}</strong></small>

                <div class="">
                    <a href="/admin/addItems/{{ $data_item->vote_unit_id }}" class="btn btn-secondary btn-sm"
                        type="button"><i class="fas fa-reply"></i> Back</a>
                </div>
            </div>
            <div class="card-body">
                <div class="row d-flex align-items-center mb-3">
                    <div class="col-md-4 d-flex justify-content-center mb-md-0">
                        <img src="{{ asset('storage/' . $data_item->vote_image) }}" class="img-thumbnail img_thumb_2">
                    </div>
                    <div class="col-md-8">
                        {{-- File name thumbnail --}}
                        {{-- <input type="hidden" wire:model="vote_image_old" value="{{ $vote_image_input }}" > --}}
                        <input class="form-control mb-3" type="file" id="file-ip-1" accept="image/*"
                            onchange="showPreview(event);" name="vote_image" wire:model="vote_image">
                        {{-- Response notif form input vote image --}}
                        @error('vote_image')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @enderror
                        {{-- Input Name & title --}}
                        <div class="">
                            <input type="text" class="form-control mb-3" aria-label="Name"
                                wire:model.defer="vote_name">
                            {{-- Response notif form input short desc --}}
                            @error('vote_name')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @enderror
                        </div>
                        <div class="">
                            <input type="text" class="form-control mb-3" aria-label="Position"
                                value="{{ $vote_position }}" wire:model="vote_position">
                            {{-- Response notif form input short desc --}}
                            @error('vote_position')
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @enderror
                        </div>
                        {{-- Input description --}}
                        {{-- <textarea class="form-control mb-3" placeholder="{{ $data_item->short_desc }}" id="floatingTextarea2" rows="7""
                            value="{{ $short_desc_input_old }}" wire:model="short_desc">{{ $data_item->short_desc }}</textarea> --}}
                        {{-- Response notif form input short desc --}}
                        {{-- @error('short_desc')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @enderror --}}
                    </div>
                    

                </div>
                <textarea class="form-control mb-3 edit_summer_dsc" placeholder="Description" id="description"
                style="height: 100px" name="description"></textarea>

                <div class="d-flex gap-2 justify-content-end mt-3">
                    <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save More
                        Profile</button>
                </div>
        </form>


        {{-- Looping Data Profile --}}
        {{-- @if (isset($data_profile[0]))
            <h6 class="mb-3">More Profile: <span class="badge bg-success">{{ $data_item->vote_name }}</span></h6>
            @foreach ($data_profile as $profile)
                <form action="/admin/update-more-profile" method="post">
                    <div class="row d-flex align-items-center mb-5">
                        @csrf
                        <hr>
                        <input type="hidden" name="profileId" value="{{ $profile->id }}">
                        <div class="col-md-4 d-flex justify-content-center mb-3 mb-md-0">
                            <img src="{{ asset('storage/' . $profile->icon) }}" class="img-thumbnail img_thumb_2">
                        </div>
                        <div class="col-md-8">
                            <input type="text" name="title" id="title" class="form-control mb-3" value="{{ $profile->title }}"
                                aria-label="Title">
                            <textarea class="form-control mb-3 edit_summer_dsc" placeholder="Description" id="description"
                                style="height: 100px" name="description">{{ $profile->description }}</textarea>
                        </div>
                        <div class="d-flex gap-2 mt-3 justify-content-end">
                            <button type="submit" class="btn btn-success btn-sm"><i
                                    class="fa-solid fa-floppy-disk"></i></button>
                            <a href="/admin/delete-more-profile?profile_id={{ $profile->id }}" class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure?')"><i
                                    class="fas fa-trash"></i></a>
                        </div>

                    </div>
                </form>
            @endforeach
            <div class="my-5">
                <h6 class="mb-3">Gallery: <span class="badge bg-success">{{ $data_item->vote_name }}</span></h6>
                @foreach ($data_profile as $profile)
                    @foreach (json_decode($profile->gallery) as $g)
                        <img src="{{ asset('storage/' . $g) }}" class="img-fluid img_gallery" alt="...">
                    @endforeach
                @endforeach
            </div>
        @endif --}}


    </div>

</div>

<script src="/js/summernote.js"></script>
