@extends('template')
@section('title', 'about')
@section('main')
<div class="container pl-4 pr-4 pb-5">
      
  <div class="bg-white p-4 shadow">
    <div class="container py-5">
        <div class="row align-items-center mb-5">
            <div class="col-lg-4 px-5 mx-auto"><img src="goLogo.jpg" alt="GO" style="max-width: 250px;"  class="img-fluid mb-4 mb-lg-0"></div>
            <div class="col-lg-8"><i class="fa fa-leaf fa-2x mb-3 text-primary"></i>
              <h2 class="font-weight-light">Goswami Payments Bank - GO</h2>
              <p class="font-italic text-muted mb-4">Goswami Payments Bank is an advance user interface to manage payments transfer of all our users.</p><a href="home" class="btn btn-light px-5 rounded-pill">Learn More</a>
            </div>
          </div>
    </div>
  </div>
  <br>
  <div class="bg-white p-4 shadow">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-8 order-2 order-lg-1"><i class="fas fa-handshake fa-2x mb-3 text-primary"></i>
              <h2 class="font-weight-light">Yogesh Giri - Developer</h2>
              <p class="font-italic text-muted mb-4">Hello Everyone,<br> I am a full stack web developer from India. I have created this amazing transaction website using Laravel 8.</p><a href="https://github.com/yogeshgiri904" class="btn btn-light px-5 rounded-pill">Visit Profile</a>
            </div>
            <div class="col-lg-4 px-5 mx-auto order-1 order-lg-2 "><img src="MyPic4.jpg" alt="CEO" style="max-width: 200px; clip-path:circle(45%);"></div>
          </div>
    </div>
  </div>

    </div>
  </div>

</div>
@endsection

