@extends('layouts.landing_page')

@section('title')
| Shop
@endsection

@section('styles')
<style>
    [class^='example'] {
  margin: 1em 0;
  height: 1px;
}

.example-border {
  border-top: 0.5px solid #001737;
  margin-top: 7px;
  margin-bottom: 2px;
}

.size-container {
  padding: 10px 0; 
}

.sizes {
  padding: none;
  margin-bottom: 5px;
  display: flex;
  align-items: center;  
}

.size {
  width: 41px;
  height: 38.88px;
  background-color: #fff;
  margin: 0 5px;
  border: 1px solid #c0c0c0;
  text-align: center;
  line-height: 40px;
  font-size: 0.72rem;
  font-weight: bold;
  color: #c0c0c0;
  cursor: pointer;
  transition: .1s;
}

.can-hover .size:hover {
  background-color: #0168fa;
  border: 1px solid #0168fa;
  color: #fff
}

.size.active {
  background-color: #0168fa;
  border: 1px solid #0168fa;
  color: #fff
}

#itemContent {
  transition: .1s
}

#filter{
  /* display:none; */
  padding-left:0px;
  padding-right:15px;
  /* margin-top:55px; */
}

.col{
    max-width: 25%;
  }


@media (min-width: 1200px){
  #filterButton{
    display:none;
  }
}

@media only screen and (max-width: 991px) {
  
  #filter{
    padding-right:0px;
    margin-top:10px;
    margin-bottom:20px;
  }

  #content{
    margin-top:40px;
  }

  .col{
    padding: 15px;
    max-width: 90%;
  }

}

@media (max-width: 1200px) {


  .col{
    max-width: 25%;
  }

  .itemContent{
    width: 100%;
  }

  #filter{
    padding-right:0px;
    margin-top:10px;
    margin-bottom:20px;
    display: none;
  }

}


@media only screen and (max-width: 767px) {

  .col{
    max-width: 50%
  }

}



</style>
@endsection

@section('content')
<div class="content content-fixed">
  <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0 container">
    <div class="d-lg-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shop</a></li>
            <li class="breadcrumb-item tx-color-03 breadcrumb-page" aria-current="page">All Item</li>
          </ol>
        </nav>
      </div>
      <div class="d-flex flex-row-reverse" id="content">
        <select class="form-control pd-10 ml-3" style="border-radius:0rem; width:70%; height:30px; padding: 0.32275rem 0.9375rem;">
          <option label="Sort By" style="border-radius:0rem; width:150px; height:30px; padding: 0.32275rem 0.9375rem;"></option>
          <option value="Firefox">Price: Low To High</option>
          <option value="Firefox">Price: High To Low</option>
          <option value="Firefox">Oldest To Newest</option>
          <option value="Firefox">Newest To Oldest</option>
          <option value="Firefox">A - Z</option>
          <option value="Firefox">Z - A</option>
        </select>
        <a href="#" class="btn btn-dark pd-10" data-value="show" id="filterButton" style="border-radius:0rem; width:50%; height:30px; padding: 0.32275rem 0.9375rem;">Filter </a>
      </div>
    </div>
    </div>
      <div class="container">
        <div class="row pd-x-0 pd-lg-x-10 pd-xl-x-0">
          <div class="col-12"><h5 class="text-center" style="padding-top:5px; padding-bottom:15px;">ALL ITEM</h5></div>
            <div class="col-xl-3" id="filter" data-display="none">
              <ul class="list-group" style="border: 1px solid rgba(0,0,0,.24);">
                <li class="list-group-item active" style="cursor:pointer" data-category="all item"> All Item</li>
                <li class="list-group-item" data-category="t-shirt" style="cursor:pointer"> T-Shirt</li>
                <li class="list-group-item" data-category="outerwear" style="cursor:pointer"> Outerwear</li>
                <li class="list-group-item " style="cursor:pointer" data-category="hoodie">Hoodie & Sweat</li>
                <li class="list-group-item " style="cursor:pointer" data-category="oversized tee">Oversized Tee</li>
              </ul>
            </div>
          <div class="col-xl-9" id="itemContent" style="padding-left:0px; padding-right:0px">
              <div class="row">
                      <div class="col childItemContent">
                        <a href="{{ url('/product-detail')}}">
                          <div class="card" style="border:none;">
                            <img src="https://via.placeholder.com/218x218" alt="">
                            <div class="card-body" style="border:none; padding-left:0px; margin-bottom: 0px;">
                              <h5 class="mb-1" style="font-size:1rem">FZTZ T-Shirt</h5>
                              <!-- <p class="mg-b-0" style="color: #001737;">Vol.1 - 13 Dewa ch.1 </p> -->
                              <span class="tx-12 tx-color-03">Rp. 150.000</span>
                            </div><!-- card-body -->
                          </div><!-- card -->
                        </a>
                    </div>
                      <div class="col childItemContent">
                        <a href="{{ url('/product-detail')}}">
                          <div class="card" style="border:none;">
                            <img src="https://via.placeholder.com/218x218" alt="">
                            <div class="card-body" style="border:none; padding-left:0px; margin-bottom: 0px;">
                              <h5 class="mb-1" style="font-size:1rem">FZTZ T-Shirt</h5>
                              <!-- <p class="mg-b-0" style="color: #001737;">Vol.1 - 13 Dewa ch.1 </p> -->
                              <span class="tx-12 tx-color-03">Rp. 150.000</span>
                            </div><!-- card-body -->
                          </div><!-- card -->
                        </a>
                    </div>
                      <div class="col childItemContent">
                        <a href="{{ url('/product-detail')}}">
                          <div class="card" style="border:none;">
                            <img src="https://via.placeholder.com/218x218" alt="">
                            <div class="card-body" style="border:none; padding-left:0px; margin-bottom: 0px;">
                              <h5 class="mb-1" style="font-size:1rem">FZTZ T-Shirt</h5>
                              <!-- <p class="mg-b-0" style="color: #001737;">Vol.1 - 13 Dewa ch.1 </p> -->
                              <span class="tx-12 tx-color-03">Rp. 150.000</span>
                            </div><!-- card-body -->
                          </div><!-- card -->
                        </a>
                    </div>
                      <div class="col childItemContent">
                        <a href="{{ url('/product-detail')}}">
                          <div class="card" style="border:none;">
                            <img src="https://via.placeholder.com/218x218" alt="">
                            <div class="card-body" style="border:none; padding-left:0px; margin-bottom: 0px;">
                              <h5 class="mb-1" style="font-size:1rem">FZTZ T-Shirt</h5>
                              <!-- <p class="mg-b-0" style="color: #001737;">Vol.1 - 13 Dewa ch.1 </p> -->
                              <span class="tx-12 tx-color-03">Rp. 150.000</span>
                            </div><!-- card-body -->
                          </div><!-- card -->
                        </a>
                    </div>
                      <div class="col childItemContent">
                        <a href="{{ url('/product-detail')}}">
                          <div class="card" style="border:none;">
                            <img src="https://via.placeholder.com/218x218" alt="">
                            <div class="card-body" style="border:none; padding-left:0px; margin-bottom: 0px;">
                              <h5 class="mb-1" style="font-size:1rem">FZTZ T-Shirt</h5>
                              <!-- <p class="mg-b-0" style="color: #001737;">Vol.1 - 13 Dewa ch.1 </p> -->
                              <span class="tx-12 tx-color-03">Rp. 150.000</span>
                            </div><!-- card-body -->
                          </div><!-- card -->
                        </a>
                    </div>
                      <div class="col childItemContent">
                        <a href="{{ url('/product-detail')}}">
                          <div class="card" style="border:none;">
                            <img src="https://via.placeholder.com/218x218" alt="">
                            <div class="card-body" style="border:none; padding-left:0px; margin-bottom: 0px;">
                              <h5 class="mb-1" style="font-size:1rem">FZTZ T-Shirt</h5>
                              <!-- <p class="mg-b-0" style="color: #001737;">Vol.1 - 13 Dewa ch.1 </p> -->
                              <span class="tx-12 tx-color-03">Rp. 150.000</span>
                            </div><!-- card-body -->
                          </div><!-- card -->
                        </a>
                    </div>
              </div>
          </div><!-- col -->
        </div>
      </div><!-- container -->
</div><!-- content -->

@endsection

@section('scripts')
<script>

   $("#filterButton").click(function(e) {
     e.preventDefault()
    if ( $( "#filter" ).first().is( ":hidden" ) ) {
      $( "#filter" ).show( "slow" );
    } else {
      $( "#filter" ).hide();
    }
  });

  $(".list-group-item").click(function(e){
    console.log("success");
    $('.list-group-item').removeClass('active');
    $(this).addClass('active');
    $('.breadcrumb-page').html($(this).data('category'))
  })


  const canHover = !(matchMedia('(hover: none)').matches);
if(canHover) {
  document.body.classList.add('can-hover');
}

</script>
@endsection
