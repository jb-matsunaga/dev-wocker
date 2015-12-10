//カテゴリJS
$('body').addClass('page-category');

//ページ送りページ時対応
$(function(){
    var pageUrl = location.pathname.split('/');
    console.log(pageUrl);
    
    var pageFind = pageUrl[3];
    console.log(pageFind);

    if(pageFind == 'page') {
        console.log('ok');
        $('.m-panelFive').css('display', 'none');
        $('#fn-display-none').css('display', 'none');
    } else {
        $('#fn-display').css('display', 'none');
    }

});
