//
$(document).ready(function(){
    $('.parallax').parallax();
    console.log('parapara');
});

//サイドバー
$('.button-collapse').sideNav({
    menuWidth: 300, // Default is 240
    edge: 'left', // Choose the horizontal origin
    closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
);
//Parallax
$(document).ready(function(){
    //.parallax(xPosition, speedFactor, outerHeight) options:
    //xPosition - Horizontal position of the element
    //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
    //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
    $('#fn-parallax-1').parallax("50%", 0.1);
    $('#fn-parallax-2').parallax("0%", 2);
    $('#fn-parallax-3').parallax("100%", 2);

})

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
    
    console.log(wWindow);
    console.log(wChange);
    if(wWindow >= wChange) {
        $('.header').addClass('fn-headerHesive');
        console.log('addClass');
    } else {
         $('.header').removeClass('fn-headerHesive');
         console.log('removeClass');
    }
});

