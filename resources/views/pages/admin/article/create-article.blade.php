@extends('layouts.admin')
@section('styles')

<style>
  .col{
    max-width: 20%;
  }



@media (max-width: 1200px) {


  .col{
    max-width: 20%;
  }

}

@media (max-width: 991px) {
  
  .col{
    /* padding: 15px; */
    max-width: 25%;
  }

}

@media only screen and (max-width: 767px) {

  .col{
    max-width: 50%
  }

}

.table{
  margin: 0px;
}

</style>
@endsection

@section('content')
      <div class="content-body">
        <div class="container pd-x-0">
          <div class="d-sm-flex align-items-center justify-content-between mg-lg-b-15 mg-xl-b-15">
            <div>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-style1 mg-b-10">
                  <!-- <li class="breadcrumb-item"><a href="#">Dashboard</a></li> -->
                  <li class="breadcrumb-item " aria-current="page">Article</li>
                  <li class="breadcrumb-item active" aria-current="page">Create Article</li>
                </ol>
              </nav>
              <h4 class="df-tile">Create Article</h4>
            </div>
          </div>
          <div class="row" >
            <div class="col-lg-12" style="max-width:100%">
                <ul class="list-group">
                    <li class="list-group-item"><a href="">Article Information</a></li>
                    <li class="list-group-item">Article Image</li>
                </ul>
          </div>
        </div>
      </div>
@endsection

@section('scripts')

@endsection