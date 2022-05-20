@extends('layouts.admin')
@section('styles')

<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<link rel="stylesheet" href="{{ url('lib/fancy-file-uploader/fancy_fileupload.css') }}">
<link rel="stylesheet" href="{{ url('lib/Croppie-2.6.4/croppie.css') }}">


<style>

input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}

  @media only screen and (max-width: 767px) {

.col{
  max-width: 50%
}

}


.img-upload{
  color: white;
  height: 48px;
  width: 50px;
  border-radius: 200px;
  background-color: black;
  font-size: 20px;
  opacity: 0.1;
  display: flex;
  justify-content: center;
  align-items: center;
}

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

.croppie-container{
  height:75%;
}

#newImageColumn{
  cursor: pointer;
}

#newImageColumn:hover {
  background-color: rgba(0, 0, 0, 0.1);
}

.text-new-image{
  display:none;
  position:absolute;
}

#newImageColumn:hover .text-new-image {
  display:block;
}

/* #newImageColumn:hover .icon-no-image {
  display:none;
} */

.img-product{
  cursor: pointer;
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
      <form action="{{ url('/article/store') }}" method="post" id="articleStoreForm" style="display:none">
        @csrf
        <div class="row">
          <div class="col-lg-12">
            <div id="spinner">
              <div class="d-flex justify-content-center" >
                <div class="spinner-border" role="status" style="margin-top:20%">
                </div>
              </div>
            </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="card" id="bodyContent">
                    <div class="card-body">
                      <h5 class="card-title">Article Information</h5>
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        @method('post')
                        <!-- invalid form : add class 'is-invalid' in form-control -->
                        <div class="row">
                          <div class="col-sm-6 col">
                            <div class="form-group">
                              <label for="article_code" class="d-block">Article Code: <span class="tx-danger">*</span></label>
                              <input type="text" maxlength="4" id="article_code" name="article_code" style="border-radius:0px;text-transform:uppercase" class="article_code_input form-control" autocomplete="off">
                              <div class="article_code_error invalid-feedback"></div>
                            </div>
                          </div>
                          <div class="col-sm-6 col">
                            <div class="form-group">
                              <label for="article_number" class="d-block">Article Number: <span class="tx-danger">*</span></label>
                              <input type="number" id="article_number" name="article_number" onkeyPress="if(this.value.length == 3) return false;"  style="border-radius:0px" class="article_number_input form-control" autocomplete="off">
                              <div class="article_number_error invalid-feedback"></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <label for="article_name" class="d-block">Article Name: <span class="tx-danger">*</span></label>
                          <input type="text" style="border-radius:0px" id="article_name" name="article_name" class="article_name_input form-control" autocomplete="off">
                          <div class="article_name_error invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                          <label for="category" class="d-block">Category: <span class="tx-danger">*</span></label>
                          <select style="border-radius:0px" name="category" id="category" class="category_input form-control">
                            <option value="">-- Select Category --</option>
                            @foreach ($categorys as $category)
                              <option value="{{ $category->id }}">{{ $category->category }}</option>
                            @endforeach
                          </select>
                          <div class="category_error invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                          <label for="priceInput" class="d-block">Price: <span class="tx-danger">*</span></label>
                          <input type="text" style="border-radius:0px" placeholder="( Rupiah )" id="priceInput" name="price" class="price_input form-control" autocomplete="off">
                          <div class="price_error invalid-feedback"></div>
                        </div>
                        <div class="form-group">
                          <label for="desc" class="d-block">Article Description: <span class="tx-danger">*</span></label>
                          <textarea style="border-radius:0px" cols="1" rows="10" id="desc" name="desc" class="desc_input form-control"></textarea>
                          <div class="desc_error invalid-feedback"></div>
                        </div>
                        <div class="d-flex 200">
                          <div class="pd-r-15 300 flex-grow-1">
                            <div class="form-group">
                              <label for="detail" class="d-block">Detail: </label>
                              <input type="text" id="detail" name="details[]" style="border-radius:0px" class="details 0_input form-control" autocomplete="off">
                              <div class="details 0_error feedback" id="detailValidateMessage" style="color: #dc3545;"></div>
                            </div>
                          </div>
  
                          <div class="400 pd-l-15">
                            <div class="form-group">
                              <label for="addDetail" class="d-block">	&nbsp;</label>
                              <button type="button" id="addDetail" class="btn btn-primary" style="height:38px; border-radius:0px"><i class="fa fa-plus"></i></button>
                            </div>
                          </div>
                        </div>
                        <div id="detailForms">
                        
                        </div>
                        <div class="row">
                          <div class="col-sm-12 vol-input">
                            <div class="form-group">
                              <label for="volume" class="d-block">Volume: </label>
                              <select style="border-radius:0px" id="volume" name="volume" class="volume_input form-control">
                                <option value="">-- Select Volume --</option>
                                <option value="unchapter">Unchapter</option>
                                <option value="1">Volume 1</option>
                              </select>
                              <div class="volume_error invalid-feedback"></div>
                            </div>
                          </div>
                          <div class="col-sm-6 col" id="chapterForm" style="display:none">
                            <div class="form-group">
                              <label for="chapter" class="d-block">&nbsp;</label>
                              <input type="text" maxlength="2" placeholder="chapter" id="chapter" name="chapter" style="border-radius:0px" class="chapter_input form-control" >
                              <div class="chapter_error invalid-feedback"></div>
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="card mt-4" style="border-radius:0px;">
                    <div class="card-body  ">
                      <h5 class="card-title">Quantity</h5>
                      <div class="row">
                        <div class="col-xl-12">
                          <div class="d-flex 200">
                            <div class="300 flex-fill pd-r-15">
                              <div class="form-group">
                                <input type="text"  maxlength="10" name="sizes[]"   style="border-radius:0px" placeholder="Size" class="sizes 0_input form-control" autocomplete="off">
                                <div class="sizes 0_error invalid-feedback"></div>
                              </div>
                            </div>
                            <div class="400 flex-fill pd-r-15 pd-l-15">
                              <div class="form-group">
                                <input type="text" maxlength="4" placeholder="Quantity" name="quantitys[]" style="border-radius:0px" class="quantitys 0_input form-control" autocomplete="off">
                                <div class="quantitys 0_error invalid-feedback"></div>
                              </div>
                            </div>
                            <div class="500 pd-l-15">
                              <button type="button" class="btn btn-primary" id="addQuantityForm" style="height:38px; border-radius:0px"><i class="fa fa-plus"></i></button>
                            </div>
                          </div>
                          <div id="quantityForms">
                          </div>
                          <ul class="parsley-errors-list filled">
                            <li class="quantity_error parsley-required"></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mt-4" style="border-radius:0px;">
                    <div class="card-body">
                      <h5 class="card-title">Image</h5>
                      <div class="row">
                          {{-- <div class="col-sm-4 col" style="margin-bottom: 5px; margin-top: 5px">
                            <div class="delete-img-btn marker pos-absolute t-10 r-10 d-flex flex-column justify-content-center align-items-center" style="background-color: rgba(0,0,0,0.2); height:25px;" type="button"><i class="fa fa-times fa-xl" style="color:rgba(0, 0, 0, 0.6);"></i></div>
                            <img src="{{ asset('assets/picture/product-picture.webp')}}"  class="img-product img-fluid">
                          </div> --}}
                          <div class="col-sm-4 d-flex flex-column justify-content-center align-items-center" id="newImageColumn" style="margin-bottom: 5px; margin-top: 5px;height:172.66px;">
                            <br>
                            <i class="fa fa-image fa-2x op-4 icon-no-image"></i>
                            <br>
                            <p class="text-center text-new-image mt-3" >Click For Add New Image</p>
                          </div>
                      </div>
                    </div>
                  </div>
                
                </div>
                <div class="col-lg-6">
                  <div class="card mt-4 table-responsive" style="border-radius:0px;">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-lg-12">
                          <div id="image_demo" style="height:550px"></div>
                            <div class="custom-file">
                              <label class="custom-file-label label-upload-img"  style="border-radius:0px;display:none" for="uploadImage">New Photo</label>
                                <input type="file" id="uploadImage" style="display:none">
                              <label class="custom-file-label label-update-img"  style="border-radius:0px;display:none" for="updateImage">New Photo</label>
                                <input type="file" id="updateImage" style="display:none">
                            </div>
                            <button type="button" class="btn btn-primary tx-13 mt-3 mb-3 btn-block" id="updateButton"  style="border-radius: 0px; display:none">Save</button>
                            <button type="button" class="btn btn-primary tx-13 mt-3 mb-3 btn-block" id="saveButton"  style="border-radius: 0px; display:none">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button type="submit" id="createArticleSubmitButton" class="btn btn-primary float-right" style="border-radius:0px">Submit</button>

      </form>
      </div>

@endsection

@section('scripts')

<script src="{{ url('/lib/Croppie-2.6.4/croppie.js') }}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> 
<script src="{{ url('/lib/cleave.js/cleave.min.js')}}"></script>
<script src="{{ url('/lib/cleave.js/addons/cleave-phone.us.js') }}"></script>
<script src="{{ url('/lib/fancy-file-uploader/jquery.ui.widget.js') }}"></script>
<script src="{{ url('/lib/fancy-file-uploader/jquery.fileupload.js') }}"></script>
<script src="{{ url('/lib/fancy-file-uploader/jquery.iframe-transport.js') }}"></script>
<script src="{{ url('/lib/fancy-file-uploader/jquery.fancy-fileupload.js') }}"></script>
<script>

  var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

  $(function(){

    $('.form-control').on('keypress', function(){
      $(this).removeClass('is-invalid')
    })

    $('#articleStoreForm').on('submit', function(e){
      e.preventDefault();
      
    createArticle()
  })

  function createArticle(){

let form = $("form").serialize();
console.log(form);

$.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });

$.ajax({
    url: $('#articleStoreForm').attr("action"),
    method: 'post',
    data: new FormData(document.getElementById("articleStoreForm")),
    processData: false,
    dataType: "json",
    contentType: false,
    beforeSend: function () {
      $(document).find("div.invalid-feedback").text("");
        $(document).find(".is-invalid").removeClass("is-invalid");
        $(document).find(".parsley-required").html("");
    },
    success: function (data) {
      if (data.status == 0) {
        $(window).scrollTop("100");
          $.each(data.error, function (prefix, val) {
              let stringPrefix = `"`+prefix+`"`;
                $("."+prefix+"_input").addClass('is-invalid')
                $("div." + prefix + "_error").html(val[0]);
                // let element = document.getElementByName("stringPrefix");
                // element.scrollIntoView({block: "end",behavior: "smooth"});
              });
              
        } else {
            console.log(data.request);
            // window.location.href = "/";
        }
    },
});
}
    

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
          });


    $('#addDetail').on('click', function(){
      
      let countDetailInput = $("input[name='detail[]']").length;
      if(countDetailInput == 7){
        $('#detailValidateMessage').html('has reached the maximum limit')
      }else{

        $("#detailForms").append(` <div class="d-flex 200 child">
          <div class="pd-r-15 300 flex-grow-1">
            <div class="form-group">
              <input type="text" name="detail[]" style="border-radius:0px" class="form-control" autocomplete="off" >
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
    let number = 0;

    $('#addQuantityForm').on('click', function(){
      // console.log('success');
      number += 1;
      console.log(number);

      $('#quantityForms').append(`<div class="d-flex 200 child">
                      <div class="300 flex-fill pd-r-15">
                        <div class="form-group">
                          <input type="text" name="size[]" placeholder="Size" style="border-radius:0px" class="size 0_input form-control" autocomplete="off">
                          <div class="size `+number+`_error invalid-feedback"></div>
                        </div>
                      </div>
                      <div class="400 flex-fill pd-r-15 pd-l-15">
                        <div class="form-group">
                          <input type="text" maxlength="4" placeholder="Quantity" name="quantitys[]" style="border-radius:0px" class="quantitys `+number+`_input form-control" autocomplete="off">
                          <div class="quantitys `+number+`_error invalid-feedback"></div>
                        </div>
                      </div>
                      <div class="500 pd-l-15">
                        <button type="button" class="btn btn-danger remove" style="height:38px; border-radius:0px"><i class="fa fa-minus"></i></button>
                      </div>
                    </div>`)
      })

      // $('#createArticleSubmitButton').on('click', function(){
      //   $('body').css({'cursor' : 'wait','pointer-events' : 'none','display':'none'})
      // })

      $(window).on('load', function () {
        $('#spinner').html('')
        $('#articleStoreForm').show()
      })


      $("body").on('click','.btn-upload-img', function(e){
        let input = e.target.parentElement.children[0];
        // console.log(elementParent);
        input.click()
        // console.log('success');
      })

      $("body").on('click','.btn-delete-img', function(e){
        let input = e.target.parentElement.children[0];
        let image = e.target.parentElement.children[1];
        let button = e.target.parentElement.children[2];
        let icon = e.target.parentElement.children[2].children[0]

        // console.log(elementParent);
        input.value = null;
        image.src = '';

        console.log(icon);
        
        icon.classList.remove('fa-xmark');
        icon.classList.add('fa-upload');

        button.classList.remove('btn-delete-img')
        button.classList.add('btn-upload-img')
        

      })

      cropImage()

      function cropImage(){

         var image_crop = $('#image_demo').croppie({
          enableExif: true,
          viewport: {
            width: 500,
            height: 500,
            type: 'squere',

          },
          boundary:{
            width: 500,
            height: 500
          }
        })

          image_crop.croppie('bind', {
			        url: `{{ asset('/assets/picture/nopict.jpg' )}}`,
		        });

        $('#uploadImage').on('change', function(){      

          var reader = new FileReader();
          reader.onload = function (event){
            image_crop.croppie('bind', {
              url: event.target.result
            }).then(function(){
              console.log('jQuery bin complete');
            });
          }
          console.log(this.files[0]);
          reader.readAsDataURL(this.files[0]);
          $('.img-product').removeClass('img-thumbnail')

          $('#saveButton').show()
          $('#updateButton').hide()
          $('.label-upload-img').show()
          $('.label-update-img').hide()

        });

        $("body").on('click','.delete-img-btn', function(){
          $(this).closest('.col-sm-4').remove();
          let child = $(this).parents();
          let imageClass = child.find('.img-fluid')

          if (imageClass.hasClass('img-thumbnail')) {
            image_crop.croppie('bind', {
			        url: `{{ asset('/assets/picture/nopict.jpg' )}}`,
		        });
            $('#updateButton').hide()
          $('.label-update-img').hide()
          $('.label-upload-img').hide()
          $('#saveButton').hide()
          }

        })

        $('#updateImage').on('change', function(){      

          var reader = new FileReader();
          reader.onload = function (event){
            image_crop.croppie('bind', {
              url: event.target.result
            }).then(function(){
              console.log('jQuery bin complete');
            });
          }
          console.log(this.files[0]);
          reader.readAsDataURL(this.files[0]);

          $('#updateButton').show()
          $('.label-update-img').show()

        });


        $('body').on('click','.img-product', function(e){
          let image = $(this).attr('src')

          $('#updateButton').show()
          $('.label-update-img').show()

          $('.img-product').removeClass('img-thumbnail')
          $(this).addClass('img-thumbnail')

          $('.label-upload-img').hide()
          $('#saveButton').hide()
          image_crop.croppie('bind', {
			      url: image,
		      });

        })

        $('body').on('click','#newImageColumn', function(e){
          // $('.label-upload-img').hide()
          
          console.log('success');
          $('#uploadImage').trigger('click')
        })

        $('#saveButton').on('click', function (ev) {
		    	image_crop.croppie('result', {
		    		type: 'canvas',
		    		size: 'viewport'
		    	}).then(function (resp) {
            $('#newImageColumn').before(` <div class="col-sm-4" style="margin-bottom: 5px; margin-top: 5px">
              <div class="delete-img-btn marker pos-absolute t-10 r-10 d-flex flex-column justify-content-center align-items-center" style="background-color: rgba(0,0,0,0.2); height:25px;" type="button"><i class="fa fa-times fa-xl" style="color:rgba(0, 0, 0, 0.6);"></i></div>
                      <img src="`+ resp +`"  class="img-product img-fluid img-thumbnail">
                     <input type="hidden" value="`+resp+`" name="image[]">
                    </div>
                    `)
		    	});

          $('.label-upload-img').hide()
          $('#saveButton').hide()

          $('#updateButton').show()
          $('.label-update-img').show()


		    });

        $('#updateButton').on('click', function (ev) {
          
          let parent = $('.img-thumbnail').parents().eq(0);
          let child = parent.find('input')

          
          console.log(child);
          image_crop.croppie('result', {
            	type: 'canvas',
            	size: 'viewport'
            }).then(function (resp) {
                $('.img-thumbnail').attr('src',resp)
                child.val(resp) 
		    	});

		    });

      }

  })




</script>



@endsection