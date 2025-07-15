<style>
    #reportrange {
        display: inline-block;
        margin-right: 10px;
        /* ปรับระยะห่างขอบขวา */
    }

    .col-xxl-2-5 {
        flex: 0 0 auto;
        width: 20%;
        /* ประมาณ 2.5 ของ 12 grid */
    }
</style>
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
                    <div id="1st_card" class="col-xxl-2-5">
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
                    <div id="2nd_card" class="col-xxl-2-5">
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
                    <div id="3rd_card" class="col-xxl-2-5">
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
                    <!-- Was Card -->
                    <div id="Was_card" class="col-xxl-2-5">
                        <div class="card info-card Was-card">
                            <div class="card-body">
                                <h5 class="card-title">Was <span class="fetchAndUpdateData_text"
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
                    </div><!-- End Was Card -->
                    <!-- Total Card -->
                    <div id="Total_card" class="col-xxl-2-5">
                        <div class="card info-card Total-card">
                            <div class="card-body">
                                <h5 class="card-title">Total <span class="fetchAndUpdateData_text"
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
                    </div><!-- End Total Card -->



                    <!-- Yield Report -->
                    <div class="col-12">
                        <div class="offset-7 col-5 mb-2 text-end">
                            <div id="reportrange">
                                <i class="fa fa-calendar"></i>&nbsp;
                                <span></span> <i class="fa fa-caret-down"></i>
                            </div>
                        </div>
                        <div class="card top-selling overflow-auto">
                            {{-- <div class="filter d-flex align-items-center dashboard_select">

                            </div> --}}
                            <div class="card-body pb-0">
                                <h5 class="card-title">Yield Report <span id="title_datatable">| Today</span>
                                </h5>

                                <table class="table table-borderless" id="Yield_dataTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">MC</th>
                                            <th scope="col">1ST(Kg)</th>
                                            <th scope="col">2ND(Kg)</th>
                                            <th scope="col">3RD(Kg)</th>
                                            <th scope="col">Wastage(Kg)</th>
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
                                            <th></th> <!-- จะใช้ JS ใส่ค่าในคอลัมน์นี้ -->
                                            <th></th> <!-- จะใช้ JS ใส่ค่าในคอลัมน์นี้ -->
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
                            <h6 id="1st_in_pie">Yield</h6>
                            <h6 id="2nd_in_pie">Yield</h6>
                            <h6 id="3rd_in_pie">Yield</h6>
                            <h6 id="d_in_pie">Yield</h6>
                            <h6 id="yield_in_pie" class="text-end">Yield(1st,2nd)</h6>
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
                $(cardId + ' #total_weight_status_notify').html('(+ ' + total_weight_status_notify.toFixed(2) + ' kg)')
                    .addClass('blink').show(); // show when statusNotify is 1
            } else {
                $(cardId + ' #total_weight_today').text(formattedValue + ' kg').removeClass('blink');
                $(cardId + ' #total_weight_status_notify').hide(); // hide when statusNotify is not 1
            }

            $(cardId + ' #percentage_today').text(percentage + '%');

        }

        function fetchAndUpdateData(start, end) {
            $.ajax({
                url: '{{ url('/sum_yields') }}',
                type: 'GET',
                data: {
                    start: start,
                    end: end,
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

                    // Update Was Card
                    updateCard('#Was_card', response.total_weight_d_today, response
                        .percentage_d_today, response.status_notify_d, response
                        .total_weight_status_notify_1_d);

                    // Update Total Card
                    updateCard('#Total_card', response.total_weight_all_today, response
                        .percentage_all_today, response.status_notify_all, response
                        .total_weight_status_notify_1_all);
                },
                error: function(xhr) {
                    console.error('An error occurred:', xhr.responseText);
                }
            });
        }

        // Function to fetch and update the chart data
        function updatePieChart(start, end) {
            fetch('{{ url('/sum_yields') }}?start=' + start + '&end=' + end)
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
                        },
                        {
                            value: data.total_weight_d_today,
                            name: 'Was'
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
                    // คำนวณเปอร์เซ็นต์ของแต่ละเกรด
                    var yield_grade_1 = data.total_weight_1st_today;
                    var yield_grade_2 = data.total_weight_2nd_today;
                    var yield_grade_3 = data.total_weight_3rd_today;
                    var yield_grade_D = data.total_weight_d_today;

                    // หาผลรวมน้ำหนักทั้งหมด
                    var total_weight = yield_grade_1 + yield_grade_2 + yield_grade_3 + yield_grade_D;
                    var total_weight_1_2_3 = yield_grade_1 + yield_grade_2 + yield_grade_3;
                    var yield_1st_2nd = yield_grade_1 + yield_grade_2;

                    // คำนวณเปอร์เซ็นต์ของแต่ละเกรด
                    var yield_grade_1_percent = (total_weight !== 0) ? (yield_grade_1 / total_weight) *
                        100 : 0;
                    var yield_grade_2_percent = (total_weight !== 0) ? (yield_grade_2 / total_weight) *
                        100 : 0;
                    var yield_grade_3_percent = (total_weight !== 0) ? (yield_grade_3 / total_weight) *
                        100 : 0;
                    var yield_grade_d_percent = (total_weight !== 0) ? (yield_grade_D / total_weight) *
                        100 : 0;
                    var yield_1st_2nd_percent = (total_weight_1_2_3 !== 0) ? (yield_1st_2nd /total_weight_1_2_3) * 100 : 0;
                    // console.log(yield_1st_2nd_percent +'='+yield_1st_2nd+'/'+total_weight_1_2_3)

                    // แสดงผล
                    $('#1st_in_pie').text('1st : ' + yield_grade_1.toLocaleString() + ' kg (' +
                        yield_grade_1_percent
                        .toFixed(2) + '%)').css('color', 'rgb(84, 112, 198)');
                    $('#2nd_in_pie').text('2nd : ' + yield_grade_2.toLocaleString() + ' kg (' +
                        yield_grade_2_percent
                        .toFixed(2) + '%)').css('color', '#2eca6a');
                    $('#3rd_in_pie').text('3rd : ' + yield_grade_3.toLocaleString() + ' kg (' +
                        yield_grade_3_percent
                        .toFixed(2) + '%)').css('color', 'rgb(255, 193, 7)');
                    $('#d_in_pie').text('Was : ' + yield_grade_D.toLocaleString() + ' kg (' +
                        yield_grade_d_percent.toFixed(
                            2) + '%)').css('color', '#ff771d');
                    $('#yield_in_pie').text('Yield (1st + 2nd | 1st + 2nd + 3rd) : ' + yield_1st_2nd
                        .toLocaleString() + ' / ' +
                        total_weight_1_2_3.toLocaleString() +
                        ' kg (' +
                        yield_1st_2nd_percent.toFixed(2) + '% / 100%)');

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
        function loadRecent_yield(start, end) {
            $.ajax({
                url: '{{ url('/recent_yield') }}',
                method: 'GET',
                data: {
                    start: start,
                    end: end,
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
        function Yield_dataTable(start, end) {
            // Destroy any existing DataTable instance before creating a new one
            // console.log(start)
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
                ajax: {
                    url: "{{ url('Yield_dataTable') }}",
                    type: "GET",
                    data: {
                        start: start,
                        end: end
                    }
                },
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
                    {
                        data: 'grade_3',
                        name: 'grade_3',
                        render: function(data, type, row) {
                            const totalWeight = row.total_weight ||
                                0; // นำเข้ารวมจาก total_weight
                            const percentage = totalWeight > 0 ? ((data / totalWeight) * 100)
                                .toFixed(2) : 0; // คำนวณเปอร์เซ็นต์
                            return `${data.toLocaleString()} (${percentage}%)`; // แสดงผลลัพธ์
                        },
                        createdCell: function(td, cellData, rowData, row, col) {
                            $(td).css('color',
                            'rgb(255, 193, 7)'); // Set text color for this column
                        }
                    },
                    {
                        data: 'grade_D',
                        name: 'grade_D',
                        render: function(data, type, row) {
                            const totalWeight = row.total_weight ||
                                0; // นำเข้ารวมจาก total_weight
                            const percentage = totalWeight > 0 ? ((data / totalWeight) * 100)
                                .toFixed(2) : 0; // คำนวณเปอร์เซ็นต์
                            return `${data.toLocaleString()} (${percentage}%)`; // แสดงผลลัพธ์
                        },
                        createdCell: function(td, cellData, rowData, row, col) {
                            $(td).css('color', '#cf0c0c'); // Set text color for this column
                        }
                    },
                    {
                        data: 'total_weight',
                        name: 'total_weight',
                        render: function(data) {
                            return `${data.toLocaleString()} (100%)`; // แสดงผลลัพธ์รวม
                        },
                        createdCell: function(td, cellData, rowData, row, col) {
                            $(td).css('color', 'black'); // Set text color for this column
                        }
                    },
                ],
                createdRow: function(row, data, dataIndex) {
                    // เช็คค่าของ ch_stop เพื่อกำหนดสี background
                    if (data.ch_stop == 4 && data.ch_begin_man == '0000-00-00 00:00:00') {
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

                    var totalGrade3 = api.column(3, {
                        page: 'current'
                    }).data().reduce(function(a, b) {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);

                    var totalGradeD = api.column(4, {
                        page: 'current'
                    }).data().reduce(function(a, b) {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);

                    var totalOverall = api.column(5, {
                        page: 'current'
                    }).data().reduce(function(a, b) {
                        return parseFloat(a) + parseFloat(b);
                    }, 0);

                    // คำนวณเปอร์เซ็นต์ของแต่ละคอลัมน์ตามผลรวมทั้งหมด
                    var percentageGrade1 = (totalOverall > 0) ? ((totalGrade1 / totalOverall) * 100)
                        .toFixed(2) : 0;
                    var percentageGrade2 = (totalOverall > 0) ? ((totalGrade2 / totalOverall) * 100)
                        .toFixed(2) : 0;
                    var percentageGrade3 = (totalOverall > 0) ? ((totalGrade3 / totalOverall) * 100)
                        .toFixed(2) : 0;
                    var percentageGradeD = (totalOverall > 0) ? ((totalGradeD / totalOverall) * 100)
                        .toFixed(2) : 0;


                    // แสดงผลรวมและเปอร์เซ็นต์ใน footer
                    $(api.column(1).footer()).html(
                            `${totalGrade1.toLocaleString()} (${percentageGrade1}%)`)
                        .css('color', '#4154f1'); // สีสำหรับคอลัมน์ Grade 1
                    $(api.column(2).footer()).html(
                            `${totalGrade2.toLocaleString()} (${percentageGrade2}%)`)
                        .css('color', '#2eca6a'); // สีสำหรับคอลัมน์ Grade 2
                    $(api.column(3).footer()).html(
                            `${totalGrade3.toLocaleString()} (${percentageGrade3}%)`)
                        .css('color', 'rgb(255, 193, 7)'); // สีสำหรับคอลัมน์ Grade 3
                    $(api.column(4).footer()).html(
                            `${totalGradeD.toLocaleString()} (${percentageGradeD}%)`)
                        .css('color', '#cf0c0c'); // สีสำหรับคอลัมน์ Grade 3
                    $(api.column(5).footer()).html(`${totalOverall.toLocaleString()} (100%)`)
                        .css('color', 'black'); // สีสำหรับคอลัมน์ Total
                }
            });
        }

        // end Yield Report

        var start = moment();
        var end = moment();
        start_format_defalut = start.format('YYYY-MM-DD');
        end_format_default = end.format('YYYY-MM-DD');
        // console.log(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));

        loadRecent_yield(start_format_defalut, end_format_default);
        updatePieChart(start_format_defalut, end_format_default);
        Yield_dataTable(start_format_defalut, end_format_default);
        fetchAndUpdateData(start_format_defalut, end_format_default);
        daterangepicker();


        // รีเฟรช
        refreshData();
        var refreshInterval = setInterval(refreshData, 60000);
        $('#holdRefreshCheckbox').change(function() {
            console.log('Checkbox state changed'); // ตรวจสอบว่าเกิดการเปลี่ยนแปลง
            if (this.checked) {
                clearInterval(refreshInterval);
                console.log('Interval stopped after checkbox checked');
            } else {
                refreshInterval = setInterval(refreshData, 60000);
                console.log('Interval started after checkbox unchecked');
            }
        });
        // ฟังก์ชันเรียกใช้ AJAX
        function refreshData() {
            $.ajax({
                url: '{{ url('/update_status_notify_blink') }}',
                type: 'GET',
                data: {
                    start: start_format_defalut,
                    end: end_format_default,
                },
                dataType: 'json',
                success: function(response) {
                    loadRecent_yield(start_format_defalut, end_format_default);
                    updatePieChart(start_format_defalut, end_format_default);
                    Yield_dataTable(start_format_defalut, end_format_default);
                    fetchAndUpdateData(start_format_defalut, end_format_default);
                    daterangepicker();

                    console.log('update status notify blink success');
                },
                error: function(xhr) {
                    console.error('An error occurred:', xhr.responseText);
                }
            });
        }

        function daterangepicker() {
            var start = moment();
            var end = moment();
            const currentYear = moment().year(); // ใช้ moment เพื่อดึงปีปัจจุบัน
            start_format = start.format('YYYY-MM-DD');
            end_format = end.format('YYYY-MM-DD');
            // console.log(start.format('YYYY-MM-DD') + ' - ' + end.format('YYYY-MM-DD'));

            loadRecent_yield(start_format, end_format);
            updatePieChart(start_format, end_format);
            Yield_dataTable(start_format, end_format);
            fetchAndUpdateData(start_format, end_format);

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                    'MMMM D, YYYY'));
                start_format_select = start.format('YYYY-MM-DD');
                end_format_select = end.format('YYYY-MM-DD');
                // ฟังก์ชันที่ต้องการเรียกใช้เมื่อเลือกวัน/เดือน/ปีแล้ว
                loadRecent_yield(start_format_select, end_format_select);
                updatePieChart(start_format_select, end_format_select);
                Yield_dataTable(start_format_select, end_format_select);
                fetchAndUpdateData(start_format_select, end_format_select);
                // อัปเดตข้อความ title
                let titleText;

                if (start_format_select === end_format_select) {
                    // ถ้าวันที่เริ่มต้นและสิ้นสุดเป็นวันเดียวกัน
                    titleText = start_format_select; // แสดงเพียงวันที่เดียว
                } else {
                    // ถ้าวันที่ไม่เหมือนกัน
                    titleText = [start_format_select, end_format_select].filter(Boolean).join(' | ');
                }
                $('#title_recent').text(titleText);
                $('#title_pie_chart').text(titleText);
                $('#title_datatable').text(titleText);
                $('.fetchAndUpdateData_text').text(titleText);
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                showDropdowns: true, // เพิ่ม dropdown สำหรับเลือกเดือนและปี
                minYear: 2022, // กำหนดปีต่ำสุดที่สามารถเลือกได้
                maxYear: currentYear, // กำหนดปีสูงสุดเป็นปีปัจจุบัน
                maxDate: moment().endOf('year'),
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment()
                        .subtract(1,
                            'month').endOf('month')
                    ],
                    'This Year': [moment().startOf('year'), moment().endOf('year')],
                    'Last Year': [moment().subtract(1, 'year').startOf('year'), moment()
                        .subtract(1, 'year')
                        .endOf('year')
                    ]
                }
            }, cb);

            cb(start, end);

        }
    });
</script>
