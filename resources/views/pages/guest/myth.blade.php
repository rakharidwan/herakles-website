@extends('layouts.landing_page')

@section('styles')
<style>

@media (min-width: 992px) {
  
  .carousel{
    margin-top:60px;
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
        <div class="row" id="content">
            <div class="col-sm-4" style="padding:10px">
            <a href="{{ url('/myth-detail') }}">
              <figure class="img-caption pos-relative mg-b-0">
                <img src="https://via.placeholder.com/580x340" class="img-fit-cover" alt="Responsive image">
                <figcaption class="pos-absolute a-0 wd-100p pd-20 d-flex flex-column justify-content-center bg-black-8 transition-base op-0">
                  <h6 class="tx-14 tx-sm-16 tx-white tx-semibold mg-b-15 mg-sm-b-20">What Does Royalty-Free Mean?</h6>
                  <p class="mg-b-0 tx-white-7">Royalty free means you just need to pay for rights to use the item once per end product. You don't need to pay additional or ongoing fees for each person who sees or uses it.</p>
                </figcaption>
              </figure>
            </a>
            </div>
        </div>
    </div><!-- container -->
</div><!-- content -->
@endsection

@section('scripts')
<script>
      $(function(){
        'use strict'

        $('.img-caption').on('mouseover mouseout', function(){
          $(this).find('figcaption').toggleClass('op-0');
        });

      });
    </script>
@endsection
