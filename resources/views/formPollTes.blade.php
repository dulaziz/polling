@extends('layouts.main')

@section('child')



{{-- Content --}}
<div class="col-md-10 mx-auto my-5">

    
        {{-- <div id="appendItem">
            <div id="RemoveData1">
                <img data-val="1" id="previewimage1" class="stockimagepreview" src="img/product_image.gif" style="cursor: pointer;height: 60px;width: 60px;position: relative;z-index: 10;">
                <input data-val="1" class="previewimageUploadFile" id="uploadFile1" name="return[1][product_image][]" style="position: absolute; margin: 0px auto; visibility: hidden;" accept="image/*" type="file">
            </div>
    
            <tr id="RemoveData2">
                <td>
                    <img data-val="2" id="previewimage2" class="stockimagepreview" src="img/product_image.gif" style="cursor: pointer;height: 60px;width: 60px;position: relative;z-index: 10;">
                    <input data-val="2" class="previewimageUploadFile" id="uploadFile2" name="return[2][product_image][]" style="position: absolute; margin: 0px auto; visibility: hidden;" accept="image/*" type="file">
                </td>
            </tr>
            <tr id="RemoveData3">
                <td>
                    <img data-val="3" id="previewimage3" class="stockimagepreview" src="img/product_image.gif" style="cursor: pointer;height: 60px;width: 60px;position: relative;z-index: 10;">
                    <input data-val="3" class="previewimageUploadFile" id="uploadFile3" name="return[3][product_image][]" style="position: absolute; margin: 0px auto; visibility: hidden;" accept="image/*" type="file">
                </td>
            </tr>
        </div> --}}

        <div class="control-group" id="fields">
            <div class="controls"> 

                <form role="form">
                    <div class="entry row d-flex align-items-center my-5">
                        <div class="col-md-3">
                            {{-- preview Image  --}}
                            <div id="appendItem">
                                <div id="RemoveData1">
                                    <img data-val="1" id="previewimage1" class="stockimagepreview" src="img/default2.jpg" style="cursor: pointer;max-width: 160px; max-height: 174px; position: relative;z-index: 10;">
                                    <input data-val="1" class="previewimageUploadFile" id="uploadFile1" name="return[1][product_image][]" style="position: absolute; margin: 0px auto; visibility: hidden;" accept="image/*" type="file">
                                </div>
                            </div>
                            {{-- <img src="img/default2.jpg" id="file-ip-2-preview" class="img-thumbnail preview" style="max-width: 160px; max-height: 174px;"> --}}
                        </div>
                        <div class="col-md-9">
                              <div class="row">
                                <div class="col-md-6">   
                                  <input type="text" class="form-control mb-3" placeholder="Name" aria-label="Name" id="theForm" method="post" acion="">
                                </div>
                                <div class="col-md-6">
                                  <input type="text" class="form-control mb-3" placeholder="Position" aria-label="Position">
                                </div>
                              </div>
                            
                              <div class="form-floating">
                                <textarea class="form-control mb-3" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Profile</label>
                              </div>
                              
                            <button class="btn btn-success btn-sm btn-add" type="button">Add <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </form>

            </div>
        </div>    
          

<script>

// Preview Image Uploads
$('#appendItem').delegate('.stockimagepreview','click',function(){
		var id = $(this).attr('data-val');
		$('#uploadFile'+id).click();

	});

	$('#appendItem').delegate('.previewimageUploadFile','change',function(){
		var id = $(this).attr('data-val');
		readURL(this,id);
	});

	function readURL(input,id) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function (e) {
				$('#previewimage'+id).attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
// end Preview

// add Dynamic Forms
    $(function()
{
    $(document).on('click', '.btn-add', function(e)
    {
        e.preventDefault();

        var controlForm = $('.controls form:first'),
            currentEntry = $(this).parents('.entry:first'),
            newEntry = $(currentEntry.clone()).appendTo(controlForm);

        newEntry.find('input').val('');
        controlForm.find('.entry:not(:last) .btn-add')
            .removeClass('btn-add').addClass('btn-remove')
            .removeClass('btn-success').addClass('btn-danger')
            .html('Remove <i class="fas fa-trash"></i>');
    }).on('click', '.btn-remove', function(e)
    {
		$(this).parents('.entry:first').remove();

		e.preventDefault();
		return false;
	});
});

</script>

</div>



@endsection