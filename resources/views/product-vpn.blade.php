@extends('theme')
@section('custom_css')

@endsection

@section('content') 

<header class="header-product">
    <div class="about-us-container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-center">
            <h3 class="product-title">VPN Services</h3>
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
                    <h3><strong>SDWAN </strong></h3>
                    <p>SDWAN adalah bentuk aplikasi spesifik dari teknologi software-defined networking (SDN) yang diaplikasikan pada koneksi WAN (wide area network). Membantu meringankan kompleksitas dengan zero touch provisioning yang mampu mengatasi risiko human error</p>
                    <div >
                        <div class="row about-us-content">
                            <p> Kenapa memilih SD-WAN?:</p>
                            <ul class="ml-3">
                                <li><p> Peningkatan bandwidth dengan biaya lebih rendah.</p></li>  
                                <li><p> Manajemen terpusat di seluruh jaringan cabang </p></li>  
                                <li><p> Visibilitas penuh ke dalam jaringan</p></li>  
                                <li><p> Mengatur alokasi trafik di setiap cabang sesuai dengan kebutuhan masing-masing </p></li>  
                                <li><p> Memberi organisasi lebih banyak opsi jenis koneksi danpemilihan vendor (ISP/NAP) saat membangun jaringan </p></li>  
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                <div class="row about-us-content">
                    <h3><strong>IP VPN</strong></h3>
                    {{-- <p>is an internet service is an internet service with a special bandwidth allocation for you without any sharing with other customers. Providing convenience and comfort for users with fiber optic or wireless access media, at a fixed monthly rate without any additional costs for traffic usage.</p> --}}
                    <div >
                        <div class="row about-us-content">
                            <div class="row">
                                <div class="col">
                                    {{-- <p> Airborne Product Advantages : </p> --}}
                                    <ul>
                                        <li><p >Fitur Dual Homing VPN IP merupakan service enhancement dari layanan VPN IP, yang menyediakan kapabilitas dual homing (access diversity) dengan jaminan SLG yang lebih tinggi (high reliability services) </p> </li>
                                        <li><p >Komunikasi data any to any connection berbasis IP Multi Protocol Label Switching (MPLS)</p></li> 
                                        <li><p >Class Of Service memberikan garansi dan prioritas kepada paket-paket yang akan lewat sesuai dengan jenis paket tersebut</p></li> 
                                        <li><p >VPN IP MPLS dapat dipergunakan untuk berbagai aplikasi bisnis (ERP, CRM, etc)</p></li> 
                                        <li><p >Manageability</p></li>  
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
    </div>
</section> 

    
@section('custom_js')
<script type="text/javascript">

</script>
@endsection
@endsection