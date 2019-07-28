
@extends('layouts.app')

@section('content')

<section class="blog details">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 blog-pots">
                <!-- Block heading Start-->
                <div class="block-heading details">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-2">
                            <h4>
                            <span class="heading-icon">
                                <i class="fa fa-map-marker"></i>
                                </span>
                                <span class="hidden-sm-down">995 South Park Avenue</span>
                            </h4>
                        </div>
                        <div class="col-lg-6 col-md-6 col-10 cod-pad">
                            <div class="sorting-options">
                                <h5><span>Price:</span> $28,000</h5>
                                <h6 class="type"><span>Type:</span> For Sale</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Block heading end -->
                <div class="row">
                    <div class="col-md-12 mb-4">
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <img class="d-block img-fluid" src="{{asset('images/slider/home-slider-1.jpg')}}" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="{{asset('images/slider/home-slider-2.jpg')}}" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="{{asset('images/slider/home-slider-3.jpg')}}" alt="Third slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="{{asset('images/slider/home-slider-4.jpg')}}" alt="Second slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <div class="blog-info details">
                            <!-- cars content -->
                            <div class="homes-content details-2 mb-5">
                                <!-- cars List -->
                                <ul class="homes-list clearfix">
                                    <li>
                                        <i class="fa fa-bed" aria-hidden="true"></i>
                                        <span>Beds 6</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-bath" aria-hidden="true"></i>
                                        <span>Baths 3</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-object-group" aria-hidden="true"></i>
                                        <span>720 sq ft</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-car" aria-hidden="true"></i>
                                        <span>Garages 2</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-columns" aria-hidden="true"></i>
                                        <span>Kitchen 2</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-clone" aria-hidden="true"></i>
                                        <span>Balcony 2</span>
                                    </li>
                                </ul>
                            </div>
                            <h5 class="mb-4">GENERAL INFORMATION</h5>
                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                            <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit, alias fuga aliquam quod tempora a nisi esse magnam nulla quas! Error praesentium, vero dolorum laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum rerum beatae consequatur, totam fugit.</p>
                        </div>
                    </div>
                </div>
                <!-- cars content -->
                <div class="homes-content details mb-5">
                    <!-- title -->
                    <h5 class="mb-4">Amenities</h5>
                    <!-- cars List -->
                    <ul class="homes-list clearfix">
                        <li>
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                            <span>Air Cond</span>
                        </li>
                        <li>
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                            <span>Balcony</span>
                        </li>
                        <li>
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                            <span>Internet</span>
                        </li>
                        <li>
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                            <span>Dishwasher</span>
                        </li>
                        <li>
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                            <span>Bedding</span>
                        </li>
                        <li>
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                            <span>Cable TV</span>
                        </li>
                        <li>
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                            <span>Parking</span>
                        </li>
                        <li>
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                            <span>Pool</span>
                        </li>
                        <li>
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                            <span>Fridge</span>
                        </li>
                    </ul>
                </div>
                <div class="property-location mb-5">
                    <h5>Location</h5>
                    <div class="divider-fade"></div>
                    <div id="map-contact" class="contact-map"></div>
                </div>
                <!-- START SECTION ASSIGNED AGENTS -->
                <section class="team assigned">
                    <div class="container">
                        <h5>Assigned Agents</h5>
                        <div class="row team-all">
                            <div class="col-lg-4 col-md-6 team-pro hover-effect">
                                <div class="team-wrap">
                                    <div class="team-img">
                                        <img src="images/team/t-5.jpg" alt="" />
                                    </div>
                                    <div class="team-content">
                                        <div class="team-info">
                                            <h3>Andrew Crow</h3>
                                            <p>Real Estate Agents</p>
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
                            <div class="col-lg-4 col-md-6 team-pro hover-effect">
                                <div class="team-wrap">
                                    <div class="team-img">
                                        <img src="images/team/t-6.jpg" alt="" />
                                    </div>
                                    <div class="team-content">
                                        <div class="team-info">
                                            <h3>Marie Tyler</h3>
                                            <p>Real Estate Agents</p>
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
                            <div class="col-lg-4 col-md-6 team-pro pb-none pb-on hover-effect">
                                <div class="team-wrap">
                                    <div class="team-img">
                                        <img src="images/team/t-7.jpg" alt="" />
                                    </div>
                                    <div class="team-content">
                                        <div class="team-info">
                                            <h3>Phillip Smith</h3>
                                            <p>Real Estate Agents</p>
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
                <!-- END SECTION ASSIGNED AGENTS -->
            </div>
            <aside class="col-lg-3 col-md-12 car">
                <div class="widget">
                    <div class="section-heading">
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="media-body">
                                <h5>Search Properties</h5>
                                <div class="border"></div>
                                <p>Search your Properties</p>
                            </div>
                        </div>
                    </div>
                    <!-- Search Fields -->
                    <div class="main-search-field">
                        <h5 class="title">Filter</h5>
                        <form method="GET">
                            <div class="at-col-default-mar">
                                <select>
                                    <option value="0" selected>Location</option>
                                    <option value="1">New York</option>
                                    <option value="2">Los Angeles</option>
                                    <option value="3">Chicago</option>
                                    <option value="4">Philadelphia</option>
                                    <option value="5">San Francisco</option>
                                </select>
                            </div>
                            <div class="at-col-default-mar">
                                <select class="div-toggle" data-target=".my-info-1">
                                    <option value="0" data-show=".acitveon" selected>Property Status</option>
                                    <option value="1" data-show=".sale">For Sale</option>
                                    <option value="2" data-show=".rent">For Rent</option>
                                    <option value="3" data-show=".rent">Sold</option>
                                </select>
                            </div>
                            <div class="at-col-default-mar">
                                <div class="at-col-default-mar">
                                    <select>
                                        <option value="0" selected>Property Type</option>
                                        <option value="1">Family House</option>
                                        <option value="2">Apartment</option>
                                        <option value="3">Condo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="at-col-default-mar">
                                <select>
                                    <option value="0" selected>Beds</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="at-col-default-mar">
                                <select>
                                    <option value="0" selected>Baths</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="col-lg-12 no-pds">
                                <div class="at-col-default-mar">
                                    <input class="at-input" type="text" name="min-area" placeholder="Squre Fit Min">
                                </div>
                            </div>
                            <div class="col-lg-12 no-pds my-4">
                                <div class="at-col-default-mar">
                                    <input class="at-input" type="text" name="max-area" placeholder="Squre Fit Max">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Price Fields -->
                    <div class="main-search-field-2">
                        <div class="range-slider">
                            <input type="text" disabled class="slider_amount m-t-lg-30 m-t-xs-0 m-t-sm-10">
                            <div class="slider-range"></div>
                        </div>
                    </div>
                    <div class="col-lg-12 no-pds">
                        <div class="at-col-default-mar">
                            <button class="btn btn-default hvr-bounce-to-right" type="submit">Search</button>
                        </div>
                    </div>
                    <div class="recent-post py-5">
                        <h5 class="font-weight-bold mb-4">Recent Properties</h5>
                        <div class="recent-main">
                            <div class="recent-img">
                                <a href="blog-details.html"><img src="{{asset('images/feature-properties/fp-1.jpg')}}" alt=""></a>
                            </div>
                            <div class="info-img">
                                <a href="blog-details.html"><h6>Family Home</h6></a>
                                <p>$230,000</p>
                            </div>
                        </div>
                        <div class="recent-main my-4">
                            <div class="recent-img">
                                <a href="blog-details.html"><img src="{{asset('images/feature-properties/fp-2.jpg')}}" alt=""></a>
                            </div>
                            <div class="info-img">
                                <a href="blog-details.html"><h6>Family Home</h6></a>
                                <p>$230,000</p>
                            </div>
                        </div>
                        <div class="recent-main">
                            <div class="recent-img">
                                <a href="blog-details.html"><img src="{{asset('images/feature-properties/fp-3.jpg')}}" alt=""></a>
                            </div>
                            <div class="info-img">
                                <a href="blog-details.html"><h6>Family Home</h6></a>
                                <p>$230,000</p>
                            </div>
                        </div>
                    </div>
                    <div class="recent-post">
                        <h5 class="font-weight-bold mb-4">Popolar Tags</h5>
                        <div class="tags">
                            <span><a href="#" class="btn btn-outline-primary">Houses</a></span>
                            <span><a href="#" class="btn btn-outline-primary">Real Home</a></span>
                        </div>
                        <div class="tags">
                            <span><a href="#" class="btn btn-outline-primary">Baths</a></span>
                            <span><a href="#" class="btn btn-outline-primary">Beds</a></span>
                        </div>
                        <div class="tags">
                            <span><a href="#" class="btn btn-outline-primary">Garages</a></span>
                            <span><a href="#" class="btn btn-outline-primary">Family</a></span>
                        </div>
                        <div class="tags">
                            <span><a href="#" class="btn btn-outline-primary">Real Estates</a></span>
                            <span><a href="#" class="btn btn-outline-primary">Properties</a></span>
                        </div>
                        <div class="tags no-mb">
                            <span><a href="#" class="btn btn-outline-primary">Location</a></span>
                            <span><a href="#" class="btn btn-outline-primary">Price</a></span>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</section>

@endsection