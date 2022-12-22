<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>
        @yield('title')
    </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="{{ asset('/') }}/front-end/assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font google -->


    <!-- libraries Stylesheet -->
    <link href="{{ asset('/') }}/front-end/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}/front-end/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('/') }}/front-end/assets/css/style.css" rel="stylesheet">
    <link href="{{ asset('/') }}/front-end/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}/front-end/assets/css/fontawesome.min.css" rel="stylesheet">


    <!-- Scripts -->
   

</head>

<body>


<!-- Topbar Start -->
<div class="container-fluid">
    <div class="row bg-secondary py-1 px-xl-5">
        <div class="col-lg-6 d-none d-lg-block">
            <div class="d-inline-flex align-items-center h-100">
                <a class="text-body mr-3" href="">About</a>
                <a class="text-body mr-3" href="{{ route('contact-us') }}">Contact</a>
                <a class="text-body mr-3" href="">Help</a>
                <a class="text-body mr-3" href="">FAQs</a>
            </div>
        </div>

        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                @if(Session::get('customerId'))
                <div class="btn-group">

                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown">
                        <img src="{{ asset('/')}}admindash/assets/images/faces/face3.jpg" alt="image" class="rounded-circle" style="width:20px;height:20px;" class="profile-pic">
                    </button>
                    <div class="notice">
                        <i class="fa-solid fa-bell"></i>

                    </div>


                    <div class="dropdown-menu dropdown-menu-right">

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle">

                                    {{ Session::get('customerName')}}
                                </a>
                            </li>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">

                            </div>
                            <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">


                            </div>
                        </a>
                        <div class="dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout-customer') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
                @else
                    <a href="{{ route('registration-form') }}" class="dropdown-item">Sign Up</a>
                    <a  href="#loginform" data-bs-target="#loginform" data-bs-toggle="modal" class="dropdown-item">Login</a>
                @endif




                <div class="btn-group mx-2">
                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown">USD</button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button">EUR</button>
                        <button class="dropdown-item" type="button">GBP</button>
                        <button class="dropdown-item" type="button">CAD</button>
                    </div>
                </div>
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-light dropdown-toggle" data-bs-toggle="dropdown">EN</button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <button class="dropdown-item" type="button"><a>BN</a></button>
                        <button class="dropdown-item" type="button">AR</button>
                        <button class="dropdown-item" type="button">RU</button>
                    </div>
                </div>
            </div>

            <div class="d-inline-flex align-items-center d-block d-lg-none">
                <a href="" class="btn px-0 ml-2">
                    <i class="fa-solid fa-favorite"></i>
                    <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                </a>
                <a href="" class="btn px-0 ml-2">
                    <i class="fa-solid fa-shipping-fast"></i>
                    <span class="badge text-dark border border-dark rounded-circle" style="padding-bottom: 2px;">0</span>
                </a>
            </div>
        </div>
    </div>
    <h5 class="text-danger"> {{ Session::get('message') }}</h5>
    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-4">
            <a href="" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2">Multi</span>
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Shop</span>
            </a>
        </div>
        <div class="col-lg-4 col-6 text-left">

                    {{ Form::open(['route'=>'search-item', 'method'=>'POST']) }}
                    @csrf
                <div class="input-group">
                    <input type="text"  id="search" name="search" class="form-control" placeholder="Search for products">
                    <h4 class="text-success" id="searchitem"></h4>

                    <div class="input-group-append">
                            <button type="submit" class="input-group-text bg-transparent text-primary">
                                <i class="fa-solid fa-search"></i>
                            </button>
                    </div>
                </div>


                {{ Form::close() }}

        </div>
        <div class="col-lg-4 col-6 text-right">
            <p class="m-0">Customer Service</p>
            <h5 class="m-0">+880 1721778257</h5>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a class="btn d-flex align-items-center justify-content-between bg-primary w-100" data-bs-toggle="collapse" href="#navbar-vertical" style="height: 65px; padding: 0 30px;">
                <h6 class="text-dark m-0">All</h6>
                <i class="fa fa-angle-down text-dark"></i>
            </a>
            <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 bg-light" id="navbar-vertical"  style="width: calc(100% - 30px); z-index: 999;">
                <div class="navbar-nav w-100">
                    <div class="nav-item dropdown dropright">
                        <a href="#" class="nav-link dropdown-toggle bg-primary" data-bs-toggle="dropdown">Dresses <i class="fa fa-angle-right float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0 bg-primary">
                            <a href="" class="dropdown-item">Men's Dresses</a>
                            <a href="" class="dropdown-item">Women's Dresses</a>
                            <a href="" class="dropdown-item">Baby's Dresses</a>

                        </div>
                    </div>
                    @foreach($catagories as $catagory)
                    <div class="nav-item dropdown dropright">
                        <a href="{{ route('catagory-product',['id'=>$catagory->id]) }}" class="nav-link dropdown-toggle bg-primary" data-bs-toggle="dropdown">{{ $catagory->catagory_name  }} <i class="fa fa-angle-right float-right mt-1"></i></a>
                        <div class="dropdown-menu position-absolute rounded-0 border-0 m-0 bg-primary">
                            <a href="{{ route('catagory-product',['id'=>$catagory->id]) }}" class="dropdown-item">{{ $catagory->catagory_name  }}</a>
                            

                        </div>
                    </div>
                        
                    @endforeach

                </div>
            </nav>
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">Multi</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Shop</span>
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav mr-auto py-0">
                        <a href="" class="nav-item nav-link active">Home</a>
                        <a href="" class="nav-item nav-link">Shop</a>
                        <a href="" class="nav-item nav-link">Shop Detail</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages <i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href="{{ route('show-cartitems') }}" class="dropdown-item">Shopping Cart</a>
                                <a href="{{ route('checkout-form') }}" class="dropdown-item">Checkout</a>
                            </div>
                        </div>
                    </div>
                    <div class="navbar-nav ml-auto py-0 d-none d-lg-block">
                        <a href="" class="btn px-0">
                            <i class="fas fa-heart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                        <a href="" class="btn px-0 ml-3">
                            <i class="fas fa-shopping-cart text-primary"></i>
                            <span class="badge text-secondary border border-secondary rounded-circle" style="padding-bottom: 2px;">0</span>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->




@yield('body')



<!-- Footer Start -->
<div class="container-fluid bg-dark text-secondary mt-5 pt-5">
    <div class="row px-xl-5 pt-5">
        <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
            <h5 class="text-secondary text-uppercase mb-4">Get In Touch</h5>
            <p class="mb-4">This is a E-commerce site .</p>
            <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Sheheb Bazar, Rajshahi, Bangladesh</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>mdahsanallahsan@gmail.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+880-1721-778257</p>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Quick Shop</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                        <a class="text-secondary mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-secondary" href="#"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">My Account</h5>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-secondary mb-2" href="{{ url('/') }}"><i class="fa fa-angle-right mr-2"></i>Home</a>
                        <a class="text-secondary mb-2" href="{{ url('/') }}"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                        <a class="text-secondary mb-2" href="{{ route('show-cartitems') }}"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                        <a class="text-secondary mb-2" href="{{ route('checkout-form') }}"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                        <a class="text-secondary" href="{{ route('contact-us') }}"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <h5 class="text-secondary text-uppercase mb-4">Newsletter</h5>
                    <p>subscription </p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Your E{{ asset('/') }}/front-end/assets/mail Address">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Sign Up</button>
                            </div>
                        </div>
                    </form>
                    <h6 class="text-secondary text-uppercase mt-4 mb-3">Follow Us</h6>
                    <div class="d-flex">
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-primary btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row border-top mx-xl-5 py-4" style="border-color: rgba(256, 256, 256, .1) !important;">
        <div class="col-md-6 px-xl-0">
            <p class="mb-md-0 text-center text-md-left text-secondary">
                &copy; <a class="text-primary" href="#">Domain</a>. All Rights Reserved. Designed
                by
                <a class="text-primary" href="#">Md Ahsan Ali</a>
            </p>
        </div>
        <div class="col-md-6 px-xl-0 text-center text-md-right">
            <img class="img-fluid" src="{{ asset('/') }}/front-end/assets/img/payments.png" alt="">
        </div>
    </div>
</div>
<!-- Footer End -->

{{----- login modal-----}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="modal fade" id="loginform">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content bg-info">
                        <img class="rounded-circle m-auto" height="200px" width="200px" src="{{  asset('/') }}/product-image/download.jpg">
                        <div class="modal-header align-items-center">
                            <h1 class="m-auto ">Login Form</h1>
                        </div>
                        {{ Form::open([ 'route'=>'customer-login', 'method'=>'POST']) }}
                        <div class="modal-body px-5">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" required>
                                <span class="text-danger">{{ $errors->has('email') ? $errors->first('email') : ' ' }}</span>
                            </div>

                            <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" required>
                                <span class="text-danger">{{ $errors->has('password') ? $errors->first('password') : ' ' }}</span>
                            </div>


                            <div class="form-group">
                                <input type="submit" class="btn btn-block btn-primary" value="Login">
                            </div>
                        </div>
                        {{ Form::close() }}
                        <div class="modal-footer">
                            <h6><a href="#">Forget Password</a></h6>
                            <button type="button" class="close" data-bs-dismiss="modal">
                                <i class="fa-solid fa-cross"></i>
                            </button>
                        </div>
                    </div>

                </div>

            </div>
    </div>
</div>
</div>









<!-- Back to Top -->
<a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


<!-- JavaScript Libraries -->
<script src="{{ asset('/') }}/front-end/assets/js/popper.min.js"></script>
<script src="{{ asset('/') }}/front-end/assets/js/jquery-3.6.0.min.js"></script>
<script src="{{ asset('/') }}/front-end/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}/front-end/assets/lib/easing/easing.min.js"></script>
<script src="{{ asset('/') }}/front-end/assets/lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="{{ asset('/') }}/front-end/assets/mail/jqBootstrapValidation.min.js"></script>
<script src="{{ asset('/') }}/front-end/assets/mail/contact.js"></script>

<!-- Template Javascript -->
<script src="{{ asset('/') }}/front-end/assets/js/main.js"></script>




</body>

</html>
