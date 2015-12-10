$(window).load(function() {
    if ((navigator.userAgent.indexOf('iPhone') > 0
        && navigator.userAgent.indexOf('iPad') == -1)
        || navigator.userAgent.indexOf('iPod') > 0
        || navigator.userAgent.indexOf('Android') > 0) {
        // スマートフォン＆タブレット用JS
        $('.fn-dropdown-button').bind('touchstart', function() {
            $(this).next('.m-dropdown-body').slideToggle('fast');
        });
    } else {
        // PC用JS
        $('.fn-dropdown-button').click(function() {
            $(this).next('.m-dropdown-body:not(:animated)').slideToggle('fast');

            $('.m-dropdown-head', this).hover(
                function(){
                    $(this).addClass('m-dropdown-head--hovered');
                },
                function() {
                    $(this).removeClass('m-dropdown-head--hovered');
                }
            );
        });
    }
});
