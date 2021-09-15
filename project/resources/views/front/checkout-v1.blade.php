@extends('layouts.front')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/front/css/rtl/shopping.css') }}">
@endsection

@section('content')

<form action="{{route('product.buy')}}" method="POST" enctype="multipart/form-data" class="product-buy-form">
{{ csrf_field() }}
<div class="container-fluid px-5" id="tab-1" style="visibilty: hidden">
    <!--***** Your shopping cart- start*****-->
    <div class="row mx-md-5">
        <div class="col-12 mt-5 complete-order text-white d-flex align-items-center justify-content-md-between px-3">
            <h4>سبد خرید شما</h4>
            <p class="d-none d-md-flex align-items-md-center text-white mt-md-2">{{isset($products) ? 'کالاهای موجود در سبد شما ثبت نشده اند، برای ثبت سفارش مراحل بعدی را تکمیل کنید.'
                    : 'سبد خرید شما خالی است.'}}</p>

        </div>
        <div class="col-12 mt-3 complete-order d-md-none px-0 bg-white text-justify">
            <p> {{isset($products) ? 'کالاهای موجود در سبد شما ثبت نشده اند، برای ثبت سفارش مراحل بعدی را تکمیل کنید.'
                 : 'سبد خرید شما خالی است.'}}
            </p>
        </div>
    </div>
    <!--***** Your shopping cart- end*****-->

    <!--*****remove-product- start*****-->
    <div class="modal fade " id="remove-product" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0 border border-primary">
                <div class="modal-body p-5">
                    <div class="d-flex justify-content-center align-items-center px-0">
                        <div>
                            <img src="{{ asset('assets/front/images/hahoot/remove-product.svg') }}"
                                alt="remove-product">
                        </div>
                        <div class=" text-justify pr-2">
                            <h5 class="font-weight-bold">آیا مایل به حذف این محصول از سبد خرید هستید؟</h5>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center text-white mt-3">
                        <div class="yes d-flex justify-content-center align-items-center w-100" id="confirm-remove">
                            <h4>بله</h4>
                        </div>
                        <div class="no d-flex justify-content-center align-items-center w-100" data-dismiss="modal"
                            aria-label="Close">
                            <h4>خیر</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--*****remove-product- end*****-->

    @if(isset($products))

        @php
            $total_price = 0;
            $total_qty = 0;
        @endphp
        <!--***** Product selection- start*****-->
        @foreach($products as $product)
            <div class="row mx-md-5 mt-4 d-md-flex justify-content-md-between your-shopping-cart-all-row pb-md-4">
                <div class="col-12 col-md-2 px-0 d-flex justify-content-center d-md-flex justify-content-md-between">
                    <div>
                        <div class="your-shopping-cart-img-parent">
                            <img src="{{ asset('assets/images/products/'.$product['item']['photo']) }}"
                                alt="watch">
                        </div>
                        <a data-class="cremove{{ $product['item']['id'].$product['size'].$product['color'].str_replace(str_split(' ,'),'',$product['values']) }}"
                        data-href="{{ route('product.cart.remove',$product['item']['id'].$product['size'].$product['color'].str_replace(str_split(' ,'),'',$product['values'])) }}"
                        class="cart-remove btn your-shopping-cart-img-child shadow-none border-0"
                            data-toggle="modal" data-target="#remove-product">
                            <img src="{{ asset('assets/front/images/hahoot/close-icon-cart.svg') }}"
                                alt="close-icon-cart">
                        </a>
                    </div>

                </div>
                <div class="col-12 col-md-10 mt-3 mt-md-0">
                    <div class="row your-shopping-cart-row">
                        <div class="col-12 your-shopping-cart-all px-0 py-2">
                            <div class="d-md-flex">
                                <div
                                    class="d-flex align-items-center justify-content-between your-shopping-cart-two-parts">
                                    <span class="font-weight-bold">نام کالا:</span>
                                    <span
                                        class="product-description pl-md-2">{{ $product['item']['name'] }}</span>
                                </div>

                                <div
                                    class="d-flex align-items-center justify-content-between your-shopping-cart-two-parts">
                                    <span class="font-weight-bold your-shopping-cart-all-title">نوع کالا:</span>
                                    <span
                                        class="pr-2 product-description">{{ __($product['item']['type']) }}</span>
                                </div>
                            </div>
                        </div>

                        <hr class="horizontal-line w-100 my-0 ">

                        <div class="col-12 your-shopping-cart-all px-0 py-2">
                            <div class="d-md-flex">
                                <div
                                    class="d-flex align-items-center justify-content-between your-shopping-cart-two-parts">
                                    <span class="font-weight-bold">رنگ کالا:</span>
                                    <div class="d-flex align-items-center mr-3 pl-md-2">
                                        <span class="product-description"
                                            style="background-color: #{{ $product['color'] }};width:1rem;height:1rem"></span>
                                    </div>
                                </div>

                                <div
                                    class="d-flex align-items-center justify-content-between your-shopping-cart-two-parts">
                                    <span class="font-weight-bold your-shopping-cart-all-title">تعداد:</span>
                                    <div class="d-flex align-items-center mr-3">
                                        <input type="number" class="your-shopping-cart-two-parts-numbering-my-cart mr-2 border-0 text-center" name="quantity" min="1" value="{{ $product['qty'] }}" data-proid ="{{$product['item']['id']}}" data-color="{{!empty($product['color']) ?$product['color'] : ''}}" data-warranty="{{!empty($product['values']) ? $product['values'] : ''}}">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <hr class="horizontal-line w-100 my-0">

                        <div class="col-12 your-shopping-cart-all px-0 py-2">
                            <div class="d-md-flex">
                                <div class="d-flex align-items-center justify-content-between your-shopping-cart-two-parts">
                                    <span class="font-weight-bold">گارانتی کالا:</span>
                                    <span class="product-description pl-md-2">{{ !empty($product['values']) ? __($product['values']) : '-' }}</span>
                                </div>

                                <div class="d-flex align-items-center justify-content-between your-shopping-cart-two-parts">
                                    <span class="font-weight-bold your-shopping-cart-all-title">قیمت کالا:</span>
                                    <span class="product-description your-shopping-cart-two-parts-price">{{ number_format((int)$product['item']['price']) . " RL" }}</span>
                                </div>
                            </div>
                        </div>

                        <hr class="horizontal-line w-100 my-0">

                        <div class="col-12 your-shopping-cart-all mb-3 px-0">
                            <div class="d-flex justify-content-between your-shopping-cart-all-total py-3 px-4">
                                <div class="d-flex align-items-center">
                                    <span class="font-weight-bold">قیمت مجموع کالاها:</span>
                                </div>
                                <?php $total_price += ((int)$product['item']['price']) * $product['qty']; ?>
                                <?php $total_qty += (int)$product['qty']; ?>
                                <div class="d-flex align-items-center">
                                    <span class="font-weight-bold pr-2 your-shopping-cart-two-parts-price">{{ number_format(((int)$product['item']['price']) * $product['qty']) . " RL" }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <!--***** Product selection- end*****-->


        <div class="row mx-md-5 mt-5 ">
            <!--*****coupon-application-start *****-->
            <div class="col-12 col-lg-4 px-0">
                    <div class="input-group coupon-application h-100">
                        <input type="text" class="form-control shadow-none border-0 mt-lg-2 ml-1"
                            placeholder="کد تخفیف: کوپن تخفیف خود را اینجا وارد نمایید">
                        <div class="input-group-prepend d-flex justify-content-between shadow-none">
                            <span class="input-group-text border-0 rounded-0 btn text-white w-100 h-100">
                                <img src="{{ asset('assets/front/images/hahoot/flash-right.svg') }}"
                                    alt="flash-right" class="ml-2">
                                <span class="">اعمال کوپن</span>
                            </span>
                        </div>
                    </div>
            </div>
            <!--*****coupon-application-end *****-->

            <div class="col-12 col-md-6 col-lg-5 px-0 d-lg-flex justify-content-lg-around pr-lg-4">
                <!--*****The amount payable- for mobile-start *****-->
                <div class="amount-payable-blue rounded-0 d-flex align-items-center justify-content-between d-md-none px-3 mt-3">
                    <div class="d-flex align-items-center">
                        <img src="{{ asset('assets/front/images/hahoot/white-shopping-cart.svg') }}"
                            alt="white-shopping-cart">
                        <span class="font-weight-bold mr-2">مبلغ قابل پرداخت:</span>
                    </div>
                    <div>
                        <span class="font-weight-bold pr-2">RL 4/400/000</span>
                    </div>
                </div>
                <!--*****The amount payable- for mobile-end *****-->

                <!--*****The amount payable- for desktop-start *****-->
                <div class="amount-payable-blue btn rounded-0 d-none d-md-flex align-items-md-center justify-content-md-between px-3 w-100 mt-md-3 mt-lg-0">
                    <div class="d-flex align-items-center">
                        <input type="hidden" name="total_price" value="{{(int)$total_price}}">
                        <input type="hidden" name="total_qty" value="{{(int)$total_qty}}">
                        <img src="{{ asset('assets/front/images/hahoot/white-shopping-cart.svg') }}"
                            alt="white-shopping-cart">
                        <span class="font-weight-bold mr-2">مبلغ قابل پرداخت:</span>
                    </div>
                    <div class="your-shopping-cart-two-parts-price">
                        <span class="font-weight-bold pr-2">{{ number_format((int)$total_price) . " RL" }}</span>
                    </div>
                </div>
            </div>
            <!--*****The amount payable- for mobile-end *****-->


            <!--*****order-start *****-->
            <div class="col-12 col-md-6 col-lg-3 px-md-4 px-0 d-flex flex-row-reverse mt-3 mt-lg-0">
                <div class="order btn rounded-0 d-flex align-items-center justify-content-center ml-md-n4">
                    <a href="javascript:;" class="text-decoration-none text-white go-tab-2">
                        <span>ثبت سفارش</span>
                        <img src="{{ asset('assets/front/images/hahoot/flash-left.svg') }}"
                            alt="flash-left" class="flash-left mr-2">
                    </a>
                </div>

                <div class="Return-previous-page btn rounded-0 d-flex align-items-center justify-content-center">
                    <a href="{{route('front.index')}}" class="text-decoration-none text-white">
                        <span>ادامه خرید</span>
                        <img src="{{ asset('assets/front/images/hahoot/flash-left.svg') }}"
                            alt="flash-left" class="flash-left mr-2">
                    </a>
                </div>
            </div>
            <!--*****order-end *****-->
        </div>
    @else
        <!--***** buy-empty- start*****-->
        <div class="row mx-md-5">
            <div class="col-12 px-0 buy-empty-all d-flex flex-column justify-content-center align-items-center">
                @if(Auth::check())
                    <div class="buy-empty d-flex flex-column justify-content-center align-items-center">
                        <h5 class="font-weight-bold">Dear {{ Auth::user()->username }}</h5>
                        <p>سبد خرید شما خالیست!</p>
                        <span>
                            می توانید برای مشاهده محصولات
                            <a href="#" target="_blank" class="text-decoration-none font-weight-bold">
                                <span>کلیک</span>
                            </a>
                            کنید.
                        </span>
                    </div>
                @else
                    <div class="buy-empty">
                        <p class="font-weight-bold">سبد خرید شما خالیست!</p>
                    </div>

                    <a href="#"
                        class="login-your-account text-decoration-none p-2 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('assets/front/images/hahoot/login-your-account.svg') }}"
                            alt="white-shopping-cart" class="white-shopping-cart ml-2">
                        <span class="mr-2 font-weight-bold">به حساب کاربری خود وارد شوید</span>
                    </a>

                    <div class="buy-empty">
                        <a href="#" class="text-decoration-none">
                            <p>کاربر جدید هستم</p>
                        </a>
                    </div>
                @endif

            </div>
            <hr class="horizontal-line w-100 my-0 ">
        </div>

        <!--***** buy-empty- end*****-->

        <!--***** buy in hahoot- start*****-->
        @if(Auth::check())
            <div class="row mx-md-5">
                <div class="col-12 px-md-4 px-0 d-flex flex-row-reverse mt-5">
                    <div class="buy-in-hahoot btn rounded-0 d-flex align-items-center justify-content-center">
                        <a href="#" class="text-decoration-none text-white">
                            <img src="{{ asset('assets/front/images/hahoot/white-shopping-cart.svg') }}"
                                alt="white-shopping-cart" class="white-shopping-cart">
                            <span class="mx-2 font-weight-bold">خرید در هاهوت</span>
                            <img src="{{ asset('assets/front/images/hahoot/flash-left.svg') }}"
                                alt="flash-left" class="flash-left">
                        </a>
                    </div>
                </div>
            </div>
        @endif

    @endif

    <!-- /* خرید آسان و سریع  start*/ -->
    <div class="row main-easy-fast-shopping mx-md-5 text-center text-muted mt-5">
        <div class="col-12 d-flex justify-content-center justify-content-md-around border border-muted py-3">
            <!--for desktop and table there is not in mode mobile***********-->
            <div class="d-none d-md-block pt-3 pt-lg-4">
                <h3 class="mb-2 font-weight-bold">خرید آسان و سریع</h3>
                <span>با اطمینان خرید کنید</span>
            </div>
            <div class="main-easy-fast-shopping-vl bg-muted d-none d-md-flex mx-3"></div>
            <!--for desktop and table there is not in mode mobile***********-->
            <div class="mr-n3 mr-md-n1">
                <img src="{{ asset('assets/front/images/hahoot/Express delivery.svg') }}"
                    alt="Express delivery">
                <h6>تحویل اکسپرس</h6>
            </div>
            <div class="mr-4">
                <img src="{{ asset('assets/front/images/hahoot/Guaranteed return.svg') }}"
                    alt="Guaranteed return">
                <h6>7روز ضمانت برگشت</h6>
            </div>

            <div class="mr-4">
                <img src="{{ asset('assets/front/images/hahoot/Pay on the spot.svg') }}"
                    alt="Pay on the spot">
                <h6>پرداخت در محل</h6>
            </div>

            <div class="mr-4">
                <img src="{{ asset('assets/front/images/hahoot/gift card.svg') }}"
                    alt="gift card">
                <h6> کارت هدیه هاهوت</h6>
            </div>

            <div class="ml-n3 mr-3">
                <img src="{{ asset('assets/front/images/hahoot/Support.svg') }}"
                    alt="support">
                <h6>پشتیبانی</h6>
            </div>
        </div>
    </div>
    <!-- /* خرید آسان و سریع  end*/ -->


    <!--***** our-opinion- start*****-->
    <div class="row mx-md-5 mt-3">
        <div class="col-12 mt-2 px-0 d-md-flex justify-content-md-between flex-md-row-reverse our-opinion">

            <div class="d-none d-md-inline-block text-md-left">
                <h6 class="font-weight-bold">Related Products</h6>
                <p>Our Opinion</p>

            </div>

            <div class="text-right">
                <h6 class="font-weight-bold">محصولات مرتبط</h6>
                <p>پیشنهادات هاهوت به شما</p>
            </div>
        </div>
    </div>
    <!--***** our-opinion- end*****-->


</div>


@if(isset($products))
<!-- -----------------------------------------BODY-p5 start----------------------------------------- -->

<div class="container-fluid px-5" id="tab-2" style="display: none">
    <!--***** complete the order of goods- start*****-->
    <div class="row mx-md-5">
        <div class="col-12 mt-5 complete-order text-white d-flex align-items-center px-4">
            <h4>تکمیل سفارش کالا</h4>
        </div>
    </div>
    <!--***** complete the order of goods- end*****-->

    <!--***** .pink-shopping-cart-start *****-->
    <div class="row mx-md-5">
        <div class="col-12 mt-2 mt-md-3 px-0 pink-shopping-cart d-flex align-items-center">
            <div class="mt-n2">
                <img src="{{ asset('assets/front/images/hahoot/pink-shopping-cart.svg') }}" alt="pink-shopping-cart">
            </div>
            <!-- <div class="pink-shopping-cart-vl mx-2 mx-md-3"></div> -->
            <div class="mt-2 mb-0 pink-shopping-cart-p mr-2 pr-2">
                <p>افزودن کالاها به سبد خرید به معنی رزرو کالا برای شما نیست. برای ثبت سفارش باید مراحل خرید را تکمیل
                    نمایید.
                </p>
            </div>
        </div>
    </div>
    <!--***** .pink-shopping-cart-end *****-->

    <!--***** complete the order registration process-start *****-->
    <div class="row mx-md-5">
        <div class="col-12 mt-2 px-0">
            <div class="complete-order-registration-process">
                <p class="font-weight-bold">لطفا با کامل کردن بخش های زیر ما را جهت تکمیل فرآیند ثبت سفارش و ارسال آن
                    یاری نمایید.</p>
            </div>
        </div>
    </div>
<!--***** complete the order registration process-end *****-->

    <div class="row mx-md-4 mt-2">
        <div class="col-12 col-md-6 pl-md-0">
            <div class="row">
<!--***** your address-start *****-->
                <div class="col-12">
                    <div class="your-address-all ml-md-2">
                        <div class="d-flex justify-content-between p-3">
                            <div class="your-address d-flex align-items-center">
                                <img src="{{ asset('assets/front/images/hahoot/your address.svg') }}" alt="your address" class="">
                                <h6 class="mt-1 mr-1 mr-md-2 mr-lg-3">آدرس شما</h6>
                            </div>
                            <div class="blue-square">
                                <img src="{{ asset('assets/front/images/hahoot/blue-square.svg') }}" alt="blue-square">
                            </div>
                        </div>

                        <div class="px-3">
                            <div class="input-group">
                                <div class="input-group-append d-flex align-items-center">
                                    <div class="requirement"></div>
                                    <span
                                        class="input-group-text your-address-input-group-text rounded-0 border-right-0 border-left-0"
                                        id="city">شهر</span>
                                </div>
                                <input type="text" class="form-control your-address-input border-right-0 border-left-0 rounded-0 shadow-none"
                                    aria-describedby="city" name="city" required="">
                            </div>

                            <div class="input-group">
                                <div class="input-group-append d-flex align-items-center">
                                    <div class="requirement"></div>
                                    <span
                                        class="input-group-text your-address-input-group-text rounded-0 border-right-0 border-top-0"
                                        id="State" >استان</span>
                                </div>
                                <input type="text"
                                    class="form-control your-address-input border-right-0 border-left-0 border-top-0 rounded-0 shadow-none"
                                    aria-describedby="State" name="state">
                            </div>

                            <div class="input-group">
                                <div class="input-group-append d-flex align-items-center">
                                    <div class="requirement"></div>
                                    <span
                                        class="input-group-text your-address-input-group-text rounded-0 border-right-0 border-top-0"
                                        id="Postal-code">کدپستی</span>
                                </div>
                                <input type="text"
                                    class="form-control your-address-input border-right-0 border-left-0 border-top-0 rounded-0 shadow-none"
                                    aria-describedby="Postal-code" name="post_code">
                            </div>

                            <div class="input-group">
                                <div class="input-group-append d-flex align-items-center">
                                    <div class="requirement"></div>
                                    <span
                                        class="input-group-text your-address-input-group-text rounded-0 border-right-0 border-top-0"
                                        id="Phone">تلفن</span>
                                </div>
                                <input type="text"
                                    class="form-control your-address-input border-right-0 border-left-0 border-top-0 rounded-0 shadow-none"
                                    aria-describedby="Phone" name="phone">
                            </div>

                            <div class="input-group">
                                <div class="input-group-append d-flex align-items-center">
                                    <div class="requirement"></div>
                                    <span
                                        class="input-group-text your-address-input-group-text rounded-0 border-right-0 border-top-0"
                                        id="your-address">آدرس</span>
                                </div>
                                <input type="text"
                                    class="form-control your-address-input border-right-0 border-left-0 border-top-0 rounded-0 shadow-none"
                                    aria-describedby="your-address"
                                    name="address">
                            </div>
                        </div>

                        <div class="location-determination d-flex justify-content-between px-3 my-4">
                            <div class="location-determination-map px-3 d-flex align-items-center">
                                <img src="{{ asset('assets/front/images/hahoot/location-determination.svg') }}" alt="location-determination">
                            </div>

                            <div class="w-100">
                                    <div class="input-group location-determination-input-group">
                                        <input type="text"
                                            class="form-control location-determination-input-group-form-control border-0 shadow-none"
                                            aria-describedby="location"
                                            placeholder="لطفا محل آدرس خود را در نقشه تعیین کنید">
                                        <div class="input-group-prepend">
                                            <a href="#map" data-toggle="collapse" class="shadow-none text-decoration-none">
                                                <span class="input-group-text location-determination-input-group-prepend text-white w-100" id="location">تعیین لوکیشن</span>
                                            </a>
                                            
                                        </div>
                                    </div>
                            </div>
                        </div>
                        <div class="collapse" id="map">
                            <div class="p-3">
                                <div class=" card rounded-0">
                                    <div class="card-body w-100">
                                        <div class="mapouter">
                                            <div class="gmap_canvas">
                                                <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=%D8%A7%DB%8C%D8%B1%D8%A7%D9%86-%20%D8%AA%D9%87%D8%B1%D8%A7%D9%86-%20%D9%85%D9%84%D8%A7%D8%B5%D8%AF%D8%B1%D8%A7-%20%D8%B4%DB%8C%D8%AE%20%D8%A8%D9%87%D8%A7%DB%8C%DB%8C%20%D8%B4%D9%85%D8%A7%D9%84%DB%8C-%20%D8%A8%D8%B1%D8%AC%20%D8%B5%D8%A8%D8%A7&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                                                </iframe>
                                                <a href="https://www.embedgooglemap.net/blog/nordvpn-coupon-code/"></a>
                                            </div>
                                            <style>.mapouter{position:relative;text-align:right;}.gmap_canvas {overflow:hidden;background:none!important;}</style>
                                        </div>
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--***** your address-end *****-->

                <!--*****add a new address-start *****-->
                <div class="col-12 my-5 mb-md-0">
                    <div class="select-add-address-all ml-md-2">
                        <div class="d-flex justify-content-between align-items-center mb-n2">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="select-add-address d-flex align-items-center p-3 mt-3">
                                    <img src="{{ asset('assets/front/images/hahoot/select-add-address.svg') }}" alt="Select-add-address" class="">
                                    <h6 class="mt-1 mr-1 mr-md-2 mr-lg-3 font-weight-bold">انتخاب یا افزودن آدرس جدید</h6>
                                </div>
                            </div>

                            <div class="d-flex align-items-center">
                                <div class="select-add-address-flash">
                                    <a href="#address" data-toggle="collapse"
                                        class=" shadow-none text-decoration-none">
                                        <img src="{{ asset('assets/front/images/hahoot/flash-down-black.svg') }}" alt="flash-down-black">
                                    </a>
                                </div>

                                <div class="select-add-address-plus pl-md-2">

                                    <a href="#addAddress" data-toggle="collapse"
                                        class=" shadow-none text-decoration-none">
                                        <img src="{{ asset('assets/front/images/hahoot/plus.svg') }}" alt="plus" id="pluse">                                    
                                    </a>
                                </div>
                            </div>
                        </div>

                        <!-- collapse-start -->
                        <div class="px-4 pb-3">
                            <div class="collapse show" id="address" >
                                <div class="card-group border border-dark rounded-0">
                                    <div class="card border-0 mb-n3 mb-md-0">
                                        <div class="card-body">
                                            <div class="card-title">
                                                <div class="form-check address-form-check d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center mr-n4">
                                                        <img src="{{ asset('assets/front/images/hahoot/star.svg') }}" alt="star">
                                                        <label class="form-check-label address-form-check-label mr-n3 h5" for="myHome">خونه</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="checkbox" class="form-check-input address-form-check-input" id="myHome" checked>
                                                    </div>
                                                </div>
                                            </div> 
                        
                                            <div class="card-text">
                                                <textarea class="form-control description-text-area shadow-none rounded-0 border-left-0 border-right-0" rows="5">
                                                    شریعتی، ظفر، کوچه صبر،کوچه مطهری، کوچه بهشتی،نبش کوچه رویا، پ 5
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="select-add-address-vl d-none d-md-flex my-3"></div>
                                    <div class="card border-0 mb-n3 mb-md-0">
                                        <div class="card-body">
                                        <div class="card-title">
                                            <div class="form-check address-form-check d-flex justify-content-between align-items-center">
                                                <div class="d-flex align-items-center mr-n4">
                                                    <img src="{{ asset('assets/front/images/hahoot/star.svg') }}" alt="star">
                                                    <label class="form-check-label address-form-check-label mr-n3 h5" for="myHome">خونه مامانی</label>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <input type="checkbox" class="form-check-input"id="myHome">
                                                </div>
                                            </div>
                                        </div> 
                        
                                        <div class="card-text">
                                            <textarea class="form-control description-text-area shadow-none rounded-0 border-left-0 border-right-0" rows="5" disabled>
                                                شریعتی، ظفر، کوچه صبر،کوچه مطهری، کوچه بهشتی،نبش کوچه رویا، پ 5
                                            </textarea> 
                                        </div>
                                        </div>
                                    </div>
                                    <div class="select-add-address-vl d-none d-md-flex mt-3"></div>
                                    <div class="card border-0 mb-md-0">
                                        <div class="card-body">
                                        <div class="card-title">
                                                <div class="form-check address-form-check d-flex justify-content-between align-items-center">
                                                    <div class="d-flex align-items-center mr-n4">
                                                        <img src="{{ asset('assets/front/images/hahoot/star.svg') }}" alt="star">
                                                        <label class="form-check-label address-form-check-label mr-n3 h5" for="myHome">محل کار</label>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <input type="checkbox" class="form-check-input" id="myHome">
                                                    </div>
                                                </div>
                                        </div> 
                        
                                        <div class="card-text">
                                            <textarea class="form-control select-add-address-text-area shadow-none rounded-0 border-left-0 border-right-0" rows="5" disabled>
                                                شریعتی، ظفر، کوچه صبر،کوچه مطهری، کوچه بهشتی،نبش کوچه رویا، پ 5
                                             </textarea> 
                                        </div>
                                        </div>
                                    </div>  
                                </div>
                                
                            </div>
                        </div>
                        
                        <div class="px-4 pb-3">
                            <div class="collapse" id="addAddress">
                                <div
                                    class="card border border-dark border-bottom-0 border-left-0 border-right-0 rounded-0">
                                    <div>
                                            <div class="input-group">
                                                <div class="input-group-append d-flex align-items-center">
                                                    <div class="requirement"></div>
                                                    <span class="input-group-text your-address-input-group-text rounded-0 border-right-0 border-top-0" id="city">شهر</span>
                                                </div>
                                                <input type="text"
                                                    class="form-control your-address-input border-right-0 border-left-0  border-top-0 rounded-0 shadow-none"
                                                    aria-describedby="city" value="">
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-append d-flex align-items-center">
                                                    <div class="requirement"></div>
                                                    <span
                                                        class="input-group-text your-address-input-group-text rounded-0 border-right-0 border-top-0"
                                                        id="State">استان</span>
                                                </div>
                                                <input type="text"
                                                    class="form-control your-address-input border-right-0 border-left-0 border-top-0 rounded-0 shadow-none"
                                                    aria-describedby="State" value="">
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-append d-flex align-items-center">
                                                    <div class="requirement"></div>
                                                    <span
                                                        class="input-group-text your-address-input-group-text rounded-0 border-right-0 border-top-0"
                                                        id="Postal-code">کدپستی</span>
                                                </div>
                                                <input type="text"
                                                    class="form-control your-address-input border-right-0 border-left-0 border-top-0 rounded-0 shadow-none"
                                                    aria-describedby="Postal-code" value="">
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-append d-flex align-items-center">
                                                    <div class="requirement"></div>
                                                    <span
                                                        class="input-group-text your-address-input-group-text rounded-0 border-right-0 border-top-0"
                                                        id="Phone">تلفن</span>
                                                </div>
                                                <input type="text"
                                                    class="form-control your-address-input border-right-0 border-left-0 border-top-0 rounded-0 shadow-none"
                                                    aria-describedby="Phone" value="">
                                            </div>

                                            <div class="input-group">
                                                <div class="input-group-append d-flex align-items-center">
                                                    <div class="requirement"></div>
                                                    <span
                                                        class="input-group-text your-address-input-group-text rounded-0 border-right-0 border-top-0"
                                                        id="your-address">آدرس</span>
                                                </div>
                                                <input type="text"
                                                    class="form-control your-address-input border-right-0 border-left-0 border-top-0 rounded-0 shadow-none"
                                                    aria-describedby="your-address" value="">
                                            </div>
                                    </div>

                                </div>
                                <!--***** Address registration-start *****-->
                                <div class="address-registration d-flex flex-row-reverse px-3 pb-3">
                                    <button class="btn rounded-0 text-white">ثبت آدرس</button>
                                </div>
                                <!--***** Address registration-end *****-->
                            </div>
                        </div>
                        <!-- collapse-end -->
                    </div>
                </div>
                <!--***** add a new address-end *****-->
            </div>
        </div>


        <div class="col-12 col-md-6 pr-md-0">
            <div class="row">
                <!--***** Delivery method-start *****-->
                <div class="col-12">
                    <div class="delivery-method px-3 mr-md-2">
                        <div class="d-flex align-items-center p-3">
                            <img src="{{ asset('assets/front/images/hahoot/delivery-method.svg') }}" alt="delivery-method">
                            <h6 class="mt-1 mr-1 mr-md-2 mr-lg-3">روش تحویل</h6>
                        </div>
                        <hr class="line">
                        @foreach ($shipping_data as $data)   
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" id="method-shipping-{{$data->id}}" name="shipping_method" value="{{$data->id}}" data-shipping-price="{{$data->price}}" data-shipping-days="{{$data->subtitle}}"" {{$loop->iteration == 1 ? 'checked' : ''}}>
                                    <label class="form-check-label mr-4 mr-md-4" for="method-shipping-{{$data->id}}">
                                        <span>{{$data->title . " " . $data->subtitle}}</span>
                                    </label>
                                </div>
                                <div class="delivery-method-price">
                                    <span>{{$data->price}} ریال</span>
                                </div>
                            </div>
                            <hr class="line">
                        @endforeach

                        
                        <div class="selection-method pb-3">
                            <span class="font-weight-bold text-primary">لطفا روش حمل و نقل مورد نظر خود را برای این
                                سفارش انتخاب نمایید.</span>
                        </div>
                    </div>
                </div>
                <!--***** Delivery method-end *****-->

                <!--***** payment-method-start *****-->
                <div class="col-12 mt-5 payment-method-all">
                    <div class="payment-method px-3 mr-md-2">
                        <div class="d-flex align-items-center p-3">
                            <img src="{{ asset('assets/front/images/hahoot/payment-method.svg') }}" alt="payment-method">
                            <h6 class="mt-1 mr-1 mr-md-2 mr-lg-3">روش پرداخت</h6>
                        </div>
                        <hr class="line">
                        <div class="d-lg-flex justify-content-lg-between align-items-lg-center">
                            <div class="form-check">
                                <input class="form-check-input" name="payment_method" type="radio" checked value="1">
                                <label class="form-check-label mr-4 mr-md-4" for="free-delivery">
                                    پرداخت آنلاین( درگاه بانکی )
                                </label>
                            </div>
                            <hr class="line d-lg-block">
                            <div class="payment-method-vl d-none d-lg-flex ml-md-2"></div>
                            <div class="form-check">
                                <input class="form-check-input " type="radio" name="payment_method"  >
                                <label class="form-check-label mr-4 mr-md-4" for="free-delivery">
                                    پرداخت نقدی ( شماره حساب )
                                </label>
                            </div>
                        </div>
                        <hr class="line">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment_method" value="2">
                                <label class="form-check-label mr-4 mr-md-4" for="free-delivery">
                                    پرداخت نقدی ( درب منزل )
                                </label>
                            </div>
                        </div>
                        <hr class="line">
                        <div class="selection-method pb-3">
                            <span class="font-weight-bold text-primary">لطفا روش پرداخت مورد نظر خود را برای این سفارش
                                انتخاب نمایید.</span>
                        </div>
                    </div>
                </div>
                <!--***** payment-method-end *****-->

                <!--***** Description-start *****-->
                <div class="col-12 mt-5">
                    <div class="description px-3 mr-md-2">
                        <div class="d-flex align-items-center p-3">
                            <img src="{{ asset('assets/front/images/hahoot/description.svg') }}" alt="description">
                            <h6 class="mt-1 mr-1 mr-md-2 mr-lg-3">توضیحات</h6>
                        </div>
                        <div class=" mb-4">
                                <textarea
                                    class="form-control description-text-area shadow-none rounded-0 border-left-0 border-right-0"
                                    rows="5" placeholder="افزودن توضیحاتی در مورد سفارش" name="order_notes"></textarea>
                        </div>
                    </div>
                </div>
                <!--***** Description-end *****-->
            </div>
        </div>
    </div>


    <!--*****order-start *****-->
    <div class="row mx-md-5 mt-5">
        <div class="col-12 px-md-4 px-0 d-flex flex-row-reverse">
            <div class="order btn rounded-0 d-flex align-items-center justify-content-center ml-md-n4">
                <a href="javascript:;" class="text-decoration-none text-white go-tab-3">
                    <span>تایید و ثبت سفارش</span>
                    <img src="{{ asset('assets/front/images/hahoot/flash-left.svg') }}" alt="flash-left" class="flash-left mr-2">
                </a>
            </div>
        </div>
    </div>
    <!--*****order-end *****-->
</div>

<!-- -----------------------------------------BODY-p7- end----------------------------------------- -->

<!-- -----------------------------------------BODY-p3 start----------------------------------------- -->
<div class="container-fluid px-5" id="tab-3" style="display: none">
    <!--***** complete the order of goods- start*****-->
    <div class="row mx-md-5">
        <div class="col-12 mt-5 complete-order text-white d-flex align-items-center px-3">
            <h4>تایید سفارش</h4>
        </div>
    </div>
    <!--***** complete the order of goods- end*****-->

    <!--***** .pink-shopping-cart-start *****-->
    <div class="row mx-md-5">
        <div class="col-12 mt-2 mt-md-3 px-0 pink-shopping-cart d-flex align-items-center">
            <div class="mt-n2">
                <img src="{{ asset('assets/front/images/hahoot/pink-shopping-cart.svg') }}" alt="pink-shopping-cart">
            </div>
            <!-- <div class="pink-shopping-cart-vl mx-2 mx-md-3"></div> -->
            <div class="mt-2 mb-0 pink-shopping-cart-p mr-2 pr-2">
                <p>افزودن کالاها به سبد خرید به معنی رزرو کالا برای شما نیست. برای ثبت سفارش باید مراحل خرید را تکمیل
                    نمایید.
                </p>
            </div>
        </div>
    </div>
    <!--***** .pink-shopping-cart-end *****-->

    <!--***** complete the order registration process-start *****-->
    <div class="row mx-md-5">
        <div class="col-12 mt-2 px-0">
            <div class="complete-order-registration-process">
                <p class="font-weight-bold">لطفا اطلاعات زیر را بررسی کنید و در صورت صحیح بودن آن ها، جهت تکمیل سفارش و
                    تسویه حساب روی کلید ورود به درگاه بانکی کلیک کنید.</p>
            </div>
        </div>
    </div>
    <!--***** complete the order registration process-end *****-->

    <!--***** Order confirmation-start *****-->
    <div class="row mx-md-5 order-confirmation">
        <div class="col-12 col-lg-6 px-3 w-100">
            <div class="your-address-all border-0 mt-lg-1">
                <div class="d-flex justify-content-between p-2">
                    <div class="your-address d-flex align-items-center">
                        <img src="{{ asset('assets/front/images/hahoot/your address.svg') }}" alt="your address" class="">
                        <h6 class="mt-1 mr-1 mr-md-2 mr-lg-3">آدرس شما</h6>
                    </div>
                </div>

                <div class="p-3">
                    <table class="table table-bordered border-left-0 border-right-0 your-address-table px-md-4">
                        <tbody>
                            <tr>
                                <td class="px-0 text-justify border-left-0 border-right-0 border-top-0">
                                    آدرس:
                                    <span id="shipping_address"></span>
                                </td>
                                
                            </tr>
                            <tr class="d-flex flex-column flex-lg-row justify-content-lg-around">
                                <td
                                    class="px-0 p-lg-0 text-justify border-left-0 border-right-0 border-top-0 border-bottom-0 d-flex align-items-center">
                                    <span>کد پستی:
                                        <span id="shipping_post_code"></span>
                                    </span>
                                    <div class="your-address-table-vl px-3 d-none d-lg-flex py-0"></div>
                                </td>

                                <td
                                    class="px-0 p-lg-0 text-justify border-left-0 border-right-0 border-bottom-0 border-top-0 d-flex align-items-center">
                                    <span>شماره تماس:
                                        <span id="shipping_phone"></span>
                                    </span>
                                    <div class="your-address-table-vl px-3 d-none d-lg-flex"></div>
                                </td>

                                <td
                                    class="px-0 p-lg-0 text-justify border-left-0 border-right-0 border-bottom-0 border-top-0 d-flex align-items-center">
                                    <span>ایمیل: 
                                        <span id="shipping_email"></span>
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td
                                    class="order-confirmation-tr px-0 text-justify text-primary font-weight-bold border-left-0 border-right-0 pb-3">
                                    کالای شما بین <span id="shipping_days"></span> به دست شما خواهد رسید.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- <div class="col-lg-1 order-confirmation-vl d-none d-md-flex p-md-0 m-md-0"></div> -->

        <!--***** Delivery-payment-description method-start *****-->

        <div class="col-12 col-lg-6 px-3 w-100 order-confirmation-delivery">
            <!--***** Delivery-start *****-->
            <div class="delivery-method px-3 border-0">
                <div class="d-flex align-items-center p-3 ">
                    <img src="{{ asset('assets/front/images/hahoot/delivery-method.svg') }}" alt="delivery-method">
                    <h6 class="mt-1 mr-1 mr-md-2 mr-lg-3">روش تحویل</h6>
                </div>
                <div>
                    <table class="table table-bordered border-left-0 border-right-0 delivery-method-table">
                        <tbody>
                            <tr>
                                <td class="px-0 text-justify font-weight-bold border-left-0 border-right-0">
                                    <span id="shipping_method"></span>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--***** Delivery-end *****-->

            <!--***** payment-start *****-->
            <div class="d-lg-flex justify-content-lg-around">
                <div class=" w-100">
                    <div class="payment-method px-3 border-0">
                        <div class="d-flex align-items-center px-3 pb-2">
                            <img src="{{ asset('assets/front/images/hahoot/payment-method.svg') }}" alt="payment-method">
                            <h6 class=" mr-1 mr-md-2 mr-lg-3">روش پرداخت</h6>
                        </div>
                        <div>
                            <table class="table table-bordered border-left-0 border-right-0 delivery-method-table">
                                <tbody>
                                    <tr>
                                        <td class="px-0 text-justify font-weight-bold border-left-0 border-right-0" id="payment_method">
                                            </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--***** payment-end *****-->

                <!--***** description-start *****-->
                <div class="order-confirmation-description w-100">
                    <div class="description px-3 border-0  mr-md-2 mt-n1">
                        <div class="d-flex align-items-center px-3 pb-2">
                            <img src="{{ asset('assets/front/images/hahoot/description.svg') }}" alt="description">
                            <h6 class=" mr-1 mr-md-2 mr-lg-3">توضیحات</h6>
                        </div>
                        <div>
                            <table class="table table-bordered border-left-0 border-right-0 delivery-method-table">
                                <tbody>
                                    <tr>
                                        <td class="px-0 text-justify font-weight-bold border-left-0 border-right-0" id="order_notes">
                                            توضیحاتی در مورد کالا وجود ندارد.
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!--***** description-end *****-->
            </div>
        </div>
    </div>
    <!--***** Order confirmation-end *****-->


    <!--***** Product details-start *****-->
    <div class="row mx-md-5 mt-5 product-details-all-row">
        @foreach ($products as $product)
        <div class="col-12 product-details-all px-4 py-2">
            <div class="d-md-flex">
                <div class="d-flex align-items-center product-details-all-three-parts">
                    <span class="font-weight-bold">نام کالا:</span>
                    <span class="pr-2">{{ $product['item']['name'] }}</span>
                </div>

                <div class="d-flex align-items-center product-details-all-three-parts">
                    <span class="font-weight-bold product-details-all-title">نوع کالا:</span>
                    <span class="pr-2">{{ __($product['item']['type']) }}</span>
                </div>

                <div class="d-flex align-items-center product-details-all-three-parts">
                    <span class="font-weight-bold product-details-all-title">تعداد:</span>
                    <span class="pr-2">{{ $product['qty'] }} عدد</span>
                </div>
            </div>
        </div>

        <hr class="horizontal-line w-100 my-0 mx-4">

        <div class="col-12 product-details-all px-4 py-2">
            <div class="d-md-flex">
                <div class="d-flex align-items-center product-details-all-three-parts">
                    <span class="font-weight-bold">گارانتی کالا:</span>
                    <span class="pr-2">{{ !empty($product['values']) ? __($product['values']) : '-' }}</span>
                </div>

                <div class="d-flex align-items-center product-details-all-three-parts">
                    <span class="font-weight-bold product-details-all-title">قیمت کالا:</span>
                    <span class="font-weight-bold pr-2">RL</span>
                    <span class="font-weight-bold pr-2">{{ number_format((int)$product['item']['price'])}}</span>
                </div>
            </div>
        </div>

        <hr class="horizontal-line w-100 my-0 mx-4">

        <div class="col-12 product-details-all mb-3">
            <div class="d-flex justify-content-between product-details-all-total px-4 py-3 ">
                <div class="d-flex align-items-center">
                    <span class="font-weight-bold">قیمت مجموع کالاها:</span>
                </div>

                <div class="d-flex align-items-center">
                    <span class="font-weight-bold pr-2">{{ number_format((int)$product['item']['price'] * $product['qty']) . " RL" }}</span>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>

    <!--***** Product details-end *****-->

    <div class="row mx-md-5 mt-5">
        <div class="col-12 px-md-4 px-0 d-md-flex justify-content-md-between d-md-none">
            <!--*****The amount payable- for mobile-start *****-->
            <div class="amount-payable-pink rounded-0 d-flex align-items-center justify-content-between d-md-none px-3">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/front/images/hahoot/white-shopping-cart.svg') }}" alt="white-shopping-cart">
                    <span class="font-weight-bold mr-2">مبلغ قابل پرداخت:</span>
                </div>
                <div>
                    <span class="font-weight-bold pr-2"></span>
                </div>
            </div>
            <!--*****The amount payable- for mobile-end *****-->
        </div>


        <div class="col-md-6 mt-3 px-0">
            <div
                class="amount-payable-pink rounded-0 d-none d-md-flex align-items-md-center justify-content-md-between px-3">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/front/images/hahoot/white-shopping-cart.svg') }}" alt="white-shopping-cart">
                    <span class="font-weight-bold mr-2">مبلغ قابل پرداخت:</span>
                </div>
                <div>
                    <span class="font-weight-bold pr-2" id="priceAndShipping"></span>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-12 mt-3 px-0 px-md-4">
            <div class="d-flex flex-row-reverse">
                <div class="Log-in-bank btn rounded-0 d-flex align-items-center justify-content-center ml-md-n4">
                    <div class="text-decoration-none text-white">
                        <input type="submit"  class="bg-transparent border-0 text-white" id="final-btn">
                        <img src="{{ asset('assets/front/images/hahoot/flash-left.svg') }}" alt="flash-left" class="flash-left mr-2">
                    </div>
                </div>
                <div class="Return-previous-page btn rounded-0 d-flex align-items-center justify-content-center">
                    <a href="javascript:;" class="text-decoration-none text-white go-tab-2">
                        <span>بازگشت به صفحه قبل</span>
                        <img src="{{ asset('assets/front/images/hahoot/flash-left.svg') }}" alt="flash-left" class="flash-left mr-2">
                    </a>
                </div>
            </div>
        </div>
    </div>



</div>
@endif
<!-- -----------------------------------------BODY-p3- end----------------------------------------- -->


</form>

@endsection



@if(isset($products))
@section('js')
    <script>
        /********************* Helper function *******************/
        function addCommas(nStr)
        {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        }
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
    </script>


    <script>

        $(document).ready(function(){

            
            $("#tab-1").fadeIn(10);
            

            /********************* Change Product Qty *******************/
            $('input[name="quantity"]').on("change keyup", function(){
                var sizes = "";
                var size_qty = "";
                var size_price = "";
                var size_key = "";
                var total = "";
                var stock = $("#stock").val();
                var keys = "";
                var prices = "";
                var colors = "";
                var values = "";
                var method = "fix";
                    
                var qty = $(this).val();
                var pid = $(this).data('proid');
                if($(this).data('color')){
                    colors = $(this).data('color');
                }
                if($(this).data('warranty')){
                    values = [$(this).data('warranty')];
                }
                
                $.ajax({
                    type: "GET",
                    url:mainurl+"/addnumcart",
                    data:{id:pid,qty:qty,size:sizes,color:colors,size_qty:size_qty,size_price:size_price,size_key:size_key,keys:keys,values:values,prices:prices,method:method},
                    success:function(data){
                        location.reload();
                    }

                }); 
            });


            /********************* Remove Product *******************/
            $(document).on('click', '.cart-remove', function(){
                var $selector = $(this).data('class');
                $('.'+$selector).hide();
                var $href = $(this).data('href');
                $('#confirm-remove').click(function(){
                    $.get( $href , function( data ) {
                        location.reload();
                    });
                })
                
            });


            /********************* Go to tab 2 *******************/
            $(".go-tab-2").click(function(){
                $("#tab-1").fadeOut(500);
                $("#tab-3").fadeOut(500);
                $("#tab-2").delay(500).fadeIn(500);
            }); 



            /********************* Go to tab 3 *******************/
            $(".go-tab-3").click(function(){
                var result;
                result = is_empty_field('input[name="address"]','آدرس');
                result *= is_empty_field('input[name="post_code"]','کد پستی');
                result *= is_empty_field('input[name="phone"]','تلفن');
                result *= is_empty_field('input[name="city"]','شهر');
                result *= is_empty_field('input[name="state"]','استان');
                result *= is_integer_field('input[name="phone"]','تلفن');
                result *= is_integer_field('input[name="post_code"]','کد پستی');

                //result success
                if(result){
                    var shipping_address  = $('input[name="address"]').val();
                    var shipping_post_code  = $('input[name="post_code"]').val();
                    var shipping_phone = $('input[name="phone"]').val();
                    var shipping_method =  $('input[name="shipping_method"]:checked + label span').text() + " / هزینه ارسال " +$('input[name="shipping_method"]:checked').data('shipping-price') + " ریال";
                    var payment_method =  $('input[name="payment_method"]:checked + label ').text();
                    var order_notes =  $('textarea[name="order_notes"]').val();
                    var shipping_days =  $('input[name="shipping_method"]:checked').data('shipping-days');
                    var shipping_email =  'hamed@gmail.com';

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
                    
                    var priceAndShipping = {{(int)$total_price}} + $('input[name="shipping_method"]:checked').data('shipping-price');
                    $('#priceAndShipping').html(addCommas(parseInt(priceAndShipping)) + " RL"); 

                    if($('input[name="payment_method"]:checked').val() == {{App\Models\Order::ZARIN_PAL}}){
                        $('#final-btn').val('ورود به درگاه بانکی');
                    }else{
                        $('#final-btn').val('ثبت سفارش');
                    }
                    $("#tab-2").fadeOut(500);
                    $("#tab-3").delay(500).fadeIn(500);
                }
                
                
            });
        });
    </script>


@endsection
@endif
