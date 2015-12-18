$(window).load(function() {
    if ((navigator.userAgent.indexOf('iPhone') > 0
        && navigator.userAgent.indexOf('iPad') == -1)
        || navigator.userAgent.indexOf('iPod') > 0
        || navigator.userAgent.indexOf('Android') > 0) {
        // スマートフォン＆タブレット用JS
        $('.fn-dropdown-button').bind('touchstart', function() {

            var $dropDown = $(this).next('.m-dropdown-body');

            if($dropDown.css('display') == 'none'){
                $dropDown.velocity("slideDown", {duration: 200});
                $dropDown.addClass('is-active');
            }
            else {
                $dropDown.velocity("slideUp", {duration: 200});
                $dropDown.removeClass('is-active');
            }

            $('.m-dropdown-body').not($dropDown).velocity("slideUp", {duration: 200});
        });
    } else {
        // PC用JS
        $('.fn-dropdown-button').click(function() {

            var $dropDown = $(this).next('.m-dropdown-body');

            if($dropDown.css('display') == 'none'){
                $dropDown.velocity('slideDown', { duration: 200 });
                $dropDown.velocity({ opacity: 0.9 }, 200);
                $dropDown.addClass('is-active');
            }
            else {
                $dropDown.velocity("slideUp", { duration: 200 });
                $dropDown.velocity({ opacity: 1 }, 200);
                $dropDown.removeClass('is-active');
            }

            $('.m-dropdown-body').not($dropDown).velocity("slideUp", {duration: 200});
        });
    }
});
