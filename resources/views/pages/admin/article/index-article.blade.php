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
                  <li class="breadcrumb-item active" aria-current="page">Article</li>
                </ol>
              </nav>
              <h4 class="mg-b-0 tx-spacing--1">Article</h4>
            </div>
            <div class="d-xs-block">
              <button class="btn btn-sm pd-x-15 btn-white btn-uppercase" style="border-radius: 0px;" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                View By
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item view-by" href="#" data-view="table">Table</a>
                <a class="dropdown-item view-by" href="#" data-view="card">Card</a>
              </div>
              <a href="{{ url('/article/create') }}" class="btn btn-primary btn-sm pd-x-15 btn-uppercase" style="border-radius: 0px;"> Create</a>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12 mb-3 d-none" id="searchColumn">
              <div class="search-form mg-t-20 mg-sm-t-0">
                <input type="search" class="form-control" placeholder="Search Article" style="border-radius: 0px;">
                <button class="btn" style="border-radius: 0px;" type="button"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
              </div>
            </div>
          </div>
          <div class="row" id="articleCard">
            <div class="col">
                <div class="card" style="border:none;">
                  <img src="https://via.placeholder.com/218x218" alt="">
                  <div class="card-body" style="border:none; padding-left:0px; padding-right:0px; margin-bottom: 0px;">
                  <div class="dropdown dropup">
                    <i data-feather="more-horizontal" class="float-right" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></i>
                    <div class="dropdown-menu " aria-labelledby="dropupMenuButton">
                      <a class="dropdown-item" href="#">Detail</a>
                      <a class="dropdown-item" href="#">Edit</a>
                    </div>
                    </div>
                    <h5 class="mb-1" style="font-size:1rem">FZTZ T-Shirt</h5>
                    <span class="tx-12 tx-color-03">Rp. 150.000</span>
                  </div><!-- card-body -->
                </div><!-- card -->
            </div>
          </div>
          <div class="row" id="articleTable">
            <div class="col-lg-12" style="max-width:100%">
              <div class="card table-responsive">
                <div class="card-body pd-lg-25">
                {!! $dataTable->table() !!}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('scripts')

<script src="{{asset('/lib/datatables.net/js/jquery.dataTables.min.js')}}"></script>

<script src="{{ asset('/lib/datatables.net-dt/js/dataTables.dataTables.min.js')}}"></script>

{{ $dataTable->scripts() }}

<script>
  $("#articleCard").hide();
  $(".view-by").on('click', function(e){
    e.preventDefault()
    console.log('succes');
    if ($(this).data('view') == 'table') {
      $("#articleTable").show()
      $("#searchColumn").addClass('d-none')
      $("#articleCard").attr('style','display:none')
    }
    else if ($(this).data('view') == 'card') {
      $("#searchColumn").removeClass('d-none')
      $("#articleCard").show()
      $("#articleTable").attr('style','display:none')
    }
  })
</script>

@endsection