//header追従
//992pxのとき　.fn-headerHesiveを追加,.navbar-fixed
var wChange = 992;

(function($) {
    $.fn.headerNav = function(option){

        var wWindow = $(window).width();

        if(wWindow <= wChange) {
            $(this).removeClass('fn-headerHesive');
        } else {
            $(this).addClass('fn-headerHesive');
            // Set options
            var options = {
                offset: '#fn-showHere',
                offsetSide: 'fn-hesiveTop',
                classes: {
                    clone:   'banner--clone',
                    stick:   'banner--stick',
                    //unstick: 'banner--unstick'
                }
            };
        // Initialise with options
        var banner = new Headhesive('.fn-headerHesive', options);
        // Headhesive destroy
        // banner.destroy();
        };
        return(this);
    };
})(jQuery);

$('.header').headerNav();


$(window).resize(function(){
    var wWindow = $(window).width();

    if(wWindow >= wChange) {
        $('.header').addClass('fn-headerHesive');
    } else {
         $('.header').removeClass('fn-headerHesive');
    }
});

