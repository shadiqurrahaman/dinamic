@extends('layouts.app')

@section('content')
    <section class="main-slider">
    <div class="container" >
        @role('admin')
        <h1>You are the Admin</h1>
        @endrole
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class='search-form' method="POST" action="{{ route('search') }}">
                             @csrf
                            <input class='form-control' placeholder='Search with addess, postcode, zipcode' type='text' name='search'>
                            <button class='btn btn-link search-btn' type="submit">
                            <i class='glyphicon glyphicon-search'></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    </section>
    <section class="recently portfolio">
        <div class="container">
            <div class="section-title">
                <h3>Recently</h3>
                <h2>Properties</h2>
            </div>
            <div class="row portfolio-items">
                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-1.jpg" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button alt sale">For Sale</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-1.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-2.jpg" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-2.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes no-pb pbp-3">
                    <div class="project-single no-mb mbp-3">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-3.jpg" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button alt sale">For Sale</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-3.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-all mt-5">
                <a href="properties-full-grid.html" class="btn btn-outline-light">View All</a>
            </div>
        </div>
    </section>

       <!-- STAR SECTION WELCOME -->
    <section class="welcome">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="welcome-title">
                        <h2>WELCOME TO <span>FIND HOUSES</span></h2>
                        <h4>THE BEST PLACE TO FIND THE HOUSE YOU WANT.</h4>
                    </div>
                    <div class="welcome-content">
                        <p> <span>FIND HOUSES</span> is the best place for elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minimam, quis nostrud exercitation oris nisi ut aliquip ex ea.</p>
                    </div>
                    <div class="welcome-services">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-xs-12 ">
                                <div class="w-single-services">
                                    <div class="services-img img-1">
                                        <img src="css/colors/icons/green/1.png" width="32" alt="">
                                    </div>
                                    <div class="services-desc">
                                        <h6>Buy Property</h6>
                                        <p>We have the best properties
                                            <br> elit, sed do eiusmod tempe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 ">
                                <div class="w-single-services">
                                    <div class="services-img img-2">
                                        <img src="css/colors/icons/green/2.png" width="32" alt="">
                                    </div>
                                    <div class="services-desc">
                                        <h6>Rent Property</h6>
                                        <p>We have the best properties
                                            <br> elit, sed do eiusmod tempe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 ">
                                <div class="w-single-services no-mb mbx">
                                    <div class="services-img img-3">
                                        <img src="css/colors/icons/green/3.png" width="32" alt="">
                                    </div>
                                    <div class="services-desc">
                                        <h6>Real Estate Kit</h6>
                                        <p>We have the best properties
                                            <br> elit, sed do eiusmod tempe</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-xs-12 ">
                                <div class="w-single-services no-mb">
                                    <div class="services-img img-4">
                                        <img src="css/colors/icons/green/4.png" width="32" alt="">
                                    </div>
                                    <div class="services-desc">
                                        <h6>Sell Property</h6>
                                        <p>We have the best properties
                                            <br> elit, sed do eiusmod tempe</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-xs-12">
                    <div class="wprt-image-video w50">
                        <img alt="image" src="images/projects/welcome.jpg">
                        <a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=2xHQqYRcrx4">
                            <i class="fa fa-play"></i>
                        </a>
                        <div class="iq-waves">
                            <div class="waves wave-1"></div>
                            <div class="waves wave-2"></div>
                            <div class="waves wave-3"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION WELCOME -->

      <!-- START SECTION SERVICES -->
    <section class="services-home bg-white">
        <div class="container">
            <div class="section-title">
                <h3>Property</h3>
                <h2>Services</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-12 m-top-0 m-bottom-40">
                    <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                        <div class="media">
                            <i class="fa fa-home bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                        </div>
                        <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                            <h4 class="m-bottom-15 text-bold-700">Houses</h4>
                            <p>Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo.</p>
                            <a class="text-base text-base-dark-hover text-size-13" href="properties-full-list.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 m-top-40 m-bottom-40">
                    <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                        <div class="media">
                            <i class="fas fa-building bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                        </div>
                        <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                            <h4 class="m-bottom-15 text-bold-700">Apartments</h4>
                            <p>Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo.</p>
                            <a class="text-base text-base-dark-hover text-size-13" href="properties-full-list.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 m-top-40 m-bottom-40 commercial">
                    <div class="service bg-light-2 border-1 border-light box-shadow-1 box-shadow-2-hover">
                        <div class="media">
                            <i class="fas fa-warehouse bg-base text-white rounded-100 box-shadow-1 p-top-5 p-bottom-5 p-right-5 p-left-5"></i>
                        </div>
                        <div class="agent-section p-top-35 p-bottom-30 p-right-25 p-left-25">
                            <h4 class="m-bottom-15 text-bold-700">Commercial</h4>
                            <p>Nonec pede justo fringilla vel aliquet nec vulputate eget arcu in enim justo rhoncus ut imperdiet venenatis vitae justo.</p>
                            <a class="text-base text-base-dark-hover text-size-13" href="properties-full-list.html">Read More <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION SERVICES -->

    <!-- START SECTION FEATURED PROPERTIES -->
    <section class="featured portfolio">
        <div class="container">
            <div class="row">
                <div class="section-title col-md-5">
                    <h3>Featured</h3>
                    <h2>Properties</h2>
                </div>
            </div>
            <div class="row portfolio-items">
                <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-

                                    video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-1.jpg" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button alt sale">For Sale</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-1.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people rent">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-2.jpg" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-2.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes sale">
                    <div class="project-single">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-3.jpg" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button alt sale">For Sale</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-3.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people landscapes rent no-pb">
                    <div class="project-single no-mb">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-4.jpg" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-4.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 col-xs-12 people sale no-pb">
                    <div class="project-single no-mb">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-5.jpg" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button alt sale">For Sale</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-5.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-lg-4 col-md-6 it2 col-xs-12 web rent no-pb">
                    <div class="project-single no-mb last">
                        <div class="project-inner project-head">
                            <div class="project-bottom">
                                <h4><a href="properties-details.html">View Property</a><span class="category">Real Estate</span></h4>
                            </div>
                            <div class="button-effect">
                                <a href="properties-details.html" class="btn"><i class="fa fa-link"></i></a>
                                <a href="https://www.youtube.com/watch?v=2xHQqYRcrx4" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                <a class="img-poppu btn" href="images/feature-properties/fp-6.jpg" data-rel="lightcase:myCollection:slideshow"><i class="fa fa-photo"></i></a>
                            </div>
                            <div class="homes">
                                <!-- homes img -->
                                <a href="properties-details.html" class="homes-img">
                                    <div class="homes-tag button alt featured">Featured</div>
                                    <div class="homes-tag button sale rent">For Rent</div>
                                    <div class="homes-price">Family Home</div>
                                    <img src="images/feature-properties/fp-6.jpg" alt="home-1" class="img-responsive">
                                </a>
                            </div>
                        </div>
                        <!-- homes content -->
                        <div class="homes-content">
                            <!-- homes address -->
                            <h3>Real House Luxury Villa</h3>
                            <p class="homes-address mb-3">
                                <a href="properties-details.html">
                                    <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                                </a>
                            </p>
                            <!-- homes List -->
                            <ul class="homes-list clearfix">
                                <li>
                                    <i class="fa fa-bed" aria-hidden="true"></i>
                                    <span>6 Bedrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-bath" aria-hidden="true"></i>
                                    <span>3 Bathrooms</span>
                                </li>
                                <li>
                                    <i class="fa fa-object-group" aria-hidden="true"></i>
                                    <span>720 sq ft</span>
                                </li>
                                <li>
                                    <i class="fas fa-warehouse" aria-hidden="true"></i>
                                    <span>2 Garages</span>
                                </li>
                            </ul>
                            <!-- Price -->
                            <div class="price-properties">
                                <h3 class="title mt-3">
                                <a href="properties-details.html">$ 230,000</a>
                                </h3>
                                <div class="compare">
                                    <a href="#" title="Compare">
                                        <i class="fas fa-exchange-alt"></i>
                                    </a>
                                    <a href="#" title="Share">
                                        <i class="fas fa-share-alt"></i>
                                    </a>
                                    <a href="#" title="Favorites">
                                        <i class="fa fa-heart-o"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="footer">
                                <a href="agent-details.html">
                                    <i class="fa fa-user"></i> Jhon Doe
                                </a>
                                <span>
                                <i class="fa fa-calendar"></i> 2 months ago
                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION FEATURED PROPERTIES -->

     <!-- START SECTION POPULAR PLACES -->
    <section class="popular-places">
        <div class="container">
            <div class="section-title">
                <h3>Most Popular</h3>
                <h2>Places</h2>
            </div>
            <div class="row">
                <div class="col-md-12">
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Image Box -->
                    <a href="properties-right-sidebar.html" class="img-box hover-effect">
                        <img src="images/popular-places/1.jpg" class="img-responsive" alt="">
                        <!-- Badge -->
                        <div class="listing-badges">
                            <span class="featured">Featured</span>
                        </div>
                        <div class="img-box-content visible">
                            <h4>New York City </h4>
                            <span>203 Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-8 col-md-6">
                    <!-- Image Box -->
                    <a href="properties-right-sidebar.html" class="img-box hover-effect">
                        <img src="images/popular-places/2.jpg" class="img-responsive" alt="">
                        <div class="img-box-content visible">
                            <h4>Los Angeles</h4>
                            <span>307 Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-8 col-md-6">
                    <!-- Image Box -->
                    <a href="properties-right-sidebar.html" class="img-box hover-effect no-mb">
                        <img src="images/popular-places/3.jpg" class="img-responsive" alt="">
                        <div class="img-box-content visible">
                            <h4>San Francisco </h4>
                            <span>409 Properties</span>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Image Box -->
                    <a href="properties-right-sidebar.html" class="img-box hover-effect no-mb x3">
                        <img src="images/popular-places/4.jpg" class="img-responsive" alt="">
                        <!-- Badge -->
                        <div class="listing-badges">
                            <span class="featured">Featured</span>
                        </div>
                        <div class="img-box-content visible">
                            <h4>Miami</h4>
                            <span>507 Properties</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION POPULAR PLACES -->

    <!-- START SECTION AGENTS -->
    <section class="team">
        <div class="container">
            <div class="section-title col-md-5">
                <h3>Meet Our</h3>
                <h2>Agents</h2>
            </div>
            <div class="row team-all">
                <div class="col-lg-3 col-md-6 team-pro hover-effect">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="images/team/t-5.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>Carls Jhons</h3>
                                <p>Real Estate Agent</p>
                                <div class="team-socials">
                                    <ul>
                                        <li>
                                            <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span><a href="agent-details.html">View Profile</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 team-pro hover-effect">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="images/team/t-6.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>Arling Tracy</h3>
                                <p>Real Estate Agent</p>
                                <div class="team-socials">
                                    <ul>
                                        <li>
                                            <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span><a href="agent-details.html">View Profile</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 team-pro pb-none hover-effect">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="images/team/t-7.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>Mark Web</h3>
                                <p>Real Estate Agent</p>
                                <div class="team-socials">
                                    <ul>
                                        <li>
                                            <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span><a href="agent-details.html">View Profile</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 team-pro hover-effect">
                    <div class="team-wrap">
                        <div class="team-img">
                            <img src="images/team/t-8.jpg" alt="" />
                        </div>
                        <div class="team-content">
                            <div class="team-info">
                                <h3>Katy Grace</h3>
                                <p>Real Estate Agent</p>
                                <div class="team-socials">
                                    <ul>
                                        <li>
                                            <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <span><a href="agent-details.html">View Profile</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION AGENTS -->

  <!-- STAR SECTION PARTNERS -->
    <div class="partners">
        <div class="container">
            <div class="section-title">
                <h3>Our</h3>
                <h2>Partners</h2>
            </div>
            <div class="owl-carousel style2">
                <div class="owl-item"><img src="images/partners/1.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/2.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/3.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/4.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/5.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/6.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/7.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/8.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/9.png" alt=""></div>
                <div class="owl-item"><img src="images/partners/10.png" alt=""></div>
            </div>
        </div>
    </div>
    <!-- END SECTION PARTNERS -->

    <!-- START SECTION COUNTER UP -->
    <section class="counterup">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="countr">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <div class="count-me">
                            <p class="counter text-left">300</p>
                            <h3>Sold Houses</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="countr">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <div class="count-me">
                            <p class="counter text-left">400</p>
                            <h3>Daily Listings</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="countr mb-0">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <div class="count-me">
                            <p class="counter text-left">250</p>
                            <h3>Expert Agents</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="countr mb-0 last">
                        <i class="fa fa-trophy" aria-hidden="true"></i>
                        <div class="count-me">
                            <p class="counter text-left">200</p>
                            <h3>Won Awars</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION COUNTER UP -->

    <!-- START SECTION NEWSLETTER -->
    <section class="subscribe">
        <div class="realhome_subscribe">
            <div class="realhome container">
                <h2>Subscribe for Our Newsletter</h2>
                <div class="row align-center">
                    <div class="col-lg-6 col-md-6">
                        <form class="realhome_form_subscribe mailchimp form-inline" method="post">
                            <input type="email" id="subscribeEmail" name="EMAIL" class="form_email" placeholder="Enter Your Email">
                            <button type="submit" value="Subscribe">Submit</button>
                            <label for="subscribeEmail" class="error"></label>
                            <p class="subscription-success"></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION NEWSLETTER -->

      <!-- START FOOTER -->
    <footer class="first-footer">
        <div class="top-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="netabout">
                            <a href="index.html" class="logo">
                                <img src="css/colors/icons/green/logo-footer_1.svg" alt="logo">
                            </a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus impedit perferendis, laudantium molestiae ipsam rem veniam facere quos! Temporibus, minima culpa deleniti magnam.</p>
                            <a href="about.html" class="btn btn-secondary">Read More...</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="navigation">
                            <h3>Navigation</h3>
                            <div class="nav-footer">
                                <ul>
                                    <li><a href="index.html">Home One</a></li>
                                    <li><a href="properties-right-sidebar.html">Properties Right</a></li>
                                    <li><a href="properties-full-list.html">Properties List</a></li>
                                    <li><a href="properties-details.html">Property Details</a></li>
                                    <li class="no-mgb"><a href="agents-listing-grid.html">Agents Listing</a></li>
                                </ul>
                                <ul class="nav-right">
                                    <li><a href="agent-details.html">Agents Details</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="blog.html">Blog Default</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                    <li class="no-mgb"><a href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="widget">
                            <h3>Twitter Feeds</h3>
                            <div class="twitter-widget contuct">
                                <div class="twitter-area">
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="text">
                                            <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                            <h4>about 5 days ago</h4>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="text">
                                            <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                            <h4>about 5 days ago</h4>
                                        </div>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-holder">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </div>
                                        <div class="text">
                                            <h5><a href="#">@findhouses</a> all share them with me baby said inspet.</h5>
                                            <h4>about 5 days ago</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="contactus">
                            <h3>Contact Us</h3>
                            <ul>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <p class="in-p">95 South Park Ave, USA</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        <p class="in-p">+456 875 369 208</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="info">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                        <p class="in-p ti">support@findhouses.com</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <ul class="netsocials">
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="container">
                <p>2018 © Copyright - All Rights Reserved.</p>
                <p>Made With <i class="fa fa-heart" aria-hidden="true"></i> By Code-Theme</p>
            </div>
        </div>
    </footer>
        <a data-scroll href="#heading" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>




@endsection
