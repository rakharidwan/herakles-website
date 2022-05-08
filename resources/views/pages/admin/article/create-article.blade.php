@extends('layouts.admin')
@section('styles')

<style>
  @media only screen and (max-width: 767px) {

.col{
  max-width: 50%
}

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
              <div class="card" style="border-radius:0px">
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
                      <label for="formGroupExampleInput" class="d-block">Description Article: <span class="tx-danger">*</span></label>
                      <textarea style="border-radius:0px" cols="1" rows="10" class="form-control" required=""></textarea>
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="row">
                      <div class="col-sm-11">
                        <div class="form-group">
                          <label for="formGroupExampleInput" class="d-block">Detail: <span class="tx-danger">*</span></label>
                          <input type="text" pattern="\d*" maxlength="2" name="chapter" style="border-radius:0px" class="form-control" required="">
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                      <div class="col-sm-1">
                        <div class="form-group">
                        <label for="formGroupExampleInput" class="d-block">	&nbsp;</label>
                        <button stype="button" class="btn btn-primary" style="height:38px; border-radius:0px"><i class="fa fa-plus"></i></button>
                     
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col">
                        <div class="form-group">
                          <label for="formGroupExampleInput" class="d-block">Chapter: <span class="tx-danger">*</span></label>
                          <input type="text" pattern="\d*" maxlength="2" name="chapter" style="border-radius:0px" class="form-control" required="">
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                      <div class="col-sm-6 col">
                        <div class="form-group">
                          <label for="formGroupExampleInput" class="d-block">Volume: <span class="tx-danger">*</span></label>
                          <select style="border-radius:0px" name="volume" class="form-control" required="">
                            <option value="">-- Select Volume --</option>
                          </select>
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-sm-6 col-quantity">
                        <div class="form-group">
                          <label for="formGroupExampleInput" class="d-block">Size: <span class="tx-danger">*</span></label>
                          <input type="text" name="chapter" style="border-radius:0px" class="form-control" required="">
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                      <div class="col-sm-5 col-quantity">
                        <div class="form-group">
                          <label for="formGroupExampleInput" class="d-block">	&nbsp;</label>
                          <input type="text" pattern="\d*" maxlength="4" placeholder="Quantity" name="quantity" style="border-radius:0px" class="form-control" required="">
                          <div class="invalid-feedback"></div>
                        </div>
                      </div>
                      <div class="col-sm-1 col-quantity">
                        <label for="formGroupExampleInput" class="d-block">	&nbsp;</label>
                        <button stype="button" class="btn btn-primary" style="height:38px; border-radius:0px"><i class="fa fa-plus"></i></button>
                      </div>
                    </div>
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
<script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
<link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

<script>
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

  })


</script>

@endsection