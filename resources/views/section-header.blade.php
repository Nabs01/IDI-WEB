<header id="header-home" class="header-home">
    <div class="home-head-container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-lg-12 text-left">
            <div class="row">
                <div class="col-8">
                    br
                    <h3 class="home-title">Welcome to</h3>
                    <h3 class="home-title">PT. INFRASTRUKTUR DIGITAL</h3>
                    <h3 class="home-title">INDONESIA</h3>
                    {{-- <button type="button" class="btn-solid-lg" onClick="location.href='#our-solutions'">Lihat Lebih</button> --}}
                </div>
                <div class="col-2 ">
                    <img src="{{ asset('/images/info_speed.png')}}" class="img-fluid"  loading="lazy" alt="Bluehost logo">
                </div>

            </div>
        </div>
      </div>
</header> 
 
<section id="aboutUs">
    <div class="col-lg-9 col-md-9 col-sm-9 card shadow-lg p-4" >
        <div class="card-body">
            <div class="container">
                <h4 class="text-left title">Tentang Pt. Infrstruktur Digital Indonesia</h4>
                <p class="card-subtitle mt-3 text-muted">PT Infrastruktur Digital Indonesia(IDI) adalah perusahaan yang bergerak di bidang pembangunan infrastruktur dan penyelanggaraan layanan teknologi informasi dan Komunikasi/TIK (Information Communication and Technology/ICT), Bentuk layanan TIK kami berupa pembanguann, pengoperasian dan penyenggaraan fasilitas ICT end-to-end dengan konsep Neutral ICT Infrastructure, yaitu konsep infrastructure as a service</p>
                <button onclick="window.location='{{ route('about')}}'" type="button" class="btn-solid-sm-more float-end">Selengkapnya <i class="icofont-arrow-right"></i></button>
            </div>
        </div>
    </div> 
</section>
 
<section class id="our-clients">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <h2 style="color:black; text-align:center;"><strong>Our Client</strong></h2> 
        <div class="container our-clients-img">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    <img src="{{ asset('/images/client/clientall.png')}}" class="img-fluid" loading="lazy" alt="Bluehost logo">
                </div>
            </div>
        </div>
    </div>
</section> 
  