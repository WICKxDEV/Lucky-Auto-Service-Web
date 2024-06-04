<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<div class="col-lg-5">
    <div class="location-form">
        <h3>Appointment for a car wash</h3>
        <form action="{{ url('appointment') }}" method="POST">
            @csrf
            <div class="control-group">
                @if (Auth::check())
                    <input type="text" name="name" class="form-control" placeholder="Name" required="required" value="{{ Auth::user()->name }}" />
                @else
                    <input type="text" name="name" class="form-control" placeholder="Name" required="required" />
                @endif
            </div>
            <div class="control-group">
                <input type="text" name="numberPlate" class="form-control" placeholder="Vehicle Number" required="required" />
            </div>
            <div class="control-group">
                <div class="input-group">
                    <!-- <div class="input-group-prepend">
                        <select class="form-control" name="country_code">
                            <option value="+94 ">+94 (Sri Lanka)</option>
                            
                        </select>
                    </div> -->
                    <input style="width: 25%;" type="text" name="country_code" class="form-control" value="+94 " required="required" readonly />
                    <input style="width: 75%;" type="text" name="phone" id="phone" class="form-control" placeholder="Enter Mobile Number" required="required" oninput="removeLeadingZero()" />
                    <script>
                        function removeLeadingZero() {
                            var phoneInput = document.getElementById('phone');
                            var phoneValue = phoneInput.value;

                            // Check if the first character is '0'
                            if (phoneValue.charAt(0) === '0') {
                                // Remove the leading '0'
                                phoneInput.value = phoneValue.slice(1);
                            }
                        }
                    </script>
                </div>
            </div>

            <div class="control-group">
                <select name="package" class="form-control styled-select" id="packageSelect" required>
                    <option>Select Package</option>
                    @foreach($package as $packages)
                        <option value="{{ $packages->pack_name }}">{{ $packages->pack_name }}</option>
                    @endforeach
                    <option value="Custom">Custom</option>
                </select>
            </div>
            <div class="control-group">
                <input type="date" name="appointmentDate" class="form-control" placeholder="Appointment Date" required="required" id="appointmentDate" readonly />
            </div>
            <div>
                <button class="btn btn-custom" type="submit">Submit Request</button>
            </div>
        </form>
    </div>
</div>

<!-- Modal for Custom Services -->
<div class="modal fade" id="customServicesModal" tabindex="-1" role="dialog" aria-labelledby="customServicesModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customServicesModalLabel">Select Custom Services</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="customServicesForm">
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="Service 1" id="service1">
                            <label class="form-check-label" for="service1">Seats Washing</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="Service 2" id="service2">
                            <label class="form-check-label" for="service2">Vacuum Cleaning</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="Service 3" id="service3">
                            <label class="form-check-label" for="service3">Exterior Cleaning</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="Service 4" id="service4">
                            <label class="form-check-label" for="service4">Interior Wet Cleaning</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="services[]" value="Service 5" id="service5">
                            <label class="form-check-label" for="service5">Window Wiping</label>
                        </div>
                        <!-- Add more services as needed -->
                    </div>
                    <button type="button" class="btn btn-custom" id="saveCustomServices">Save Services</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var today = new Date();
        today.setDate(today.getDate() + 1); // Add one day to get tomorrow's date
        var day = ("0" + today.getDate()).slice(-2);
        var month = ("0" + (today.getMonth() + 1)).slice(-2);
        var tomorrowDate = today.getFullYear() + "-" + month + "-" + day;
        document.getElementById('appointmentDate').value = tomorrowDate;

        var packageSelect = document.getElementById('packageSelect');
        var modal = $('#customServicesModal');

        packageSelect.addEventListener('change', function() {
            if (this.value === 'Custom') {
                modal.modal('show');
            }
        });

        document.getElementById('saveCustomServices').addEventListener('click', function() {
            var selectedServices = [];
            var checkboxes = document.querySelectorAll('#customServicesForm input[type="checkbox"]:checked');
            checkboxes.forEach(function(checkbox) {
                selectedServices.push(checkbox.value);
            });

            // You can handle the selected services here, e.g., save them in a hidden input or send them via an AJAX request
            console.log('Selected services:', selectedServices);

            modal.modal('hide');
        });

        // Ensure the modal can be reopened after being closed
        modal.on('hidden.bs.modal', function () {
            packageSelect.value = 'Custom'; // Maintain the Custom selection after closing
        });
    });
</script>
