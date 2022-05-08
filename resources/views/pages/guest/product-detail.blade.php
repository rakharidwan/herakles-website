@extends('layouts.landing_page')

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
  transition: .3s;
}

.can-hover .size:hover {
  background-color: #0168fa;
  border: 1px solid #0168fa;
  color: #fff
}



  .detail-item-body{
    padding: 15px;
  }
  
.size.active {
  background-color: #0168fa;
  border: 1px solid #0168fa;
  color: #fff
}

.childItemContent {
  transition: .3s
}

#itemContent {
  transition: .1s
}

.inline-group {
  /* max-width: 35rem; */
  padding: .5rem;
}

.inline-group .form-control {
  text-align: center;
}

.form-control[type="number"]::-webkit-inner-spin-button,
.form-control[type="number"]::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

@media only screen and (max-width: 991px) {

  #content{
    margin-top:40px;
  }

  .detail-item{
    margin-left:0px;
    margin-top:30px;
    padding: 0px;
  }



}

.col{
    max-width: 20%;
  }

@media (max-width: 1200px) {


  .col{
    max-width: 20%;
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
    max-width: 25%;
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
  <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item tx-color-03" aria-current="page">FZTZ T-Shirt</li>
          </ol>
        </nav>
      </div>
    </div>
   </div>
    <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0 container">
        <div class="row" id="content">
            <div class="col-lg-7" >
                <div id="carouselExample3" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExample3" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExample3" data-slide-to="1"></li>
                      <li data-target="#carouselExample3" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                          <img src="https://via.placeholder.com/715x600" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://via.placeholder.com/715x600" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="https://via.placeholder.com/715x600" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExample3" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"><i data-feather="chevron-left"></i></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExample3" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"><i data-feather="chevron-right"></i></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-5 detail-item">
                <div class="card" style="border:none">
                    <div class="card-body detail-item-body">
                        <h3>FZTZ T-Shirt</h3>
                        <p class="mg-b-30">Rp. 150.000</p>
                        <p class="card-text mb-4" style="text-align: justify; text-justify: inter-word;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        <!-- <p class="card-text">- Lorem ipsum dolor sit amet</p> -->
                        <ul style="padding-left:20px" class="mb-5">
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>consectetur adipisicing elit</li>
                            <li>sed do eiusmod tempor incididunt</li>
                            <li>ut labore et dolore magna aliqua</li>
                            <li>Ut enim ad minim veniam</li>
                            <li>quis nostrud exercitation ullamco laboris nisi ut</li>
                            <li>aliquip ex ea commodo consequat</li>
                        </ul>
                        <h5>CHOOSE SIZE</h5><div class="example-border"></div>
                        <div class="size-container">
                            <div class="sizes">
                                <span class="size" data-clicks="1">S</span>
                                <span class="size" data-clicks="1">M</span>
                                <span class="size" data-clicks="1">L</span>
                                <span class="size" data-clicks="1" >XL</span>
                            </div>
                        </div> 
                        <h5 class="mt-4">QUANTITY</h5><div class="example-border"></div>
                        <div class="row">
                            <div class="col-xl-6" >
                                <div class="input-group inline-group">
                                    <div class="input-group-prepend">
                                      <button class="btn btn-minus" style="border-radius:0px; border: 1px solid #001737">
                                        <i data-feather="minus" style="color: #001737"></i>
                                      </button>
                                    </div>
                                    <input class="form-control quantity" style="border:1px solid #001737" min="0" name="quantity" value="1" type="number">
                                    <div class="input-group-append">
                                      <button class="btn btn-plus" style="border-radius:0px; border: 1px solid #001737">
                                        <i data-feather="plus" style="color: #001737"></i>
                                      </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                              <div class="input-group inline-group">

                                <button class="btn btn-dark" style=" width:100%; border-radius:0px;">Add To Cart</button>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <div class="col-xl-12"><h5 class="text-center" style="padding-top:5px; padding-bottom:15px;">Similar Items</h5></div>
          <div class="row">
            <div class="col childItemContent">
              <a href="{{ url('/product-detail')}}">
                <div class="card" style="border:none;">
                  <img src="https://via.placeholder.com/218x218" alt="">
                  <div class="card-body" style="border:none; padding-left:0px; margin-bottom: 0px;">
                    <h5 class="mb-1" style="font-size:1rem">FZTZ T-Shirt</h5>
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
                    <span class="tx-12 tx-color-03">Rp. 150.000</span>
                  </div><!-- card-body -->
                </div><!-- card -->
              </a>
            </div>
          </div>
    </div><!-- container -->
</div><!-- content -->
@endsection

@section('scripts')
<script>
    $('.btn-plus, .btn-minus').on('click', function(e) {
  const isNegative = $(e.target).closest('.btn-minus').is('.btn-minus');
  const input = $(e.target).closest('.input-group').find('input');
  if (input.is('input')) {
    input[0][isNegative ? 'stepDown' : 'stepUp']()
  }
})

$(".size").click(function(e){
    console.log("success");
    if ($(this).attr('class') === 'size active') {
      $(this).removeClass("active")
    }else{
      $(".size").removeClass("active")
      $(this).addClass("active").fadeIn("slow")
    }
})

const canHover = !(matchMedia('(hover: none)').matches);
if(canHover) {
  document.body.classList.add('can-hover');
}

</script>
@endsection
