//getTicket
(function($) {
    'use strict';

    $.fn.getTicket = function() {
        var $getTicket = $(this);

        var i = 0;
        var length = $getTicket.find('.fn-getTicket').length;

        var $btn = $('.fn-getTicketBtn:eq(' + i + ')')

        var btnArray = [];
        var getTicketArray = [];

        while (i < length) {
            var $btn = $('.fn-getTicketBtn:eq(' + i + ')').selector;
            var $getTicket = $('.fn-getTicket:eq(' + i + ')').selector;

            btnArray.push( $btn );
            getTicketArray.push( $getTicket );

            (function(i){
                $(btnArray[i]).click(function(){
                    $(getTicketArray[i]).slideToggle();
                });
            })(i);
            $('.fn-getTicketBtn:eq(' + i + ')').prop("disabled", true);
            i++;
        }
    };
})(jQuery);

$(window).on('load',function(){
    'use strict';

    $('#getticket_area').getTicket();
    $('#getticket_areaEn').getTicket();
});
