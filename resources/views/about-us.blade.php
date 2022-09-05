@extends('theme')
@section('custom_css')

@endsection

@section('content') 

<header id="header-about-us" class="header-about-us">
    <div class="container">
        <div class="text-container">
            <h3 class="h1-large text-center" style="color:#FFFFFF">About Us</h3>
            <h4 class="text-center" style="color:#FFFFFF"> <strong> PT. INFRASTRUKTUR DIGITAL INDONESIA</strong></h4>
            <hr></hr>
            <p class="text-center" style="color:#FFFFFF"> PT Infrastruktur Digital Indonesia(IDI) adalah perusahaan yang bergerak di bidang pembangunan infrastruktur dan penyelanggaraan layanan teknologi informasi dan Komunikasi/TIK (Information Communication and Technology/ICT), Bentuk layanan TIK kami berupa pembanguann, pengoperasian dan penyenggaraan fasilitas ICT end-to-end dengan konsep Neutral ICT Infrastructure, yaitu konsep infrastructure as a service</p>
        </div> 
    </div>

</header> 
 
<section class id="visi-misi">
    <div class="container">
        <div class="row">
            <div class="col-md-6" data-aos="zoom-out-right" data-aos-duration="5000">
            <img src="{{ asset('/images/undraw_solution_mindset_re_57bf.svg')}}" alt="Pt. Infrastructure Digital Indonesia Vision and Mision" loading="lazy"/>
            </div>
            <div class="col-md-6" data-aos="zoom-out-left" data-aos-duration="5000">
                <div class="row">
                    <h5><strong>Our Philosopy</strong></h5>
                    <ul>
                        <li>Company philosophy to Build–Serve–Managed–Optimized of end-to-end ICT facilities with the concept of Neutral ICT Infrastructure, namely the concept of infrastructure as a service. </li>  
                    </ul>
                </div>
                <div class="row">
                    <h5><strong>Our Vision</strong></h5>
                    <ul>
                        <li>To be a leading company in delivering neutral infrastructure and Digital Services. </li>  
                    </ul>
                </div>
                <div class="row">
                    <h5><strong>Our Mission</strong></h5>
                    <ul>
                        <li>Acquire quality cluster and buildings. </li>
                        <li>Deliver value add service to customer through our excellent service. </li>  
                    </ul>
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