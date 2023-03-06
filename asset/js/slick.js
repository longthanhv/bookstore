$(document).ready(function() {
    $('.slick').slick({
        // slidesToShow:4, hiển thị 4 phần tử
        // slidesToScroll: Hiển thị 1 lần mấy cái sau ấn
        // infinite: true, chạy vô tận
        arrows: false,
        autoplay: true,
        autoplaySpeed: 2000
    });
});
$(document).ready(function() {
    $('.categories').slick({
        slidesToShow: 4, //hiển thị 4 phần tử
        slidesToScroll: 4, //Hiển thị 1 lần mấy cái sau ấn
        prevArrow: "<button type='button' class='slick-prev pull-left'><i class='fa fa-angle-left' aria-hidden='true'></i></button>",
        nextArrow: "<button type='button' class='slick-next pull-right'><i class='fa fa-angle-right' aria-hidden='true'></i></button>"
    });
});