@section('child')

<link rel="stylesheet" href="{{ asset('css/uploadGalleryBox.css') }}">

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

  @livewire('store-edit-profile-items', ['data_item' => $data_item,'data_profile' => $data_profile])

    </div>
  </div>

</div>
<script src="js/pollForm.js"></script>
{{-- cdn add form --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

@endsection