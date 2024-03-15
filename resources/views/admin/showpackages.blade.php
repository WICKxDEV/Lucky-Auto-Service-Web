
<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
        label
        {
            display: inline-block;
            width: 200px;

        }
        /* Animation keyframes for slide and fade out effect */
        @keyframes slideFadeOutUpwardSmooth {
              0% {
                  opacity: 1;
                  transform: translateY(0);
              }
              50% {
                  opacity: 0.5;
                  transform: translateY(-100%);
              }
              100% {
                  opacity: 0;
                  transform: translateY(-100%);
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
    @include('admin.css')

    <!-- for the check icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">


  </head>
  <body>
    <div class="container-scroller">
      <div class="" id="">
        <div class="">
          <div class="">
            <!-- <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div> -->
          </div>
        </div>
      </div>

      @include('admin.sidebar')

      @include('admin.navbar')

        <div class="main-panel">

            <div class="" align="center" style="padding-top: 100px;">

                  <!-- @if(session()->has('message'))
              
                  <div class="alert alert-success">

                  <button type="button" class="close" data-dismiss="alert">
                      X
                  </button>

                    {{session()->get('message')}}

                  </div>

                  @endif -->

                <div  class="navbar-nav mr-auto" style="padding: 70px;">
                <!-- <div align="center" style="padding: 70px;"> -->
                    <table>
                        <tr align="center" style="background-color:#202C45">
                            <th style="padding: 10px; font-size: 18px; color:white">Package Name</th>
                            <th style="padding: 10px; font-size: 18px; color:white">Package Price</th>
                            <th style="padding: 10px; font-size: 18px; color:white">Seats Wash</th>
                            <th style="padding: 10px; font-size: 18px; color:white">Vacuum Cleaning</th>
                            <th style="padding: 10px; font-size: 18px; color:white">Exterior Cleaning</th>
                            <th style="padding: 10px; font-size: 18px; color:white">Interior Wet Cleaning</th>
                            <th style="padding: 10px; font-size: 18px; color:white">Window Wiping</th>
                            <th style="padding: 10px; font-size: 18px; color:white">Delete</th>
                            <th style="padding: 10px; font-size: 18px; color:white">Update</th>
                        </tr>
                        @foreach($data as $package)
                        <tr align="center">
                            <td style="padding: 10px; font-size: 16px;">{{$package->pack_name}}</td>
                            <td style="padding: 10px; font-size: 16px;">${{$package->pack_price}}</td>
                            
                            <td >
                                @if($package->seats_wash)
                                    <i style="color:green"class="far fa-check-circle"></i>
                                @else
                                    <i style="color:darkred"class="far fa-times-circle"></i>
                                @endif
                            </td>
                            <td >
                                @if($package->vacuum_cleaning)
                                    <i style="color:green"class="far fa-check-circle"></i>
                                @else
                                    <i style="color:darkred"class="far fa-times-circle"></i>
                                @endif
                            </td>
                            <td >
                                @if($package->exterior_cleaning)
                                    <i style="color:green"class="far fa-check-circle"></i>
                                @else
                                    <i style="color:darkred"class="far fa-times-circle"></i>
                                @endif
                            </td>
                            <td >
                                @if($package->interior_wet_cleaning)
                                    <i style="color:green"class="far fa-check-circle"></i>
                                @else
                                    <i style="color:darkred"class="far fa-times-circle"></i>
                                @endif
                            </td>
                            <td >
                                @if($package->window_wiping)
                                    <i style="color:green"class="far fa-check-circle"></i>
                                @else
                                    <i style="color:darkred"class="far fa-times-circle"></i>
                                @endif
                            </td>



                            <td><a onclick="return confirm('Are you sure you want to delete this?')" class="btn btn-danger" href="{{url('deletepackge',$package->id)}}">Delete</a></td>
                            <td><a class="btn btn-primary" href="{{url('updatepackage',$package->id)}}">update</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>

            </div>

        </div>


      <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.script')
  </body>
</html>