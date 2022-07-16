{{-- Looping data polling --}}
@foreach ($polling_item as $pi)


{{-- Vote Item --}}
<div class="row g-0 my-3">
    <div class="col-md-2">
      {{-- Vote Thumbnail --}}
      <img src="{{ asset('storage/'.$pi->vote_image)}}" class="img-fluid img-thumbnail rounded" alt="...">
    </div>
    <div class="col-md-10 d-flex align-items-center">
      <div class="card-body">
        {{-- Vote Name --}}
        <h5 class="card-title fw-bold">{{$pi->vote_name}}</h5>
        <p class="card-text"><small class="text-muted">Wakil Wali Kota Bogor</small></p>
        {{-- Vote Button --}}
        <div class="d-grid col-md-2">
            <button type="button" class="btn btn-primary btn-sm">VOTE</button>
        </div>
    </div>
</div>
</div>

</div>


@endforeach

<script type="text/javascript">
    // $(function(){
    //     alert("ok");
    //   $.ajax({
    //     url:"getPollingUnit",
    //     type: "GET",
    //     dataType: "JSON",
    //     success: function(data){
    //       var nomor = 0;
    //       for(i=0; i<data.length; i++){
    //         nomor++;
    //         $('#result').append('<tr><td>'+nomor+'</td><td>'+data[i].vote_name+'</td><td>'+data[i].short_desc+'</td></tr>');
    //       }
    //     },
    //     error: function(data){
    //      alert("Terjadi Kesalahan!");
    //    }
    //  });
    // });

  </script>
