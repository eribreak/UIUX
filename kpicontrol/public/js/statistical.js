$(document).ready(function () {
    const ctx2 = document.getElementById('myChart');

    new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['T1', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'T8', 'T9', 'T10', 'T11', 'T12'],
            datasets: [{
                label: 'KPI trong tháng',
                data: [12, 19, 26, 5, 31],
                borderWidth: 1,
                backgroundColor: [
                    '#3b39b1',
                ],
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            maintainAspectRatio: false, // Đặt false để cho phép kích thước tùy chỉnh
            responsive: true // Biểu đồ sẽ điều chỉnh kích thước dựa trên kích thước của container
        }
    });


    const ctx = document.getElementById('myChart2');

    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['T1', 'T2', 'T3', 'T4', 'T5', 'T6', 'T7'],
            datasets: [{
                label: 'Số nhiệm vụ hoàn thành',
                data: [6,10,8,5,2,3,9],
                fill: false,
                borderColor: 'rgb(75, 192, 192)',
                tension: 0.1
            }]
        },
        options: {
            plugins: {
                legend: {
                    display: false // Ẩn legend trong phiên bản Chart.js mới
                }
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            maintainAspectRatio: false, // Đặt false để cho phép kích thước tùy chỉnh
            responsive: true // Biểu đồ sẽ điều chỉnh kích thước dựa trên kích thước của container
        }
    });
    $(".owl-carousel").owlCarousel({
        margin: 10, // Khoảng cách giữa các slide
        autoplay: true, // Tự động chuyển slide
        autoplayTimeout: 2000, // Thời gian chờ tự động chuyển slide (2000 ms)
        autoplayHoverPause: true, // Tạm dừng khi rê chuột lên slide
        responsive: {
            0: {
                items: 1 // dưới 500px sẽ hiển thị 1 slide
            },
            568: {
                items: 2 // dưới 500px sẽ hiển thị 1 slide
            },
            1200: {
                items: 3 // từ 500px đến 900px sẽ hiển thị 2 slide
            },
            1600: {
                items: 4 // trên 900px cũng sẽ hiển thị 2 slide
            }
        }
    });

    $(".kpi-day-item").click(function () {
        $("#statistical-detail").show();
        $("#statistical-overview").hide();
    })
    $("#back").click(function () {
        $("#statistical-detail").hide();
        $("#statistical-overview").show();
    });


});