@extends('theme')
@section('custom_css')

@endsection

@section('content') 

<header class="header-product">
    <div class="about-us-container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-center">
            <h3 class="product-title">Internet Services Products</h3>
            <hr>
          </div>
        </div>
      </div>
</header> 

<section class id="internet-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-12" data-aos="zoom-out-up" data-aos-duration="5000">
                <img src="{{ asset('/images/icons/illustration-for-5g-router-and-technology-to-increase-network-speed-wifi-internet-connection-stability-design-can-be-used-for-landing-page-template-ui-ux-web-website-banner-flyer-free-vector.jpg')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia Vision and Mision" loading="lazy"/>
            </div>
            <div class="col-lg-1 col-md-1 col-sm-12"></div>
            <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                <div class="row product-content">
                    <h3><strong>ID Elite </strong></h3>
                    <p>ID Elite is a premium product owned by IDI, in the form of fast and smooth 24-hour internet access services using fiber optic and wireless, internet services with a high level of availability, using multiple upstreams that can back-up each other, services NOC 24x7 Hours, so that it can support business/corporate success.</p>
                    <div >
                        <div class="row about-us-content">
                            <p> Advantages of Product ID Elite :</p>
                            <ol class="ml-3">
                                <li><p>3 Variant bandwith sesuai CIR :</p> </li>
                                    <ul class="mb-1">
                                        <li style="list-style-type:lower-alpha"> Elite Adventure ( 1:1 ) </li>
                                        <li style="list-style-type:lower-alpha"> Elite Explorer ( 1:4 ) </li>
                                        <li style="list-style-type:lower-alpha">Elite Journey ( 1:8 ) </li>
                                    </ul>
                                <li><p> High Reliability (Service Level Agreement 99%) </p></li>  
                                <li><p> Low Latency and Jitter </p></li>  
                                <li><p> MRTG Monitoring </p></li>  
                                <li><p> Unlimited Kuota </p></li>  
                                <li><p> Media: Fiber Optic dan Wireless </p></li>  
                                <li><p> NOC Support 24x7 </p></li>  
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                <div class="row about-us-content">
                    <h3><strong>Airbone</strong></h3>
                    <p>is an internet service is an internet service with a special bandwidth allocation for you without any sharing with other customers. Providing convenience and comfort for users with fiber optic or wireless access media, at a fixed monthly rate without any additional costs for traffic usage.</p>
                    <div >
                        <div class="row about-us-content">
                            <div class="row">
                                <div class="col">
                                    <p> Airborne Product Advantages : </p>
                                    <ul>
                                        <li><p >Unlimited Quota. </p> </li>
                                        <li><p >Fast & stable internet connection.</p></li> 
                                        <li><p >Media: Fiber Optic dan Wireless.</p></li> 
                                        <li><p >MRTG Monitoring.</p></li> 
                                        <li><p >NOC Support 24x7.</p></li>  
                                    </ul>
                                </div>
                                <div class="col term-airbone">
                                    <p> Terms and Conditions :</p>
                                    <ul>
                                        <li><p >Our prices not include installation fees. </p> </li>
                                        <li><p >Prices do not include 10% tax.</p></li> 
                                        <li><p >Minimum 1 year contract.</p></li> 
                                        <li><p >Including borrowing a basic router.</p></li> 
                                        <li><p >Prices do not include additional tools, if needed.</p></li>  
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4 col-md-5 col-sm-12" data-aos="zoom-out-right" data-aos-duration="5000">
                <img src="{{ asset('/images/icons/3d-flying-rocket-spaceship-concept-icon-or-3d-business-growth-up-graph-concept-icon-free-png.png')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia Vision and Mision" loading="lazy"/>
            </div>
        </div>
        <div class="row" id="airbone-package">
            <div class="row about-us-content">
                <h3 class="text-center my-2"><strong> Airbone Product Package </strong></h3>
                <div class="row">
                    <div class="col-md-3">
                        <div class="box">
                            <div class="our-services our-solutions align-items-center d-flex justify-content-center" onClick="location.href='#contact'">    
                                <small>Airbone Signature (Upto 100 Mbps)</small>                           
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="our-services our-solutions align-items-center d-flex justify-content-center"  onClick="location.href='#contact'">    
                                <small>Airbone Platinum (Upto 75 Mbps)</small>                           
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="our-services our-solutions align-items-center d-flex justify-content-center"  onClick="location.href='#contact'">    
                                <small>Airbone Gold (Upto 50 Mbps)</small>                           
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="our-services our-solutions align-items-center d-flex justify-content-center"  onClick="location.href='#contact'">    
                                <small>Airbone Silver (Upto 30 Mbps)</small>                           
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <h3 class="text-center my-2"><strong> Add-ON Internet</strong></h3>
            <div class="row mt-5">    
                <div class="col-lg-4 col-md-5 col-sm-12" data-aos="zoom-out-right" data-aos-duration="5000">
                    <div class="row about-us-content">
                         <img src="{{ asset('/images/icons/router-wifi-technology-free-vector.jpg')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia Vision and Mision" loading="lazy"/>
                
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                    <h3><strong>MyPlus</strong></h3>
                    <p>is a router product that can be rented so that the wifi signal covers all corners of the house with "seamless coverage".</p>   
                </div>
            </div>
            <div class="row mt-5">    
                <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                    <h3><strong>CCTV</strong></h3>
                    <p>is a router product that can be rented so that the wifi signal covers all corners of the house with "seamless coverage".</p>   
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4 col-md-5 col-sm-12" data-aos="zoom-out-right" data-aos-duration="5000">
                    <div class="row about-us-content">
                         <img src="{{ asset('/images/icons/security-system-cctv-cameras-motion-sensors-observation-monitoring-devices_98292-8221.jpg')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia Vision and Mision" loading="lazy"/>
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 

    
@section('custom_js')
<script type="text/javascript">

</script>
@endsection
@endsection