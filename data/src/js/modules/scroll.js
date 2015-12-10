//設定
var elmTopPc1 = 300,
    elmTopPc2 = 1205,
    elmTopPc3 = 2480,
    elmTopPc4 = 3520,
    elmTopPc5 = 5600,
    elmTopPc6 = 6380,
    elmTopSp1 = 160,
    elmTopSp2 = 888,
    elmTopSp3 = 3020,
    elmTopSp4 = 5120,
    elmTopSp5 = 8232;

//#GoToTop:Scrollによって表示・非表示
$(function(){
    //設定
    var scrollToggle = $("#fn-scrollToggle");
    var displayY = 870;//表示するy位置

    //##実行プログラム
    $(document).ready(function(){
        funcScrollToglle(scrollToggle, displayY);
    });

    //##処理関数
    function funcScrollToglle(){
        $(window).scroll(function(){
            var positionY = scrollToggle.offset().top;

            if(displayY <= positionY) {
                scrollToggle.fadeIn();
            } else if ( displayY >= positionY) {
                scrollToggle.fadeOut();
            };
        });
    };
});
//関数：スクロール位置で表示
(function($) {
    $.fn.scrollToggle = function(element, openTop){

        var scrollIn = $(this),
            element = $(element);

        $(window).on('load scroll resize', function(){

            scrollIn.each(function(){
                var setThis = $(this),
                    elmTop = setThis.offset().top,
                    elmHeight = setThis.height(),
                    scrTop = $(window).scrollTop(),
                    winHeight = $(window).height();

                //console.log(setThis, elmTop, elmHeight, scrTop);

                if ( scrTop >= openTop ) {
                    element.slideDown(500);
                } else if (scrTop == 0 ){
                    element.slideUp();
                };


                if (scrTop < elmTopPc1) {
                    $('.fn-navScroll > li > a').removeClass('is-active');
                } else if (scrTop >= elmTopPc1 && scrTop < elmTopPc2) {
                    $('.fn-navScroll > li:nth-child(1) > a').addClass('is-active');
                    $('.fn-navScroll > li:nth-child(2) > a').removeClass('is-active');
                } else if (scrTop >= elmTopPc2 && scrTop < elmTopPc3) {
                    $('.fn-navScroll > li:nth-child(1) > a').removeClass('is-active');
                    $('.fn-navScroll > li:nth-child(2) > a').addClass('is-active');
                    $('.fn-navScroll > li:nth-child(3) > a').removeClass('is-active');
                } else if (scrTop >= elmTopPc3 && scrTop < elmTopPc4) {
                    $('.fn-navScroll > li:nth-child(2) > a').removeClass('is-active');
                    $('.fn-navScroll > li:nth-child(3) > a').addClass('is-active');
                    $('.fn-navScroll > li:nth-child(4) > a').removeClass('is-active');
                } else if (scrTop >= elmTopPc4 && scrTop < elmTopPc5) {
                    $('.fn-navScroll > li:nth-child(3) > a').removeClass('is-active');
                    $('.fn-navScroll > li:nth-child(4) > a').addClass('is-active');
                    $('.fn-navScroll > li:nth-child(5) > a').removeClass('is-active');
                } else if (scrTop >= elmTopPc5 && scrTop < elmTopPc6) {
                    $('.fn-navScroll > li:nth-child(4) > a').removeClass('is-active');
                    $('.fn-navScroll > li:nth-child(5) > a').addClass('is-active');
                    $('.fn-navScroll > li:nth-child(6) > a').removeClass('is-active');
                } else if (scrTop >= elmTopPc6) {
                    $('.fn-navScroll > li:nth-child(5) > a').removeClass('is-active');
                    $('.fn-navScroll > li:nth-child(6) > a').addClass('is-active');
                };
            });
        });
    };
})(jQuery);

$(window).load(function() {
    if (
        (navigator.userAgent.indexOf('iPhone') > 0
        && navigator.userAgent.indexOf('iPad') == -1)
        || navigator.userAgent.indexOf('iPod') > 0
        || navigator.userAgent.indexOf('Android') > 0
        ) {
            //スクロール
            $(function() {
                $('a.fn-pageScroll').bind('touchstart', function() {
                    var $anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top-80 
                    }, 1500, 'easeInOutExpo');
                    event.preventDefault();
                });
            });
            //スクロール表示（スマホ）
            $(function(){
                $('#fn-scrollToggle-1').scrollToggle('#fn-toggleContent-1', elmTopSp1);
                $('#fn-scrollToggle-2').scrollToggle('#fn-toggleContent-2', elmTopSp2);
                $('#fn-scrollToggle-3').scrollToggle('#fn-toggleContent-3', elmTopSp3);
                $('#fn-scrollToggle-4').scrollToggle('#fn-toggleContent-4', elmTopSp4);
                $('#fn-scrollToggle-5').scrollToggle('#fn-toggleContent-5', elmTopSp5);
            });
            //メニュー
            $('#fn-scrollOpen-1sh').bind('touchstart', function(){
                $('#slide-out').sideNav('hide');
            });
            $('#fn-scrollOpen-2sh').bind('touchstart', function(){
                $('#slide-out').sideNav('hide');
                $('#fn-toggleContent-1').slideDown(600, function(){
                    $('#fn-toggleContent-2').slideDown(0, function(){
                        var targetY = $('#fn-toggleContent-2').offset().top - 250;
                        $("html,body").stop().animate({
                            scrollTop:targetY
                        }, 1500, 'easeInOutExpo');
                    });
                });
            });

            $('#fn-scrollOpen-3sh').bind('touchstart', function() {
                $('#slide-out').sideNav('hide');
                $('#fn-toggleContent-1').slideDown(0, function(){
                    $('#fn-toggleContent-2').slideDown(0, function(){
                        $('#fn-toggleContent-3').slideDown(0, function(){
                            var targetY = $('#fn-toggleContent-3').offset().top - 250;
                            $("html,body").stop().animate({
                                scrollTop:targetY
                            }, 1500, 'easeInOutExpo');
                            event.preventDefault();
                        });
                    });
                });
            });

            $('#fn-scrollOpen-4sh').bind('touchstart', function() {
                $('#slide-out').sideNav('hide');
                $('#fn-toggleContent-1').slideDown(0, function(){
                    $('#fn-toggleContent-2').slideDown(0, function(){
                        $('#fn-toggleContent-3').slideDown(0, function(){
                            $('#fn-toggleContent-4').slideDown(0, function(){
                                var targetY = $('#fn-toggleContent-4').offset().top - 250;
                                $("html,body").stop().animate({
                                    scrollTop:targetY
                                }, 1500, 'easeInOutExpo');
                                event.preventDefault();
                            });
                        });
                    });
                });
            });

            $('#fn-scrollOpen-5sh').bind('touchstart', function() {
                $('#slide-out').sideNav('hide');
                $('#fn-toggleContent-1').slideDown(0, function(){
                    $('#fn-toggleContent-2').slideDown(0, function(){
                        $('#fn-toggleContent-3').slideDown(0, function(){
                            $('#fn-toggleContent-4').slideDown(0, function(){
                                $('#fn-toggleContent-5').slideDown(0, function(){
                                    var targetY = $('#fn-toggleContent-5').offset().top - 250;
                                    console.log(targetY);
                                    $("html,body").stop().animate({
                                        scrollTop:targetY
                                    }, 1500, 'easeInOutExpo');
                                    event.preventDefault();
                                });
                            });
                        });
                    });
                });
            });

            $('#fn-scrollOpen-6sh').bind('touchstart', function() {
                $('#slide-out').sideNav('hide');
                $('#fn-toggleContent-1').slideDown(0, function(){
                    $('#fn-toggleContent-2').slideDown(0, function(){
                        $('#fn-toggleContent-3').slideDown(0, function(){
                            $('#fn-toggleContent-4').slideDown(0, function(){
                                $('#fn-toggleContent-5').slideDown(0, function(){
                                    var targetY = $('#fn-toggleContent-6').offset().top - 250;
                                    $("html,body").stop().animate({
                                        scrollTop:targetY
                                    }, 1500, 'easeInOutExpo');
                                    event.preventDefault();
                                });
                            });
                        });
                    });
                });
            });
        } else {
            //スクロール(PC)
            $(function() {
                $('a.fn-pageScroll').bind('click', function() {
                    var $anchor = $(this);
                    $('html, body').stop().animate({
                        scrollTop: $($anchor.attr('href')).offset().top-80 
                    }, 1500, 'easeInOutExpo');
                    event.preventDefault();
                });
            });
            //スクロール位置で表示
            $(function(){
                $('#fn-scrollToggle-1').scrollToggle('#fn-toggleContent-1', elmTopPc1);
                $('#fn-scrollToggle-2').scrollToggle('#fn-toggleContent-2', elmTopPc2);
                $('#fn-scrollToggle-3').scrollToggle('#fn-toggleContent-3', elmTopPc3);
                $('#fn-scrollToggle-4').scrollToggle('#fn-toggleContent-4', elmTopPc4);
                $('#fn-scrollToggle-5').scrollToggle('#fn-toggleContent-5', elmTopPc5);
            });
            //メニュー
            $('#fn-scrollOpen-2').click(function(){
                console.log('clicking');
                $('#fn-toggleContent-1').slideDown(600, function(){
                    $('#fn-toggleContent-2').slideDown(0, function(){
                        var targetY = $('#fn-toggleContent-2').offset().top - 250;
                        $("html,body").stop().animate({
                            scrollTop:targetY
                        }, 1500, 'easeInOutExpo');
                    });
                });
            });

            $('#fn-scrollOpen-3').bind('click', function(event) {
                $('#fn-toggleContent-1').slideDown(0, function(){
                    $('#fn-toggleContent-2').slideDown(0, function(){
                        $('#fn-toggleContent-3').slideDown(0, function(){
                            var targetY = $('#fn-toggleContent-3').offset().top - 250;
                            $("html,body").stop().animate({
                                scrollTop:targetY
                            }, 1500, 'easeInOutExpo');
                            event.preventDefault();
                        });
                    });
                });
            });

            $('#fn-scrollOpen-4').bind('click', function(event) {
                $('#fn-toggleContent-1').slideDown(0, function(){
                    $('#fn-toggleContent-2').slideDown(0, function(){
                        $('#fn-toggleContent-3').slideDown(0, function(){
                            $('#fn-toggleContent-4').slideDown(0, function(){
                                var targetY = $('#fn-toggleContent-4').offset().top - 250;
                                $("html,body").stop().animate({
                                    scrollTop:targetY
                                }, 1500, 'easeInOutExpo');
                                event.preventDefault();
                            });
                        });
                    });
                });
            });

            ;$('#fn-scrollOpen-5').bind('click', function(event) {
                $('#fn-toggleContent-1').slideDown(0, function(){
                    $('#fn-toggleContent-2').slideDown(0, function(){
                        $('#fn-toggleContent-3').slideDown(0, function(){
                            $('#fn-toggleContent-4').slideDown(0, function(){
                                $('#fn-toggleContent-5').slideDown(0, function(){
                                    var targetY = $('#fn-toggleContent-5').offset().top - 250;
                                    $("html,body").stop().animate({
                                        scrollTop:targetY
                                    }, 1500, 'easeInOutExpo');
                                    event.preventDefault();
                                });
                            });
                        });
                    });
                });
            });

            $('#fn-scrollOpen-6').bind('click', function(event) {
                $('#fn-toggleContent-1').slideDown(0, function(){
                    $('#fn-toggleContent-2').slideDown(0, function(){
                        $('#fn-toggleContent-3').slideDown(0, function(){
                            $('#fn-toggleContent-4').slideDown(0, function(){
                                $('#fn-toggleContent-5').slideDown(0, function(){
                                    var targetY = $('#fn-toggleContent-6').offset().top - 250;
                                    $("html,body").stop().animate({
                                        scrollTop:targetY
                                    }, 1500, 'easeInOutExpo');
                                    event.preventDefault();
                                });
                            });
                        });
                    });
                });
            });
        };
    });


