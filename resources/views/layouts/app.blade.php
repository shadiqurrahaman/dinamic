<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">







    <!-- ARCHIVES CSS -->
    <style>
        .pac-container {
            z-index: 1100 !important;
        }
    </style>


        <!-- new added start -->

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>Dynamic Home Search</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.html">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/leaflet-gesture-handling.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/leaflet.markercluster.css') }}">
    <link rel="stylesheet" href="{{ asset('css/leaflet.markercluster.default.css') }}">
    <!-- Slider Revolution CSS Files -->
{{--    <link rel="stylesheet" href="{{ asset('revolution/css/settings.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('revolution/css/layers.css') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('revolution/css/navigation.css') }}">--}}
    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('css/custom.css') }}">

    <!-- new added faile -->










    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
{{--    <link rel="dns-prefetch" href="//fonts.gstatic.com">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">--}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
   



        <div class="header">
        <div class="header-top">
            <div class="container">
                <div class="top-info hidden-sm-down">
                    <div class="call-header">
                        <p><i class="fa fa-phone" aria-hidden="true"></i> (234) 0200 17813</p>
                    </div>
                    <div class="address-header">
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i> 95 South Park Ave, USA</p>
                    </div>
                    <div class="mail-header">
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> info@findhouses.com</p>
                    </div>
                </div>
                <div class="top-social hidden-sm-down">
                    <div class="login-wrap">
                        <ul class="d-flex">
                            <!-- <li><a href="login.html"><i class="fa fa-user"></i> Login</a></li>
                            <li><a href="register.html"><i class="fa fa-sign-in"></i> Register</a></li> -->
                        </ul>
                    </div>
                    <div class="social-icons-header">
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                        </div>
                    </div>
{{--                    <div class="dropdown">--}}
{{--                        <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang" data-toggle="dropdown" aria-haspopup="true">--}}
{{--                            <img src="{{ asset('images/en.png') }}" alt="lang" /> English--}}
{{--                        </button>--}}
{{--                        <ul class="dropdown-menu" aria-labelledby="dropdownlang">--}}
{{--                            <li><img src="{{ asset('images/fr.png') }}" alt="lang" />France</li>--}}
{{--                            <li><img src="{{ asset('images/de.png') }}" alt="lang" /> German</li>--}}
{{--                            <li><img src="{{ asset('images/it.png') }}" alt="lang" />Italy</li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
        <div class="header-bottom heading sticky-header" id="heading">
            <div class="container">
                <a href="#" class="logo">
                    <img src="{{ asset('images/logo.svg') }}" alt="realhome">
                </a>
                <!-- <button type="button" class="search-button" data-toggle="collapse" data-target="#bloq-search" aria-expanded="false">
                    <i class="fa fa-search" aria-hidden="true"></i>
                </button> -->
                <!-- <div class="get-quote hidden-lg-down"> -->
                    <!-- <a href="submit-property.html">
                        <p>Submit Property</p>
                    </a> -->

                        

                        

                                
           
                <!-- </div> -->
                <!-- <button type="button" class="button-menu hidden-lg-up" data-toggle="collapse" data-target="#main-menu" aria-expanded="false">
                    <i class="fa fa-bars" aria-hidden="true"></i>
                </button> -->

                <!-- <form action="#" id="bloq-search" class="collapse">
                    <div class="bloq-search">
                        <input type="text" placeholder="search...">
                        <input type="submit" value="Search">
                    </div>
                </form>
 -->
                <nav id="main-menu" class="collapse">
                    <ul>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li class="hidden-lg-up">
                            <div class="po">
{{--                                @role('admin')--}}
                                <a data-toggle="collapse" href="/home" aria-expanded="false">Home</a>
{{--                                @endrole--}}
                            </div>
                            <div class="collapse" id="home">
                                <div class="card card-block">
                                    <a  href="index.html">Home Map</a>
                                   <!--  <a class="dropdown-item" href="index-2.html">Home Image</a>
                                    <a class="dropdown-item" href="index-3.html">Home Video</a>
                                    <a class="dropdown-item" href="index-4.html">Home Slider</a> -->
                                    
                                </div>
                            </div>
                        </li>
                        <!-- END COLLAPSE MOBILE MENU -->
                        <li class="dropdown hidden-md-down">

                            @if(Auth::check())
                            @role('admin')
                            <a   aria-haspopup="true" aria-expanded="false" href="{{url('/dashboard/admin')}}">Home</a>
                            @endrole
                            @role('superadmin')
                                <a   aria-haspopup="true" aria-expanded="false" href="{{url('/dashboard/superadmin')}}">Home</a>
                            @endrole
                            @else
                            <a   aria-haspopup="true" aria-expanded="false" href="{{url('/')}}">Home</a>
                            @endif
                                <!-- <div class="dropdown-menu">
                                    <a class="dropdown-item" href="index.html">Home Map</a>
                                    <a class="dropdown-item" href="index-2.html">Home Image</a>
                                    <a class="dropdown-item" href="index-3.html">Home Video</a>

                                </div> -->
                        </li>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li class="hidden-lg-up">
                            <div class="po">
                                <a  href="#listing" aria-expanded="false">Basics</a>
                            </div>
                            <!-- <div class="collapse" id="listing">
                                <div class="card card-block">
                                    <a class="dropdown-item" href="properties-full-list.html">Full List</a>
                                    <a class="dropdown-item" href="properties-list-right-sidebar.html">List Right Sidebar </a>
                                    <a class="dropdown-item" href="properties-full-grid.html">Full Grid</a>
                                    <a class="dropdown-item" href="properties-grid-right-sidebar.html">Grid Right Sidebar</a>
                                    <a class="dropdown-item" href="properties-half-map.html">Half Map</a>
                                    <a class="dropdown-item" href="properties-map.html">Listing With Map</a>
                                    <a class="dropdown-item" href="properties-details.html">Property Details</a>
                                </div>
                            </div> -->
                        </li>
                        <!-- END COLLAPSE MOBILE MENU -->
                        <li class="dropdown hidden-md-down">
                            <a  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Basics</a>
                           <!--  <div class="dropdown-menu">
                                <a class="dropdown-item" href="properties-full-list.html">Full List</a>
                                <a class="dropdown-item" href="properties-list-right-sidebar.html">List Right Sidebar </a>
                                <a class="dropdown-item" href="properties-full-grid.html">Full Grid</a>
                                <a class="dropdown-item" href="properties-grid-right-sidebar.html">Grid Right Sidebar</a>
                                <a class="dropdown-item" href="properties-half-map.html">Half Map</a>
                                <a class="dropdown-item" href="properties-map.html">Listing With Map</a>
                                <a class="dropdown-item" href="properties-details.html">Property Details</a>
                            </div> -->
                        </li>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li class="hidden-lg-up">
                            <div class="po">
                                <a data-toggle="collapse" href="#services" aria-expanded="false">Resource</a>
                            </div>
                            <!-- <div class="collapse" id="services">
                                <div class="card card-block">
                                    <a class="dropdown-item" href="agents-listing-grid.html">Agents Listing Grid</a>
                                    <a class="dropdown-item" href="agents-listing-row.html">Agents Listing Row</a>
                                    <a class="dropdown-item" href="agent-details.html">Agent Details</a>
                                </div>
                            </div> -->
                        </li>
                        <!-- END COLLAPSE MOBILE MENU -->
                        <li class="dropdown hidden-md-down">
                            <a  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Resource</a>
                            <!-- <div class="dropdown-menu">
                                <a class="dropdown-item" href="agents-listing-grid.html">Agents Listing Grid</a>
                                <a class="dropdown-item" href="agents-listing-row.html">Agents Listing Row</a>
                                <a class="dropdown-item" href="agent-details.html">Agent Details</a>
                            </div> -->
                        </li>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li class="hidden-lg-up">
                            <div class="po">
                                <a  href="#about" aria-expanded="false">Tools</a>
                            </div>
                            <!-- <div class="collapse" id="about">
                                <div class="card card-block">
                                    <a class="dropdown-item" href="about.html">About Us</a>
                                    <a class="dropdown-item" href="faq.html">Faq</a>
                                    <a class="dropdown-item" href="pricing-table.html">Pricing</a>
                                    <a class="dropdown-item" href="404.html">404</a>
                                    <a class="dropdown-item" href="login.html">Login</a>
                                    <a class="dropdown-item" href="register.html">Register</a>
                                    <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                    <a class="dropdown-item" href="under-construction.html">Under Construction</a>
                                </div>
                            </div> -->
                        </li>
                        <!-- END COLLAPSE MOBILE MENU -->
                        <li class="dropdown hidden-md-down">




                            <a  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">Tools</a>

                            <!-- <div class="dropdown-menu">
                                <a class="dropdown-item" href="about.html">About Us</a>
                                <a class="dropdown-item" href="faq.html">Faq</a>
                                <a class="dropdown-item" href="pricing-table.html">Pricing</a>
                                <a class="dropdown-item" href="404.html">404</a>
                                <a class="dropdown-item" href="login.html">Login</a>
                                <a class="dropdown-item" href="register.html">Register</a>
                                <a class="dropdown-item" href="coming-soon.html">Coming Soon</a>
                                <a class="dropdown-item" href="under-construction.html">Under Construction</a>
                            </div> -->
                        </li>
                        <!-- STAR COLLAPSE MOBILE MENU -->
                        <li class="hidden-lg-up">
                            <div class="po">
                                <a  href="#blog" aria-expanded="false">My-profile</a>
                            </div>
                            <!-- <div class="collapse" id="blog">
                                <div class="card card-block">
                                    <a class="dropdown-item" href="blog.html">Blog Default</a>
                                    <a class="dropdown-item" href="blog-rightsidebar.html">Blog Right Sidebar</a>
                                    <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                                </div>
                            </div> -->
                        </li>
                        <!-- END COLLAPSE MOBILE MENU -->
                        <li class="dropdown hidden-md-down">
                            <a  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">My-profile</a>
                            <!-- <div class="dropdown-menu">
                                <a class="dropdown-item" href="blog.html">Blog Default</a>
                                <a class="dropdown-item" href="blog-rightsidebar.html">Blog Right Sidebar</a>
                                <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                            </div> -->
                        </li>
                        <li><a href="contact-us.html">Contact</a></li>

                        @guest
                            <p></p>
                        @else
                            <li class="nav-item dropdown" >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    </ul>
                </nav>
            </div>
        </div>
    </div>

        <main class="py-4">
            @yield('content')
        </main>
        <!-- START FOOTER -->
        <footer class="first-footer">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="netabout">
                                <a href="index.html" class="logo">
                                    <img src="{{asset('css/colors/icons/green/logo-footer_1.svg')}}" alt="logo">
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

        {{--    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrmpgqwB9cKbegTayT18_I8OtjcgL9wFU&libraries=places&callback=initAutocomplete"--}}
{{--            async defer></script>--}}

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCrmpgqwB9cKbegTayT18_I8OtjcgL9wFU&libraries=places,geometry&callback=initAutocomplete" async defer></script>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.js') }}"></script>
    <script src="{{ asset('js/tether.min.js') }}"></script>
    <script src="{{ asset('js/moment.js') }}"></script>
    <script src="{{ asset('js/transition.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/fitvids.js') }}"></script>
    <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
    <script src="{{ asset('js/lightcase.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('js/newsletter.js') }}"></script>
    <script src="{{ asset('js/jquery.form.js') }}"></script>
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/forms-2.js') }}"></script>
    <script src="{{ asset('js/leaflet.js') }}"></script>
    <script src="{{ asset('js/leaflet-gesture-handling.min.js') }}"></script>
    <script src="{{ asset('js/leaflet-providers.js') }}"></script>
    <script src="{{ asset('js/leaflet.markercluster.js') }}"></script>
    <script src="{{ asset('js/map4.js') }}"></script>
    <script src="{{ asset('js/color-switcher.js') }}"></script>

    <!-- Slider Revolution scripts -->
    <script src="{{ asset('revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('revolution/js/jquery.themepunch.revolution.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('revolution/js/extensions/revolution.extension.video.min.js') }}"></script>


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




        var tpj = jQuery;
        var revapi486;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_one").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_one");
            } else {
                revapi486 = tpj("#rev_slider_one").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "plugins/revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "yes",
                    delay: 10000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            touchOnDesktop: "off",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "metis",
                            enable: true,
                            hide_onmobile: true,
                            hide_under: 600,
                            hide_onleave: true,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 0,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 0,
                                v_offset: 0
                            }
                        }

                    },
                    responsiveLevels: [1200, 1040, 778, 480],
                    visibilityLevels: [1200, 1040, 778, 480],
                    gridwidth: [1170, 1040, 778, 600],
                    gridheight: [850, 850, 850, 950],
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "enterpoint",
                        speed: 400,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 46, 47, 48, 49, 50, 55]
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/

    </script>
    <!-- MAIN JS -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
