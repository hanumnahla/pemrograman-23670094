@extends('landing.layouts.app')
@section('content')
<section class="float-left w-100 sub-banner-con postion-relative main-box">
    <figure><img src="assets/images/sub-banner-vector.png" alt="icon" class="position-absolute sub-vector"></figure>
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-md-6">
          <div class="sub-banner-img-con">
            <figure><img src="assets/images/about-banner-img.jpg" alt="image"></figure>
            <!-- sub banner img con -->
          </div>
          <!-- col -->
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="sub-banner-content-wrap">
            <div class="breadcrumb-con d-inline-block">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
              </ol>
              <!-- breadcrumb -->
            </div>
            <h1 class="green-text">
              Our Testimonial
            </h1>
            <p class="font-weight-light mb-0">Quis autem vel eum iure reprehenderit qui
              ea voluptate velit esse quam nihil molestiae consequatur dolorem.</p>
            <!-- sub banner content wrapper -->
          </div>
          <!-- col -->
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!-- banner con -->
  </section>
  <!-- bg outer wrapper -->
</div>

    <!-- SEARCH BAR -->
    <div id="search" class="">
      <span class="close">X</span>
      <form role="search" id="searchform" method="get">
        <input value="" name="q" type="search" placeholder="Type to Search">
      </form>
    </div>
<!-- TESTIMONIALS SECTION -->
<div class="float-left w-100 position-relative testimonials-con padding-top padding-bottom main-box">
  <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
    <div class="row align-items-center">
      <div class="col-lg-5 col-md-5">
        <div class="testimonial-img-con position-relative">
          <figure><img src="assets/images/testimonial-img.jpg" alt="image"
              class="img-fluid border-radius5 z-index-1 position-relative img1">
          </figure>
          <figure><img src="assets/images/green-elipse.png" alt="image" class="position-absolute green-elipse"></figure>
          <!-- testimonial img con -->
        </div>

        <!-- col -->
      </div>
      <div class="col-lg-7 col-md-7">
        <!-- OWL CAROUSEL -->
        <div class="owl-carousel owl-theme">
          <div class="item">
            <div class="project-testimonial-content-con">
              <figure><img src="assets/images/testimonial-quote-icon.png" alt="icon" class="img-fluid quote-icon">
              </figure>
              <p class="font-italic">”Quisquam est, qui dolorem ipsum quia dolor sit
                consectetur adipisci velit sed quia non numquam
                eius modi tempora incidunt ut labore et dolore
                magnam aliquam quaerat voluptatem”</p>
              <img src="assets/images/testimonials-stars.png" alt="stars" class="img-fluid stars">
              <span class="d-inline-block green-text playfair-font font-weight-bold name">Alina Parker</span> <span
                class="d-inline-block designation playfair-font font-weight-bold">Ceo, GTD</span>
              <!-- project testimonial content con -->
            </div>
            <!-- item -->
          </div>
          <div class="item">
            <div class="project-testimonial-content-con">
              <figure><img src="assets/images/testimonial-quote-icon.png" alt="icon" class="img-fluid quote-icon">
              </figure>
              <p class="font-italic">”Quisquam est, qui dolorem ipsum quia dolor sit
                consectetur adipisci velit sed quia non numquam
                eius modi tempora incidunt ut labore et dolore
                magnam aliquam quaerat voluptatem”</p>
              <img src="assets/images/testimonials-stars.png" alt="stars" class="img-fluid stars">
              <span class="d-inline-block green-text playfair-font font-weight-bold name">Alina Parker</span> <span
                class="d-inline-block designation playfair-font font-weight-bold">Ceo, GTD</span>
              <!-- project testimonial content con -->
            </div>
            <!-- item -->
          </div>
          <!-- owl carousel -->
        </div>
        <!-- col -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
</div>
@endsection