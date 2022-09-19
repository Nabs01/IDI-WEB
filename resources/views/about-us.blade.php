@extends('theme')
@section('custom_css')

@endsection

@section('content') 

<header id="header-about-us" class="header-about-us">
    <div class="about-us-container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-center">
            <h3 class="about-us-title">About Us</h3>
            <h4 class="about-us-company"> <strong> PT. INFRASTRUKTUR DIGITAL INDONESIA</strong></h4>
            <hr>
            <div class="container">
                <div class="row">
                  <div class="col-1">
                  </div>
                  <div class="col-10">
                        <p class="about-us-subtitle"> PT Infrastruktur Digital Indonesia(IDI) adalah perusahaan yang bergerak di bidang pembangunan infrastruktur dan penyelanggaraan layanan teknologi informasi dan Komunikasi/TIK (Information Communication and Technology/ICT), Bentuk layanan TIK kami berupa pembanguann, pengoperasian dan penyenggaraan fasilitas ICT end-to-end dengan konsep Neutral ICT Infrastructure, yaitu konsep infrastructure as a service</p>
                  </div>
                  <div class="col-1">
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
</header> 

<section class id="visi-misi">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-12" data-aos="zoom-out-right" data-aos-duration="5000">
            <img src="{{ asset('/images/undraw_solution_mindset_re_57bf.svg')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia Vision and Mision" loading="lazy"/>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                <div class="row about-us-content">
                    <p class="about-us-content-title"><strong>Our Philosopy</strong></p>
                    <ul>
                        <li><p class="about-us-content-subtitle">Company philosophy to Build–Serve–Managed–Optimized of end-to-end ICT facilities with the concept of Neutral ICT Infrastructure, namely the concept of infrastructure as a service.</p> </li>  
                    </ul>
                </div>
                <div class="row about-us-content">
                    <p class="about-us-content-title"><strong>Our Vision</strong></p>
                    <ul>
                        <li><p class="about-us-content-subtitle">To be a leading company in delivering neutral infrastructure and Digital Services. </p></li>  
                    </ul>
                </div>
                <div class="row about-us-content">
                    <p class="about-us-content-title"><strong>Our Mission</strong></p>
                    <ul>
                        <li><p class="about-us-content-subtitle">Acquire quality cluster and buildings. </p> </li>
                        <li><p class="about-us-content-subtitle">Deliver value add service to customer through our excellent service. </p></li>  
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> 

<section class id="our-poeple">
    <div class="container about-us-our-poeple">
        <p class="about-us-title-content">Our Poeple</p>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12 card-poeple" data-aos="zoom-out-right" data-aos-duration="2500">
                        <div class="card" style="width: 100%;">
                            {{-- <img src="{{ asset('/images/person/ppl1.jpeg')}}" class="card-img-top" alt="..."> --}}
                            <div class="card-body">
                              <h5 class="card-title">-</h5>
                              <p class="card-text">President Director</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 card-poeple" data-aos="zoom-out-center" data-aos-duration="2500">
                        <div class="card" style="width: 100%;">
                            {{-- <img src="{{ asset('/images/person/ppl2.jpeg')}}" class="card-img-top" alt="..."> --}}
                            <div class="card-body">
                              <h5 class="card-title">-</h5>
                              <p class="card-text">Technologi & Operation Director</p>
                            </div>
                          </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 card-poeple" data-aos="zoom-out-left" data-aos-duration="2500">
                        <div class="card" style="width: 100%">
                            {{-- <img src="{{ asset('/images/person/ppl3.jpeg')}}" class="card-img-top" alt="..."> --}}
                            <div class="card-body">
                              <h5 class="card-title">-</h5>
                              <p class="card-text">Finance Director</p>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
</section> 
    
@section('custom_js')
<script type="text/javascript">

</script>
@endsection
@endsection