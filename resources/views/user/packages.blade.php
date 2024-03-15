<!-- Price Start -->
<div class="price">
            <div class="container">
                <div class="section-header text-center">
                    <p>Washing Plan</p>
                    <h2>Choose Your Plan</h2>
                </div>
                <div class="row">

                    @foreach($package as $packages)

                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>{{$packages->pack_name}}</h3>
                                <h2><span>$</span><strong>{{$packages->pack_price}}</strong></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                <li>{!! $packages->seats_wash ? '<i class="far fa-check-circle"></i>' : '<i class="far fa-times-circle"></i>' !!} Seats Washing</li>
                                <li>{!! $packages->vacuum_cleaning ? '<i class="far fa-check-circle"></i>' : '<i class="far fa-times-circle"></i>' !!} Vacuum Cleaning</li>
                                <li>{!! $packages->exterior_cleaning ? '<i class="far fa-check-circle"></i>' : '<i class="far fa-times-circle"></i>' !!} Exterior Cleaning</li>
                                <li>{!! $packages->interior_wet_cleaning ? '<i class="far fa-check-circle"></i>' : '<i class="far fa-times-circle"></i>' !!} Interior Wet Cleaning</li>
                                <li>{!! $packages->window_wiping ? '<i class="far fa-check-circle"></i>' : '<i class="far fa-times-circle"></i>' !!} Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom" href="">Book Now</a>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Price End -->