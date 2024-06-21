$(document).ready(function () {
    const ctx2 = document.getElementById('myChart3');

    new Chart(ctx2, {
        type: 'doughnut',
        data: {
            labels: [
                'Hoàn thành',
                'Chưa thực hiện',
                'Không hoàn thành'
            ],
            datasets: [{
                label: 'Chi tiết KPI',
                data: [300, 50, 100],
                backgroundColor: [
                    '#5A6ACF',
                    '#FF81C5',
                    '#8593ED'
                ],
                hoverOffset: 4
            }]
        },
        options: {
            scales: {
                x: { // Cấu hình cho trục X
                    display: false // Ẩn trục X
                },
                y: { // Cấu hình cho trục Y
                    display: false // Ẩn trục Y
                }
            },
            maintainAspectRatio: false, // Đặt false để cho phép kích thước tùy chỉnh
            responsive: true // Biểu đồ sẽ điều chỉnh kích thước dựa trên kích thước của container
        }
    });
    $(".action").click(function(){
        $('#manage-detail').show();
        $("#manage-content-overview").hide();
    })
    $("#back").click(function(){
        $('#manage-detail').hide();
        $("#manage-content-overview").show();
    })
})