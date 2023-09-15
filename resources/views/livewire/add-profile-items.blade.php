{{-- Be like water. --}}

@section('child')

<link rel="stylesheet" href="{{ asset('css/uploadGalleryBox.css') }}">

<div class="container">

{{-- Content --}}
<div class="col-md-10 mx-auto my-3 my-md-5">
    <h6 class="text-muted mb-3 mb-md-5">{{ $title }}</h6>

    <div class="card">
        <div class="card-header"><small class="text-secondary fst-italic"><i class="fas fa-times-circle"></i> Basic Profile Items</small>
        </div>
        <div class="card-body">
          <div class="row d-flex align-items-center">
            <div class="col-md-4 d-flex justify-content-center mb-3 mb-md-0">
              <img src="{{ asset('storage/'. $data_item->vote_image )}}" class="img-thumbnail img_thumb_2">
            </div>
            <div class="col-md-8">
              {{-- Input Name & title --}}
              <div class="row">
                <h4>{{ $data_item->vote_name }}</h4>
                <p>~ {{ $data_item->vote_position }}</p>
              </div>
              <hr>

              <p class="text-justify">{!! $data_item->description !!}</p>
            </div>
          </div>
        </div>
      </div>


 @livewire('store-profile-items',['data_item' => $data_item])
</div>

    <script type="text/javascript" >
         jQuery(document).ready(function() {
            ImgUpload();
        });

        function ImgUpload(){

            // var imgArray = [];

            // $('.upload__inputfile').each(function(){
            //     $(this).on('change', function(e) {

            //         var maxLength = $(this).attr('data-max_length');
            //         // console.log(maxLength);

            //         var files = e.target.files;
            //         var filesArr = Array.prototype.slice.call(files);
            //         filesArr.forEach(function(f, index) {

            //             if (!f.type.match('image.*')) {
            //                 // console.log('ok');
            //                 return;
            //             }

            //             if (imgArray.length > maxLength) {
            //                 return false

            //             } else {

            //                 var len = 0;
            //                 for (var i = 0; i < imgArray.length; i++) {
            //                     if (imgArray[i] !== undefined) {
            //                         len++;
            //                     }
            //                 }
            //                 if (len > maxLength) {
            //                     console.log('besar');
            //                     return false;
            //                 } else {
            //                     console.log('kecil');
            //                     imgArray.push(f);

            //                     // var reader = new FileReader();
            //                     // reader.onload = function(e) {
            //                     //     var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
            //                     //     imgWrap.append(html);
            //                     //     iterator++;
            //                     // }
            //                     // reader.readAsDataURL(f);
            //                 }

            //             }

            //         });

            //     });

            // });

            $('body').on('click', ".upload__img-close", function(e) {
                var file = $(this).parent().data("file");
                // for (var i = 0; i < imgArray.length; i++) {
                //     if (imgArray[i].name === file) {
                //         imgArray.splice(i, 1);
                //         break;
                //     }
                // }
                // $(this).parent().parent().remove();
                // @this.cl('gallery', file, successCallback)
            });

        }


    </script>


</div>
@endsection
