<div class="container">
  <footer class="row pt-5 pb-5">
	<div class="col-md-5">
		<div class="col mb-3">
			<div class="row">
				<a  onclick="window.location='{{ route('home')}}'" class="d-flex align-items-center mb-3 link-dark text-decoration-none">
					<img class="logo-image"  src="{{ asset('/images/IDI_LOGO_footer-0-1.png')}}" height="25" alt="IDI Logo">
					<span class="text-muted">&nbsp; Pt. Infrstruktur Digital Indonesia</span>
				</a>
			</div>
			<div class="row">
				<div class="col-sm-1">
					<i class="icofont-ui-call icofont-1x"></i>
				</div>
				<div class="col">
					<span>150188</span>
				</div>
			</div>
			<div class="row" style="cursor:pointer;">
				<div class="col-sm-1">
					<i class="icofont-brand-whatsapp icofont-1x"></i> 
				</div>
				<div class="col">
					<span  onclick="window.location.href='https://api.whatsapp.com/send?phone=08111500508&text=Hello, I want to ask a question regarding IDI products';"> (+62)811-1500-508</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-1">
					<i class="icofont-email icofont-1x"></i> 
				</div>
				<div class="col">
					<span>cx@infrastructur-digital.id</span>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-1">
					<i class="icofont-building-alt icofont-1x"></i> 
				</div>
				<div class="col">
					<span>Sahid Sudirman Center Lt.23-F Jl. Jendral Sudirman Kav.86 Karet Tengsin, Tanah Abang Jakarta Pusat, Jakarta 10220</span>
				</div>
			</div>
		</div>
	</div>
	<div class="col">	
		<h5>Main Menu</h5>
		<ul class="nav flex-column">
			<li class="nav-item mb-2"><a href="#" onclick="window.location='{{ route('home')}}'" class="nav-link p-0 text-muted">Home</a></li>
			<li class="nav-item mb-2"><a href="#" onclick="window.location='{{ route('about')}}'"class="nav-link p-0 text-muted">About Us</a></li>
			<li class="nav-item mb-2"><a href="#contact" class="nav-link p-0 text-muted">Contact</a></li>
		</ul>
	</div>

	<div class="col mb-3">
		<h5>Product</h5>
		<ul class="nav flex-column">
			<li class="nav-item mb-2"><a href="#" onclick="window.location='{{ route('internet')}}'" class="nav-link p-0 text-muted">Internet Services</a></li>
			<li class="nav-item mb-2"><a href="#" onclick="window.location='{{ route('vpn')}}'" class="nav-link p-0 text-muted">VPN Services</a></li>
		</ul>
	</div>
	
	<div class="border-top">
		<p class="text-muted mt-3">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. Pt. Infrstruktur Digital Indonesia</p>
	</div>
  </footer>
</div>

