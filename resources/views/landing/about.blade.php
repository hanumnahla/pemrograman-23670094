@extends('landing.layouts.app')
@section('content')
<div class="loader-mask">
  <div class="loader">
    <div></div>
    <div></div>
  </div>
</div>
<!-- OUTER BG WRAPPER -->
<div class="bg-outer-wrapper position-relative float-left w-100 background-f7f9ff sub-banner-wrapper">
  <!-- HEADER SECTION -->
  <header class="w-100 float-left header-con main-box">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.html">
          <figure class="mb-0">
            <img src="assets/images/logo.png" alt="logo-icon">
          </figure>
        </a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link p-0" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active p-0" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link p-0" href="menu.html">Menu</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown5" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">Pages</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown5">
                <a class="dropdown-item active" href="about.html">About</a>
                <a class="dropdown-item" href="gallery.html">Gallery</a>
                <a class="dropdown-item" href="menu.html">Menu</a>
                <a class="dropdown-item" href="team.html">Team</a>
                <a class="dropdown-item" href="shop.html">Shop</a>
                <a class="dropdown-item" href="cart.html">Cart</a>
                <a class="dropdown-item" href="product-detail.html">Product Detail</a>
                <a class="dropdown-item" href="checkout.html">Checkout</a>
                <a class="dropdown-item" href="404.html">404</a>
                <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                <a class="dropdown-item" href="testimonial.html">Testimonial</a>

              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle p-0" href="blog.html" id="navbarDropdown4" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
                <a class="dropdown-item" href="blog.html">Blog</a>
                <a class="dropdown-item" href="load-more.html">Load More</a>
                <a class="dropdown-item" href="single-blog.html">Single Blog</a>
                <a class="dropdown-item" href="one-column.html">One Column</a>
                <a class="dropdown-item" href="two-column.html">Two Column</a>
                <a class="dropdown-item" href="three-column.html">Three Column</a>
                <a class="dropdown-item" href="three-colum-sidbar.html">Three Column Sidbar</a>
                <a class="dropdown-item" href="four-column.html">Four Column</a>
                <a class="dropdown-item" href="six-colum-full-wide.html">Six Column</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link p-0" href="contact.html">Contact</a>
            </li>
          </ul>
          <!-- navbar collapse -->
        </div>
        <div class="header-contact">
          <ul class="list-unstyled mb-0">
            <li class="d-inline-block icon-listing"><a class="icon position-relative d-inline-block" href="#search">
                <figure class=""><img src="assets/images/search-icon.png" alt=""></figure>
              </a></li>
            <li class="d-inline-block btn-listing"><a href="shop.html" class="contact-btn d-inline-block">Order
                Now</a></li>

            <!-- list unstyled -->
          </ul>
          <!-- header contact -->
        </div>
      </nav>
      <!-- container -->
    </div>
    <!-- header-con -->
  </header>
    <!-- SEARCH BAR -->
    <div id="search" class="">
      <span class="close">X</span>
      <form role="search" id="searchform" method="get">
        <input value="" name="q" type="search" placeholder="Type to Search">
      </form>
    </div>
  <!-- BANNER SECTION -->
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
                <li class="breadcrumb-item active" aria-current="page">About</li>
              </ol>
              <!-- breadcrumb -->
            </div>
            <h1 class="green-text">
              About Us
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

<!-- OFFER BEST WAY SECTION -->
<section class="float-left w-100 offer-best-way-con position-relative padding-top main-box text-center">
  <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
    <div class="heading-title-con">
      <h2>We Offer Best Way To <br>
        Eat Delicious Food</h2>
    </div>
    <div class="row align-items-center">
      <div class="col-lg-4 col-md-4 d-flex">
        <div class="offer-box w-100 postion-relative">
          <figure><img src="assets/images/offer-icon1.png" alt="icon" class="img-fluid"></figure>
          <h4 class="special barlow-font">Healthy Food</h4>
          <!-- offer box -->
        </div>
        <!-- col -->
      </div>
      <div class="col-lg-4 col-md-4 d-flex">
        <div class="offer-box w-100 postion-relative">
          <figure><img src="assets/images/offer-icon2.png" alt="icon" class="img-fluid"></figure>
          <h4 class="special barlow-font">Great Taste</h4>
          <!-- offer box -->
        </div>
        <!-- col -->
      </div>
      <div class="col-lg-4 col-md-4 d-flex">
        <div class="offer-box w-100 postion-relative">
          <figure><img src="assets/images/offer-icon3.png" alt="icon" class="img-fluid"></figure>
          <h4 class="special barlow-font">Fast Service</h4>
          <!-- offer box -->
        </div>
        <!-- col -->
      </div>
      <!-- row -->
    </div>

    <!-- container -->
  </div>
  <!-- offer best way con -->
</section>
<!-- QUALITY ITEMS SECTION -->
<section class="float-left w-100 postion-relative padding-top padding-bottom quality-items-con main-box">
  <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="quality-content-con">
          <div class="heading-title-con mb-0">
            <h2>We Made Always
              Quality Items</h2>
            <p>Quis autem vel eum iure reprehenderit qui in evoluptate velit esse quam nihil molestiae consequatur, vel
              illum qui dolorem eum fugiat quo voluptas nulla pariatureaque ipsa quae ab illo inventore veritatis et
              quasi architecto beatae vitae dicta sunt explicabo.</p>
            <p class="last-text">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci
              velit, sed quia
              non numquam eius .</p>
            <div class="secondary-button d-inline-block">
              <a href="menu.html" class="d-inline-block">Our Menu</a>
            </div>
            <!-- heading-title-con -->
          </div>
          <!-- quality content con -->
        </div>
        <!-- col -->
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="video-inner-wrap position-relative d-table w-100 float-left">
          <div class="d-table-cell align-middle text-center">
            <div class="video_icon position-relative">
              <a class="popup-vimeo"
                href="https://video-previews.elements.envatousercontent.com/eacc389c-31a5-4367-ae2a-8401d73085e7/watermarked_preview/watermarked_preview.mp4">
                <div class="video_wrapper">
                  <figure class="mb-0">
                    <img class="thumb img-fluid text-center" style="cursor: pointer"
                      src="./assets/images/video-icon.png" alt="video-icon">
                  </figure>
                  <!-- video wrapper -->
                </div>
                <!-- popup vimeo -->
              </a>
              <!-- video icon -->
            </div>
            <!-- table cell -->
          </div>
          <!-- video inner wrap -->
        </div>
        <!-- col -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
  <!-- quality items con -->
</section>

<!-- MEET OUR TEAM SECTION -->
<section
  class="float-left w-100 position-relative meet-our-team-con padding-top padding-bottom main-box background-f7f9ff text-center">
  <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
    <div class="heading-title-con text-center">
      <h2 class="mb-0">Meet Our Team </h2>
      <!-- heading title con -->
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex">
        <div class="team-box w-100 postion-relative">
          <figure><img src="assets/images/team-member1.jpg" alt="image" class="img-fluid"></figure>
          <span class="d-block barlow-font">Henderson</span>
          <!-- team box -->
        </div>
        <!-- col -->
      </div>
      <div class="col-lg-4 col-md-6 d-flex">
        <div class="team-box w-100 postion-relative">
          <figure><img src="assets/images/team-member2.jpg" alt="image" class="img-fluid"></figure>
          <span class="d-block barlow-font">Rutherford</span>
          <!-- team box -->
        </div>
        <!-- col -->
      </div>
      <div class="col-lg-4 col-md-6 d-flex">
        <div class="team-box w-100 postion-relative">
          <figure><img src="assets/images/team-member3.jpg" alt="image" class="img-fluid"></figure>
          <span class="d-block barlow-font">Sanderson</span>
          <!-- team box -->
        </div>
        <!-- col -->
      </div>
      <div class="col-lg-4 col-md-6 d-flex">
        <div class="team-box w-100 postion-relative">
          <figure><img src="assets/images/team-member4.jpg" alt="image" class="img-fluid"></figure>
          <span class="d-block barlow-font">Christopher</span>
          <!-- team box -->
        </div>
        <!-- col -->
      </div>
      <div class="col-lg-4 col-md-6 d-flex">
        <div class="team-box w-100 postion-relative">
          <figure><img src="assets/images/team-member5.jpg" alt="image" class="img-fluid"></figure>
          <span class="d-block barlow-font">Alexander</span>
          <!-- team box -->
        </div>
        <!-- col -->
      </div>
      <div class="col-lg-4 col-md-6 d-flex">
        <div class="team-box w-100 postion-relative">
          <figure><img src="assets/images/team-member6.jpg" alt="image" class="img-fluid"></figure>
          <span class="d-block barlow-font">Bernadette</span>
          <!-- team box -->
        </div>
        <!-- col -->
      </div>
      <!-- row -->
    </div>

    <!-- container -->
  </div>
</section>

<!-- OUR AWARDS SECTION -->
<section class="float-left w-100 our-awards-con position-relative padding-top main-box text-center">
  <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
    <div class="heading-title-con text-center">
      <h2 class="mb-0">Our Awards </h2>
      <!-- heading title con -->
    </div>
    <ul class="list-unstyled p-0 m-0 text-center d-flex align-items-center justify-content-between">
      <li class="position-relative d-inline-block">
        <figure class=""><img src="assets/images/logo-img1.png" alt="image" class="img-fluid"></figure>
      </li>
      <li class="position-relative d-inline-block">
        <figure class=""><img src="assets/images/logo-img2.png" alt="image" class="img-fluid"></figure>
      </li>
      <li class="position-relative d-inline-block">
        <figure class=""><img src="assets/images/logo-img3.png" alt="image" class="img-fluid"></figure>
      </li>
      <li class="position-relative d-inline-block">
        <figure class=""><img src="assets/images/logo-img4.png" alt="image" class="img-fluid"></figure>
      </li>
      <li class="position-relative d-inline-block">
        <figure class=""><img src="assets/images/logo-img5.png" alt="image" class="img-fluid"></figure>
      </li>
    </ul>
    <!-- container -->
  </div>
  <!-- our awards con -->
</section>
<!-- TESTIMONIALS SECTION -->
<div class="float-left w-100 position-relative testimonials-con padding-top padding-bottom main-box">
  <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
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

<!-- RESERVE A TABLE SECTION -->
<section
  class="float-left w-100 position-relative padding-top padding-bottom main-box reserve-table-con background-f7f9ff">
  <div class="container wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
    <div class="heading-title-con text-center">
      <span class="d-block special-text green-text playfair-font font-weight-light">Book Now</span>
      <h2 class="mb-0">Reserve a Table </h2>
      <!-- heading title con -->
    </div>
    <div class="row">
      <div class="col-xl-12 col-lg-12">
        <form class="main-form text-center" method="post" id="contactpage">
          <ul class="list-unstyled p-0 float-left w-100">
            <li>
              <input type="text" placeholder="Name" name="fname" id="fname">
            </li>
            <li>
              <input type="tel" placeholder="Phone" name="phone" id="phone">
            </li>
            <li>
              <input type="email" placeholder="Email" name="email" id="email">
            </li>
            <li>
              <input type="date" name="date" id="date">
            </li>
            <li>
              <input type="time" name="time" id="time">
            </li>
            <li>
              <input type="number" placeholder="Members" name="member" id="member">
            </li>
          </ul>
          <div class="secondary-button d-inline-block">
            <button type="submit" id="submit">Book Now</button>
          </div>
        </form>
        <!-- col -->
      </div>
      <!-- row -->
    </div>
    <!-- container -->
  </div>
</section>