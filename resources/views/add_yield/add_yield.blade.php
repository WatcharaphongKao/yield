@section('title', 'HVF | ADD YIELD')
@extends('layouts.master')

@section('content')
    @include('layouts.header')
    @include('layouts.sidebar')

    <main id="main" class="main">
        <!-- Lightbox Container -->
        <div id="lightbox" class="lightbox" style="display: none;">
            <span id="closeLightbox" class="close">&times;</span>
            <img id="lightboxImage" class="lightbox-image" src="" alt="Expanded Image">
        </div>
        <div class="pagetitle">
            <h1>Yield</h1>
            <nav>
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Yield</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        <!-- Recent Sales -->
                        <div class="col-12">
                            <div class="card recent-sales overflow-auto">

                                <div class="filter d-flex align-items-center">
                                    {{-- LineModel --}}
                                    <label for="inputState" class="form-label mx-2">Line:</label>
                                    <select class="form-select" aria-label="Default select example" name="line_search"
                                        id="line_search" data-role="LineModel">
                                    </select>
                                    {{-- Type --}}
                                    <label for="inputState" class="form-label mx-2">Type:</label>
                                    <select class="form-select me-2" aria-label="Default select example" name="type_search"
                                        id="type_search" data-role="type_yield">
                                    </select>
                                    {{-- Date --}}
                                    <label for="inputState" class="form-label mx-2">Date:</label>
                                    <input type="date" class="form-control" id="date_search" name="date_search">
                                    <div class="dropdown mx-2">
                                        <a class="icon" href="#" id="clearFilter">
                                            <i class="bi bi-arrow-counterclockwise"></i>
                                        </a>
                                    </div>

                                    <!-- Bookmark Icon with Dropdown -->
                                    <div class="dropdown">
                                        <a class="icon" href="#" data-bs-toggle="dropdown">
                                            <i class="bi bi-bookmark-plus"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                            <li class="dropdown-header text-start">
                                                <h6>Yield</h6>
                                            </li>
                                            <li class="dropdown-item" id="open_modal">Add Yield</li>
                                        </ul>
                                    </div>
                                </div>


                                <div class="card-body">
                                    <h5 class="card-title"><span id="filter_yield">Line | This All</span></h5>

                                    <table id="yield_dataTable"
                                        class="table table-bordered table-striped table-hover yield_dataTable">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Description</th>
                                                <th>Date</th>
                                                <th>Line</th>
                                                <th>Count</th>
                                                <th>Color</th>
                                                <th>Quality</th>
                                                <th>Type</th>
                                                <th>Grade</th>
                                                <th>Weight(Kg)</th>
                                                <th>Status</th>
                                                <th>Detail</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>

                                </div>

                            </div>
                        </div><!-- End Recent Sales -->

                    </div>
                </div><!-- End Left side columns -->
            </div>
        </section>

    </main>
    @include('layouts.footer')

    <!-- End #main -->

    {{-- end กระพิบ --}}
    <!-- Modal -->
    <div class="modal fade add_weight" id="editYieldModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg">
            <form id="Form_yield" enctype="multipart/form-data">
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        {{-- <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Customer</h1> --}}
                        <h5 class="modal-title d-flex justify-content-between w-100">
                            <span id="modal-title-text"></span>
                            <span id="modal-title-date"></span>
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        @include('add_yield.form_yield')
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" id="saveButton" class="btn btn-primary saveButton"></button>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <script>
        $(document).ready(function() {
            // var department = @json(session('user.department'));
            // var name = @json(session('user.name'));
            // alert
            $('#saveButton').on('click', function(e) {
                e.preventDefault();
                $('#Form_yield').submit();
            });
            var yield_dataTable = $('#yield_dataTable').DataTable({
                pageLength: 10,
                responsive: true,
                processing: true,
                serverSide: true,
                cache: false,
                autoWidth: false,
                language: {
                    processing: '<div class="form-control"><i class="fa fa-spinner"></i> Processing...</div>'
                },
                dom: 'PBflrtip',
                columnDefs: [{
                    "class": "text-center",
                    "targets": "_all"
                }],
                ajax: {
                    url: "{{ url('yield_dataTable') }}",
                    type: "GET",
                    data: function(d) {
                        d.line_search = $('#line_search').val();
                        d.type_search = $('#type_search').val();
                        d.date_search = $('#date_search').val();
                    }
                },
                order: [
                    [0, 'desc'],
                    [1, 'desc'],
                ],
                columns: [{
                        data: 'yield_code',
                        name: 'yield_code',
                    },
                    {
                        data: 'description',
                        name: 'description',
                    },
                    {

                        data: 'created_at_yeild',
                        name: 'created_at_yeild'
                    },
                    {
                        data: 'line',
                        name: 'line'
                    },
                    {
                        data: 'count',
                        name: 'count'
                    },
                    {
                        data: 'color',
                        name: 'color'
                    },
                    {
                        data: 'quality',
                        name: 'quality',
                    },
                    {
                        data: 'type_yield',
                        name: 'type_yield'
                    },
                    {
                        data: 'grade',
                        name: 'grade',
                        searchable: false,
                        // orderable: false,
                    },
                    {
                        data: 'weight',
                        name: 'weight',
                        render: function(data, type, row) {
                            // ใช้ JavaScript เพื่อจัดรูปแบบทศนิยม 2 ตำแหน่ง
                            return parseFloat(data).toFixed(2);
                        }
                    },
                    {
                        data: 'status_update',
                        name: 'status_update'
                    },
                    {
                        data: 'Detail',
                        name: 'Detail',
                        searchable: false,
                        orderable: false,
                        className: 'text-center',
                    }
                ],
            });

            function initializeSelect2_Search(elementId) {
                $(elementId).select2({
                    placeholder: "Choose",
                    allowClear: true
                });
            }
            // Call the function for multiple IDs
            initializeSelect2_Search('#line_search');
            initializeSelect2_Search('#type_search');

            // Handle department select change
            $('#line_search').on('change', function() {
                var selectedText = $('#line_search option:selected').text();
                if (selectedText) {
                    $('#filter_yield').text('Line | ' + selectedText);
                } else {
                    $('#filter_yield').text('Line | This All');
                }

                yield_dataTable.ajax.reload();
            });
            $('#type_search').on('change', function() {
                yield_dataTable.ajax.reload();
            });
            $('#date_search').on('change', function() {
                yield_dataTable.ajax.reload();
            });

            $('#clearFilter').on('click', function(e) {
                e.preventDefault(); // ป้องกันพฤติกรรมเริ่มต้นของปุ่ม
                $('#line_search').val(null).trigger('change');
                $('#type_search').val(null).trigger('change');
                $('#date_search').val(null).trigger('change');
                yield_dataTable.ajax.reload();
            });


        });
        // Open the modal for both insert and update
        $(document).on('click', '#open_modal', function() {
            var recordId = this.id;
            var dataId = this.getAttribute('data-id');
            // alert(dataId)
            // Check if it's an update or insert action
            if (dataId !== null) {
                $.ajax({
                    url: '{{ url('/yields') }}/' + dataId + '/edit',
                    type: 'GET',
                    dataType: 'json',
                    success: function(response) {
                        // console.log(response);
                        fillFormFields(response);
                        setModalTitleAndDate(true, response); // Call the function for edit
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: 'Error',
                            text: 'An error occurred while fetching customer data.',
                            icon: 'error'
                        });
                    }
                });
            } else {
                setModalTitleAndDate(false); // Call the function for insert
            }
        });

        //Modal show insert edit
        function setModalTitleAndDate(isEdit, response = null) {
            var department = @json(session('user.department'));
            var name = @json(session('user.name'));
            var now = new Date();
            var formattedNow = now.toLocaleDateString('en-GB', {
                day: '2-digit',
                month: '2-digit',
                year: '2-digit'
            });

            if (isEdit) {
                var add_yield = response; // Access the add_yield object
                var status = add_yield.status;
                var created_by = add_yield.created_by || 'Unknown'; // Default to 'Unknown' if created_by is not available
                var createdAt = new Date(add_yield.created_at);
                var formattedDate = createdAt.toLocaleDateString('en-GB', {
                    day: '2-digit',
                    month: '2-digit',
                    year: '2-digit'
                });

                $('#modal-title-text').text('Detail Weight');
                $('#modal-title-date').text('(' + created_by + ') ' + formattedDate);
                $('#saveButton').text('Update');
                $('#saveButton').removeClass('btn-primary').addClass('btn-warning');
                if (status === 1) {
                    $('#saveButton').show();
                } else {
                    $('#saveButton').hide();
                }
            } else {
                $('#modal-title-text').text('Add Weight');
                $('#modal-title-date').text(formattedNow);
                $('#saveButton').text('Save');
                $('#saveButton').removeClass('btn-warning').addClass('btn-primary');
                $('.saveButton').show(); // แสดงปุ่ม saveButton
            }

            $('#editYieldModal').modal('show');
        }



        $('#editYieldModal').on('hidden.bs.modal', function(e) {
            // เคลียร์ค่าทุกครั้งเมื่อโมดัลถูกปิดลง
            console.log('Modal is hidden');
            $('#editYieldModal input[type="text"]').val('');
            $('#editYieldModal input[type="number"]').val('');
            $('#editYieldModal input[type="file"]').val('');
            $('#editYieldModal input[type="date"]').val('');
            $('#imagePreview').empty(); // Clear image previews
            $('#editYieldModal textarea').val('');
            $('#editYieldModal select').prop('selectedIndex', 0);
            $('#editYieldModal input[name="id"]').val('');
            $('#editYieldModal select').val(null).trigger('change');
        });

        function fillFormFields(data) {
            // console.log(data)
            $('#id').val(data.id);
            $('#created_at_yeild').val(data.created_at_yeild);
            $('#yield_code').val(data.yield_code);
            $('#line').val(data.line).trigger('change');
            $('#count').val(data.count).trigger('change');
            $('#color').val(data.color).trigger('change');
            $('#quality').val(data.quality).trigger('change');
            $('#type_yield').val(data.type_yield).trigger('change');
            $('#weight').val(data.weight);
            $('#description').val(data.description);
            $('#created_by').val(data.created_by);
        }


        //update status
        $(document).on('click', '.update_status', function(e) {
            e.preventDefault(); // ป้องกันการกระทำปกติของลิงค์

            var status = $(this).data('status');
            var id = $(this).data('id');
            var statusText = $(this).text();

            var $dropdownMenu = $(this).closest('.dropdown').find('.dropdown-menu');
            var YieldCode = $dropdownMenu.data('name');
            var Product = $dropdownMenu.data('product');

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
            // แสดง SweetAlert2 เพื่อยืนยัน
            Swal.fire({
                title: 'Are you sure?',
                // text: `Do you want to change the status ${statusText} to ${YieldCode}?`,
                text: `Do you want to change status ${YieldCode} (${Product}) to ${statusText}?`,
                icon: 'warning',
                backdrop: `
                                rgba(97,123,0,0.4)
                                url("https://media.tenor.com/U4VjYOuUaPcAAAAi/yaseen1.gif")
                                right top
                                no-repeat
                                `,
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, update it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    // ส่งคำขอ AJAX เพื่ออัปเดตสถานะในฐานข้อมูล
                    $.ajax({
                        url: '{{ url('/update_status_yield') }}',
                        type: 'POST',
                        data: {
                            id: id,
                            status: status,
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            if (response.success) {
                                Swal.fire({
                                    title: 'Success',
                                    // text: response.message,
                                    html: response.message.replace(/\n/g,
                                        '<br>'
                                    ), // Replace \n with <br> for line breaks
                                    icon: 'success',
                                    backdrop: `
                                        rgba(0,123,39,0.4)
                                        url("https://media.tenor.com/ek214PnxJhEAAAAi/jagyasini-singh-cute-cat.gif")
                                        left top
                                        no-repeat
                                        `
                                });

                                // รีโหลด DataTable ถ้าจำเป็น
                                $('#yield_dataTable').DataTable().ajax
                                    .reload();
                            } else {
                                Toast.fire({
                                    title: 'Error',
                                    text: response.message,
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
                                    text: 'Your session has expired due to CSRF token mismatch. Please refresh the page and try again.',
                                    icon: 'warning',
                                    confirmButtonText: 'Refresh Now',
                                    backdrop: `
                        url("https://media.tenor.com/9z8aTaVmPfwAAAAi/cats-sad.gif")
                        right bottom
                        no-repeat
                    `
                                }).then((result) => {
                                    if (result.isConfirmed) {
                                        location
                                            .reload(); // Reload the page when user confirms
                                    }
                                });
                            } else if (xhr.responseJSON && xhr.responseJSON.errors) {
                                errorMessage = Object.values(xhr.responseJSON.errors).join(
                                    '<br>');
                                Toast.fire({
                                    title: 'Error',
                                    text: errorMessage,
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
                                    text: errorMessage,
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
                }
            });
        });
        //end update status
    </script>
@endsection
