// jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('a.fn-pageScroll').bind('click', function(event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top-80 
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

//#GoToTop:Scrollによって表示・非表示
$(function(){
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
