<div class="col-lg-5">
    <div class="location-form">
    <h3>Appointment for a car wash</h3>
        <form action="{{url('appointment')}}" method="POST">
            @csrf
            <div class="control-group">
                <input type="text" name="name"class="form-control" placeholder="Name" required="required" />
             </div>
            <div class="control-group">
                <input type="mobile" name="phone" class="form-control" placeholder="Mobile Number" required="required" />
            </div>
            <div class="control-group">
                <select name="package" placeholder="Select Package" class="form-control styled-select" id="packageSelect">
                    <option >Select Package</option>
                    @foreach($package as $packages)
                        <option  value="{{$packages->pack_name}}" >{{$packages->pack_name}}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <button class="btn btn-custom" type="submit">Submit Request</button>
            </div>
        </form>
</div>