
$(document).ready(function() {
    console.log("ok");
    $('#zoom').elevateZoom({cursor: 'crosshair', zoomWindowPosition: 4});

    $('.tab-container-vertical:first').show()
    $('.tab-navigation-vertical li:first').addClass('active')

    $('.tab-navigation-vertical li').hover(function(event){
        index = $(this).index();
        $('.tab-navigation-vertical li').removeClass('active');
        $(this).addClass('active');
        $('.tab-container-vertical').hide();
        $('.tab-container-vertical').eq(index).show();
    });

/* modal more-image class responsive */
    $('.tab-container:first').show()
    $('.tab-navigation li:first').addClass('active')

    $('.tab-navigation li').click(function(event){
        index = $(this).index();
        $('.tab-navigation li').removeClass('active');
        $(this).addClass('active');
        $('.tab-container').hide();
        $('.tab-container').eq(index).show();
    });
/* modal more-image class responsive */
});

$(window).resize(function(){
    var viewportWidth = $(window).width();
    console.log(viewportWidth);

    if( viewportWidth < 768){
        $('#container-vertical-tab-responsive').after($('#more-image-responsive'));
    }
    else{
        $('#accessories-responsive').after($('#more-image-responsive'));
    }
});
