@extends('theme')
@section('custom_css')

@endsection

@section('content') 

<header class="header-product">
    <div class="about-us-container h-100">
        <div class="row h-100 align-items-center">
          <div class="col-12 text-center">
            <h3 class="about-us-title">Get Solution For Your Bussinnes</h3>
            <hr>
          </div>
        </div>
      </div>
</header> 

<section class id="visi-misi">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-12" data-aos="zoom-out-right" data-aos-duration="5000">
            <img src="{{ asset('/images/undraw_solution_mindset_re_57bf.svg')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia Vision and Mision" loading="lazy"/>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                <div class="row about-us-content">
                    <p class="about-us-content-title"><strong>Neutral Host Infrastructure</strong></p>
                    <p class="about-us-content-subtitle">Company philosophy to Build–Serve–Managed–Optimized of end-to-end ICT facilities with the concept of Neutral ICT Infrastructure, namely the concept of infrastructure as a service.</p>
                    <div >
                        <button type="button" class="btn product-main-btn">Detail</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12" data-aos="zoom-out-left" data-aos-duration="5000">
                <div class="row about-us-content">
                    <p class="about-us-content-title" style="text-align: right"><strong>Our Philosopy</strong></p>
                    <p class="about-us-content-subtitle" style="text-align: right">Company philosophy to Build–Serve–Managed–Optimized of end-to-end ICT facilities with the concept of Neutral ICT Infrastructure, namely the concept of infrastructure as a service.</p>
                    <div class="float-right">
                        <button type="button" class="btn product-main-btn">Detail</button>
                    </div>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-4 col-md-5 col-sm-12" data-aos="zoom-out-right" data-aos-duration="5000">
            <img src="{{ asset('/images/undraw_solution_mindset_re_57bf.svg')}}" width="100%" alt="Pt. Infrastructure Digital Indonesia Vision and Mision" loading="lazy"/>
            </div>
        </div>
    </div>
</section> 

    
@section('custom_js')
<script type="text/javascript">

</script>
@endsection
@endsection