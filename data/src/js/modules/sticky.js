(function($) {
    $.fn.stickyDecision = function(option){
        var wChange = 600;
        var wWidth = $(window).width();

        if (wWidth > wChange) {
            $(this).sticky({
                topSpacing: 80
            });
        } else {
            $(this).unstick();
        };
    };
})(jQuery);

$('#fn-sticker').stickyDecision();

$(window).resize(function(){
    $('#fn-sticker').stickyDecision();
});

