$(document).ready(function() {
    $('.IndexSlide').slick({
        dots: false, //要不要顯示圓點
        dotsClass: 'slick-dots',
        infinite: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 1,
        slidesToScroll: 1
        
    });
    $('.IndexSlide2,.TopicTravel').slick({
        dots: true, //要不要顯示圓點
        dotsClass: 'slick-dots',
        infinite: true,
        arrows: false,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1
        
    });
    $('.BannerSlide').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 5,
        slidesToScroll: 5,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 1500,
        responsive: [{
            breakpoint: 940,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 4,
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3
            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }]
    });
    $('.vertical-responsive').slick({
        dots: false,
        infinite: true,
        vertical: true,
        verticalSwiping:true,
        speed: 500,
        slidesToShow: 2,
        slidesToScroll:2,
        autoplay: true,
        autoplaySpeed: 1500,
        
        speed: 1000,
        centerMode: true,
        focusOnSelect: true,
        responsive: [{
            breakpoint: 990,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                vertical: false,
                verticalSwiping:false

            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                vertical: false,
                verticalSwiping:false
            }
        }]
    });
    $('.vertical-syncing').slick({
        dots: false,
        infinite: true,
        vertical: true,
        verticalSwiping:true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll:4,
        autoplay: true,
        autoplaySpeed: 1500,
        
        speed: 1000,
        centerMode: true,
        focusOnSelect: true,
        responsive: [{
            breakpoint: 990,
            settings: {
                slidesToShow:3,
                slidesToScroll: 3
            }
        }, {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                vertical: false,
                verticalSwiping:false

            }
        }, {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                vertical: false,
                verticalSwiping:false
            }
        }]
    });

    $('.center').slick({
        centerMode: true,
        infinite: true,
        centerPadding: '60px',
        slidesToShow: 3,
        speed: 500,
        responsive: [{
            breakpoint: 768,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 3
            }
        }, {
            breakpoint: 480,
            settings: {
                arrows: false,
                centerMode: true,
                centerPadding: '40px',
                slidesToShow: 1
            }
        }]
    });

    $('.Muti_Slider .slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        arrows: true,
        fade: true,
        autoplay: true,
        autoplaySpeed: 5000,
        asNavFor: '.slider-nav'
    });
    $('.Muti_Slider .slider-nav').slick({
        slidesToShow:8,
        slidesToScroll: 1,
        speed: 500,
        arrows: false,
        asNavFor: '.slider-for',        
        focusOnSelect: true,
        slide: 'div',
        responsive: [{
            breakpoint: 992,
            settings: {
                arrows: false,
                slidesToShow: 6
            }
        }, {
            breakpoint: 592,
            settings: {
                arrows: false,
                slidesToShow: 5
            }
        }, {
            breakpoint: 584,
            settings: {
                arrows: false,
                slidesToShow: 4
            }
        }, {
            breakpoint: 480,
            settings: {
                arrows: false,
                slidesToShow: 3
            }
        },{
            breakpoint: 361,
            settings: {
                arrows: false,
                slidesToShow: 2
            }
        }]
    });

    $('.Muti_Slider_s .slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        speed: 500,
        arrows: false,
        fade: true,
        autoplay: true,
        autoplaySpeed: 5000,
        asNavFor: '.slider-nav'
    });
    $('.Muti_Slider_s .slider-nav').slick({
        slidesToShow:3,
        slidesToScroll: 1,
        speed: 500,
        arrows: true,
        asNavFor: '.slider-for',        
        focusOnSelect: true,
        slide: 'div',
        responsive: [{
            breakpoint: 992,
            settings: {
                arrows: true,
                slidesToShow: 3
            }
        }, {
            breakpoint: 592,
            settings: {
                arrows: true,
                slidesToShow: 3
            }
        }, {
            breakpoint: 584,
            settings: {
                arrows: true,
                slidesToShow: 3
            }
        }, {
            breakpoint: 414,
            settings: {
                arrows: true,
                slidesToShow: 3
            }
        },{
            breakpoint: 376,
            settings: {
                arrows: true,
                slidesToShow: 2
            }
        }]
    });

    $(window).on('scroll', function() {
        if ($(window).scrollTop() > 166) {
            $('.fixed-header').show();
        } else {
            $('.fixed-header').hide();
        }
    });

});
$(function(){
    var weblang = $('html').attr('lang');
    if (weblang.substring(0,2) == 'zh') {
        // console.log("中文");
        $('.slick-prev').attr('title', '前一則');
        $('.slick-next').attr('title', '後一則');
    } else if (weblang.substring(0,2) == 'en') {
        // console.log("英文");
        $('.slick-prev').attr('title', 'previous');
        $('.slick-next').attr('title', 'next');
    } else if (weblang.substring(0,2) == 'vi') {
        // console.log("越南");
        $('.slick-prev').attr('title', 'Trước');
        $('.slick-next').attr('title', 'kế tiếp');
    } else if (weblang.substring(0,2) == 'id') {
        // console.log("印尼");
        $('.slick-prev').attr('title', 'sebelumnya');
        $('.slick-next').attr('title', 'berikutnya');
    } else if (weblang.substring(0,2) == 'km') {
        // console.log("柬埔寨");
        $('.slick-prev').attr('title', 'មុន');
        $('.slick-next').attr('title', 'បន្ទាប់');
    } else if (weblang.substring(0,2) == 'th') {
        // console.log("泰文");
        $('.slick-prev').attr('title', 'ก่อน');
        $('.slick-next').attr('title', 'ต่อไป');
    } else{
        // console.log("沒有判斷");
        $('.slick-prev').attr('title', 'previous');
        $('.slick-next').attr('title', 'next');
    }
});