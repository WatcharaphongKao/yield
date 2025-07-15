<main id="main" class="main">
    <!-- Lightbox Container -->
    <div id="lightbox" class="lightbox" style="display: none;">
        <span id="closeLightbox" class="close">&times;</span>
        <img id="lightboxImage" class="lightbox-image" src="" alt="Expanded Image">
    </div>
    <div class="pagetitle">
        <div class="row">
            <div class="col-9">
                <h1 class="logo">Dashboard <img class="mx-3" src="assets/img/yield2.png" alt=""></h1>
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </nav>
            </div>
            <div class="col-3 text-center">
                <h5 id="current-date" class="display-date"></h5>
                <h2 id="current-time" class="display-time "></h2>
            </div>
        </div>

    </div><!-- End Page Title -->

    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-8">
                <div class="row">

                    <!-- Today 1ST Card -->
                    <div id="1st_card" class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">
                            <div class="card-body">
                                <h5 class="card-title">1ST <span class="fetchAndUpdateData_text"
                                        id="fetchAndUpdateData_text">| Today</span></h5>
                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 id="total_weight_today">0</h6>
                                        <p id="total_weight_status_notify"></p>
                                        <span id="percentage_today" class="text-success small pt-1 fw-bold">0%</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Today 1ST Card -->

                    <!-- 2ND Card -->
                    <div id="2nd_card" class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">
                            <div class="card-body">
                                <h5 class="card-title">2ND <span class="fetchAndUpdateData_text"
                                        id="fetchAndUpdateData_text">| Today</span></h5>
                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 id="total_weight_today">0</h6>
                                        <p id="total_weight_status_notify"></p>
                                        <span id="percentage_today" class="text-success small pt-1 fw-bold">8%</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End 2ND Card -->
                    <!-- 3RD Card -->
                    <div id="3rd_card" class="col-xxl-4 col-md-6">
                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">3RD <span class="fetchAndUpdateData_text"
                                        id="fetchAndUpdateData_text">| Today</span></h5>
                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-graph-up-arrow"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6 id="total_weight_today">0</h6>
                                        <p id="total_weight_status_notify"></p>
                                        <span id="percentage_today" class="text-success small pt-1 fw-bold">8%</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End 3RD Card -->



                    <!-- Yield Report -->
                    <div class="col-12">
                        <div id="reportrange">
                            <i class="fa fa-calendar"></i>&nbsp;
                            <span></span> <i class="fa fa-caret-down"></i>
                        </div>
                        <div class="card top-selling overflow-auto">
                            <div class="filter d-flex align-items-center dashboard_select">
                                <select id="dateSelect" class="form-select me-2">
                                </select>
                                <select id="monthSelect" class="form-select me-2">
                                </select>
                                <select id="yearSelect" class="form-select me-2">
                                </select>

                            </div>
                            <div class="card-body pb-0">
                                <h5 class="card-title">Yield Report <span id="title_datatable">| Today</span>
                                </h5>

                                <table class="table table-borderless" id="Yield_dataTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">MC</th>
                                            <th scope="col">1ST(Kg)</th>
                                            <th scope="col">2ND(Kg)</th>
                                            {{-- <th scope="col">Wastage(Kg)</th> --}}
                                            <th scope="col">Total(Kg)</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Total</th>
                                            <th></th> <!-- จะใช้ JS ใส่ค่าในคอลัมน์นี้ -->
                                            <th></th> <!-- จะใช้ JS ใส่ค่าในคอลัมน์นี้ -->
                                            {{-- <th></th> <!-- จะใช้ JS ใส่ค่าในคอลัมน์นี้ --> --}}
                                            <th></th> <!-- จะใช้ JS ใส่ค่าในคอลัมน์นี้ -->
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>

                        </div>
                    </div><!-- End Yield Report -->


                </div>
            </div><!-- End Left side columns -->

            <!-- Right side columns -->
            <div class="col-lg-4">
                <!-- myPieChart Reports -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body pb-0">
                            <h5 class="card-title">Pie Chart Report <span id="title_pie_chart">| Today</span>
                                <span class="float-end">
                                    <input type="checkbox" id="holdRefreshCheckbox" class="form-check-input">
                                    <label class="form-check-label" for="holdRefreshCheckbox">
                                        Stop refreshing data
                                    </label>
                                </span>
                            </h5>
                            <div id="pie_chart" style="min-height: 400px;" class="echart"></div>
                        </div>

                    </div>
                </div>
                <!-- End myPieChart Reports -->

                <!-- Recent yield -->
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Recent yield <span id="title_recent">| Today</span></h5>
                        <div class="activity overflow-auto" style="max-height: 280px;">
                        </div>

                    </div>
                </div>
                <!-- End Recent yield -->

            </div><!-- End Right side columns -->
        </div>
    </section>
</main><!-- End #main -->
@include('layouts.footer')
<script>
    $(document).ready(function() {
        // sum yield
        function updateCard(cardId, totalWeight, percentage, statusNotify, total_weight_status_notify) {
            var formattedValue = Number(totalWeight).toLocaleString('en-US', {
                maximumFractionDigits: 2
            });

            if (statusNotify === 1) {
                $(cardId + ' #total_weight_today').html(formattedValue + ' kg <i class="bi bi-arrow-up"></i>')
                    .addClass('blink');
                $(cardId + ' #total_weight_status_notify').html('(+' + total_weight_status_notify + 'kg)')
                    .addClass('blink').show(); // show when statusNotify is 1
            } else {
                $(cardId + ' #total_weight_today').text(formattedValue + ' kg').removeClass('blink');
                $(cardId + ' #total_weight_status_notify').hide(); // hide when statusNotify is not 1
            }

            $(cardId + ' #percentage_today').text(percentage + '%');

        }

        function fetchAndUpdateData(day, month, year) {
            $.ajax({
                url: '{{ url('/sum_yields') }}',
                type: 'GET',
                data: {
                    day: day,
                    month: month,
                    year: year
                },
                dataType: 'json',
                success: function(response) {
                    // Update 1ST Card
                    updateCard('#1st_card', response.total_weight_1st_today, response
                        .percentage_1st_today, response.status_notify_1st, response
                        .total_weight_status_notify_1_1st);

                    // Update 2ND Card
                    updateCard('#2nd_card', response.total_weight_2nd_today, response
                        .percentage_2nd_today, response.status_notify_2nd, response
                        .total_weight_status_notify_1_2nd);

                    // Update 3RD Card
                    updateCard('#3rd_card', response.total_weight_3rd_today, response
                        .percentage_3rd_today, response.status_notify_3rd, response
                        .total_weight_status_notify_1_3rd);
                },
                error: function(xhr) {
                    console.error('An error occurred:', xhr.responseText);
                }
            });
        }




        // Function to fetch and update the chart data
        function updatePieChart(day, month, year) {
            fetch('{{ url('/sum_yields') }}?day=' + day + '&month=' + month + '&year=' + year)
                .then(response => response.json())
                .then(data => {
                    const totalWeight = data.total_weight_1st_today + data.total_weight_2nd_today + data
                        .total_weight_3rd_today;
                    // สร้างข้อมูลสำหรับกราฟพาย
                    const chartData = [{
                            value: data.total_weight_1st_today,
                            name: '1st'
                        },
                        {
                            value: data.total_weight_2nd_today,
                            name: '2nd'
                        },
                        {
                            value: data.total_weight_3rd_today,
                            name: '3rd'
                        }
                    ];
                    pie_chart.setOption({
                        title: {
                            text: 'Report yield Pie',
                            subtext: 'Filtered Data',
                            left: 'right'
                        },
                        tooltip: {
                            trigger: 'item',
                            formatter: '{a} <br/>{b}: {c} kg ({d}%)'
                        },
                        legend: {
                            orient: 'vertical',
                            left: 'left'
                        },
                        series: [{
                            name: 'Total Weight',
                            type: 'pie',
                            radius: '50%',
                            data: chartData,
                            emphasis: {
                                itemStyle: {
                                    shadowBlur: 10,
                                    shadowOffsetX: 0,
                                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                                }
                            },
                            label: {
                                show: true,
                                position: 'outside',
                                formatter: '{b} {d}%',
                            },

                        }],
                    });
                })
                .catch(error => console.error('Error fetching chart data:', error));

        }
        // Pie Chart
        var pie_chart = echarts.init(document.querySelector("#pie_chart"));
        // ทำให้กราฟ responsive
        window.addEventListener('resize', function() {
            pie_chart.resize(); // ปรับขนาดเมื่อขนาดหน้าต่างเปลี่ยน
        });
        //end Pie Chart

        // RecentYield
        function loadRecent_yield(day, month, year) {
            $.ajax({
                url: '{{ url('/recent_yield') }}',
                method: 'GET',
                data: {
                    day: day,
                    month: month,
                    year: year
                },
                success: function(response) {
                    let activityHtml = '';
                    response.forEach(function(yield) {
                        let statusClass = getStatusClass(yield.status);
                        activityHtml += `
                    <div class="activity-item d-flex">
                        <div class="activite-label">${yield.time}</div>
                        <i class='bi bi-circle-fill activity-badge ${statusClass} align-self-start'></i>
                        <div class="activity-content">
                            <a href="#" class="fw-bold text-dark">${yield.title}</a> - ${yield.weight} Kg - ${yield.type_yield}
                        </div>
                    </div><!-- End activity item-->
                `;
                    });
                    document.querySelector('.activity').innerHTML = activityHtml;
                }
            });
        }

        function getStatusClass(status) {
            switch (status) {
                case 0:
                    return 'text-success';
                case 1:
                    return 'text-danger';
                case 'muted':
                    return 'text-muted';
                default:
                    return 'text-secondary';
            }
        }
        //End RecentYield



        // start Yield Report
        function Yield_dataTable(day, month, year) {
            // Destroy any existing DataTable instance before creating a new one
            if ($.fn.DataTable.isDataTable('#Yield_dataTable')) {
                $('#Yield_dataTable').DataTable().clear().destroy();
            }
            var Yield_dataTable = $('#Yield_dataTable').DataTable({
                pageLength: 25,
                responsive: true,
                processing: true,
                serverSide: true,
                autoWidth: false,
                cache: true,
                ajax: "{{ url('Yield_dataTable') }}" + "?day=" + encodeURIComponent(day) +
                    "&month=" + encodeURIComponent(month) +
                    "&year=" + encodeURIComponent(year),
                language: {
                    processing: '<div class="form-control"><i class="fa fa-spinner fa-spin"></i> Processing...</div>'
                },
                dom: 'Prti',
                columnDefs: [{
                    "class": "text-center",
                    "targets": "_all"
                }],
                order: [
                    [0, 'asc'],
                ],
                columns: [{
                        data: 'line',
                        name: 'line',
                    },

                    {
                        data: 'grade_1',
                        name: 'grade_1',
                        render: function(data, type, row) {
                            const totalWeight = row.total_weight ||
                                0; // นำเข้ารวมจาก total_weight
                            const percentage = totalWeight > 0 ? ((data / totalWeight) * 100)
                                .toFixed(2) : 0; // คำนวณเปอร์เซ็นต์
                            return `${data.toLocaleString()} (${percentage}%)`; // แสดงผลลัพธ์
                        },
                        createdCell: function(td, cellData, rowData, row, col) {
                            $(td).css('color', '#4154f1'); // Set text color for this column
                        }
                    },
                    {
                        data: 'grade_2',
                        name: 'grade_2',
                        render: function(data, type, row) {
                            const totalWeight = row.total_weight ||
                                0; // นำเข้ารวมจาก total_weight
                            const percentage = totalWeight > 0 ? ((data / totalWeight) * 100)
                                .toFixed(2) : 0; // คำนวณเปอร์เซ็นต์
                            return `${data.toLocaleString()} (${percentage}%)`; // แสดงผลลัพธ์
                        },
                        createdCell: function(td, cellData, rowData, row, col) {
                            $(td).css('color', '#2eca6a'); // Set text color for this column
                        }
                    },
                    // {
                    //     data: 'grade_3',
                    //     name: 'grade_3',
                    //     render: function(data, type, row) {
                    //         const totalWeight = row.total_weight ||
                    //             0; // นำเข้ารวมจาก total_weight
                    //         const percentage = totalWeight > 0 ? ((data / totalWeight) * 100)
                    //             .toFixed(2) : 0; // คำนวณเปอร์เซ็นต์
                    //         return `${data.toLocaleString()} (${percentage}%)`; // แสดงผลลัพธ์
                    //     },
                    //     createdCell: function(td, cellData, rowData, row, col) {
                    //         $(td).css('color', '#ff771d'); // Set text color for this column
                    //     }
                    // },
                    {
                        data: 'total_weight',
                        name: 'total_weight',
                        render: function(data) {
                            return `${data.toLocaleString()} (100%)`; // แสดงผลลัพธ์รวม
                        },
                        createdCell: function(td, cellData, rowData, row, col) {
                            $(td).css('color', '#ffc107'); // Set text color for this column
                        }
                    },
                ],
                createdRow: function(row, data, dataIndex) {
                    // เช็คค่าของ ch_stop เพื่อกำหนดสี background
                    if (data.ch_stop == 4) {
                        $('td', row).eq(0).css('background-color', 'red');
                    }
                },
                // footerCallback เพื่อคำนวณยอดรวมของแต่ละคอลัมน์
                footerCallback: function(row, data, start, end, display) {
                    var api = this.api();

                    // ฟังก์ชันคำนวณรวมของแต่ละคอลัมน์
                    var totalGrade1 = api.column(1, {
                        page: 'current'
                    }).data().reduce(function(a, b) {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);

                    var totalGrade2 = api.column(2, {
                        page: 'current'
                    }).data().reduce(function(a, b) {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);

                    // var totalGrade3 = api.column(3, {
                    //     page: 'current'
                    // }).data().reduce(function(a, b) {
                    //     return parseFloat(a) + parseFloat(b);
                    // }, 0);

                    var totalOverall = api.column(3, {
                        page: 'current'
                    }).data().reduce(function(a, b) {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);

                    // คำนวณเปอร์เซ็นต์ของแต่ละคอลัมน์ตามผลรวมทั้งหมด
                    var percentageGrade1 = (totalOverall > 0) ? ((totalGrade1 / totalOverall) * 100)
                        .toFixed(2) : 0;
                    var percentageGrade2 = (totalOverall > 0) ? ((totalGrade2 / totalOverall) * 100)
                        .toFixed(2) : 0;
                    // var percentageGrade3 = (totalOverall > 0) ? ((totalGrade3 / totalOverall) * 100)
                    //     .toFixed(2) : 0;

                    // แสดงผลรวมและเปอร์เซ็นต์ใน footer
                    $(api.column(1).footer()).html(
                            `${totalGrade1.toLocaleString()} (${percentageGrade1}%)`)
                        .css('color', '#4154f1'); // สีสำหรับคอลัมน์ Grade 1
                    $(api.column(2).footer()).html(
                            `${totalGrade2.toLocaleString()} (${percentageGrade2}%)`)
                        .css('color', '#2eca6a'); // สีสำหรับคอลัมน์ Grade 2
                    // $(api.column(3).footer()).html(
                    //         `${totalGrade3.toLocaleString()} (${percentageGrade3}%)`)
                    //     .css('color', '#ff771d'); // สีสำหรับคอลัมน์ Grade 3
                    $(api.column(3).footer()).html(`${totalOverall.toLocaleString()} (100%)`)
                        .css('color', '#ffc107'); // สีสำหรับคอลัมน์ Total
                }
            });
        }

        // end Yield Report

        // Get today's date
        const today = new Date();
        const currentDay = today.getDate();
        const currentMonth = today.getMonth() + 1; // เดือนเริ่มต้นที่ 0
        const currentYear = today.getFullYear();

        // Populate day options
        for (let i = 1; i <= 31; i++) {
            $('#dateSelect').append(`<option value="${i}">${i}</option>`);
        }
        $('#dateSelect').val(currentDay); // ตั้งค่าให้เป็นวันปัจจุบัน

        // Populate month options
        for (let i = 1; i <= 12; i++) {
            $('#monthSelect').append(`<option value="${i}">${i}</option>`);
        }
        $('#monthSelect').val(currentMonth); // ตั้งค่าให้เป็นเดือนปัจจุบัน

        // Populate year options (last 10 years)
        for (let i = currentYear; i >= currentYear - 3; i--) {
            $('#yearSelect').append(`<option value="${i}">${i}</option>`);
        }
        $('#yearSelect').val(currentYear); // ตั้งค่าให้เป็นปีปัจจุบัน
        // เมื่อมีการเปลี่ยนแปลงในวัน

        // Initial load with default filter (e.g., 'month')
        var initialday = document.getElementById('dateSelect').value;
        var initialmonth = document.getElementById('monthSelect').value;
        var initialyear = document.getElementById('yearSelect').value;
        loadRecent_yield(initialday, initialmonth, initialyear);
        updatePieChart(initialday, initialmonth, initialyear);
        Yield_dataTable(initialday, initialmonth, initialyear);
        fetchAndUpdateData(initialday, initialmonth, initialyear);


        // รีเฟรช
        refreshData();
        var refreshInterval = setInterval(refreshData, 5000); // รีเฟรชทุกๆ 5 วินาที
        $('#holdRefreshCheckbox').change(function() {
            console.log('Checkbox state changed'); // ตรวจสอบว่าเกิดการเปลี่ยนแปลง
            if (this.checked) {
                clearInterval(refreshInterval);
                console.log('Interval stopped after checkbox checked');
            } else {
                refreshInterval = setInterval(refreshData, 5000);
                console.log('Interval started after checkbox unchecked');
            }
        });
        // ฟังก์ชันเรียกใช้ AJAX
        function refreshData() {
            $('#dateSelect').val(currentDay);
            $('#monthSelect').val(currentMonth); // ตั้งค่าให้เป็นเดือนปัจจุบัน
            $('#yearSelect').val(currentYear); // ตั้งค่าให้เป็นปีปัจจุบัน

            $.ajax({
                url: '{{ url('/update_status_notify_blink') }}',
                type: 'GET',
                data: {
                    day: initialday,
                    month: initialmonth,
                    year: initialyear
                },
                dataType: 'json',
                success: function(response) {
                    loadRecent_yield(initialday, initialmonth, initialyear);
                    updatePieChart(initialday, initialmonth, initialyear);
                    Yield_dataTable(initialday, initialmonth, initialyear);
                    fetchAndUpdateData(initialday, initialmonth, initialyear);
                    console.log('update status notify blink success');
                },
                error: function(xhr) {
                    console.error('An error occurred:', xhr.responseText);
                }
            });
        }

        $('#dateSelect').append(`<option value="">All</option>`);
        // ใช้ jQuery เพื่อจัดการกับการเปลี่ยนแปลงของ select
        $('#dateSelect, #monthSelect, #yearSelect').on('change', function() {
            const day = $('#dateSelect').val();
            const month = $('#monthSelect').val();
            const year = $('#yearSelect').val();

            // ตรวจสอบ dateSelect
            if (day === '') {
                if ($('#monthSelect option[value=""]').length === 0) {
                    $('#monthSelect').append(`<option value="">All</option>`);
                }
            } else {
                $('#monthSelect option[value=""]').remove();
            }

            // ตรวจสอบ monthSelect
            if (month === '') {
                if ($('#yearSelect option[value=""]').length === 0) {
                    $('#yearSelect').append(`<option value="">All</option>`);
                }
            } else {
                $('#yearSelect option[value=""]').remove();
            }
            // ตรวจสอบว่าเลือก "All" หรือไม่
            const isAllSelected = !day && !month && !year;

            // ถ้าทั้งหมดถูกเลือก ให้เรียกใช้ฟังก์ชันที่เหมาะสม
            if (isAllSelected) {
                console.log('Showing all data'); // หรือเรียกฟังก์ชันที่แสดงข้อมูลทั้งหมด
            } else {
                loadRecent_yield(day, month, year);
                updatePieChart(day, month, year);
                Yield_dataTable(day, month, year);
                fetchAndUpdateData(day, month, year);
            }

            // Update the titles with the selected filter
            let titleText = [day, month, year].filter(Boolean).join(' | ');
            if (!titleText) {
                titleText = '';
            }
            $('#title_recent').text(titleText);
            $('#title_pie_chart').text(titleText);
            $('#title_datatable').text(titleText);
            $('.fetchAndUpdateData_text').text(titleText);
        });

    });
</script>
