
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



<div class="col-sm-12" style="float: right;">

    <div class="best-sell-title-text">
        پرفروش ترین ها
    </div>

    <div class="best-sell-title-line"></div>


</div>




<style>
    .product1{float: right;margin-top:50px !important;padding: 0;}
    .img-icon-product{float: right;}
    .text-icon-product{line-height:50px;float: right;}
    .product2{float: right;margin-right:3.5%;}
    .product-card{width:90%;margin: auto;margin-bottom:15px !important;border-radius:15px;border: 1px solid #dedede;min-height:500px;}
    .img-product-card {width: 70%;margin-left: 15%;margin-right: 15%;height: 200px;}
    .discount-product-card{width: 70px;height: 25px;margin: auto;color: #ED703F;line-height:25px;margin-top: auto;border: 1px solid  #ED703F;margin-top: 30px;border-radius: 5px;text-align: center;}
    .title-product-card{margin: auto;line-height:25px;margin-top: 30px;text-align: center;}
    .h1-product-card{font-size: 25px;color: #6e6e6e;}
    .price1-product-card{margin: auto;line-height:25px;margin-top:15px;text-align: center;}
    .price2-product-card{font-size: 20px;color: #6e6e6e;}
    .basket-product-card{width:120px;height:35px;cursor:pointer;margin: auto;color:#C94919FF;line-height:32px;margin-top: auto;border: 1px solid #c94919;margin-top: 30px;border-radius: 5px;text-align: center;}
    .show-more{margin: auto;margin-top:50px;border-radius:20px;width:150px;height: 40px;background: #C94919FF;color: white;text-align: center;line-height: 40px;}
</style>
<style>

    label {
        display: flex;
        align-items: center;
    }

    svg {
        cursor: pointer;
        overflow: visible;
        width: 40px;
        border-radius: 50%;
        padding: 2px;
        transition: .2s ease;
        margin-right: 10px;
        margin-top: 10px;
    }
    svg:hover {
        background: rgba(224, 36, 94, 0.1);
    }
    svg:hover #heart {
        stroke: #e0245e;
    }
    svg:active {
        background: rgba(224, 36, 94, 0.2);
    }
    svg #heart {
        transform-origin: center;
        fill: transparent;
        stroke:  #ED703F;
        stroke-width: 2px;
        transition: .2s ease;
    }
    svg .circle {
        transform-origin: 29.5px 29.5px;
    }

    #checkbox {
        display: none;
    }

    #checkbox:checked + label svg #heart {
        transform: scale(0);
        fill: #e2612b;
        stroke:  #e2612b;
        animation: heart 0.25s 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275) forwards;
    }
    #checkbox:checked + label svg .circle {
        animation: circle .25s forwards;
    }
    #checkbox:checked + label svg #grp1 {
        opacity: 1;
        transition: 0.1s 0.2s;
    }
    #checkbox:checked + label svg #grp1 #oval1 {
        transform: scale(0) translate(0, -30px);
        transform-origin: 0 0 0;
        transition: 0.2s transform 0.2s;
    }
    #checkbox:checked + label svg #grp1 #oval2 {
        transform: scale(0) translate(10px, -50px);
        transform-origin: 0 0 0;
        transition: 1.2s transform 0.2s;
    }
    #checkbox:checked + label svg #grp2 {
        opacity: 1;
        transition: 0.1s 0.2s;
    }
    #checkbox:checked + label svg #grp2 #oval1 {
        transform: scale(0) translate(30px, -15px);
        transform-origin: 0 0 0;
        transition: 0.2s transform 0.2s;
    }
    #checkbox:checked + label svg #grp2 #oval2 {
        transform: scale(0) translate(60px, -15px);
        transform-origin: 0 0 0;
        transition: 1.2s transform 0.2s;
    }
    #checkbox:checked + label svg #grp3 {
        opacity: 1;
        transition: 0.1s 0.2s;
    }
    #checkbox:checked + label svg #grp3 #oval1 {
        transform: scale(0) translate(30px, 0px);
        transform-origin: 0 0 0;
        transition: 0.2s transform 0.2s;
    }
    #checkbox:checked + label svg #grp3 #oval2 {
        transform: scale(0) translate(60px, 10px);
        transform-origin: 0 0 0;
        transition: 1.2s transform 0.2s;
    }
    #checkbox:checked + label svg #grp4 {
        opacity: 1;
        transition: 0.1s 0.2s;
    }
    #checkbox:checked + label svg #grp4 #oval1 {
        transform: scale(0) translate(30px, 15px);
        transform-origin: 0 0 0;
        transition: 0.2s transform 0.2s;
    }
    #checkbox:checked + label svg #grp4 #oval2 {
        transform: scale(0) translate(40px, 50px);
        transform-origin: 0 0 0;
        transition: 1.2s transform 0.2s;
    }
    #checkbox:checked + label svg #grp5 {
        opacity: 1;
        transition: 0.2s all 0.2s;
    }
    #checkbox:checked + label svg #grp5 #oval1 {
        transform: scale(0) translate(-10px, 20px);
        transform-origin: 0 0 0;
        transition: 0.2s transform 0.2s;
    }
    #checkbox:checked + label svg #grp5 #oval2 {
        transform: scale(0) translate(-60px, 30px);
        transform-origin: 0 0 0;
        transition: 1.2s transform 0.2s;
    }
    #checkbox:checked + label svg #grp6 {
        opacity: 1;
        transition: 0.2s 0.2s;
    }
    #checkbox:checked + label svg #grp6 #oval1 {
        transform: scale(0) translate(-30px, 0px);
        transform-origin: 0 0 0;
        transition: 0.2s transform 0.2s;
    }
    #checkbox:checked + label svg #grp6 #oval2 {
        transform: scale(0) translate(-60px, -5px);
        transform-origin: 0 0 0;
        transition: 1.2s transform 0.2s;
    }
    #checkbox:checked + label svg #grp7 {
        opacity: 1;
        transition: 0.2s 0.2s;
    }
    #checkbox:checked + label svg #grp7 #oval1 {
        transform: scale(0) translate(-30px, -15px);
        transform-origin: 0 0 0;
        transition: 0.2s transform 0.2s;
    }
    #checkbox:checked + label svg #grp7 #oval2 {
        transform: scale(0) translate(-55px, -30px);
        transform-origin: 0 0 0;
        transition: 1.2s transform 0.2s;
    }
    #checkbox:checked + label svg #grp2 {
        opacity: 1;
        transition: 0.2s opacity 0.2s;
    }
    #checkbox:checked + label svg #grp3 {
        opacity: 1;
        transition: 0.2s opacity 0.2s;
    }
    #checkbox:checked + label svg #grp4 {
        opacity: 1;
        transition: 0.2s opacity 0.2s;
    }
    #checkbox:checked + label svg #grp5 {
        opacity: 1;
        transition: 0.2s opacity 0.2s;
    }
    #checkbox:checked + label svg #grp6 {
        opacity: 1;
        transition: 0.2s opacity 0.2s;
    }
    #checkbox:checked + label svg #grp7 {
        opacity: 1;
        transition: 0.2s opacity 0.2s;
    }

    .numbers {
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        font-size: 19px;
        color: #5b7083;
        overflow: hidden;
        padding-left: 3px;
        display: flex;
        flex-flow: column;
        transition: .2s ease;
        user-select: none;
        position: relative;
    }

    svg:hover + .numbers, #checkbox:checked + label .numbers {
        color: #e0245e;
    }

    .num1, .num2 {
        display: block;
        transition: .3s transform;
    }

    .num2 {
        position: absolute;
        transform: translateY(100%);
    }

    #checkbox:checked + label .numbers .num1 {
        transform: translateY(-100%);
    }

    #checkbox:checked + label .numbers .num2 {
        transform: none;
    }

    @keyframes circle {
        from {
            transform: scale(0) translateY(-0.05px);
            stroke-width: 3px;
        }
        50% {
            transform: scale(6) translateY(-0.05px);
            stroke-width: 3px;
        }
        to {
            transform: scale(15) translateY(-0.05px);
            stroke-width: 0;
        }
    }
    @keyframes heart {
        from {
            transform: scale(0.2);
        }
        to {
            transform: scale(1);
        }
    }
</style>
<style>
    .content2{display: none;}
    .totop {
        position: fixed;
        bottom: 10px;
        right: 20px;
    }
    .totop a {
        display: none;
    }
</style>




<div class="product1 col-sm-12">

    <div class=" row" style="width:100%;float:right;margin: 0;padding-top: 20px;">

        @if(!empty($best_sellers_products))
            @foreach ($best_sellers_products as $prod)
                <div class="col-md-3 col-sm-6 content2">
                    <div class="product-card">
                        <a href="{{ route('front.product', $prod->slug) }}">
                            <img class="img-product-card"  src="{{ $prod->photo ? asset('assets/images/products/'.$prod->photo):asset('assets/images/noimage.png') }}" >
                            <span class="product_category">
                 {{$prod->category->name}}
                </span>

                            <div class="discount-product-card">
                                تخفیف
                            </div>

                            <div class="title-product-card">
                                <h1  class="h1-product-card">
                                    {{$prod->showName()}}
                                </h1>
                            </div>

                            <div class="price1-product-card">

                    <span  class="price2-product-card">
                       {{number_format($prod->price)}}
                        تومان
                    </span>

                            </div>

                            <div>
                                <div class="basket-product-card">
                                    افزودن به سبد
                                </div>

                                <input type="checkbox" id="checkbox"/>
                                <label for="checkbox">
                                    <svg id="heart-svg" viewBox="467 392 58 57" xmlns="http://www.w3.org/2000/svg" stroke-linecap="round" stroke-linejoin="round">
                                        <g id="Group" fill="none" fill-rule="evenodd" transform="translate(467 392)">
                                            <path d="M29.144 20.773c-.063-.13-4.227-8.67-11.44-2.59C7.63 28.795 28.94 43.256 29.143 43.394c.204-.138 21.513-14.6 11.44-25.213-7.214-6.08-11.377 2.46-11.44 2.59z" id="heart" />
                                            <circle class="circle" cx="29.5" cy="29.5" r="1.5" stroke="#CD85E7" stroke-width="0 "/>

                                            <g id="grp7" opacity="0" transform="translate(7 6)">
                                                <circle id="oval1" fill="#9CD8C3" cx="2" cy="6" r="2" />
                                                <circle id="oval2" fill="#8CE8C3" cx="5" cy="2" r="2" />
                                            </g>

                                            <g id="grp6" opacity="0" transform="translate(0 28)">
                                                <circle id="oval1" fill="#CC8EF5" cx="2" cy="7" r="2" />
                                                <circle id="oval2" fill="#91D2FA" cx="3" cy="2" r="2" />
                                            </g>

                                            <g id="grp3" opacity="0" transform="translate(52 28)">
                                                <circle id="oval2" fill="#9CD8C3" cx="2" cy="7" r="2" />
                                                <circle id="oval1" fill="#8CE8C3" cx="4" cy="2" r="2" />
                                            </g>

                                            <g id="grp2" opacity="0" transform="translate(44 6)">
                                                <circle id="oval2" fill="#CC8EF5" cx="5" cy="6" r="2" />
                                                <circle id="oval1" fill="#CC8EF5" cx="2" cy="2" r="2" />
                                            </g>

                                            <g id="grp5" opacity="0" transform="translate(14 50)">
                                                <circle id="oval1" fill="#91D2FA" cx="6" cy="5" r="2" />
                                                <circle id="oval2" fill="#91D2FA" cx="2" cy="2" r="2" />
                                            </g>

                                            <g id="grp4" opacity="0" transform="translate(35 50)">
                                                <circle id="oval1" fill="#F48EA7" cx="6" cy="5" r="2" />
                                                <circle id="oval2" fill="#F48EA7" cx="2" cy="2" r="2" />
                                            </g>

                                            <g id="grp1" opacity="0" transform="translate(24)">
                                                <circle id="oval1" fill="#9FC7FA" cx="2.5" cy="3" r="2" />
                                                <circle id="oval2" fill="#9FC7FA" cx="7.5" cy="2" r="2" />
                                            </g>
                                        </g>
                                    </svg>
                                </label>

                            </div>

                        </a>
                    </div>
                </div>

            @endforeach
        @endif

    </div>

    <div class=" row" style="width:100%;float:right;margin: 0;padding-top:5px;">

        <a href="#" id="loadMore2" class="show-more">
            نمایش بیشتر
        </a>

    </div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<script>
    $(document).ready(function(){
        $(".content2").slice(0, 4).show();
        $("#loadMore2").on("click", function(e){
            e.preventDefault();
            $(".content2:hidden").slice(0, 4).slideDown();
            if($(".content2:hidden").length == 0) {
               // $("#loadMore2").text("نمایش همه محصولات").addClass("noContent");
                $("#loadMore2").fadeOut("slow");
            }
        });

    })
</script>