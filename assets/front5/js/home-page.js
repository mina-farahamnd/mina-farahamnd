$(document).ready(function(){
        
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

    $('#welcom-to-hahoot-dl-cart').click(function () { 
        $('#my-cart-hahoot').show();
    });

    $('#my-cart-hahoot').mouseleave(function () { 
        $('#my-cart-hahoot').hide();
    });
})