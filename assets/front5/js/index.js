$(document).ready(function() {
$('.hahoot-discount-carousel, .option-two-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        autoplay: true,
        responsiveClass: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 2,
                nav: true
            },
            768: {
                items: 3,
                nav: true
            },
            1024: {
                items: 4,
                nav: true
            }

        }
    });

    $('.option-one-carousel').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        autoplay: true,
        responsiveClass: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            768: {
                items: 2,
                nav: true
            }
        }
    });

    $('.owl-carousel .owl-nav button.owl-prev, .owl-carousel .owl-nav button.owl-next').hover(function(){
        $(this).css("height", "0");
    });


    $("#welcom-to-hahoot-dl-cart").click(function(){
        $("#my-cart-hahoot").css('display','block');
    });
      $("#close-my-cart-hahoot").mouseup(function(){
        $("#my-cart-hahoot").css('display','none');
    });   
    
    $('#open').show();
    $('#close').hide();
    $('#open').click(function (e) { 
        e.preventDefault();
        $(this).hide();
        $('#close').show();
    });
    $('#close').click(function (e) { 
        e.preventDefault();
        $(this).hide();
        $('#open').show();
    });

    
})

    $(window).resize(function(){
        var viewportWidth = $(window).width();
        console.log(viewportWidth);
    
        if( viewportWidth < 768){
            $('#hahoot-discount').after($('#search-in-hahoot-dl'));
        }
        else{
            $('#main-easy-fast').after($('#search-in-hahoot-dl'));
        }
    });


    $(window).resize(function(){
        var viewportWidth = $(window).width();
        console.log(viewportWidth);
        if( viewportWidth < 768){
            $('#main-easy-fast').before($('#hagoot-option-responsive'));
        }
        else{
            $('#products-categorization').after($('#hagoot-option-responsive'));
        }

    });