<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Lucky Auto Service</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="Free Website Template" name="keywords" />
        <meta content="Free Website Template" name="description" />

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon" />

        <!-- Google Font -->
        <link
            href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap"
            rel="stylesheet"
        />

        <!-- CSS Libraries -->
        <link
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            rel="stylesheet"
        />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
            rel="stylesheet"
        />
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet" />
        <link href="lib/animate/animate.min.css" rel="stylesheet" />
        <link
            href="lib/owlcarousel/assets/owl.carousel.min.css"
            rel="stylesheet"
        />

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet" />
    </head>

    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="/">
                                <h1>Lucky <span>Auto Service</span></h1>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7 d-none d-lg-block">
                        <div class="row">
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-clock"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Opening Hour</h3>
                                        <p>Mon - Fri, 8:00 - 9:00</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="fa fa-phone-alt"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Call Us</h3>
                                        <p>0375566777</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="top-bar-item">
                                    <div class="top-bar-icon">
                                        <i class="far fa-envelope"></i>
                                    </div>
                                    <div class="top-bar-text">
                                        <h3>Email Us</h3>
                                        <p>luckauto@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Bar End -->

        <!-- Nav Bar Start -->
        <div class="nav-bar">
            <div class="container">
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button
                        type="button"
                        class="navbar-toggler"
                        data-toggle="collapse"
                        data-target="#navbarCollapse"
                    >
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                                <a href="/" class="nav-item nav-link ">Home</a>
                                <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                                <a href="{{ route('service') }}" class="nav-item nav-link active">Service</a>
                                <a href="{{ route('contact') }}" class="nav-item nav-link">Contact</a>
                            </div>
                            @if(Route::has('login'))

                            @auth
                            <div class="navbar-nav mr-auto">
                            <a href="{{'myappointment'}}"  class="nav-item nav-link">Appointments</a>
                            </div>

                            <x-app-layout>
                                
                            </x-app-layout>
                            
                            @else
                            <div class="ml-auto">
                                <a class="btn btn-custom" href="{{route('login')}}">Login</a>&nbsp;&nbsp;
                                <a class="btn btn-custom" href="{{route('register')}}">Register</a>
                            </div>

                            @endauth

                            @endif
                        </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Service</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Service</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <div class="section-header text-center">
                    <p>What We Do?</p>
                    <h2>Premium Washing Services</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash-1"></i>
                            <h3>Exterior Washing</h3>
                            <p>
                                Thorough cleaning of your vehicle’s exterior to
                                remove dirt and ensure a gleaming finish.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Interior Washing</h3>
                            <p>
                                Deep cleaning of your vehicle's interior,
                                focusing on surfaces, fabrics, and hard-to-reach
                                areas.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-vacuum-cleaner"></i>
                            <h3>Vacuum Cleaning</h3>
                            <p>
                                Efficient removal of dust and debris from your
                                car’s interior using high-powered vacuums.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-seat"></i>
                            <h3>Seats Washing</h3>
                            <p>
                                Specialized cleaning techniques to refresh and
                                restore your vehicle’s seating upholstery.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service"></i>
                            <h3>Window Wiping</h3>
                            <p>
                                Streak-free cleaning of windows to enhance
                                visibility and the appearance of your vehicle.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service-2"></i>
                            <h3>Wet Cleaning</h3>
                            <p>
                                Delicate yet effective cleaning using
                                moisture-controlled techniques to protect
                                sensitive materials.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Oil Changing</h3>
                            <p>
                                Essential maintenance to replace old engine oil
                                with new, improving your car’s efficiency and
                                longevity.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-brush-1"></i>
                            <h3>Brake Repairing</h3>
                            <p>
                                Comprehensive inspection and repair of brake
                                systems to ensure your safety on the road.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Testimonial Start -->
        <div class="testimonial">
            <div class="container">
                <div class="section-header text-center">
                    <p>Testimonial</p>
                    <h2>What our clients say</h2>
                </div>
                <div class="owl-carousel testimonials-carousel">
                    <div class="testimonial-item">
                        <img src="img/testimonial-1.jpg" alt="Image" />
                        <div class="testimonial-text">
                            <h3>Asanka Silva</h3>
                            <h4>Software developer</h4>
                            <p>
                                Their dedication to excellence truly transformed
                                my car, making it look brand new.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-2.jpg" alt="Image" />
                        <div class="testimonial-text">
                            <h3>Shakula</h3>
                            <h4>Creative Profession</h4>
                            <p>
                                They handle even the toughest detailing jobs
                                with ease, offering solutions that make a real
                                difference.
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-3.jpg" alt="Image" />
                        <div class="testimonial-text">
                            <h3>Kavishka</h3>
                            <h4>Marketing Consultant</h4>
                            <p>
                                The quality of their detailing work is
                                outstanding—my car has never looked better!
                            </p>
                        </div>
                    </div>
                    <div class="testimonial-item">
                        <img src="img/testimonial-4.jpg" alt="Image" />
                        <div class="testimonial-text">
                            <h3>Dilsara</h3>
                            <h4>Real Estate Agent</h4>
                            <p>
                                A clean, well-maintained car is crucial in my
                                industry, and Lucky Auto Wash always delivers
                                top-notch results.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->

        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p>
                                <i class="fa fa-map-marker-alt"></i>Madagalla
                                Road, Rambe, Maeliya
                            </p>
                            <p><i class="fa fa-phone-alt"></i>0375566777</p>
                            <p>
                                <i class="fa fa-envelope"></i>luckauto@gmail.com
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Popular Links</h2>
                            <a href="">Twitter</a>
                            <a href="">Facebook</a>
                            <a href="">Youtube</a>
                            <a href="">Instagram</a>
                            <a href="">Linkedin</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-link">
                            <h2>Useful Links</h2>
                            <a href="">Terms of use</a>
                            <a href="">Privacy policy</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-newsletter">
                            <h2>Newsletter</h2>
                            <form>
                                <input
                                    class="form-control"
                                    placeholder="Full Name"
                                />
                                <input
                                    class="form-control"
                                    placeholder="Email"
                                />
                                <button class="btn btn-custom">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>
                    &copy; <a href="#">Lucky Auto Service</a>, All Right
                    Reserved. Designed By <a href="">WICKxDEV</a>
                </p>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to top button -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- Pre Loader -->
        <div id="loader" class="show">
            <div class="loader"></div>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>

        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
