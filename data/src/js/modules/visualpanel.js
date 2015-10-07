//showTitle
(function($) {
    'use strict';

    $.fn.showTitle = function() {
        var $showTitle = $(this);

        var i = 0;
        var length = $showTitle.children().length;
        var titleParentArray = [];

        while (i < length) {

            var $titleParent = $('.c-visualPanel-thumbnail:eq(' + i + ')').selector;
            var $title = $('.c-visualPanel-thumbnail:eq(' + i + ') h1').selector;
            console.log($titleParent);
            console.log($title);

            titleParentArray.push( $titleParent );

            (function(i){
                $(titleParentArray[i]).hover(function(){
                    $(titleParentArray[i] + ' h1').slideToggle();
                    console.log($(titleParentArray[i]));
                    console.log(titleParentArray[i] + ' h1');
                });
            })(i);
            //$('.fn-getTicketBtn:eq(' + i + ')').prop("disabled", true);
            i++;
        }
    };
})(jQuery);

$(window).load(function() {
    'use strict';

    $('.c-visualPanel-thumbnail').showTitle();
});
