@extends('layouts.landing_page')

@section('styles')
<style>

.myth-img{
  padding:0px 20px 20px 0px;
}

@media (min-width: 992px) {
  
  .carousel{
    margin-top:60px;
  }
 
}

@media (max-width: 355px){
  .myth-img{
  padding:0px 0px 20px 0px;
}
}

</style>
@endsection

@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://via.placeholder.com/1727x181"  class="d-block w-100" alt="...">
    </div>
    <!-- more items goes here -->
  </div>
</div>
<div class="content content-fixed mt-0">
    <div class="container">
        <div class="row" style="display:block" id="content">
        <div class="col-md-12"><h5 class="text-center" style="padding-top:5px; padding-bottom:15px;">Lorem Ipsum</h5></div>

  <img src="https://via.placeholder.com/260x146" class="img-fluid float-left myth-img" alt="">
        <p class="mg-b-15 tx-inverse" style="text-align: justify; text-justify: inter-word;">
        &emsp;&emsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris ut sagittis leo. Morbi luctus ultrices neque nec euismod. Sed vel sem sollicitudin, convallis nunc volutpat, cursus velit. Ut pellentesque velit sed libero auctor fermentum. Donec dictum placerat placerat. Phasellus mollis ligula vel scelerisque sodales. Nam cursus interdum varius. Praesent finibus libero in diam commodo, id blandit metus gravida. Duis sed commodo est, et ultrices eros. Morbi in ipsum et arcu feugiat hendrerit at at nisl. Etiam arcu purus, interdum sit amet suscipit eu, sollicitudin vel turpis. In hac habitasse platea dictumst. Vivamus vitae congue turpis. Nulla fringilla cursus nisl, sed elementum turpis sollicitudin et.
        <br>
        <br>
        Mauris felis tortor, condimentum eu vehicula sit amet, sagittis eu mauris. Pellentesque sit amet fermentum mauris. Etiam at ultrices eros. Quisque mauris nunc, aliquet vitae pulvinar vel, pharetra et eros. Pellentesque euismod sapien accumsan luctus sodales. Donec a libero eu justo commodo pellentesque nec id dui. Vestibulum tempus neque in nibh facilisis, venenatis porttitor nisl viverra. Vivamus imperdiet imperdiet metus, a pulvinar mi tempor sed. Nullam cursus dolor ut imperdiet lobortis. Donec et congue ante, vitae vestibulum nibh. Integer porttitor eu augue bibendum vehicula. Morbi ultrices augue molestie est euismod, vitae finibus nisi suscipit. Nunc a mollis ex. Pellentesque mollis lacus sed augue porta, vel tincidunt dolor venenatis.
        </p>
        <br>
        <hr>
        <br>
        <div class="col-md-12"><h5 class="text-center" style="padding-top:5px; padding-bottom:15px;">Article Collection's</h5></div>
        <div class="row">
            <div class="col-md-3 childItemContent">
              <a href="{{ url('/product-detail')}}">
                <div class="card card-event" style="border:none;">
                  <img src="https://via.placeholder.com/218x218" alt="">
                  <div class="card-body" style="border:none; padding-left:0px; margin-bottom: 0px;">
                    <h5>FZTZ T-Shirt</h5>
                    <p class="mg-b-0" style="color: #001737;">Vol.1 - 13 Dewa ch.1 </p>
                    <span class="tx-12 tx-color-03">Rp. 150.000</span>
                  </div><!-- card-body -->
                </div><!-- card -->
              </a>
            </div>
            <div class="col-md-3 childItemContent">
              <a href="{{ url('/product-detail')}}">
                <div class="card card-event" style="border:none;">
                  <img src="https://via.placeholder.com/218x218" alt="">
                  <div class="card-body" style="border:none; padding-left:0px; margin-bottom: 0px;">
                    <h5>FZTZ T-Shirt</h5>
                    <p class="mg-b-0" style="color: #001737;">Vol.1 - 13 Dewa ch.1 </p>
                    <span class="tx-12 tx-color-03">Rp. 150.000</span>
                  </div><!-- card-body -->
                </div><!-- card -->
              </a>
            </div>
            <div class="col-md-3 childItemContent">
              <a href="{{ url('/product-detail')}}">
                <div class="card card-event" style="border:none;">
                  <img src="https://via.placeholder.com/218x218" alt="">
                  <div class="card-body" style="border:none; padding-left:0px; margin-bottom: 0px;">
                    <h5>FZTZ T-Shirt</h5>
                    <p class="mg-b-0" style="color: #001737;">Vol.1 - 13 Dewa ch.1 </p>
                    <span class="tx-12 tx-color-03">Rp. 150.000</span>
                  </div><!-- card-body -->
                </div><!-- card -->
              </a>
            </div>
            <div class="col-md-3 childItemContent">
              <a href="{{ url('/product-detail')}}">
                <div class="card card-event" style="border:none;">
                  <img src="https://via.placeholder.com/218x218" alt="">
                  <div class="card-body" style="border:none; padding-left:0px; margin-bottom: 0px;">
                    <h5>FZTZ T-Shirt</h5>
                    <p class="mg-b-0" style="color: #001737;">Vol.1 - 13 Dewa ch.1 </p>
                    <span class="tx-12 tx-color-03">Rp. 150.000</span>
                  </div><!-- card-body -->
                </div><!-- card -->
              </a>
            </div>
        </div>
        </div>
    </div><!-- container -->
</div><!-- content -->
@endsection

@section('scripts')
@endsection
