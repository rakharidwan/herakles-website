@extends('layouts.landing_page')

@section('styles')

@endsection

@section('content')
<div class="content content-fixed">
  <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
    <div class="d-sm-flex align-items-center justify-content-between mg-b-20 mg-lg-b-25 mg-xl-b-30">
      <div>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb breadcrumb-style1 mg-b-10">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item tx-color-03" aria-current="page">News</li>
          </ol>
        </nav>
      </div>
    </div>
   </div>
    <div class="container">
        <div class="row" id="content">
            <div class="col-lg-9" style="padding:0px; margin-bottom:50px;">
                <h1 style="font-family:'Montserrat', sans-serif; font-weight: inherit; margin-bottom:44px "><strong> 
                    <a href="" style="color:#001737" > Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></strong></h1>
                <img src="../assets/img/placehold.jpg" class="card-img-top" style="border-radius:0px" alt="...">
                <div class="card-body" style="padding:50px 0px 30px 0px;">
                    <p class="card-text" style="text-align: justify; text-justify: inter-word;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                </div>
                <a href="#" class="btn" style="border: 1px solid #001737; border-radius:0px; width:154px;">Read More</a>
            </div>
            <div class="col-lg-9" style="padding:0px">
                <h1 style="font-family:'Montserrat', sans-serif; font-weight: inherit; margin-bottom:44px "><strong> 
                    <a href="" style="color:#001737"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</a></strong></h1>
                <div class="card-body" style="padding:0px 0px 30px 0px;">
                    <p class="card-text" style="text-align: justify; text-justify: inter-word;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                </div>
                <a href="#" class="btn" style="border: 1px solid #001737; border-radius:0px; width:154px;">Read More</a>
            </div>
        </div>
    </div><!-- container -->
</div><!-- content -->
@endsection

@section('scripts')

@endsection
