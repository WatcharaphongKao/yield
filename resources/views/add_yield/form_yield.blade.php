<div class="card bg_job">
    <div class="card-body">
        <!-- Multi Columns Form -->
        <div class="mt-3">
            <div class="row" id="Proceed">
                {{-- id --}}
                <input type="hidden" class="form-control text-center" id="id" name="id">
                <div class="col-md-7">
                    <label for="inputName5" class="form-label">Date</label>
                    <input type="date" class="form-control" id="created_at_yeild" name="created_at_yeild">
                </div>
                <div class="col-md-5">
                    <label for="inputState" class="form-label">Line</label>
                    <select class="form-select" name="line" id="line" data-role="LineModel">

                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Count</label>
                    <select class="form-select" name="count" id="count" data-role="CountModel">

                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Color</label>
                    <select class="form-select" name="color" id="color" data-role="ColorModel">

                    </select>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Quality</label>
                    <select class="form-select" name="quality" id="quality" data-role="QualityModel">

                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Type</label>
                    <select class="form-select type_yield" name="type_yield" id="type_yield" data-role="type_yield">
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="inputState" class="form-label">Weight(Kg)</label>
                    <input type="number" class="form-control" id="weight" name="weight">
                </div>
                <div class="col-md-12">
                    <label for="inputName5" class="form-label">Description</label>
                    <textarea class="form-control" style="height: 100px" placeholder="Pallet ,รายละเอียดเพิ่มเติม " id="description"
                        name="description"></textarea>
                </div>
            </div>
        </div>
        <!-- End Multi Columns Form -->
    </div>
</div>

<script>
    $(document).ready(function() {

        // type
        $.ajax({
            url: '{{ url('type_yield') }}',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                var select = $('[data-role="type_yield"]');
                select.empty();
                select.append('<option></option>');

                // ใช้ข้อมูลที่ได้รับจาก API โดยตรง
                $.each(data, function(index, item) {
                    var type_yield_code = item.type_yield_code;
                    var type_yield = item.type_yield.trim();
                    select.append('<option value="' + type_yield_code + '">' +
                        type_yield +
                        '</option>');
                });

            },
            error: function(error) {
                console.log('Error:', error);
            }
        });
        // Count
        $.ajax({
            url: '{{ url('CountModel') }}',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                var select = $('[data-role="CountModel"]');
                select.empty();
                select.append('<option></option>');

                // ใช้ข้อมูลที่ได้รับจาก API โดยตรง
                $.each(data, function(index, item) {
                    var count = item.count;
                    select.append('<option value="' + count + '">' +
                        count +
                        '</option>');
                });

            },
            error: function(error) {
                console.log('Error:', error);
            }
        });
        // Color
        $.ajax({
            url: '{{ url('ColorModel') }}',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                var select = $('[data-role="ColorModel"]');
                select.empty();
                select.append('<option></option>');

                // ใช้ข้อมูลที่ได้รับจาก API โดยตรง
                $.each(data, function(index, item) {
                    var color = item.color;
                    select.append('<option value="' + color + '">' +
                        color +
                        '</option>');
                });

            },
            error: function(error) {
                console.log('Error:', error);
            }
        });
        // Quality
        $.ajax({
            url: '{{ url('QualityModel') }}',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                var select = $('[data-role="QualityModel"]');
                select.empty();
                select.append('<option></option>');

                // ใช้ข้อมูลที่ได้รับจาก API โดยตรง
                $.each(data, function(index, item) {
                    var quality = item.quality;
                    select.append('<option value="' + quality + '">' +
                        quality +
                        '</option>');
                });

            },
            error: function(error) {
                console.log('Error:', error);
            }
        });
        // Line
        $.ajax({
            url: '{{ url('LineModel') }}',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                var select = $('[data-role="LineModel"]');
                select.empty();
                select.append('<option></option>');

                // ใช้ข้อมูลที่ได้รับจาก API โดยตรง
                $.each(data, function(index, item) {
                    var line = item.line;
                    select.append('<option value="' + line + '">' +
                        line +
                        '</option>');
                });

            },
            error: function(error) {
                console.log('Error:', error);
            }
        });



        function initializeSelect2(elementId) {
            $(elementId).select2({
                placeholder: "Choose",
                allowClear: true,
                dropdownParent: $('.add_weight')
            });
        }
        // Call the function for multiple IDs
        initializeSelect2('#line');
        initializeSelect2('#count');
        initializeSelect2('#color');
        initializeSelect2('#quality');
        initializeSelect2('#type_yield');
    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    // Handle form submission
    $('#Form_yield').on('submit', function(e) {
        e.preventDefault();

        var formData = new FormData(this);
        //sweetalert error
        const Toast = Swal.mixin({
            toast: true,
            position: "top-end",
            showConfirmButton: false,
            // timer: 3000,
            showCloseButton: true, // เพิ่มปุ่มปิด
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.onmouseenter = Swal.stopTimer;
                toast.onmouseleave = Swal.resumeTimer;
            }
        });
        $.ajax({
            url: "{{ url('Form_yield') }}", // Replace with the appropriate route
            type: 'POST',
            data: formData,
            processData: false, // Required for FormData
            contentType: false, // Required for FormData
            // headers: {
            //     'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            // },
            success: function(response) {
                if (response.success) {
                    Swal.fire({
                        title: 'Success',
                        html: response.message.replace(/\n/g,
                            '<br>'), // Replace \n with <br> for line breaks
                        icon: 'success',
                        backdrop: `
                                        rgba(0,123,39,0.4)
                                        url("https://media.tenor.com/ek214PnxJhEAAAAi/jagyasini-singh-cute-cat.gif")
                                        left top
                                        no-repeat
                                        `
                    })
                    $('#yield_dataTable').DataTable().ajax.reload();
                    $('#editYieldModal').modal('hide');
                } else {
                    Toast.fire({
                        title: 'Error',
                        html: response.message,
                        icon: 'error',
                        backdrop: `
                                   url("https://media.tenor.com/9z8aTaVmPfwAAAAi/cats-sad.gif")
                                   right bottom
                                   no-repeat
                            `
                    });
                }
            },
            error: function(xhr) {
                var errorMessage = 'An error occurred while inserting the record.';

                // Check for CSRF token mismatch (HTTP status code 419)
                if (xhr.status === 419) {
                    Swal.fire({
                        title: 'Session Expired',
                        html: 'Your session has expired due to CSRF token mismatch. Please refresh the page and try again.',
                        icon: 'warning',
                        confirmButtonText: 'Refresh Now',
                        backdrop: `
                        url("https://media.tenor.com/9z8aTaVmPfwAAAAi/cats-sad.gif")
                        right bottom
                        no-repeat
                    `
                    }).then((result) => {
                        if (result.isConfirmed) {
                            location.reload(); // Reload the page when user confirms
                        }
                    });
                } else if (xhr.responseJSON && xhr.responseJSON.errors) {
                    errorMessage = Object.values(xhr.responseJSON.errors).join('<br>');
                    Toast.fire({
                        title: 'Error',
                        html: errorMessage,
                        icon: 'error',
                        backdrop: `
                        url("https://media.tenor.com/9z8aTaVmPfwAAAAi/cats-sad.gif")
                        right bottom
                        no-repeat
                    `
                    });
                } else {
                    Toast.fire({
                        title: 'Error',
                        html: errorMessage,
                        icon: 'error',
                        backdrop: `
                        url("https://media.tenor.com/9z8aTaVmPfwAAAAi/cats-sad.gif")
                        right bottom
                        no-repeat
                    `
                    });
                }
            }
        });
    });
</script>
