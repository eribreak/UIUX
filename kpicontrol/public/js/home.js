$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        margin: 10, // Khoảng cách giữa các slide
        autoplay: true, // Tự động chuyển slide
        autoplayTimeout: 2000, // Thời gian chờ tự động chuyển slide (2000 ms)
        autoplayHoverPause: true, // Tạm dừng khi rê chuột lên slide
        responsive: {
            0: {
                items: 1 
            },
            576: {
                items: 2
            },
            // 576: {
            //     items: 1 
            // },
            1000: {
                items: 2 
            },
            1300: {
                items: 3 
            }
        }
    });
 
    var calendarElement = document.getElementById("calendar");
    var calendarInstance = new calendarJs(calendarElement, {
        manualEditingEnabled: true
        // All your options can be set here
    });
    var event = {
        from: new Date(),
        to: new Date(),
        title: "A New Event",
        description: "A description of the event"
    };
    calendarInstance.addEvent(event);
})

