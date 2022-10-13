@extends('theme')
@section('custom_css')

@endsection

@section('content') 

<header class="header-product">
    <div class="about-us-container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-center">
            <h3 class="about-us-title">VPN Services Products</h3>
            <hr>
          </div>
        </div>
      </div>
</header> 

<section class id="internet-services">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-12" data-aos="zoom-out-up" data-aos-duration="5000">
                <img src="{{ asset('/images/icons/SD-WAN.png')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia SDWAN" loading="lazy"/>
                <img src="{{ asset('/images/icons/SD-WAN2.png')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia SDWAN" loading="lazy"/>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                <div class="row about-us-content">
                    <h3><strong>SD WAN </strong></h3>
                    <p class="text-justify">SDWAN is a specific application form of software-defined networking (SDN) technology that is applied to WAN (wide area network) connections. Help reduce complexity with zero touch provisioning that can overcome the risk of human error.</p>
                    <div >
                        <div class="row about-us-content">
                            <p> Why choose SD-WAN? :</p>
                            <ol class="ml-3">
                                <li><p class="text-justify"> Increased bandwidth at a lower cost.</p> </li>
                                <li><p class="text-justify"> Centralized management across the branch network. </p></li>  
                                <li><p class="text-justify"> Full visibility into the network. </p></li>  
                                <li><p class="text-justify"> Manage traffic allocation in each branch according to their respective needs </p></li>  
                                <li><p class="text-justify">Gives organizations more connection type and vendor selection (ISP/NAP) options when building a network. </p></li>  
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                <div class="row about-us-content">
                    <h3><strong>IP VPN</strong></h3>
                    <p>IP VPN is .</p>
                    <div >
                        <div class="row about-us-content">
                            <div class="row"> 
                                <ul>
                                    <li><p class="text-justify" > The Dual Homing VPN IP feature is a service enhancement of the VPN IP service, which provides dual homing capability (access diversity) with guaranteed higher SLG (high reliability services). </p> </li>
                                    <li><p class="text-justify" > Any to any connection data communication based on IP Multi Protocol Label Switching (MPLS). </p></li> 
                                    <li><p class="text-justify" > Class Of Service provides guarantees and priority to packages that will pass according to the type of package.</p></li> 
                                    <li><p class="text-justify" > MPLS IP VPN can be used for various business applications (ERP, CRM, etc).</p></li> 
                                    <li><p class="text-justify" > Manageability.</p></li>  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4 col-md-5 col-sm-12" data-aos="zoom-out-right" data-aos-duration="5000">
                <img src="{{ asset('/images/icons/IP-VPN.png')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia IP VPN" loading="lazy"/>
            </div>
        </div>
    </div>
</section> 

    
@section('custom_js')
<script type="text/javascript">

</script>
@endsection
@endsection