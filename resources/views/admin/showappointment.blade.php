
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

            <div class="container" align="center" style="padding-top: 100px;">

                  <!-- @if(session()->has('message'))
              
                  <div class="alert alert-success">

                  <button type="button" class="close" data-dismiss="alert">
                      X
                  </button>

                    {{session()->get('message')}}

                  </div>

                  @endif -->

                <div align="center" class="navbar-nav mr-auto" style="padding: 70px;">
                <!-- <div align="center" style="padding: 70px;"> -->
                    <table>
                        <tr align="center" style="background-color:#202C45">
                            <th style="padding: 10px; font-size: 18px; color:white">User Name</th>
                            <th style="padding: 10px; font-size: 18px; color:white">Phone Number</th>
                            <th style="padding: 10px; font-size: 18px; color:white">Package</th>
                            <th style="padding: 10px; font-size: 18px; color:white">Status</th>
                            <th style="padding: 10px; font-size: 18px; color:white">Approved</th>
                            <th style="padding: 10px; font-size: 18px; color:white">Canceled</th>
                            <th style="padding: 10px; font-size: 18px; color:white">WhatsApp</th>
                        </tr>
                        @foreach($data as $appoint)
                        <tr align="center">
                            <td style="padding: 10px; font-size: 16px;">{{$appoint->name}}</td>
                            <td style="padding: 10px; font-size: 16px;">{{$appoint->phone}}</td>
                            <td style="padding: 10px; font-size: 16px;">{{$appoint->package}}</td>
                            <td style="padding: 10px; font-size: 16px;">{{$appoint->status}}</td>
                            <td><a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approved</a></td>
                            <td><a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Canceled</a></td>
                            <td>
                            <a class="btn btn-primary" href="https://wa.me/94{{$appoint->phone}}?text=Hello%2C%20we're%20confirming%20your%20appointment." target="_blank">Send WhatsApp Message</a>
                            </td>
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