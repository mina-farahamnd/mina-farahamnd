@extends('layouts.front')

@section('content')

    <section class="title">
        <div class="container-fluid">
            <div class="row mb-5">
                <div class="col-md-12 px-0 d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-between w-100 py-2 px-4 title__green">
                        <span class="text-white text__medium text__iranyekan--bold">اطلاعات دریافت رسید</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="buy">
        <div class="container-fluid">
            @if (isset($result) && $result)
            <div class="row mt-4">
                <div class="col-12 px-0 d-block d-sm-flex align-items-sm-center justify-content-sm-between">
                    <div class="d-block d-sm-flex align-items-sm-center buy__icon">
                        <img src="{{ asset('assets/front/icon/tik.svg') }}" alt="">
                        <span class="text__black text__small border-right mr-3 pr-3 text__iranyekan--regular">تکمیل فرآیند خرید و انتقال</span>
                    </div>
                    <div class="d-block d-sm-flex align-items-sm-center mt-3 mt-sm-0">
                        <span class="text__medium text__green ml-2 text__iranyekan--bold">تا انتقال به سایت پذیرنده </span>
                        <span class="font-weight-bold text__large text__green">00:<span id="time"></span></span>
                    </div>
                </div>
                
            </div>

            <div class="row mt-4">
                <div class="col-12 px-0">
                    <span class="text-justify text__black text__medium text__iranyekan--regular">کاربر گرامی، تراکنش خرید اینترنتی شما با موفقیت انجام شد.لطفا جهت تکمیل فرآیند خرید و انتقال به سایت پذیرنده، در صورت عدم انتقال به صورت اتوماتیک روی دکمه تکمیل خرید و انتقال به سایت پذیرنده، کلیک نمایید.</span>
                </div>
            </div>

            <div class="row mt-4 pb-0 buy__details">
                <div class="col-12 px-0 d-flex justify-content-between align-items-center">
                    <h6 class="text__black text__iranyekan--regular">فرآیند خرید با موفقیت انجام شد</h6>
                    <h6 class="d-none d-sm-flex text__black text__iranyekan--regular">فروشگاه اینترنتی آکام پارس</h6>
                </div>

				<div class="col-12 mt-4 px-0 d-md-flex flex-md-wrap d-xl-none">
					
					<div class="d-flex align-items-center p-3 buy__information">
					  <span class="text__black text__iranyekan--regular buy__fixed">شماره ارجاع</span>
					  <span class="text__black mr-3 pr-3 text__iranyekan--light buy__variable">{{$order->txnid}}</span>
					</div>
		
					<div class="p-3 d-flex align-items-center buy__information buy__border--768 buy__border--992 buy__border--1200">
					  <span class="text__black text__iranyekan--regular buy__fixed">نام پذیرنده</span>
					  <span class="text__black mr-3 pr-3 text__iranyekan--light buy__variable">فروشگاه اینترنتی آکام پارس</span>
					</div>
		
<!--					<div class="p-3 d-flex align-items-center buy__information buy__border&#45;&#45;992 buy__border&#45;&#45;1200">
					  <span class="text__black text__iranyekan&#45;&#45;regular buy__fixed">شماره پایانه</span>
					  <span class="text__black mr-3 pr-3 text__iranyekan&#45;&#45;light buy__variable">1234567</span>
					</div>        -->
		
					<div class="p-3 d-flex align-items-center buy__information buy__border--768 buy__border--1200">
					  <span class="text__black text__iranyekan--regular buy__fixed">نوع تراکنش</span>
					  <span class="text__black mr-3 pr-3 text__iranyekan--light buy__variable">خرید</span>
					</div>
		
					<div class="d-flex p-3 align-items-center buy__information buy__border--992 buy__border--1200">
					  <span class="text__black text__iranyekan--regular buy__fixed">مبلغ خرید</span>
					  <div class="d-flex mr-3 pr-3 buy__variable">
						<span class="mx-2 text__iranyekan--light">{{number_format($order->pay_amount)}}</span>
						<span class="text__iranyekan--light">ریال</span>
					  </div>
					</div>
		
<!--					<div class="p-3 d-flex align-items-center buy__information buy__border&#45;&#45;768 buy__border&#45;&#45;992">
					  <span class="text__black text__iranyekan&#45;&#45;regular buy__fixed">شماره کارت</span>
					  <span class="text__black mr-3 pr-3 text__iranyekan&#45;&#45;light buy__variable">1234567891234567</span>
					</div>-->
		
					<div class="p-3 d-flex align-items-center buy__information buy__border--1200">
						<span class="text__black text__iranyekan--regular buy__fixed">آدرس سایت پذیرنده</span>
						<span class="text__black mr-3 pr-3 text__iranyekan--light buy__variable">{{url('/')}}</span>
					</div>
		
<!--					<div class="p-3 d-flex align-items-center buy__information buy__border&#45;&#45;768 buy__border&#45;&#45;992 buy__border&#45;&#45;bottom buy__border&#45;&#45;1200">
					  <span class="text__black text__iranyekan&#45;&#45;regular buy__fixed">بانک صادر کننده</span>
					  <span class="text__black mr-3 pr-3 text__iranyekan&#45;&#45;light buy__variable">بانک کشاورزی جمهوری ایران</span>
					</div>-->
					<div class="p-3 d-flex align-items-center buy__information buy__border--bottom buy__border--992 buy__border--1200">
						<span class="text__black text__iranyekan--regular buy__fixed">شماره پیگیری</span>
						<span class="text__black mr-3 pr-3 text__iranyekan--light buy__variable">{{$order->order_number}}</span>
					</div>
					<div class="p-3 d-flex align-items-center buy__information buy__border--768">
					  <span class="text__medium text__black text__iranyekan--regular ml-3 buy__fixed">تاریخ و زمان تراکنش</span>
					  <div class="d-flex flex-wrap buy__variable">
						<div class="d-flex">
							@php($time = $order->tracks->first()->updated_at)
						  <span class="text__medium text__black mr-3 pr-3 text__iranyekan--light" >{{$time->format('H:i:s')}}</span>
						  <span class="d-none d-sm-flex text__medium text__black mr-3 pr-3 text__iranyekan--light" >Time</span>
						</div>
						<div class="d-flex">
						  <span class="text__medium text__black mr-3 pr-3 text__iranyekan--light" >{{$time->format('Y/n/j')}}</span>
						  <span class="d-none d-sm-flex text__medium text__black mr-3 pr-3 text__iranyekan--light" >Date</span>
						</div>
					  </div>
					</div>
				</div>


				<div class="col-12 mt-4 px-0 d-none d-xl-block">
					<div class="d-md-flex buy__responsive--1200">
						<div class="d-flex align-items-center p-3 buy__information">
							<span class="text__black text__iranyekan--regular buy__fixed">شماره ارجاع</span>
							<span class="text__black mr-3 pr-3 text__iranyekan--light buy__variable">{{$order->txnid}}</span>
						</div>
			  
						  <div class="p-3 d-flex align-items-center buy__information buy__border--1200">
							<span class="text__black text__iranyekan--regular buy__fixed">نام پذیرنده</span>
							<span class="text__black mr-3 pr-3 text__iranyekan--light buy__variable">فروشگاه اینترنتی آکام پارس</span>
						  </div>
<!--
						  <div class="p-3 d-flex align-items-center buy__information buy__border&#45;&#45;1200">
							<span class="text__black text__iranyekan&#45;&#45;regular buy__fixed">شماره پایانه</span>
							<span class="text__black mr-3 pr-3 text__iranyekan&#45;&#45;light buy__variable">1234567</span>
						  </div>        -->
			  
						  <div class="p-3 d-flex align-items-center buy__information buy__border--1200">
							<span class="text__black text__iranyekan--regular buy__fixed">نوع تراکنش</span>
							<span class="text__black mr-3 pr-3 text__iranyekan--light buy__variable">خرید</span>
						  </div>
			  

						</div>
			
					<div class="d-md-flex buy__responsive--1200">
						<div class="d-flex p-3 align-items-center buy__information buy__border--1200">
							<span class="text__black text__iranyekan--regular buy__fixed">مبلغ خرید</span>
							<div class="d-flex mr-3 pr-3 buy__variable">
								<span class="mx-2 text__iranyekan--light">{{number_format($order->pay_amount)}}</span>
								<span class="text__iranyekan--light">ریال</span>
							</div>
						</div>
<!--						<div class="p-3 d-flex align-items-center buy__information">
							<span class="text__black text__iranyekan&#45;&#45;regular buy__fixed">شماره کارت</span>
							<span class="text__black mr-3 pr-3 text__iranyekan&#45;&#45;light buy__variable">1234567891234567</span>
						  </div>-->
			  
						  <div class="p-3 d-flex align-items-center buy__information buy__border--1200">
							  <span class="text__black text__iranyekan--regular buy__fixed">آدرس سایت پذیرنده</span>
							  <span class="text__black mr-3 pr-3 text__iranyekan--light buy__variable">www.akampars.com</span>
						  </div>
			  
<!--						  <div class="p-3 d-flex align-items-center buy__information buy__border&#45;&#45;1200">
							<span class="text__black text__iranyekan&#45;&#45;regular buy__fixed">بانک صادر کننده</span>
							<span class="text__black mr-3 pr-3 text__iranyekan&#45;&#45;light buy__variable">بانک کشاورزی جمهوری ایران</span>
						  </div>-->
						  <div class="p-3 d-flex align-items-center buy__information buy__border--1200">
							  <span class="text__black text__iranyekan--regular buy__fixed">شماره پیگیری</span>
							  <span class="text__black mr-3 pr-3 text__iranyekan--light buy__variable">{{$order->order_number}}</span>
						  </div>
					</div>
			
					<div class="p-3 d-flex align-items-center buy__information buy__responsive--1200">
					  <span class="text__medium text__black text__iranyekan--regular ml-3 buy__fixed">تاریخ و زمان تراکنش</span>
					  <div class="d-flex flex-wrap buy__variable">
						<div class="d-flex">
							@php($time = $order->tracks->first()->updated_at)
						  <span class="text__medium text__black mr-3 pr-3 text__iranyekan--light" >{{$time->format('H:i:s')}}</span>
						  <span class="d-none d-sm-flex text__medium text__black mr-3 pr-3 text__iranyekan--light" >Time:</span>
						</div>
						<div class="d-flex">
						  <span class="text__medium text__black mr-3 pr-3 text__iranyekan--light" >{{$time->format('Y/n/j')}}</span>
						  <span class="d-none d-sm-flex text__medium text__black mr-3 pr-3 text__iranyekan--light" >Date:</span>
						</div>
					  </div>
					</div>
				</div>

				  

                <div class="col-12 px-0 py-5 d-block d-md-flex justify-content-md-between align-items-md-center address__border">
                    <span class="font-weight-bold text__black text__medium">روی دکمه تکمیل خرید و انتقال به سایت پذیرنده کلیک نمایید.</span>

                    <a href="{{route('front.index')}}" class="btn mt-3 mt-md-0 float-left py-3 px-1 px-lg-3 border-0 mb-0 btn__green btn__green--rounded btn__link">
                        <span class="ml-2 text__small">تکمیل فرآیند خرید و انتقال به سایت پذیرنده</span>
                    </a>
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
    </section>

@endsection


@section('js')
    <script>
        setTimeout(function () {
            window.location.href= "{{route('user-dashboard')}}" ; // the redirect goes here
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