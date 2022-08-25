<div class="sticky-top ">
    <nav class="navbar navbar-expand-lg navbar-light bg-nav">
        <div class="container">
            <a  class="navbar-brand">
                <img class="logo-image"  onclick="window.location='{{ route('home')}}'" src="{{ asset('/images/image 3.png')}}" height="33" alt="IDI Logo">
                <small style="color: #ffffff;">INFRASTRUKTUR DIGITAL INDONESIA </small>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto me-lg-1">
                    <a  onclick="window.location='{{ route('home')}}'" class="nav-item nav-link active text-white">Home</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle text-white" data-bs-toggle="dropdown">Product</a>
                        <div class="dropdown-menu">
                            <a href="#" class="nav-dropdown-item dropdown-item ">Infrastructure & Neutral Internet Service</a>
                            <a href="#" class="nav-dropdown-item dropdown-item">I PTVSolution</a>
                            <a href="#" class="nav-dropdown-item dropdown-item">Ethernet Service</a>
                            <a href="#" class="nav-dropdown-item dropdown-item">IBCS</a>
                            <a href="#" class="nav-dropdown-item dropdown-item">Manage Service</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link text-white">About Us</a>
                    <a href="#" class="nav-item nav-link text-white">Contact</a>
                </div>
            </div>
        </div>
    </nav>
</div>