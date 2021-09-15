@extends('layouts.front')

@section('css')
    <link href="{{asset('assets/front/css/leaflet.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('content')

    @if(Auth::check())
        @if(isset($products))
            <form action="{{route('product.buy')}}" method="POST" enctype="multipart/form-data" >
                {{csrf_field()}}
                @php
                    $total_price = 0;
                    $total_qty = 0;
                @endphp
                <div id="user-product">

                @include('load.checkout',['products' => $products ,'addresses' => $addresses])
                </div>


            </form>

        @else
            {{-- cart__empty --}}
            <section class="title">
                <div class="container-fluid">
                    <div class="row mb-5">
                        <div class="col-md-12 px-0 d-flex align-items-center justify-content-between">
                            <div class="d-flex justify-content-between w-100 py-2 px-4 title__green">
                                <a href="" class="text-decoration-none">
                                    <span class="text-white text__medium text__iranyekan--bold">سبد خرید شما</span>
                                </a>
                                <a href="" class="text-decoration-none title__empty">
                                    <span class="text-white text__medium text__iranyekan--regular">سبد خرید شما خالی است.</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="cart__empty">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12 px-0 cart__empty--information">
                            <span class="d-flex justify-content-center mt-2 text__green text__large">
                                Dear {{ Auth::user()->name . " " . Auth::user()->lastname }}</span>
                            <span class="d-flex justify-content-center mt-2 text__black text__medium text__iranyekan--bold">سبد خرید شما خالیست!</span>
                            <span class="d-flex justify-content-center mt-2 text__black text__medium text__iranyekan--light">می توانید برای مشاهده محصولات <a href="" class="mx-2 text__black text__medium text__iranyekan--regular">کلیک</a>کنید</span>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 px-0 text-left">
                            <button type="button" class="btn py-2 px-3 border-0 btn__black btn__link">
                                <img src="{{ asset('assets/front/icon/cart.svg') }}" alt="" class="btn__img">
                                <span class="mx-1 text__small text__iranyekan--bold">خرید</span>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

			<section class="shopping__easy">
                    <div class="container-fluid">
                        <div class="row px-3 py-4 shopping__easy--row">
                            <div class="col-md-3 d-none d-md-inline-block text-center shopping__easy--information">
                                <span class="d-block mt-4 text__large text__iranyekan--bold">خرید آسان و سریع</span>
                                <span class="text__large text__iranyekan--light">با اطمینان خرید کنید</span>
                            </div>
                
                            <div class="col-12 col-md-9 px-0 d-flex justify-content-around">
                                <div class="text-center shopping__easy--icon">
                                    <img src="./assets/front/icon/Express delivery.svg" alt="support">
                                    <span class="d-block mt-2 text__medium text__iranyekan--bold">تحویل اکسپرس</span>
                                </div>
                
                                <div class="text-center shopping__easy--icon">
                                    <img src="./assets/front/icon/Guaranteed return.svg" alt="support">
                                    <span class="d-block mt-2 text__medium text__iranyekan--bold">7 روز ضمانت برگشت</span>
                                </div>
                
                                <div class="text-center shopping__easy--icon text__iranyekan--bold">
                                    <img src="./assets/front/icon/Pay on the spot.svg" alt="support">
                                    <span class="d-block mt-2 text__medium text__iranyekan--bold">پرداخت در محل</span>
                                </div>
                
                                <div class="text-center shopping__easy--icon">
                                    <img src="./assets/front/icon/gift card.svg" alt="support">
                                    <span class="d-block mt-2 text__medium text__iranyekan--bold">کارت هدیه آکام پارس</span>
                                </div>
                
                                <div class="text-center shopping__easy--icon">
                                    <img src="./assets/front/icon/Support.svg" alt="support">
                                    <span class="d-block mt-2 text__medium text__iranyekan--bold">پشتیبانی</span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </section>
            {{-- cart__empty --}}

            {{-- cart__empty--account --}}

            {{--        <section class="cart__empty">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 px-0 d-flex flex-column text-center cart__empty--information">
                                    <h5 class="mt-2 font-weight-bold text__black">سبد خرید شما خالیست!</h5>
                                    <a href="" class="mt-3 d-flex justify-content-center text-decoration-none">
                                        <div class="d-flex align-items-center justify-content-center py-2 px-3 cart__empty--account">
                                            <img src="{{ asset('assets/front/icon/person-white.svg') }}" alt="">
                                            <p class="pr-3 text__medium">به حساب کاربری خود وارد شوید</p>
                                        </div>
                                    </a>
                                    <a href="" class="mt-3 text-decoration-none text__black text__medium">کاربر جدید هستم</a>
                                </div>
                            </div>
                        </div>
                    </section>--}}

        @endif


    @else
        <section class="cart__empty">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 px-0 d-flex flex-column text-center cart__empty--information">
                        <h5 class="mt-2 text__black text__iranyekan--bold">برای مشاهده سبد خرید باید وارد حساب کاربری شوید.</h5>
                        <a href="{{route('user.login')}}"
                           class="mt-3 d-flex justify-content-center text-decoration-none">
                            <div class="d-flex align-items-center justify-content-center py-2 px-3 cart__empty--account">
                                <img src="{{ asset('assets/front/icon/person-white.svg') }}" alt="">
                                <span class="pr-3 text__medium text__iranyekan--bold">به حساب کاربری خود وارد شوید</span>
                            </div>
                        </a>
                        <a href="{{route('user-register')}}" class="mt-3 text-decoration-none text__black text__medium text__iranyekan--light">کاربر جدید هستم</a>
                    </div>
                </div>
            </div>
        </section>
    @endif

@endsection

@if(Auth::check() && isset($products))
@section('js')
<script src="{{asset('assets/front/js/leaflet.js')}}" type="text/javascript"></script>
    <script>
        $(document).ready(function() {


            function is_empty_field(field,msg) {
                if(!$(field).val()){
                    $(field).css('border-bottom','1px solid red').attr('placeholder' , msg +  " را وارد نمایید");
                    return false;
                }
                else{
                    $(field).css('border-bottom','1px solid green');
                    return true;
                }
            }

            function is_integer_field(field,msg) {
                if(!$.isNumeric($(field).val())){
                    $(field).css('border-bottom','1px solid red').val("").attr({'placeholder' :  msg +  " فقط شامل عدد می باشد"});
                    return false;
                }else{
                    $(field).css('border-bottom','1px solid green');
                    return true;
                }
            }



            var discountWithPrice = false;
            $("body").on('click','#check-coupon-form' ,function () {
                var val = $("#coupon-code").val();
                var total = $("#grandtotal").val();
                var ship = 0;
                $.ajax({
                    type: "GET",
                    url:mainurl+"/carts/coupon/check",
                    data:{code:val, total:total, shipping_cost:ship},
                    success:function(data){
                        if(data == 0)
                        {
                            toastr.error("کد تخفیف معتبر نمیباشد");
                        }
                        else if(data == 2)
                        {
                            toastr.error("کد تخفیف اعمال شده است");
                        }
                        else
                        {
                            toastr.success("کد تخفیف با موفقیت اعمال شد");
                            $("#coupon-code").val("");
                            discountWithPrice = data;
                            $(".price-with-discount").text(addCommas(parseInt(discountWithPrice[0])));
                        }
                    }
                });
                return false;
            });



            $("#tab-1").fadeIn(1);

            $("body").on('click', '.go-tab-2', function(){
                $("#tab-1").fadeOut(500);
                $("#tab-3").fadeOut(500);
                $("#tab-2").delay(500).fadeIn(500);
            });

            $("body").on('click', '.go-tab-3', function(){

                var selected_address = $('input[name=selected_address]:checked').closest('.user-address');
                if (!selected_address.length){
                    alert("لطفا یک ادرس انتخاب کنید");
                    return;
                }
                //result success
                var shipping_address  = $(selected_address).find('.selected-full-address').text();
                var shipping_post_code  = $(selected_address).find('.selected-post-code').text();
                var shipping_phone = $(selected_address).find('.selected-phone').text();
                var shipping_method =  $('input[name="shipping_method"]:checked + .method-shipping').text() + " / هزینه ارسال " +$('input[name="shipping_method"]:checked').data('shipping-price') + " ریال";
                var payment_method =  $('input[name="payment_method"]:checked + .payment_method ').text();
                var order_notes =  $('textarea[name="order_notes"]').val();
                var shipping_days =  $('input[name="shipping_method"]:checked').data('shipping-days');
                var shipping_email =  "{{Auth::user()->email}}";

                $('#shipping_address').text(shipping_address);
                $('#shipping_post_code').text(shipping_post_code);
                $('#shipping_phone').text(shipping_phone);
                $('#shipping_method').text(shipping_method);
                $('#shipping_email').text(shipping_email);
                $('#shipping_days').text(shipping_days);
                $('#payment_method').text(payment_method);
                if(order_notes.length > 0){
                    $('#order_notes').text(order_notes);
                }
                var shippingPrice = $('input[name="shipping_method"]:checked').data('shipping-price');
                var price_with_discount = $('.price-with-discount').data('price-with-discount');

                if (discountWithPrice){
                    var priceAndShipping = discountWithPrice[0] + shippingPrice;
                }else{
                    var priceAndShipping = price_with_discount + shippingPrice;
                }
                console.log(priceAndShipping);
                $('#priceAndShipping').html(addCommas(parseInt(priceAndShipping)));




                if($('input[name="payment_method"]:checked').val() == {{App\Models\Order::ZARIN_PAL}}){
                    $('#final-btn span').text('ورود به درگاه بانکی');
                }else{
                    $('#final-btn span').text('ثبت سفارش');
                }
                $("#tab-2").fadeOut(500);
                $("#tab-3").delay(500).fadeIn(500);

            });





            // map
            /*myMap = new L.Map('map', {
                key: 'web.WvEcVXRnWYaMKbLFRXu528H7IjLJu6S6tUYWsbvL',
                maptype: 'dreamy',
                poi: true,
                traffic: false,
                center: [35.699739, 51.338097],
                zoom: 15,
            });

            var greenIcon = L.icon({
                iconUrl: '{{asset('assets/front/images/marker-icon.png')}}',


                iconSize:     [38, 95], // size of the icon
                shadowSize:   [50, 64], // size of the shadow
                iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
                shadowAnchor: [4, 62],  // the same for the shadow
                popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
            });
            var marker = L.marker([35.699739, 51.338097], {icon: greenIcon}).addTo(myMap);




            myMap.on('move', function () {
                marker.setLatLng(myMap.getCenter());

            });*/

            //$("#user-address").hide();
            /*$('#get-full-address').click(function (){

                var coordinate = myMap.getCenter();
                $.ajax({
                    url: "{{route('get.address.with.coordinate')}}",
                    type: "post",
                    async: false,
                    data: {_token : "{{csrf_token()}}" , lat : coordinate.lat , lng : coordinate.lng} ,
                    success: function (response) {
                        $("#map-modal").fadeOut(550);
                        $("#user-address").delay(600).fadeIn();

                        var location = JSON.parse(response);
                        $('input[name="address"]').val(location.formatted_address);
                        $('input[name="city"]').val(location.city);
                        $('input[name="state"]').val(location.state);
                        $('input[name="lat"]').val(coordinate.lat);
                        $('input[name="lng"]').val(coordinate.lng);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });




            });*/
            $("body").on('click', '#save-full-address', function(){
                var result;
                result = is_empty_field('input[name="address"]','آدرس');
                result *= is_empty_field('input[name="post_code"]','کد پستی');
                result *= is_empty_field('input[name="phone"]','تلفن');
                result *= is_empty_field('input[name="city"]','شهر');
                result *= is_empty_field('input[name="state"]','استان');
                result *= is_integer_field('input[name="phone"]','تلفن');
                result *= is_integer_field('input[name="post_code"]','کد پستی');
                result *= is_empty_field('input[name="address_title"]','عنوان آدرس');

                if (result){
                    var address = $('input[name="address"]').val();
                    var address_title = $('input[name="address_title"]').val();
                    var city = $('input[name="city"]').val();
                    var state = $('input[name="state"]').val();
                    var post_code = $('input[name="post_code"]').val();
                    var phone = $('input[name="phone"]').val();
                    var lat = $('input[name="lat"]').val();
                    var lng = $('input[name="lng"]').val();
                    $.ajax({
                        url: "{{route('user-address-submit')}}",
                        type: "post",
                        async: false,
                        data: {
                            _token : "{{csrf_token()}}" ,
                            address : address ,
                            city : city ,
                            province : state ,
                            post_code : post_code ,
                            phone : phone ,
                            lat : lat ,
                            lng : lng ,
                            title : address_title
                        } ,
                        success: function (response) {
                            $('#address-new').modal('toggle');
                            $('#user-addresses').load("{{route('load-address')}}");
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus, errorThrown);
                        }
                    });


                }
            });

            /*$('#search-address-submit').click(function (){
                $('#result').html('');
                var search = $('#search-address').val();
                $.ajax({
                    url: "{{route('get.suggest.address')}}",
                    type: "post",
                    async: false,
                    data: {_token : "{{csrf_token()}}" , search : search} ,
                    success: function (response) {
                        $('#result').html(response);
                    },
                    error: function(jqXHR, textStatus, errorThrown) {
                        console.log(textStatus, errorThrown);
                    }
                });
            });*/

            /*$('#result').on('click','.suggest-address',function (){
                var x = $(this).data('coordinate-x');
                var y = $(this).data('coordinate-y');
                myMap.panTo(new L.LatLng(y,x));
                $('#result').html('');
            });  */

           /* $('#add-new-location').click(function () {
                $("#user-address").hide();
                $("#map-modal").show();                
            });*/
            // map
        });
    </script>
@endsection
@endif