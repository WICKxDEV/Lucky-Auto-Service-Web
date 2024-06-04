
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

      
<!-- partial -->
<div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">Menu</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <a class="" href="{{ url('') }}">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </a>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"></h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">Add Packages</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <a class="" href="{{ url('add_package_view') }}">
                            <div class="icon icon-box-success">
                                <span class="mdi mdi-arrow-top-right icon-item"></span>
                            </div>
                        </a>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"></h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">Appointments</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <a class="" href="{{ url('showappointment') }}">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </a>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"></h6>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="d-flex align-items-center align-self-start">
                          <h3 class="mb-0">All Packages</h3>
                        </div>
                      </div>
                      <div class="col-3">
                        <a class="" href="{{ url('showpackages') }}">
                          <div class="icon icon-box-success ">
                            <span class="mdi mdi-arrow-top-right icon-item"></span>
                          </div>
                        </a>
                      </div>
                    </div>
                    <h6 class="text-muted font-weight-normal"></h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="row ">
              <div class="col-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Today Appointment Status</h4>
                  </div>
                  <div align="center" class="navbar-nav mr-auto" style="padding: 70px;">
                <!-- <div align="center" style="padding: 70px;"> -->
                <table>
                    <tr align="center" style="background-color:#202C45">
                        <th style="padding: 10px; font-size: 18px; color:white">User Name</th>
                        <th style="padding: 10px; font-size: 18px; color:white">Vehicle Number</th>
                        <th style="padding: 10px; font-size: 18px; color:white">Phone Number</th>
                        <th style="padding: 10px; font-size: 18px; color:white">Package</th>
                        <th style="padding: 10px; font-size: 18px; color:white">Status</th>
                        <th style="padding: 10px; font-size: 18px; color:white">Date</th>
                        <th style="padding: 10px; font-size: 18px; color:white">Action</th>
                    </tr>
                    @foreach($data as $appoint)
                        @php
                              $appointmentDate = \Carbon\Carbon::parse($appoint->appointmentDate);
                              $today = \Carbon\Carbon::today();
                        @endphp
                        @if($appointmentDate->gte($today)) {{-- greater than or equal to today --}}
                            <tr align="center">
                                <td style="padding: 10px; font-size: 16px;">{{$appoint->name}}</td>
                                <td style="padding: 10px; font-size: 16px;">{{$appoint->numberPlate}}</td>
                                <td style="padding: 10px; font-size: 16px;">{{$appoint->phone}}</td>
                                <td style="padding: 10px; font-size: 16px;">{{$appoint->package}}</td>
                                <td style="padding: 10px; font-size: 16px;">{{$appoint->status}}</td>
                                <td style="padding: 10px; font-size: 16px;">{{$appoint->appointmentDate}}</td>
                                <td>
                                    @if($appoint->status == 'Approved')
                                        <span class="btn btn-success">Approved</span>
                                    @elseif($appoint->status == 'Canceled')
                                        <span class="btn btn-danger">Canceled</span>
                                    @else
                                        <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">Approve</a>
                                        <a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">Cancel</a>
                                    @endif
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </table>
                </div>
                </div>
              </div>
            </div>
          </div>
      <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->        
    @include('admin.script')
  </body>
  
  
</html>