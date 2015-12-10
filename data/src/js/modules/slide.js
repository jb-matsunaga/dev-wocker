//最初のキャプチャ開く
$(window).load(function(){
    $('.l-step .col:nth-child(1) .fn-stepContent').slideDown();
    $('.l-step .col:nth-child(1) .fn-stepContent').addClass('is-active');
});
//キャプチャ開閉&頭出し
$('.fn-step').bind('touchstart', function() {

    var captureTop = $('.card-number', this);
    var captureHeight = $('.card-image', this).height();

    $('.fn-stepContent', this).addClass('is-active');
    $('.fn-stepContent', this).slideToggle('500', function(){
        var $prevContent =  $(this).parent().parent().prev('.col').children();
        var $nextContent =  $(this).parent().parent().next('.col').children();

        if($prevContent.children().hasClass('fn-stepContent')) {

            if($prevContent.children().hasClass('is-active')) {

                $('html, body').animate({
                    scrollTop: captureTop.offset().top - captureHeight - 80
                }, 1500, 'easeInOutExpo');

            } else if($nextContent.children().hasClass('is-active')) {

                $('html, body').animate({
                    scrollTop: captureTop.offset().top - 80
                }, 1500, 'easeInOutExpo');

            };

        } else if($nextContent.children().hasClass('fn-stepContent')) {

            $('html, body').animate({
                scrollTop: captureTop.offset().top - 80
            }, 1500, 'easeInOutExpo');

        };

        $prevContent.children('.fn-stepContent').slideUp('fast');
        $prevContent.children('.fn-stepContent').removeClass('is-active');
        $nextContent.children('.fn-stepContent').slideUp('fast');
        $nextContent.children('.fn-stepContent').removeClass('is-active');

    });
});
//次のキャプチャが開いていたらスクロールは動かない。
//次のキャプチャが開いていなかったらスクロールは動く。