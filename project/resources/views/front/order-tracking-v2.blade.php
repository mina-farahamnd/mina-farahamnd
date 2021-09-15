@extends('layouts.front')

@section('css')
<link rel="stylesheet" href="{{ asset('assets/front/css/rtl/shopping.css') }}">
@endsection


@section('content')

<div class="container-fluid px-5">
    <!--***** Receipt information received- start*****-->
    <div class="row mx-md-5">
        <div class="col-12 mt-5 complete-order text-white d-flex align-items-center px-3">
            <h4>اطلاعات دریافت رسید</h4>
        </div>
    </div>
    <!--***** Receipt information received- end*****-->

    @if (isset($result) && $result)
       <!--***** Complete the purchase and transfer process- start*****-->
    <div class="row mx-md-5 mt-2 pink-shopping-cart">
        <div class="col-12 px-0 d-flex justify-content-between">
            <div class="d-flex">
                <img src="{{ asset('assets/front/images/hahoot/complete-purchase.svg') }}"
                    alt="pink-shopping-cart" class="mt-2">
                <div class="mt-2 mb-0 pink-shopping-cart-p mr-2 pr-2">
                    <p class="mt-2 p-0">تکمیل فرآیند خرید و انتقال
                    </p>
                </div>
            </div>
            <div class="mt-2 mb-0">
                <p class=" font-weight-bold mt-2">تا انتقال به سایت پذیرنده 00:<span id="time"></span></p>
            </div>
        </div>
    </div>
    <!--***** Complete the purchase and transfer process- end*****-->

    <!--***** Dear user- start*****-->
    <div class="row mx-md-5">
        <div class="col-12 mt-2 px-0">
            <div class="complete-order-registration-process">
                <p class="font-weight-bold text-justify">کاربر گرامی، تراکنش خرید اینترنتی شما با موفقیت انجام شد. لطفا
                    جهت
                    تکمیل فرآیند خرید و انتقال به سایت پذیرنده، در صورت عدم انتقال به صورت اتوماتیک روی دکمه تکمیل خرید
                    و
                    انتقال به سایت پذیرنده کلیک، کلیک نمایید.</p>
            </div>
        </div>
    </div>
    <!--***** Dear user- end*****-->


    <!--***** Successful purchase- start*****-->
    <div class="row mx-md-5 successful-purchase-all">
        <div class="col-12 d-flex justify-content-between p-4">
            <div>
                <h6 class="text-primary font-weight-bold">فرآیند خرید با موفقیت انجام شد</h6>
            </div>
            <div>
                <h6 class="font-weight-bold">فروشگاه اینترنتی هاهوت</h6>
            </div>
        </div>


        <!-- *****for md-size-start***** -->
        <div class="col-12 px-4 d-none d-md-block d-lg-none">
            <table class="table">
                <tr>
                    <td class="px-0 w-50">
                        <div class="d-flex align-items-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">شماره ارجاع</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>{{$order->txnid}}</span>
                            </div>
                        </div>
                    </td>

                    <td class="px-0 w-50">
                        <div class="d-flex align-items-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">نام پذیرنده</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>فروشگاه اینترنتی هاهوت</span>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="px-0 w-50">
                        <div class="d-flex align-items-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">شماره پایانه</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>1234567</span>
                            </div>
                        </div>
                    </td>

                    <td class="px-0 w-50">
                        <div class="d-flex align-items-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">آدرس سایت پذیرنده</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>www.hahoot.com</span>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="px-0 w-50">
                        <div class="d-flex align-items-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">نوع تراکنش</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>خرید</span>
                            </div>
                        </div>
                    </td>

                    <td class="px-0 w-50">
                        <div class="d-flex align-items-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">مبلغ خرید</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>{{number_format($order->pay_amount)}} ریال</span>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td class="px-0 w-50">
                        <div class="d-flex align-items-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">شماره کارت</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>603799********156</span>
                            </div>
                        </div>
                    </td>

                    <td class="px-0 w-50">
                        <div class="d-flex align-items-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">بانک صادرکننده</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>بانک کشاورزی</span>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr class="border border-right-0 border-left-0 border-top-0 border-bottom">
                    <td class="px-0 w-50">
                        <div class="d-flex align-items-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">تاریخ و زمان تراکنش</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>Time: 18:10:36</span>
                                <span>Date:1396/06/22</span>
                            </div>
                        </div>
                    </td>

                    <td class="px-0 w-50">
                        <div class="d-flex align-items-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">شماره پیگیری</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>{{$order->order_number}}</span>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <!-- *****for md-size-end***** -->
        <!-- 
        *
        *
        *
     -->
        <!-- *****for lg-size-start***** -->
        <div class="col-12 px-4 d-none d-lg-block">
            <table class="table table-bordered successful-purchase-table">
                <tr>
                    <td class="">
                        <div class="d-flex align-items-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">شماره ارجاع</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>{{$order->txnid}}</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">نام پذیرنده</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>فروشگاه اینترنتی هاهوت</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">شماره پایانه</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>1234567</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">آدرس سایت پذیرنده</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>www.hahoot.com</span>
                            </div>
                        </div>
                    </td>
                    <td class="border-left-hidden">
                        <div class="d-flex align-items-center justify-content-end">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">نوع تراکنش</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>خرید</span>
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">مبلغ خرید</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>{{number_format($order->pay_amount)}} ریال</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">شماره کارت</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>603799********156</span>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">درگاه بانکی :</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>{{$order->method}}</span>
                            </div>
                        </div>
                    </td>
                    <td colspan="2">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">تاریخ و زمان تراکنش</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>Time: {{$order->created_at->format('H:i:s')}}</span>
                                <span>Date: {{$order->created_at->format('Y-m-d')}}</span>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="d-flex align-items-center">
                            <div class="pl-2">
                                <span class="h6 font-weight-bold">شماره پیگیری</span>
                            </div>
                            <div class="pr-2 border border-right border-left-0 border-top-0 border-bottom-0">
                                <span>{{$order->order_number}}</span>
                            </div>
                        </div>
                    </td>
                    <td colspan="4"></td>
                </tr>
            </table>
        </div>



        <!-- *****for lg-size-end***** -->
        <div class="col-12 px-4 d-md-flex justify-content-md-between align-items-md-center mb-3">
            <div class="complete-order-registration-process">
                <p class="font-weight-bold text-justify">روی دکمه تکمیل خرید و انتقال به سایت پذیرنده، کلیک نمایید.</p>
            </div>
            <div class=" float-left">
                <div class="successful-purchase rounded-0 d-flex align-items-center justify-content-center">
                    <a href="#" class="text-decoration-none text-white">
                        <span>تکمیل فرآیند خرید و انتقال به سایت پذیرنده</span>
                        <img src="{{ asset('assets/front/images/hahoot/flash-left.svg') }}"
                            alt="flash-left" class="flash-left mr-2">
                    </a>
                </div>
            </div>
        </div>
    </div> 

    @elseif(isset($result) && $result == false)
        <div class="mx-md-5 mt-5">
            <div class="alert alert-danger p-5 text-center" role="alert">
                <h2>پرداخت شما با خطا مواجه شده است</h2>
            </div>
        </div>
    


    @elseif(isset($cashoondelivery))
        <div class="mx-md-5 mt-5">
            <div class="alert alert-success p-5 text-center" role="alert">
                <h2>سفارش شما ثبت شد.</h2>
            </div>
        </div>
    @endif
</div>

<div class="container-fluid px-5">

    <!--***** buy in hahoot- end*****-->


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
                <img src="{{ asset('assets/front/images/hahoot/support.svg') }}"
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

@endsection


@section('js')
    <script>
        setTimeout(function () {
            window.location.href= "{{route('front.index')}}" ; // the redirect goes here
        },20000);

        var time = 20;
        setInterval(function() {    
            if(--time < 10){
                time = '0'+time;
            }
            $("#time").text(time);
        }, 1000);
    </script>    
@endsection