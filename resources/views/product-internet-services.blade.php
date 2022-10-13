@extends('theme')
@section('custom_css')

@endsection

@section('content') 

<header class="header-product">
    <div class="about-us-container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-center">
            <h3 class="about-us-title">Internet Services Products</h3>
            <hr>
          </div>
        </div>
      </div>
</header> 

<section class id="internet-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-12" data-aos="zoom-out-up" data-aos-duration="5000">
                <img src="{{ asset('/images/icons/illustration-for-5g-router-and-technology-to-increase-network-speed-wifi-internet-connection-stability-design-can-be-used-for-landing-page-template-ui-ux-web-website-banner-flyer-free-vector.jpg')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia ID Elite" loading="lazy"/>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                <div class="row about-us-content">
                    <h3><strong>ID Elite </strong></h3>
                    <p class="text-justify">ID Elite is a premium product owned by IDI, in the form of fast and smooth 24-hour internet access services using fiber optic and wireless, internet services with a high level of availability, using multiple upstreams that can back-up each other, services NOC 24x7 Hours, so that it can support business/corporate success.</p>
                    <div >
                        <div class="row about-us-content">
                            <p>Advantages of Product ID Elite :</p>
                            <ol class="ml-3">
                                <li><p>3 Variant bandwith sesuai CIR :</p> </li>
                                    <ul class="mb-1">
                                        <li style="list-style-type:lower-alpha"> Elite Adventure ( 1:1 ) </li>
                                        <li style="list-style-type:lower-alpha"> Elite Explorer ( 1:4 ) </li>
                                        <li style="list-style-type:lower-alpha">Elite Journey ( 1:8 ) </li>
                                    </ul>
                                <li><p class="text-justify"> High Reliability (Service Level Agreement 99%) </p></li>  
                                <li><p class="text-justify"> Low Latency and Jitter </p></li>  
                                <li><p class="text-justify"> MRTG Monitoring </p></li>  
                                <li><p class="text-justify"> Unlimited Kuota </p></li>  
                                <li><p class="text-justify"> Media: Fiber Optic dan Wireless </p></li>  
                                <li><p class="text-justify"> NOC Support 24x7 </p></li>  
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
                    <p class="text-justify">Airbone is an internet service is an internet service with a special bandwidth allocation for you without any sharing with other customers. Providing convenience and comfort for users with fiber optic or wireless access media, at a fixed monthly rate without any additional costs for traffic usage.</p>
                    <div >
                        <div class="row about-us-content">
                            <div class="row">
                                <div class="col">
                                    <p> Airborne Product Advantages : </p>
                                    <ul>
                                        <li><p class="text-justify">Unlimited Quota. </p> </li>
                                        <li><p class="text-justify">Fast & stable internet connection.</p></li> 
                                        <li><p class="text-justify">Media: Fiber Optic dan Wireless.</p></li> 
                                        <li><p class="text-justify">MRTG Monitoring.</p></li> 
                                        <li><p class="text-justify">NOC Support 24x7.</p></li>  
                                    </ul>
                                </div>
                                <div class="col term-airbone">
                                    <p> Terms and Conditions :</p>
                                    <ul>
                                        <li><p class="text-justify">Our prices not include installation fees. </p> </li>
                                        <li><p class="text-justify">Prices do not include 10% tax.</p></li> 
                                        <li><p class="text-justify">Minimum 1 year contract.</p></li> 
                                        <li><p class="text-justify">Including borrowing a basic router.</p></li> 
                                        <li><p class="text-justify">Prices do not include additional tools, if needed.</p></li>  
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4 col-md-5 col-sm-12" data-aos="zoom-out-right" data-aos-duration="5000">
                <img src="{{ asset('/images/icons/3d-flying-rocket-spaceship-concept-icon-or-3d-business-growth-up-graph-concept-icon-free-png.png')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia Airbone" loading="lazy"/>
            </div>
        </div>
        <div class="row" id="airbone-package">
            <div class="row about-us-content">
                <h3 class="text-center my-2"><strong> Airbone Product Package </strong></h3>
                <div class="row">
                    <div class="col-md-3">
                        <div class="box">
                            <div class="our-services our-solutions align-items-center d-flex justify-content-center" onClick="location.href='#contact'">    
                                <h5>Airbone Signature (Upto 100 Mbps)</h5>                           
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="our-services our-solutions align-items-center d-flex justify-content-center"  onClick="location.href='#contact'">    
                                <h5>Airbone Platinum (Upto 75 Mbps)</h5>                           
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="our-services our-solutions align-items-center d-flex justify-content-center"  onClick="location.href='#contact'">    
                                <h5>Airbone Gold (Upto 50 Mbps)</h5>                           
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="box">
                            <div class="our-services our-solutions align-items-center d-flex justify-content-center"  onClick="location.href='#contact'">    
                                <h5>Airbone Silver (Upto 30 Mbps)</h5>                           
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                <div class="row about-us-content">
                    <h3><strong> Neutral Host Infrastructure </strong></h3>
                    <p class="text-justify"> <strong> Operator Independency </strong>, can be used for various services (Internet, IPTV, Telephony).</p>
                    <p class="text-justify"> <strong> Flexible </strong>, , in dealing with service changes, service additions and service improvements from each operator. </p>
                    <p class="text-justify"> <strong> Neat and clean </strong>, not overlapping and simple. </p>
                    <p class="text-justify"> <strong> Sophisticated </strong>, accommodate future technological developments. </p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4 col-md-5 col-sm-12" data-aos="zoom-out-right" data-aos-duration="5000">
                <img src="{{ asset('/images/icons/NeutralHost.png')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia Neutral Host" loading="lazy"/>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-lg-4 col-md-5 col-sm-12" data-aos="zoom-out-up" data-aos-duration="5000">
                <img src="{{ asset('/images/icons/Triple-play.png')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia Triple Play" loading="lazy"/>
                <img src="{{ asset('/images/icons/Triple-play2.png')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia Triple Play" loading="lazy"/>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                <div class="row about-us-content">
                    <h3><strong>Triple Play Services </strong></h3>
                    <p  class="text-justify"><strong>Internet Services</strong>, provide internet broadband & dedicated according to customer request.</p>
                    <p  class="text-justify"><strong>IPTV/MATV</strong>, provide TV service that displays the latest entertainment programs with the best resolution quality, Provide Basic & Premium Channel based on Customer Needs with many additional content (Blacknut Game, HBO Go, Vidio and many more).</p>
                    <p  class="text-justify"><strong>Telephony</strong>, IP-based Telephone Service, which is continuously developed and managed so that it remains relevant and adaptive to today's business telecommunications needs. Cloud PBX deliver : Access code according to area code, available in various packages according to customer needs (PABX, SIP Trunk), Fast Installation.</p>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <h3 class="text-center my-2 add-on"><strong> Add-ON Internet</strong></h3>
            <div class="row mt-5">    
                <div class="col-lg-4 col-md-5 col-sm-12" data-aos="zoom-out-right" data-aos-duration="5000">
                    <div class="row about-us-content">
                         <img src="{{ asset('/images/icons/wireless-signal-gf8a7d5ca7_1280.png')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia Add on My Plus" loading="lazy"/>
                
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                    <h3><strong>MyPlus</strong></h3>
                    <p class="text-justify">MyPlus is a router product that can be rented so that the wifi signal covers all corners of the house with "seamless coverage".</p>   
                </div>
            </div>
            <div class="row mt-5">    
                <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                    <h3><strong>CCTV</strong></h3>
                    <p class="text-justify">CCTV is a TV system in which signals are not publicly distributed but are monitored, primarily for surveillance and security purposes. CCTV relies on strategic placement of cameras and private observation of the camera's input on monitors. The system is called "closed-circuit" because the cameras, monitors and/or video recorders communicate across a proprietary coaxial cable run or wireless communication link. CCTV surveillance can deter potential criminals. When a crime does occur, video footage can help law enforcement to investigate and later provide evidence for prosecution in a law court. For businesses, CCTV cameras can detect and monitor in-house criminal activities..</p>   
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4 col-md-5 col-sm-12" data-aos="zoom-out-right" data-aos-duration="5000">
                    <div class="row about-us-content">
                         <img src="{{ asset('/images/icons/security-system-cctv-cameras-motion-sensors-observation-monitoring-devices_98292-8221.jpg')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia Add On CCTV" loading="lazy"/>
                
                    </div>
                </div>
            </div>
            <div class="row mt-5">    
                <div class="col-lg-4 col-md-5 col-sm-12" data-aos="zoom-out-right" data-aos-duration="5000">
                    <div class="row about-us-content">
                         <img src="{{ asset('/images/icons/router-wifi-technology-free-vector.jpg')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia Add On Access Point" loading="lazy"/>
                
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                    <h3><strong>Access Point </strong></h3>
                    <p class="text-justify">Access Point is a device that creates a wireless local area network, or WLAN, usually in an office or large building. An access point connects to a wired router, switch, or hub via an Ethernet cable, and projects a WiFi signal to a designated area. Using a Access Point lets you create a wireless network within your existing wired network, so you can accommodate wireless devices. Access points, on the other hand, can handle over 60 simultaneous connections each.</p>   
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