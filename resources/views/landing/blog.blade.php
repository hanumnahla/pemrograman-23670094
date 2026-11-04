@extends('landing.layouts.app')
@section('content')
<section class="float-left w-100 sub-banner-con postion-relative main-box">
            <figure><img src="assets/images/sub-banner-vector.png" alt="icon" class="position-absolute sub-vector">
            </figure>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <div class="sub-banner-img-con">
                            <figure><img src="assets/images/sub-banner-image.jpg" alt="image"></figure>
                            <!-- sub banner img con -->
                        </div>
                        <!-- col -->
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="sub-banner-content-wrap">
                            <div class="breadcrumb-con d-inline-block">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                </ol>
                                <!-- breadcrumb -->
                            </div>
                            <h1 class="green-text">
                                Blog Posts
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
        <section class="blog-posts blogpage-section three-column-con w-100 float-left main-blogs-wrap" id="three">
        <div class="container">
            <div class="row wow fadeIn" data-wow-duration="2s" data-wow-delay="0.3s">
                <div id="blog" class="col-xl-12">
                    <!--   -->
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="blog-box blog-box1">
                                <figure class="blog-image mb-0">
                                    <img src="./assets/images/blog-image1.jpg" alt="image" class="img-fluid"
                                        loading="lazy">
                                </figure>
                                <div class="lower-portion">
                                    <div class="span-i-con">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span class="text-size-14 text-mr barlow-font"> 25 Dec, 2024 | by admin</span>

                                    </div>
                                    <a href="single-blog.html">
                                        <h4>Molestiae non recusandae
                                            Itaque earum sunt</h4>
                                    </a>
                                    <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt exlicao
                                        alias.</p>
                                    <a href="single-blog.html" class="readmore-link orange-text">Read More <i
                                            class="fas fa-arrow-right ml-2"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="blog-box blog-box1">
                                <figure class="blog-image mb-0">
                                    <img src="./assets/images/blog-image2.jpg" alt="image" class="img-fluid"
                                        loading="lazy">
                                </figure>
                                <div class="lower-portion">
                                    <div class="span-i-con">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span class="text-size-14 text-mr barlow-font"> 25 Dec, 2024 | by admin</span>

                                    </div>
                                    <a href="single-blog.html">
                                        <h4>Repudiandae sint moleta non recusandae</h4>
                                    </a>
                                    <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt exlicao
                                        alias.</p>
                                    <a href="single-blog.html" class="readmore-link orange-text">Read More <i
                                            class="fas fa-arrow-right ml-2"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="blog-box blog-box1">
                                <figure class="blog-image mb-0">
                                    <img src="./assets/images/blog-image3.jpg" alt="image" class="img-fluid"
                                        loading="lazy">
                                </figure>
                                <div class="lower-portion">
                                    <div class="span-i-con">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span class="text-size-14 text-mr barlow-font"> 25 Dec, 2024 | by admin</span>

                                    </div>
                                    <a href="single-blog.html">
                                        <h4>Alias consequatur aut perferendis dolor</h4>
                                    </a>
                                    <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt exlicao
                                        alias.</p>
                                    <a href="single-blog.html" class="readmore-link orange-text">Read More <i
                                            class="fas fa-arrow-right ml-2"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="blog-box blog-box1">
                                <figure class="blog-image mb-0">
                                    <img src="./assets/images/blog-image4.jpg" alt="image" class="img-fluid"
                                        loading="lazy">
                                </figure>
                                <div class="lower-portion">
                                    <div class="span-i-con">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span class="text-size-14 text-mr barlow-font"> 25 Dec, 2024 | by admin</span>

                                    </div>
                                    <a href="single-blog.html">
                                        <h4>Omnis dolor repellendus temporibus autem</h4>
                                    </a>
                                    <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt exlicao
                                        alias.</p>
                                    <a href="single-blog.html" class="readmore-link orange-text">Read More <i
                                            class="fas fa-arrow-right ml-2"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="blog-box blog-box1">
                                <figure class="blog-image mb-0">
                                    <img src="./assets/images/blog-image5.jpg" alt="image" class="img-fluid"
                                        loading="lazy">
                                </figure>
                                <div class="lower-portion">
                                    <div class="span-i-con">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span class="text-size-14 text-mr barlow-font"> 25 Dec, 2024 | by admin</span>

                                    </div>
                                    <a href="single-blog.html">
                                        <h4>Excepteur sint occaeca
                                            cupidatat proident</h4>
                                    </a>
                                    <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt exlicao
                                        alias.</p>
                                    <a href="single-blog.html" class="readmore-link orange-text">Read More <i
                                            class="fas fa-arrow-right ml-2"></i></a>
                                </div>

                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="blog-box blog-box1">
                                <figure class="blog-image mb-0">
                                    <img src="./assets/images/blog-image6.jpg" alt="image" class="img-fluid"
                                        loading="lazy">
                                </figure>
                                <div class="lower-portion">
                                    <div class="span-i-con">
                                        <i class="fa-solid fa-calendar-days"></i>
                                        <span class="text-size-14 text-mr barlow-font"> 25 Dec, 2024 | by admin</span>

                                    </div>
                                    <a href="single-blog.html">
                                        <h4>Duis aute irure dolor in reprehenderit </h4>
                                    </a>
                                    <p>Quisquam est, qui dolorem ipsum quia dolor sit amet vitae dicta sunt exlicao
                                        alias.</p>
                                    <a href="single-blog.html" class="readmore-link orange-text">Read More <i
                                            class="fas fa-arrow-right ml-2"></i></a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="pagination-con">
                        <ul class="pagination mb-0 justify-content-center">
                            <li class="page-item ml-0"><a class="page-link" href="shop.html"><i
                                        class="fas fa-arrow-left"></i></a></li>
                            <li class="page-item"><a class="page-link active" href="product-detail.html">1</a></li>
                            <li class="page-item"><a class="page-link" href="cart.html">2</a></li>
                            <li class="page-item"><a class="page-link" href="checkout.html">3</a></li>
                            <li class="page-item mr-0"><a class="page-link" href="product-detail.html"><i
                                        class="fas fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section
        class="float-left w-100 position-relative padding-top padding-bottom main-box reserve-table-con background-f7f9ff">
        <div class="container wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.3s">
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
    @endsection