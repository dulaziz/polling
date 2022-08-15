{{------------- EDIT POLL ITEMS -------------}}

<div>
    {{-- Do your work, then step back. --}}

    <div class="card">
        <form  method="post" wire:submit.prevent="update">
            @csrf
            <input type="hidden" wire:model="postId">
            <div class="card-header">
            <small class="text-secondary"><i class="fas fa-pen"></i> Edit Profile <strong>{{$data_item->vote_name}}</strong></small>
            </div>
            <div class="card-body">
            <div class="row d-flex align-items-center mb-5">
                <h5 class="text-muted">Basic Profile</h5>
                <div class="col-md-4 d-flex justify-content-center mb-3 mb-md-0">
                    <img src="{{ asset('storage/'. $data_item->vote_image )}}" class="img-thumbnail img_thumb_2">
                </div>
                <div class="col-md-8">
                {{-- File name thumbnail --}}
                {{-- <input type="hidden" wire:model="vote_image_old" value="{{ $vote_image_input }}" > --}}
                <input class="form-control mb-3" type="file" id="file-ip-1" accept="image/*" onchange="showPreview(event);" name="vote_image" wire:model="vote_image">
                {{-- Response notif form input vote image --}}
                @error('vote_image')
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @enderror
                {{-- Input Name & title --}}
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control mb-3"  aria-label="Name" placeholder="{{ $data_item->vote_name }}" value="{{$vote_name_input_old}}" wire:model.defer="vote_name">
                         {{-- Response notif form input short desc --}}
                          @error('vote_name')
                              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  <strong>{{ $message }}</strong>
                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                          @enderror
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control mb-3" placeholder="{{ $data_item->vote_position }}" aria-label="Position" value="{{$vote_position}}" wire:model="vote_position">
                        {{-- Response notif form input short desc --}}
                        @error('vote_position')
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>{{ $message }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @enderror
                    </div>
                </div>
                {{-- Input description --}}
                <textarea class="form-control mb-3" placeholder="{{ $data_item->short_desc }}" id="floatingTextarea2" style="height: 100px" value="{{$short_desc_input_old}}"  wire:model="short_desc">{{ $data_item->short_desc }}</textarea>
                 {{-- Response notif form input short desc --}}
                  @error('short_desc')
                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          <strong>{{ $message }}</strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                      </div>
                  @enderror
            </div>
            </div>

            {{-- <div class="row d-flex align-items-center mb-5">
                <h5 class="text-muted">More Profile</h5>
                <div class="col-md-4 d-flex justify-content-center mb-3 mb-md-0">
                <img src="{{ asset('img/default2.jpg')}}" class="img-thumbnail img_thumb_2">
                </div>
                <div class="col-md-8">
                <input class="form-control mb-3" type="file">
                <input type="text" class="form-control mb-3" placeholder="Title" aria-label="Title">
                    <textarea class="form-control mb-3" placeholder="Description" id="floatingTextarea2" style="height: 100px" name="description" value={{$data_item->voteProfile->description}}></textarea>
                </div>
            </div> --}}

            {{-- Looping Data Profile --}}
            {{-- <div class="my-5">
                <h6 class="mb-3">More Profile: <span class="badge bg-success">{{$data_item->vote_name}}</span></h6>
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
                                <td>
                                    <input type="text" class="form-control" placeholder="{{ $p->title }}">
                                </td>
                                <td>
                                    <input type="text" class="form-control" placeholder="{{$p->description}}">
                                </td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="my-5">
                    <h6 class="mb-3">Gallery: <span class="badge bg-success">{{$data_item->vote_name}}</span></h6>
                    @foreach ($data_profile as $p)
                        @foreach (json_decode($p->gallery) as $g)
                            <img src="{{ asset('storage/' .$g)  }}" class="img-fluid img_gallery" alt="...">
                        @endforeach
                    @endforeach
                </div>
            </div> --}}



            @livewire('update-more-item', ['data_item' => $data_item, 'data_profile' => $data_profile])

        </div>
        <div class="card-footer">
            <div class="d-flex gap-2 float-end">
                <button type="submit" class="btn btn-success btn-sm"><i class="fas fa-save"></i> Save More Profile</button>
                <a href="/admin/addItems/{{ $data_item->vote_unit_id }}" class="btn btn-secondary btn-sm" type="button"><i class="fas fa-reply"></i> Back</a>
            </div>
    </form>

</div>
