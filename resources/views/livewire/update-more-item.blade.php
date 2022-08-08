{{-- ---TABLE EDIT POLL ITEMS--- --}}

<div>
    {{-- Do your work, then step back. --}}
    <form method="post" wire:submit.prevent="updateProfile">
        @csrf
        {{-- Looping Data Profile --}}
        <div class="my-5">
         <h6 class="mb-3">More Profile: <span class="badge bg-success">{{$data_item->vote_name}}</span></h6>
         <div class="table-responsive">
             <table class="table table-sm align-middle" style="width: 896px;">
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
                         <th scope="row">{{ $i++ }}</th>
                         <td>
                             <img src="{{asset('storage/'. $p->icon)}}" alt="" style="width:45px; height:45px;">
                         </td>
                         <td>
                             <input type="text" class="form-control" placeholder="{{ $p->title }}" wire:model.defer="title_profiles">
                         </td>
                         <td>
                             <input type="text" class="form-control" placeholder="{{$p->description}}" wire:model.defer="description_profiles">
                         </td>
                         <td>
                             <div class="d-flex gap-2">
                                 <button type="button" class="btn btn-success btn-sm" wire:click="updateProfile({{ $p->id }})"><i class="fa-solid fa-floppy-disk"></i></button>
                                 <button type="button" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?') ? @this.deleteProfile({{$p->id}}) : false"><i class="fas fa-trash"></i></button>
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
        </div>
    </form>

</div>
