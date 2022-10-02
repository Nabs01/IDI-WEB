@extends('theme')
@section('custom_css')

@endsection

@section('content') 

<header class="header-product">
    <div class="about-us-container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-center">
            <h3 class="about-us-title">Manage Services</h3>
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
            <div class="col-lg-1"></div>
            <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                <div class="row about-us-content">
                    {{-- <h3><strong>SDWAN </strong></h3>
                    <p>SDWAN adalah bentuk aplikasi spesifik dari teknologi software-defined networking (SDN) yang diaplikasikan pada koneksi WAN (wide area network). Membantu meringankan kompleksitas dengan zero touch provisioning yang mampu mengatasi risiko human error</p> --}}
                    <div >
                        <div class="row about-us-content">
                            {{-- <p> Kenapa memilih SD-WAN?:</p> --}}
                            <ul class="ml-3">
                                <li><p> Biaya Pemeliharaan Lebih Terjangkau</p></li>  
                                <li><p> Efisiensi Meningkat</p></li>  
                                <li><p> VMembantu meningkatkan keamanan karena lebih banyak fleksibilitas dan skalabilitas kepada pelanggan</p></li>  
                                <li><p> Mengingat masalah infrastruktur IT sudah ditangani oleh pihak outsourcing sebagai ahli, maka Anda bisa fokus menjalankan dan mengembangkan bisnis </p></li>  
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="row">
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
        </div> --}}
    </div>
</section> 

    
@section('custom_js')
<script type="text/javascript">

</script>
@endsection
@endsection