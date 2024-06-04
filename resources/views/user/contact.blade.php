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
                            <a href="{{ route('service') }}" class="nav-item nav-link">Service</a>
                            <a href="{{ route('contact') }}" class="nav-item nav-link active">Contact</a>
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
                        <h2>Contact Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Home</a>
                        <a href="">Contact</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Contact Start -->
        <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <p>Get In Touch</p>
                    <h2>Contact for any query</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="contact-info">
                            <h2>Quick Contact Info</h2>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="far fa-clock"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Opening Hour</h3>
                                    <p>Mon - Fri, 8:00 - 9:00</p>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="fa fa-phone-alt"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Call Us</h3>
                                    <p>0375566777</p>
                                </div>
                            </div>
                            <div class="contact-info-item">
                                <div class="contact-info-icon">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="contact-info-text">
                                    <h3>Email Us</h3>
                                    <p>luckauto@gmail.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="contact-form">
                            <div id="success"></div>
                            <form
                                name="sentMessage"
                                id="contactForm"
                                novalidate="novalidate"
                            >
                                <div class="control-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        placeholder="Your Name"
                                        required="required"
                                        data-validation-required-message="Please enter your name"
                                    />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="email"
                                        placeholder="Your Email"
                                        required="required"
                                        data-validation-required-message="Please enter your email"
                                    />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="subject"
                                        placeholder="Subject"
                                        required="required"
                                        data-validation-required-message="Please enter a subject"
                                    />
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="control-group">
                                    <textarea
                                        class="form-control"
                                        id="message"
                                        placeholder="Message"
                                        required="required"
                                        data-validation-required-message="Please enter your message"
                                    ></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div>
                                    <button
                                        class="btn btn-custom"
                                        type="submit"
                                        id="sendMessageButton"
                                    >
                                        Send Message
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3955.7987218492843!2d80.4164207!3d7.7297309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afcca504c71540d%3A0x569f6e7554965e5!2sLucky%20Auto%20Service!5e0!3m2!1sen!2sbd!4v1600663868074!5m2!1sen!2sbd"
                            frameborder="0"
                            style="border: 0"
                            allowfullscreen=""
                            aria-hidden="false"
                            tabindex="0"
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->

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
                    Reserved. Designed By <a href="">Dulmini</a>
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
