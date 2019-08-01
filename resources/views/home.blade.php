@extends('layouts.app')

@section('content')
        <section class="welcome "  id="firstview" style="background-image: url({{url('images/slider/backimage.jpg')}})">
                <div class="container" >
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">


                            <div class="card-body">

                                <form class='search-form' method="POST" action="{{ route('search') }}">
                                     @csrf
                                    <div id="locationField">

                                        <input id="autocomplete" onFocus="geolocate()" class='form-control' placeholder='Search with addess, postcode, zipcode' type='text' name='search'>
                                    </div>
                                    <button class='btn btn-link search-btn' type="submit" style="background-color:#3F3F3F;color:#ffffff; margin-top: -9px;margin-right: -12px;width: 100px;">
                                        <i class='fas fa-search' ></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header" style="text-align: center;font-weight: bold;">Please enter your info</div>

                            <div class="card-body">

                                <form class='search-form' method="POST" action="{{ route('search') }}">
                                    @csrf
                                    <input style="margin: 5px" class='form-control' placeholder='First Name' type='text' name='first_name'/>
                                    <input style="margin: 5px" class='form-control' placeholder='Last Name' type='text' name='last_name'/>
                                    <input style="margin: 5px" class='form-control' placeholder='Email' type='email' name='email'/>
                                    <input style="margin: 5px" class='form-control' placeholder='Phone' type='number' name='last_name'/>
{{--                                    <input style="margin: 5px" class='form-control' placeholder='Address' type='textarea' name='last_name'/>--}}
                                    <textarea style="margin: 5px" class='form-control' placeholder='Address' rows="4" cols="50" name="address"></textarea>
                                    <input style="margin: 5px;background-color: #3F3F3F;color: #ffffff"  type="submit" value="Submit" >
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
                <h3>Popular</h3>
                <h2>Properties</h2>
            </div>
            <div class="row portfolio-items">

                @foreach($recomendentAddresses as $address)

                    <div class="item col-lg-3 col-md-6 col-xs-12 landscapes">
                        <div class="project-single">
                            <div class="project-inner project-head">
                                <div class="project-bottom">
                                    <h4><a href="{{route('propertyResult',['propertyId' => $address['addressInfo']['id']])}}">View Property</a><span class="category">Real Estate</span></h4>
                                </div>
                                <div class="homes">
                                    <!-- homes img -->
                                    <a href="properties-details.html" class="homes-img">
                                        <div class="homes-tag button alt featured">Featured</div>
                                        <div class="homes-tag button alt sale">For Sale</div>
                                        <div class="homes-price">Family Home</div>
                                        <img src="{{asset('images/feature-properties/fp-1.jpg')}}" alt="home-1" class="img-responsive">
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

                                <div class="footer">
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
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
            <div class="bg-all mt-5">
                <a href="#" class="btn btn-outline-light">View All</a>
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


<script>
    // This sample uses the Autocomplete widget to help the user select a
    // place, then it retrieves the address components associated with that
    // place, and then it populates the form fields with those details.
    // This sample requires the Places library. Include the libraries=places
    // parameter when you first load the API. For example:
    // <script
    // src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

    var placeSearch, autocomplete;

    var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
    };

    function initAutocomplete() {
        // Create the autocomplete object, restricting the search predictions to
        // geographical location types.
        autocomplete = new google.maps.places.Autocomplete(
            document.getElementById('autocomplete'), {types: ['geocode']});

        console.log(autocomplete)
        // Avoid paying for data that you don't need by restricting the set of
        // place fields that are returned to just the address components.
        autocomplete.setFields(['address_component']);

        // When the user selects an address from the drop-down, populate the
        // address fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
    }

    function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();

        for (var component in componentForm) {
            document.getElementById(component).value = '';
            document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details,
        // and then fill-in the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
            var addressType = place.address_components[i].types[0];
            if (componentForm[addressType]) {
                var val = place.address_components[i][componentForm[addressType]];
                document.getElementById(addressType).value = val;
            }
        }
    }

    // Bias the autocomplete object to the user's geographical location,
    // as supplied by the browser's 'navigator.geolocation' object.
    function geolocate() {
        console.log("ok");
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var geolocation = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                };
                var circle = new google.maps.Circle(
                    {center: geolocation, radius: position.coords.accuracy});
                autocomplete.setBounds(circle.getBounds());
            });
        }
    }
</script>


@endsection
