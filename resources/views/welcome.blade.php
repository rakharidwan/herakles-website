@extends('layouts.landing_page')
@section('content')
    <div id="carouselExample2" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item">
                  <img src="https://via.placeholder.com/500x281" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://via.placeholder.com/500x281" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item active">
                <img src="https://via.placeholder.com/500x281" class="d-block w-100" alt="...">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExample2" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExample2" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
@endsection