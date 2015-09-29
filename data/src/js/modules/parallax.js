//Parallax
$(document).ready(function(){
    //.parallax(xPosition, speedFactor, outerHeight) options:
    //xPosition - Horizontal position of the element
    //inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
    //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
    $('#fn-parallax-1').parallax("50%", 0.1);
    $('#fn-parallax-2').parallax("0%", 2);
    $('#fn-parallax-3').parallax("100%", 2);

});