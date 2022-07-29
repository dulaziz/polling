{{-- Be like water. --}}

@section('child')
<div>

{{-- Content --}}
<div class="col-md-10 mx-auto my-5">
    <h6 class="text-muted mb-5">{{ $title }}</h6>

    <div class="card my-5">
        <div class="card-header"><small class="text-secondary fst-italic"><i class="fas fa-times-circle"></i> Basic Profile Items</small>
        </div>
        <div class="card-body">
          <div class="row d-flex align-items-center">
            <div class=" col-md-4 d-flex justify-content-center">
              <img src="{{ asset('storage/'. $data_item->vote_image )}}" class="img-thumbnail img_thumb_2">
            </div>
            <div class="col-md-8">
              {{-- Input Name & title --}}
              <div class="row">
                  <div class="col-md-6">
                      <input type="text" class="form-control mb-3" aria-label="Name" value="{{ $data_item->vote_name }}" readonly>
                  </div>
                  <div class="col-md-6">
                      <input type="text" class="form-control mb-3" aria-label="Position" value="{{ $data_item->short_desc }}" readonly>
                  </div>
              </div>
              {{-- Input description --}}
              <textarea class="form-control mb-3" placeholder="Bio" id="floatingTextarea2" style="height: 100px" value="{{ $data_item->short_desc }}" readonly>{{ $data_item->short_desc }}</textarea>
            </div>
          </div>
        </div>
      </div>


 @livewire('store-profile-items',['data_item' => $data_item])
</div>

{{-- <div class="my-5">
    <h4>Dedie A Rachim</h4>
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
            <tr>
                <th scope="row">1</th>
                <td>
                    <img src="{{asset('img/default2.jpg')}}" alt="" style="width:45px; height:45px;">
                </td>
                <td>History</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                <td>
                    <button type="button" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Edit</button>
                    <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>
                    <img src="{{asset('img/default2.jpg')}}" alt="" style="width:45px; height:45px;">
                </td>
                <td>Prestasi</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</td>
                <td>
                        <a href="/editMoreProfile" class="btn btn-primary btn-sm"><i class="fas fa-pen"></i> Edit</a>
                        <button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

</div> --}}

    <style>
        .upload__box {
            border: 1px solid lightgray;
            padding: 10px;
            border-radius: 5px;
        }

        .upload__btn p {
            margin: 0;
            cursor: pointer;
        }

        .upload__btn-box {
            display: inline-block;
            font-weight: 600;
            color: #00548F;
            text-align: center;
            min-width: 160px;
            padding: 5px;
            transition: all .3s ease;
            cursor: pointer;
            border: 1px solid;
            background-color: #fff;
            border-color: #00548F;
            border-radius: 5px;
            line-height: 26px;
            font-size: 14px;
        }

        .upload__btn-box:hover {
            background-color: #00548F;
            color: #fff;
            transition: all .3s ease;
        }

        input.upload__inputfile {
            width: .1px;
            height: .1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }

        .upload__img-box {
            width: 200px;
            padding: 10px 10px 0px 10px;
            /* margin-bottom: 12px; */
        }

        .upload__img-close {
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background-color: rgba(0, 0, 0, 0.5);
            position: absolute;
            top: 10px;
            right: 10px;
            text-align: center;
            line-height: 24px;
            z-index: 1;
            cursor: pointer;
        }

        .upload__img-close:after {
            content: '\2716';
            font-size: 14px;
            color: white;
        }

        .upload__img-wrap {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px;
        }

        .img-bg {
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            position: relative;
            padding-bottom: 100%;
        }

        @media only screen and (max-width: 480px) {
            .upload__btn-box {
                min-width: 100%;
            }

            .upload__img-wrap {
                justify-content: center;
            }
        }
    </style>

    {{-- <script type="text/javascript">
        jQuery(document).ready(function() {
            ImgUpload();
        });

        function ImgUpload() {
            var imgWrap = "";
            var imgArray = [];

            $('.upload__inputfile').each(function() {
                $(this).on('change', function(e) {
                    imgWrap = $(this).closest('.upload__box').find('.upload__img-wrap');
                    var maxLength = $(this).attr('data-max_length');

                    var files = e.target.files;
                    var filesArr = Array.prototype.slice.call(files);
                    var iterator = 0;
                    filesArr.forEach(function(f, index) {

                        if (!f.type.match('image.*')) {
                            return;
                        }

                        if (imgArray.length > maxLength) {
                            return false
                        } else {
                            var len = 0;
                            for (var i = 0; i < imgArray.length; i++) {
                                if (imgArray[i] !== undefined) {
                                    len++;
                                }
                            }
                            if (len > maxLength) {
                                return false;
                            } else {
                                imgArray.push(f);

                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    var html = "<div class='upload__img-box'><div style='background-image: url(" + e.target.result + ")' data-number='" + $(".upload__img-close").length + "' data-file='" + f.name + "' class='img-bg'><div class='upload__img-close'></div></div></div>";
                                    imgWrap.append(html);
                                    iterator++;
                                }
                                reader.readAsDataURL(f);
                            }
                        }
                    });
                });
            });

            $('body').on('click', ".upload__img-close", function(e) {
                var file = $(this).parent().data("file");
                for (var i = 0; i < imgArray.length; i++) {
                    if (imgArray[i].name === file) {
                        imgArray.splice(i, 1);
                        break;
                    }
                }
                $(this).parent().parent().remove();
            });
        }
    </script> --}}

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
