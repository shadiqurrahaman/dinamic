
@extends('layouts.app')

@section('content')

<section class="blog details">
    <div class="container">
        <div class="row" >
            <div class="col-md-6" style="border-top:10px solid #7b88ff;">
                <div style="float: left; margin-top: 20px;"> 
                    <h4 style="font-weight: bold; font-size: 25px;">
                        <span class="heading-icon"><i class="fa fa-map-marker"></i></span>
                        <span class="hidden-sm-down">995 South Park Avenue</span>
                    </h4>
                </div>                
                <div style="float: right; margin-top: 20px;">
                    <i class="far fa-heart" style="font-size: 25px; margin-right: 10px;"></i>
                    <i class="fa fa-share-alt" style="font-size: 25px;"></i>
                </div>
                <div class="clearfix"></div>

                <table width="100%" border="0" style="margin-top: 15px;">
                    <tr>
                        <th>2</th>
                        <th>2.0</th>
                        <th>1470</th>
                        <td width="150">Last Sold Date</td>
                        <td width="80">10/79</td>
                    </tr>
                    <tr>
                        <td>BD</td>
                        <td>BA</td>
                        <td>SqFT</td>
                        <td>Last Sold Price</td>
                        <td>$6,000</td>
                    </tr>                    
                </table>
                
                <table width="80%" border="0" style="margin: 50px ;">
                    <tr>
                        <th>Zestimate</th>
                        <th>$12,678</th>                        
                    </tr>
                    <tr>
                        <th>Rent Zestimate</th>
                        <td>$1,000</td>                        
                    </tr> 
                    <tr>
                        <th>VR Annual Revenue</th>
                        <th>$352400</th>                        
                    </tr> 
                    <tr>
                        <td>Occupancy</td>
                        <td>60%</td>                        
                    </tr> 
                    <tr>
                        <td>Avg Nightly Rate</td>
                        <td>$254</td>                        
                    </tr>                  
                </table>


                <div style="border-top:10px solid #7b88ff; padding-top: 20px;">
                    <div class="row">
                        <div class="col-md-6">
                            We are here to help.
                            We wamt to understood form this server.
                        </div>
                        <div class="col-md-6">
                            We are here to help.
                            We wamt to understood form this server.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="border-top:10px solid #7ad9f5;">
                <img src="{{asset('images/slider/home-slider-1.jpg')}}" style="margin-left: 0; padding-left: 0" alt="First slide">

                <div>maps content</div>
            </div>           
        </div>

        <div class="row">
            <div class="col-lg-9 col-md-12 blog-pots">
 
            </div>
            <aside class="col-lg-3 col-md-12 car">
                <div class="widget">
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