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
            <li class="breadcrumb-item tx-color-03" aria-current="page">Lookbook</li>
          </ol>
        </nav>
      </div>
    </div>
   </div>
    <div class="container">
        <div class="row" id="content">
            <div class="gallery"></div>
        </div>
    </div><!-- container -->
</div><!-- content -->
@endsection

@section('scripts')

@endsection
