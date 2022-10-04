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
        <p class="about-us-title-content">Our People</p>
        <div class="container p-5">
            <div class="row  g-3">
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg">
                        <div class="text-center">
                            <div class="img-hover-zoom img-hover-zoom--colorize">
                                <img class="shadow" src="{{ asset('/images/person/Nia Kurnianingsih.png')}}" alt="Nia Kurnianingsih">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="clearfix mb-3">
                            </div>
                            <div class="my-2 text-center">
                                <h1>Nia Kurnianingsih</h1>
                            </div>
                            <div class="mb-3">
                                <h2 class="text-uppercase text-center role">President Director</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg">
                        <div class="text-center">
                            <div class="img-hover-zoom img-hover-zoom--colorize">
                                <img class="shadow" src="{{ asset('/images/person/Arie Hastanto Kurniawan.png')}}" alt="Another Image zoom-on-hover effect">
                            </div>
                        </div>
                
                        <div class="card-body">
                            <div class="clearfix mb-3">
                            </div>
                            <div class="my-2 text-center">
                                <h1>Arie Hastanto K.</h1>
                            </div>
                            <div class="mb-3">
                                <h2 class="text-uppercase text-center role">Technology & Operation Director</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg">
                        <div class="text-center">
                            <div class="img-hover-zoom img-hover-zoom--colorize">
                                <img class="shadow" src="{{ asset('/images/person/Alexander Yota.png')}}" alt="Another Image zoom-on-hover effect">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="clearfix mb-3">
                            </div>
                            <div class="my-2 text-center">
                                <h1>Alexander Yota</h1>
                            </div>
                            <div class="mb-3">
                                <h2 class="text-uppercase text-center role">Finance Director</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg">
                        <div class="text-center">
                            <div class="img-hover-zoom img-hover-zoom--colorize">
                                <img class="shadow" src="{{ asset('/images/person/Arief Agung P.png')}}"alt="Another Image zoom-on-hover effect">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="clearfix mb-3">
                            </div>
                            <div class="my-2 text-center">
                                <h1>Arief Agung P</h1>
                            </div>
                            <div class="mb-3">
                                <h2 class="text-uppercase text-center role">General Manager Operation</h2>
                            </div>

                        
                        </div>
                    </div>
                </div>
              
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg">
                        <div class="text-center">
                            <div class="img-hover-zoom img-hover-zoom--colorize">
                                <img class="shadow"src="{{ asset('/images/person/Yohan Satria.png')}}" alt="Another Image zoom-on-hover effect">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="clearfix mb-3">
                            </div>
                            <div class="my-2 text-center">
                                <h1>Yohan Satria</h1>
                            </div>
                            <div class="mb-3">
                                <h2 class="text-uppercase text-center role">General Manager Business Planing</h2>
                            </div>

                        
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg">
                        <div class="text-center">
                            <div class="img-hover-zoom img-hover-zoom--colorize">
                                <img class="shadow" src="{{ asset('/images/person/Wahyu Nur Hidayat.png')}}" alt="Another Image zoom-on-hover effect">
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="clearfix mb-3">
                            </div>
                            <div class="my-2 text-center">
                                <h1>Wahyu Nur H.</h1>
                            </div>
                            <div class="mb-3">
                                <h2 class="text-uppercase text-center role">General Manager Sales and Marketing</h2>
                            </div>

                        
                        </div>
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