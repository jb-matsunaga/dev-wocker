$(window).load(function(){
    var elem = document.querySelector('.fn-ngrid');
    var msnry = new Masonry( elem, {
    // options
        itemSelector: '.fn-grid-item',
        columnWidth: 200
    });

    // element argument can be a selector string
    //   for an individual element
    var msnry = new Masonry( '.fn-grid', {
      // options
    });
});
