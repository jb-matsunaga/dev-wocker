//サイドナビ
$('.m-btnCollapse').sideNav({
    menuWidth: 300, // Default is 240
    edge: 'left', // Choose the horizontal origin
    closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
);


$('.fn-pageScroll').bind('touchstart', function(){
    $('#slide-out').sideNav('hide');
});

