<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link rel="icon" href="assets/img/yield2.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    {{-- font --}}
    <link href="https://fonts.googleapis.com/css2?family=Kanit&display=swap" rel="stylesheet">
    {{-- icon --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Vendor CSS Files -->
    <link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css?v=1') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/quill/quill.snow.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/quill/quill.bubble.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ url('assets/vendor/simple-datatables/style.css') }}" rel="stylesheet">


    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> --}}

    <!-- Template Main CSS File -->
    <link href="{{ url('assets/css/style.css?v=14') }}" rel="stylesheet">

    {{-- sweet alert2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.6/dist/sweetalert2.min.js"></script>

    {{-- ajax --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    {{-- data Table --}}
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <style>
        .display-date {
            text-align: center;
            margin-bottom: 10px;
            color: #ff6868;
            /* font-size: 1.3rem; */
            font-weight: 600;
        }

        .display-time {
            /* font-size: 2rem; */
            font-weight: bold;
            color: #ff6868;
            border: 2px solid #ff6868;
            padding: 10px 20px;
            border-radius: 5px;
            transition: ease-in-out 0.1s;
            transition-property: background, box-shadow, color;
            -webkit-box-reflect: below 2px linear-gradient(transparent, rgba(255, 255, 255, 0.05));
        }

        .display-time:hover {
            background: #ffd868;
            box-shadow: 0 0 30px#ffd868;
            color: #272727;
            cursor: pointer;
        }
    </style>
</head>

<body>

    @yield('content')

    @yield('footer')

    <!-- Vendor JS Files -->
    <script src="{{ url('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script> --}}
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('assets/vendor/chart.js/chart.umd.js') }}"></script>
    <script src="{{ url('assets/vendor/echarts/echarts.min.js') }}"></script>
    <script src="{{ url('assets/vendor/quill/quill.js') }}"></script>
    <script src="{{ url('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
    <script src="{{ url('assets/vendor/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ url('assets/vendor/php-email-form/validate.js') }}"></script>

    {{-- daterangepicker --}}
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />


    <!-- Template Main JS File -->
    <script src="{{ url('assets/js/main.js') }}"></script>

    <script>
        // Function to format numbers with leading zeros
        function padZero(num) {
            return num < 10 ? '0' + num : num;
        }

        // Function to update date and time
        function updateDateTime() {
            var now = new Date();

            // Format date as "Tuesday, September 19, 2023"
            var options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            var currentDate = now.toLocaleDateString('en-US', options);

            // Format time as "14:30:00"
            var currentTime = padZero(now.getHours()) + ':' + padZero(now.getMinutes()) + ':' + padZero(now.getSeconds());

            // Update HTML elements
            $('#current-date').text(currentDate);
            $('#current-time').html(currentTime + ' <i class="bi bi-clock"></i>');
        }

        // Update the time every second
        setInterval(updateDateTime, 1000);

        // Initial call to display time immediately on page load
        updateDateTime();
    </script>
</body>

</html>
