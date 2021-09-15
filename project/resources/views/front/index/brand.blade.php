
<style>
    .best-sell-title-text{float: right;margin-right:30px;color:#ED703F;font-size: 15px;}
    .best-sell-title-line{position: absolute;left: 0;width:87%;height: 1.5px;background:  rgba(0,0,0,0.12);margin-top:13px;}

    @media (min-width:1000px) and (max-width:1230px)
    {
        .best-sell-title-line{width: 85%}
    }
    @media (min-width:800px) and (max-width:999.99px)
    {
        .best-sell-title-line{width: 80%}
    }
    @media (min-width:550px) and (max-width:799.99px)
    {
        .best-sell-title-line{width: 75%}
        .best-sell-title-text{margin-right: 25px;}
    }
    @media (min-width:450px) and (max-width:545.99px)
    {
        .best-sell-title-line{width: 70%}
        .best-sell-title-text{margin-right: 20px;}
    }
    @media (min-width:380px) and (max-width:449.99px)
    {
        .best-sell-title-line{width:65%}
        .best-sell-title-text{margin-right: 15px;}
    }
    @media (min-width:300px) and (max-width:379.99px)
    {
        .best-sell-title-line{width:60%}
        .best-sell-title-text{margin-right: 10px;}
    }

</style>


<div class="col-sm-12" style="float: right;margin-top: 50px;">

    <div class="best-sell-title-text">
        برندها
    </div>

    <div class="best-sell-title-line"></div>


</div>



<style>
    #ourclients {
        display: block;
        margin-left: auto;
        margin-right: auto;
        background:#fff !important;
        padding-bottom:30px;
        height:150px;
    }
    #ourclients .clients-wrap {
        display: block;
        width: 95%;
        margin: 0 auto;
        overflow: hidden;
    }
    #ourclients .clients-wrap ul {
        display: block;
        list-style: none;
        position: relative;
        margin-left: auto;
        margin-right: auto;
    }
    #ourclients .clients-wrap ul li {
        display: block;
        float: left;
        position: relative;
        width: 220px;
        height: 100px;
        line-height: 100px;
        text-align: center;
    }
    #ourclients .clients-wrap ul li img {
        vertical-align: middle;
        max-width:150px!important;
        width:150px;
        max-height: 100%;
        -webkit-transition: 0 linear left;
        -moz-transition: 0 linear left;
        transition: 0 linear left;
    }
    #ourclients h3{
        border-bottom:2px solid #3399ff;
        width:150px;
        padding:10px;
    }
    .clearfix{width: 100% !important;
        height: 100px !important;
        overflow: hidden !important;
        padding: 0 !important;
        margin: 0 !important;}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
@if($brands)
<div style="width: 100%;float: right;">
<div id="ourclients">
    <div class="clients-wrap">
        <ul id="clientlogo" class="clearfix">
            @foreach($brands as $brand)
            <li>
                <img src="{{ $prod->photo ? asset('assets/images/brands/'.$brand->photo):asset('assets/images/noimage.png') }}" alt="Logo">
            </li>
            @endforeach
        </ul>
    </div>
</div>
</div>
@endif

<script>
    $(function() {
        var $clientslider = $('#clientlogo');
        var clients = $clientslider.children().length;
        var clientwidth = (clients * 250);
        $clientslider.css('width', clientwidth);
        var rotating = true;
        var clientspeed = 1800;
        var seeclients = setInterval(rotateClients, clientspeed);
        $(document).on({
            mouseenter: function() {
                rotating = false;
            },
            mouseleave: function() {
                rotating = true;
            }
        }, '#ourclients');
        function rotateClients() {
            if (rotating != false) {
                var $first = $('#clientlogo li:first');
                $first.animate({
                    'margin-left': '-250px'
                }, 2000, function() {
                    $first.remove().css({
                        'margin-left': '0px'
                    });
                    $('#clientlogo li:last').after($first);
                });
            }
        }
    });
</script>
