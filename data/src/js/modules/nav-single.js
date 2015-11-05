'use strict';
jQuery.fn.exists = function(){return Boolean(this.length > 0);}
//チケット受け取り開始日時
if ( $('#link-schedule').exists() ) {
    $('#fn-navSchedule').css('display', 'block');
};
//チケット受け取り方法
if ( $('#link-receive').exists() ) {
    $('#fn-navReceive').css('display', 'block');
};
//お問い合わせ
if ( $('#link-contact').exists() ) {
    $('#fn-navContact').css('display', 'block');
};