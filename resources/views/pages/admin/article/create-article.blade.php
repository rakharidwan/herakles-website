@extends('layouts.admin')
@section('styles')

<link rel="stylesheet" href="{{ url('lib/fancy-file-uploader/fancy_fileupload.css') }}">

<style>
  @media only screen and (max-width: 767px) {

.col{
  max-width: 50%
}

}

input[type="file"]{
  /* display: none; */
  /* background-color: #dc3545; */
  height: 270px;
  width: 245px;
  
}

.img-upload{
  color: white;
  height: 48px;
  width: 50px;
  border-radius: 200px;
  background-color: black;
  font-size: 20px;
  display: flex;
  position: absolute;
  justify-content: center;
  align-items: center;
}




</style>

@endsection

@section('content')
      <div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <!-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li> -->
                  <li class="breadcrumb-item" aria-current="page"><a href="{{url('/article')}}">Article</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Create</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Create Article</h4>
            </div>
          </div>
          <div class="row">
          <div class="col-lg-12">
            <div id="spinner">
              <div class="d-flex justify-content-center" >
                <div class="spinner-border" role="status" style="margin-top:20%">
                </div>
              </div>
            </div>
              <div class="card" id="bodyContent" style="border-radius:0px; display:none">
                <div class="card-body pd-lg-25">
                  <form action="">
                    <!-- invalid form : add class 'is-invalid' in form-control -->
                    <div class="row">
                      <div class="col-sm-6 col">
                        <div class="form-group">
                          <label for="formGroupExampleInput" class="d-block">Article Code: <span class="tx-danger">*</span></label>
                          <input type="text" name="article_code" style="border-radius:0px" class="form-control" required="">
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                      <div class="col-sm-6 col">
                        <div class="form-group">
                          <label for="formGroupExampleInput" class="d-block">Article Number: <span class="tx-danger">*</span></label>
                          <input type="text" name="article_number" style="border-radius:0px" class="form-control" required="">
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput" class="d-block">Article Name: <span class="tx-danger">*</span></label>
                      <input type="text" style="border-radius:0px" name="article_name" class="form-control" required="">
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput" class="d-block">Category: <span class="tx-danger">*</span></label>
                      <select style="border-radius:0px" name="category" class="form-control" required="">
                        <option value="">-- Select Category --</option>
                      </select>
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput" class="d-block">Price: <span class="tx-danger">*</span></label>
                      <input type="text" style="border-radius:0px" placeholder="( Rupiah )" id="priceInput" name="price" class="form-control" required="">
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="formGroupExampleInput" class="d-block">Article Description: <span class="tx-danger">*</span></label>
                      <textarea style="border-radius:0px" cols="1" rows="10" class="form-control" required=""></textarea>
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="row">
                      <div class="col-xl-12">
                        <label class="d-block">Image: <span class="tx-danger">*</span></label>
                      </div>
                      <div class="col-sm-3 col image-column mt-3">
                        <div class="card" style="height:270px;border-radius:0px">
                          <div class="d-flex justify-content-center">
                              <input type="file" class="op-0 image-input" onchange="previewImage()">
                              <img src="" class="img-preview">
                              <div class="op-2 img-upload" style="margin-top:110px">
                                <i class="fa fa-upload"></i>
                              </div>
                            </div>
                        </div>
                      </div>
                      
                      <div class="col-sm-3 col mt-3" id="AddImageButtonColumn">
                        <div class="card bd-0" style="height:270px">
                          <div class="d-flex justify-content-center">
                              <div class="mg-t-65 op-2 img-upload" style="cursor: pointer;margin-top:110px" id="addImageButton">
                                <i class="fa fa-plus"></i>
                              </div>
                            </div>
                        </div>
                      </div>
                    </div>
                    <br>
                    <div class="d-flex 200">
                      <div class="pd-r-15 300 flex-grow-1">
                        <div class="form-group">
                          <label for="formGroupExampleInput" class="d-block">Detail: <span class="tx-danger">*</span></label>
                          <input type="text" id="detail" name="detail[]" style="border-radius:0px" class="form-control " required="">
                          <div class="feedback" id="detailValidateMessage" style="color: #dc3545;"></div>
                        </div>
                      </div>
                      
                      <div class="400 pd-l-15">
                        <div class="form-group">
                          <label for="formGroupExampleInput" class="d-block">	&nbsp;</label>
                          <button type="button"  id="addDetail" class="btn btn-primary" style="height:38px; border-radius:0px"><i class="fa fa-plus"></i></button>
                        </div>
                      </div>
                    </div>
                    <div id="detailForms">

                    </div>
                    <div class="row">
                      <div class="col-sm-12 vol-input">
                        <div class="form-group">
                          <label for="formGroupExampleInput" class="d-block">Volume: <span class="tx-danger">*</span></label>
                          <select style="border-radius:0px" name="volume" class="form-control" required="">
                            <option value="">-- Select Volume --</option>
                            <option value="unchapter">Unchapter</option>
                            <option value="1">Volume 1</option>
                          </select>
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                      <div class="col-sm-6 col" id="chapterForm" style="display:none">
                        <div class="form-group">
                          <label for="formGroupExampleInput" class="d-block">&nbsp;</label>
                          <input type="text" pattern="\d*" maxlength="2" placeholder="chapter" id="chapter" name="chapter" style="border-radius:0px" class="form-control" required="">
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                    </div>
                    <div class="d-flex 200">
                      <div class="300 flex-fill pd-r-15">
                        <div class="form-group">
                          <label for="formGroupExampleInput" class="d-block">Size: <span class="tx-danger">*</span></label>
                          <input type="text"  maxlength="10" name="size" style="border-radius:0px" class="form-control" required="">
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                      <div class="400 flex-fill pd-r-15 pd-l-15">
                        <div class="form-group">
                          <label for="formGroupExampleInput" class="d-block">	&nbsp;</label>
                          <input type="text" pattern="\d*" maxlength="4" placeholder="Quantity" name="quantity" style="border-radius:0px" class="form-control" required="">
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                      <div class="500 pd-l-15">
                        <label for="formGroupExampleInput" class="d-block">	&nbsp;</label>
                        <button type="button" class="btn btn-primary" id="addQuantityForm" style="height:38px; border-radius:0px"><i class="fa fa-plus"></i></button>
                      </div>
                    </div>
                    <div id="quantityForms">

                    </div>
                    <button type="button" id="createArticleSubmitButton" class="btn btn-primary float-right mt-3" style="border-radius:0px">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('scripts')

<script src="{{ url('/lib/cleave.js/cleave.min.js')}}"></script>
<script src="{{ url('lib/cleave.js/addons/cleave-phone.us.js') }}"></script>
<script src="{{ url('lib/fancy-file-uploader/jquery.ui.widget.js') }}"></script>
<script src="{{ url('lib/fancy-file-uploader/jquery.fileupload.js') }}"></script>
<script src="{{ url('lib/fancy-file-uploader/jquery.iframe-transport.js') }}"></script>
<script src="{{ url('lib/fancy-file-uploader/jquery.fancy-fileupload.js') }}"></script>
<script>

  function previewImage(){

    const image = document.querySelector('.image-input');
 

  }

  $(function(){

    'use strict'
        var cleaveH = new Cleave('#priceInput', {
          delimiters: [' . ', ' . ', ' . '],
          blocks: [3, 3, 3],
          uppercase: true
      });

      $("input[name='chapter']").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9]/g, ''));
        });
      $("input[name='price']").on('input', function(e) {
            $(this).val($(this).val().replace(/[^0-9^. ]/g, ''));
        });

        $(function() {
	$('#thefiles').FancyFileUpload({
		params : {
			action : 'fileuploader',
      fileuploader : '1'
		},
		maxfilesize : 1000000
	    });
    });

    $('#addImageButton').on('click', function(){

      $('#AddImageButtonColumn').before(` <div class="col-sm-3 col image-column mt-3">
                        <div class="card" style="height:270px;border-radius:0px">
                          <div class="d-flex justify-content-center">
                              <input type="file" class="op-0">
                              <div class="op-2 img-upload" style="margin-top:110px">
                                <i class="fa fa-upload"></i>
                              </div>
                            </div>
                        </div>
                      </div>`)
      
      let imageColumn = $(".image-column").length;

      if (imageColumn >= 8) {
          $('#AddImageButtonColumn').remove()
      }

    })

    $('#addDetail').on('click', function(){
      
      let countDetailInput = $("input[name='detail[]']").length;
      if(countDetailInput == 7){
        $('#detailValidateMessage').html('has reached the maximum limit')
      }else{

        $("#detailForms").append(` <div class="d-flex 200 child">
          <div class="pd-r-15 300 flex-grow-1">
            <div class="form-group">
              <input type="text" name="detail[]" style="border-radius:0px" class="form-control" required="">
              <div class="invalid-feedback"></div>
              </div>
              </div>
              <div class="400 pd-l-15">
                <div class="form-group">  
                  <button type="button" class="btn btn-danger remove" style="height:38px; border-radius:0px"><i class="fa fa-minus"></i></button>
                  </div>
                  </div>
                  </div>`)
                }
      })

    $("body").on('click', '.remove', function(){
      $(this).parents('.child').remove() 
      let countDetailInput = $("input[name='detail[]']").length;
      if( countDetailInput < 7 ){
        $('#detailValidateMessage').html('')
      }
      // 
    })

    $('select[name="volume"]').on('change', function(){
      console.log($(this).val());

      if ($(this).val() == 'unchapter' || $(this).val() == '') {
        $('#chapter').val('')
        $("#chapterForm").attr('style','display:none')
        $('.vol-input').addClass('col-sm-12').removeClass('col-sm-6 col')
      }else{
        $("#chapterForm").attr('style','')
        $('.vol-input').removeClass('col-sm-12').addClass('col-sm-6 col')
      }

    })

    $('#addQuantityForm').on('click', function(){
      console.log('success');
      $('#quantityForms').append(`<div class="d-flex 200 child">
                      <div class="300 flex-fill pd-r-15">
                        <div class="form-group">
                          <input type="text" name="chapter" style="border-radius:0px" class="form-control" required="">
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                      <div class="400 flex-fill pd-r-15 pd-l-15">
                        <div class="form-group">
                          <input type="text" pattern="\d*" maxlength="4" placeholder="Quantity" name="quantity" style="border-radius:0px" class="form-control" required="">
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                      <div class="500 pd-l-15">
                        <button type="button" class="btn btn-danger remove" style="height:38px; border-radius:0px"><i class="fa fa-minus"></i></button>
                      </div>
                    </div>`)
      })

      $('#createArticleSubmitButton').on('click', function(){
        $('body').css({'cursor' : 'wait','pointer-events' : 'none','display':'none'})
      })

      $(window).on('load', function () {
        $('#spinner').html('')
        $('#bodyContent').show()
      }) 

  })

</script>

@endsection