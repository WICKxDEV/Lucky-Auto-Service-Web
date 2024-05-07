
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
          </div>
        </div>
      </div>

      @include('admin.sidebar')

      @include('admin.navbar')

        <div class="main-panel">

            <div class="container" align="center" style="padding-top: 100px;">


                  @if(session()->has('message'))
                    <div class="alert alert-success slideFadeOutUpwardSmooth">
                      {{ session()->get('message') }}
                    </div>
                  @endif

                <form action="{{url('upload_package')}}" method="POST" >
                    @csrf

                <div style="padding: 15px;">
                    <label>Package Name</label>
                    <input type="text"  style="color:black; width:210px;" name="pack_name" required="" placeholder="Enter the package name">
                </div>

                <div style="padding: 15px;">
                    <label>Package Price</label>
                    <input type="number" style="color:black; width:210px;" name="pack_price" required="" placeholder="Enter the package Price">
                </div>

                <div style="padding: 15px;">
                    <label>Seats wash</label>
                    <input type="checkbox" style="color:green" name="seats_wash" value="true">
                </div>
                <div style="padding: 15px;">
                    <label>Vacuum Cleaning</label>
                    <input type="checkbox" style="color:green" name="vacuum_cleaning" value="true">
                </div>
                <div style="padding: 15px;">
                    <label>Exterior Cleaning</label>
                    <input type="checkbox" style="color:green" name="exterior_cleaning" value="true">
                </div>
                <div style="padding: 15px;">
                    <label>Interior Wet Cleaning</label>
                    <input type="checkbox" style="color:green" name="interior_wet_cleaning" value="true">
                </div>
                <div style="padding: 15px;">
                    <label>Window Wiping</label>
                    <input type="checkbox" style="color:green" name="window_wiping" value="true">
                </div>

                <div style="padding: 15px;">
                    <input type="submit" class="btn btn-success">
                </div>

                </form>

            </div>

        </div>


      <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    @include('admin.script')
  </body>
</html>