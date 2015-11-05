$(window).load(function() {
    if ((navigator.userAgent.indexOf('iPhone') > 0
        && navigator.userAgent.indexOf('iPad') == -1)
        || navigator.userAgent.indexOf('iPod') > 0
        || navigator.userAgent.indexOf('Android') > 0) {
        // スマートフォン＆タブレット用JS
        $('.fn-dropdown-button').bind('touchstart', function() {
            $('ul:not(:animated)', this).slideToggle();
        });
    } else {
        // PC用JS
        $('.fn-dropdown-button').hover(function() {
            $('ul:not(:animated)', this).slideToggle();

            $('.c-dropdown-head', this).hover(
                function(){
                    $(this).addClass('c-dropdown-head--hovered');
                },
                function() {
                    $(this).removeClass('c-dropdown-head--hovered');
                }
            );
        });
    }
});
