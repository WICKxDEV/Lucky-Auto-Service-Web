<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Lucky Auto Service</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">


        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <style>
        /* Style for the dropdown */
        .form-control.styled-select {
            color: black; /* Set text color */
            background-color: white; /* Background color of the dropdown */
            border: 1px solid #ccc; /* Border color */
            border-radius: 4px; /* Rounded corners */
            padding: 10px; /* Padding inside the dropdown */
            -webkit-appearance: none; /* Removes default chrome and safari appearance */
            -moz-appearance: none; /* Removes default Firefox appearance */
            appearance: none; /* Removes default appearance for IE */
            cursor: pointer; /* Changes cursor to pointer type */
        }

        /* Style for the option elements */
        /* Note: Direct styling of option elements is limited and might not work consistently across all browsers. */
        .styled-select option {
            background: #F5F5F5; /* Light grey background */
            color: black; /* Text color */
        }
        
        /* Animation keyframes for slide and fade out effect */
        @keyframes slideFadeOutUpwardSmooth {
              0% {
                  opacity: 1;
                  transform: translateY(0);
              }
              50% {
                  opacity: 0.5;
                  transform: translateY(0%);
              }
              100% {
                  opacity: 0;
                  transform: translateY(0%);
              }
          }

          /* Class to apply the smooth animation */
          .slideFadeOutUpwardSmooth {
              animation-name: slideFadeOutUpwardSmooth;
              animation-duration: 3s; /* Adjusts the speed of the animation */
              animation-fill-mode: forwards; /* Keeps the element in the state of the last keyframe when the animation completes */
              animation-timing-function: ease-in-out; /* Starts and ends the animation slowly, making it smoother */
          } 
        </style>

    </head>
    
    <body>
        <!-- Top Bar Start -->
        <div class="top-bar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="index.html">
                            <h1 style=" line-height: 100px; font-weight: 1000; letter-spacing: -1px;  font-family: Arial, sans-serif; font-size: 27px;">Lucky <span>Auto Service</span></h1>
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
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                        <a href="/" class="nav-item nav-link ">Home</a>
                            <a href="{{ route('about') }}" class="nav-item nav-link">About</a>
                            <a href="{{ route('service') }}" class="nav-item nav-link">Service</a>
                            <a href="{{ route('contact') }}" class="nav-item nav-link ">Contact</a>
                        </div>
                        
                        @if(Route::has('login'))

                        @auth
                        <div class="navbar-nav mr-auto">
                        <a href="{{'myappointment'}}"  class="nav-item nav-link active">Appointments</a>
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
        <div class="navbar-nav mr-auto" style="padding: 70px;">
        <!-- <div align="center" style="padding: 70px;"> -->
            <table>
                <tr style="background-color:#202C45">
                    <th style="padding: 10px; font-size: 18px; color:white">User Name</th>
                    <th style="padding: 10px; font-size: 18px; color:white">Phone Number</th>
                    <th style="padding: 10px; font-size: 18px; color:white">Package</th>
                    <th style="padding: 10px; font-size: 18px; color:white">Date</th>
                    <th style="padding: 10px; font-size: 18px; color:white">Status</th>
                    <th style="padding: 10px; font-size: 18px; color:white">Action</th>
                </tr>

                @foreach($appoint as $appoints)

                <tr >
                    <td style="padding: 10px; font-size: 16px;">{{$appoints->name}}</td>
                    <td style="padding: 10px; font-size: 16px;">{{$appoints->phone}}</td>
                    <td style="padding: 10px; font-size: 16px;">{{$appoints->package}}</td>
                    <td style="padding: 10px; font-size: 16px;">{{$appoints->appointmentDate}}</td>
                    <td style="padding: 10px; font-size: 16px;">{{$appoints->status}}</td>
                    <td style="padding: 10px; font-size: 16px;"> <a class="btn btn-custom" onclick="return confirm('are you sure you want to delete this?')" href="{{url('cancel_appointment',$appoints->id)}}">Cancel</a></td>
                </tr>

                @endforeach

            </table>
        </div>
        


        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i>Madagalla Road, Rambe, Maeliya</p>
                            <p><i class="fa fa-phone-alt"></i>0375566777</p>
                            <p><i class="fa fa-envelope"></i>luckauto@gmail.com</p>                         
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
                                <input class="form-control" placeholder="Full Name">
                                <input class="form-control" placeholder="Email">
                                <button class="btn btn-custom">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container copyright">
                <p>&copy; <a href="#">Lucky Auto Service</a>, All Right Reserved. Designed By <a href="">Dulmini</a></p>
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

        <!-- Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
