
@extends('layouts.frontLayout.main')

@section('child')

<div class="container">

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">
    
    @include('partials.editPollForm')

</div>

</div> 

@endsection