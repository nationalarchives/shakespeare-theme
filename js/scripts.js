/**
 * Created by tnawebteam on 27/10/15.
 */
$(document).ready(function(){
    $('.docslider').bxSlider({
        mode: 'fade',
        pagerCustom: '#bx-pager',
        responsive:true,
            nextSelector: '#slider-next',
        prevSelector: '#slider-prev',
        pager:true,
        responsive:true,
        preloadImages:'visible',
        controls:false,
        infiniteLoop:false,

    });
});

$(function() {
    $('.equalbox').matchHeight();
});

