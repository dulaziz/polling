<div>
    {{-- The Master doesn't talk, he acts. --}}

    <form wire:submit.prevent="storeItems" method="post" id="image-form" enctype="multipart/form-data">
        @csrf

          <div class="card">
              <div class="card-header"><small class="text-secondary fst-italic"><i class="fas fa-times-circle"></i> Basic Profile Items</small>
              </div>
              <div class="card-body">
                  <div class="row d-flex align-items-center">
                    @if ($vote_image)
                        {{-- Thumbnail Poll Unit --}}
                        <div class="preview col-md-4 d-flex justify-content-center">
                            <img src="{{ $vote_image->temporaryUrl() }}" class="img-thumbnail" style="max-width: 260px; max-height: 274px;">
                        </div>
                    @else
                        {{-- Thumbnail Poll Unit --}}
                        <div class="preview col-md-4 d-flex justify-content-center">
                            <img src="{{ asset('img/default1.jpg') }}" id="file-ip-1-preview" class="img-thumbnail" style="max-width: 260px; max-height: 274px;">
                        </div>
                    @endif
                  <div class="col-md-8">
                      {{-- File name thumbnail --}}
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
                              <input type="text" class="form-control mb-3" placeholder="Name" aria-label="Name" wire:model="vote_name">
                               {{-- Response notif form input short desc --}}
                                @error('vote_name')
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @enderror
                          </div>
                          <div class="col-md-6">
                              <input type="text" class="form-control mb-3" placeholder="Position" aria-label="Position">
                          </div>
                      </div>
                      {{-- Input description --}}
                      <textarea class="form-control mb-3" placeholder="Bio" id="floatingTextarea2" style="height: 100px" wire:model="short_desc"></textarea>
                       {{-- Response notif form input short desc --}}
                        @error('short_desc')
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @enderror
                  </div>
                  </div>
              </div>
              <div class="card-footer">
                  <div class="d-grid d-md-block gap-2">
                      <button type="submit" class="btn btn-success float-end"><i class="fas fa-save"></i> Save Profile Items</button>
                  </div>
              </div>
          </div>

    </form>

    {{-- <hr> --}}

    <div class="my-5">

        @if ($message = Session::get('success'))
            {{-- Alert After Create Item --}}
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ $message }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Looping data items --}}
        <h6>Poll Items in "{{$data_unit->title}}"</h6>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Position</th>
                    <th scope="col">Profile Items</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($data_items as $item)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{$item->vote_name}}</td>
                            <td>{{$item->short_desc}}</td>

                            @if ($item->voteProfile)
                                <td><small class="text-success fst-italic"><i class="fas fa-check-circle"></i> Premium Profile Items</small></td>
                                <td>
                                    <a href="/moreProfile" class="btn btn-info btn-sm text-light"><i class="fas fa-eye"></i> View</a>
                                    <a href="/moreProfile/{{ $item->id }} " class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Edit</a>
                                    <a href="/moreProfile/{{ $item->id }} " class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
                                </td>
                            @else
                                <td><small class="text-secondary fst-italic"><i class="fas fa-times-circle"></i> Basic Profile Items </small></td>
                                <td>
                                    <a href="/admin/moreProfile/{{ $item->id }} " class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Add</a>
                                    <a href="/moreProfile/{{ $item->id }} " class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
                                </td>
                            @endif

                            {{-- @foreach ($item->voteProfile as $p)
                                {{$p}}
                            @endforeach --}}

                                {{-- {{$data_items->voteProfile->id}} --}}


                                {{-- @if ($item->voteProfile->vote_item_id === 1)
                                    <td>
                                        <a href="/moreProfile" class="btn btn-info btn-sm text-light"><i class="fas fa-eye"></i> View more profile</a>
                                    </td>
                                @else
                                    <td>
                                        <a href="/moreProfile/{{ $item->id }} " class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Add more profile</a>
                                    </td>
                                @endif --}}

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
