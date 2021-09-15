@extends('layouts.front')


@section('content')
	<section class="user my-5">
		<div class="container-fluid">

			<div class="row mb-3">
				<div class="col-12">
					<div class="d-flex justify-content-between">
						<h6 class="text__gray">ورود به حساب کاربری</h6>
						<h6 class="font-weight-bold text__green">My Profile</h6>
					</div>
				</div>
			</div>


			<div class="row mb-3">
				<div class="col-12 col-md-4 px-3">
					<a class="btn mb-0 collapsed d-flex align-items-center justify-content-between py-3 px-md-3 user__title user__title--right" data-toggle="collapse" href="#collapseEdite" role="button" aria-expanded="false" aria-controls="collapseEdite">
						<h6 class="text__iranyekan--bold">ویرایش اطلاعات من</h6>
						<i class="ion-ios-arrow-down d-md-none user__link--responsive"></i>
					</a>

					<div class="collapse collapse-responsive show" id="collapseEdite">
						<div class="user__item">
							<a class="btn border-0 mb-0 px-0 py-3 d-flex align-items-center justify-content-between text__iranyekan--light" href="{{route('user-profile')}}" >
								<span class="text__black text__medium text__iranyekan--light">ویرایش اطلاعات حساب کاربری</span>
								<i class="ion-ios-arrow-left text__medium d-none d-md-flex"></i>
							</a>
						</div>
						<div class="user__item">
							<a class="btn border-0 mb-0 px-0 py-3 d-flex align-items-center justify-content-between text__iranyekan--light" href="{{route('user-address')}}" >
								<span class="text__black text__medium text__iranyekan--light">تغییر دفترچه آدرس</span>
								<i class="ion-ios-arrow-left text__medium d-none d-md-flex"></i>
							</a>
						</div>
						<div class="user__item">
							<a class="btn border-0 mb-0 px-0 py-3 d-flex align-items-center justify-content-between edit-password text__iranyekan--light" href="{{route('user-reset')}}">
								<span class="text__black text__medium text__iranyekan--light">تغییر رمز عبور</span>
								<i class="ion-ios-arrow-left text__medium d-none d-md-flex"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="col-12 col-md-4 px-3">					
						<a class="btn mb-0 collapsed d-flex align-items-center justify-content-between py-3 px-md-3  user__title user__title--middle" data-toggle="collapse" href="#collapseDate" role="button" aria-expanded="false" aria-controls="collapseDate">
							<h6 class="text__iranyekan--bold">تاریخچه سفارشات من</h6>
							<i class="ion-ios-arrow-down d-md-none user__link--responsive"></i>
						</a>					
									
					<div class="collapse collapse-responsive show" id="collapseDate">
						<div class="user__item">
							<a class="btn border-0 mb-0 px-0 py-3 d-flex align-items-center justify-content-between" href="{{route('user-orders')}}">
								<span class="text__black text__medium text__iranyekan--light">لیست سفارشات من</span>
								<i class="ion-ios-arrow-left text__medium d-none d-md-flex"></i>
							</a>
						</div>
						<div class="user__item">
							<a class="btn border-0 mb-0 px-0 py-3 d-flex align-items-center justify-content-between" href="{{route('user-orders')}}" >
								<span class="text__black text__medium text__iranyekan--light">کالاهای برگشتی</span>
								<i class="ion-ios-arrow-left text__medium d-none d-md-flex"></i>
							</a>
						</div>
						<div class="user__item">
							<a class="btn border-0 mb-0 px-0 py-3 d-flex align-items-center justify-content-between" href="#discount-coupons" role="button" aria-expanded="false" aria-controls="discount-coupons">
								<span class="text__black text__medium text__iranyekan--light">کوپن های تخفیف</span>
								<i class="ion-ios-arrow-left text__medium d-none d-md-flex"></i>
							</a>
						</div>
					</div>
				</div>

				<div class="col-12 col-md-4 px-3">
					<a class="btn mb-0 collapsed d-flex align-items-center justify-content-between py-3 px-md-3 user__title user__title--left" data-toggle="collapse" href="#collapseInterest" role="button" aria-expanded="false" aria-controls="collapseInterest">
						<h6 class="text__iranyekan--bold">علاقه مندی های من</h6>
						<i class="ion-ios-arrow-down d-md-none user__link--responsive"></i>
					</a>

					<div class="collapse collapse-responsive show" id="collapseInterest">
						<div class="user__item">
							<a class="btn border-0 mb-0 px-0 py-3 d-flex align-items-center justify-content-between"  href="{{route('user-wishlists')}}" >
								<span class="text__black text__medium text__iranyekan--light">لیست علاقه مندی های من</span>
								<i class="ion-ios-arrow-left text__medium d-none d-md-flex"></i>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="row mb-3 d-none d-md-block user__box">
				<div class="col-12 px-3">
					<div class="d-flex justify-content-between">
						<h6 class="text__gray">تاریخچه سفارشات</h6>
						<h6 class="font-weight-bold text__green">My Order History</h6>
					</div>
				</div>
			</div>

			@foreach($orders as $order)

				@php($cart = unserialize(bzdecompress(utf8_decode($order->cart))))

				<div class="load-more-item">
					@foreach($cart->items as $product)
						<div class="row mb-5">
							<div class="col-12 d-flex px-3">
								<div class="ml-5">
									<img src="{{ $product['item']['photo'] ? asset('assets/images/products/'.$product['item']['photo']):asset('assets/images/noimage.png') }}" alt="" class="user__image">
								</div>
								<div class="w-100 pl-4">
									<div class="row py-2 border__top">
										<div class="col-6 pr-0 d-flex flex-wrap justify-content-between">
											<span class="text__small text__black">نام کالا:</span>
											<span class="text__small text__black">{{$product['item']['name']}}</span>
										</div>
										<div class="col-6 pl-0 d-flex align-items-center justify-content-between border__right">
											<span class="text__small text__black">مدل کالا:</span>
											<span class="text__small text__black">{{$product['item']['type']}}</span>
										</div>
									</div>
									<div class="row py-2 border__top">
										<div class="col-6 pr-2 d-flex justify-content-between">
											<span class="text__small text__black">رنگ کالا:</span>
											<div class="d-flex align-items-center">
												@if(!empty($product['color']))
												<span style="width: 1em; height: 1rem; background-color: {{$product['color'] == "" ? "white" : '#'.$product['color']}}; border-radius: .1rem; border: 1px solid ;"></span>
												@endif
											</div>
										</div>
										<div class="col-6 pl-0 d-flex justify-content-between border__right">
											<span class="text__small text__black">تعداد:</span>
											<span class="text__small text__black">{{$product['qty']}}</span>
										</div>
									</div>
		
									<div class="row py-2 border__top">
										<div class="col-6 pr-2 d-flex justify-content-between">
											<span class="text__small text__black">گارانتی کالا:</span>
											<span class="text__small text__black">
												{{ !empty($product['values']) ? __($product['values']) : 'بدون گارانتی' }}
											</span>
										</div>
										<div class="col-6 pl-0 d-flex justify-content-between border__right">
											<span class="text__small text__black">قیمت کالا:</span>
											<div class="d-flex flex-row-reverse">
												<span class="text__small text__black mr-2">{{$product['item']['price']}}</span>
												<span class="text__small text__black">RL</span>
											</div>
										</div>
									</div>
									<div class="row py-2 border__top border__bottom">
										<div class="col-6 pr-2 d-flex justify-content-between">
											<span class="text__small text__black">تاریخ سفارش کالا:</span>
											<span class="text__small text__black">{{\Carbon\Carbon::parse($order->created_at)->toDateString()}}</span>
										</div>
										<div class="col-6 pl-0 d-flex justify-content-between border__right">
											<span class="text__small text__black">قیمت نهایی کالا:</span>
											<span class="text__small text__black">{{$product['price'] . " RL"}}</span>
										</div>
									</div>
								</div>
							</div>
						</div>

					@endforeach
						<div class="row mb-5 user__order">
							<div class="col-12 d-flex">
								<div class="d-flex align-items-center user__order--position">
									<span class="font-weight-bold text__small text__black">وضعیت سفارش: </span>
									<span class="text__small text__black">{{__(ucwords($order->payment_status))}}</span>
								</div>
								<div class="border__right d-flex user__order--information">
									<div class="w-50 d-flex align-items-center justify-content-center user__order--id">
										<span class="text-white d-flex align-items-center justify-content-center mx-3 text__small user__order--id--exclamation">i</span>
										<span class="font-weight-bold text__small text__black">شناسه سفارش: </span>
										<span class="text__small text__black ml-3">{{$order->order_number}}</span>
									</div>
									<div class="w-50 user__order--question">
										<a href="#" class="text-decoration-none d-flex align-items-center justify-content-center border__right">
											<span class="text-white d-flex align-items-center justify-content-center mx-3 text__small user__order--question--sign">?</span>
											<span class="font-weight-bold text__small text__green">اگر سوالی دارید، کلیک کنید</span>
										</a>
									</div>
								</div>
							</div>
						</div>
				</div>
			@endforeach

			<div class="row user__btn d-none d-md-block">
				<div class="col-12 d-flex justify-content-center">
					<button class="btn mb-0 btn__more">
						<a href="#" class="text-decoration-none" id="loadMore">
							<h6 class="text__gray">Load More</h6>
							<img src="{{asset('assets/front/icon/lode more.svg') }}" alt="">
						</a>
					</button>
				</div>
			</div>
		</div>
	</section>
@endsection


@section('js')
	<script>

		$(document).ready(function () {
			$(function(){
				$(".load-more-item").slice(0 , 2).show();
				$("#loadMore").on("click" , function () { 
					$(".load-more-item:hidden").slice(0 , 2).slideDown();
					if ($(".load-more-item:hidden").length == 0) {
            			$("#loadMore").fadeOut('slow');
        			}
					$('html,body').animate({
						scrollTop: $(this).offset().top
						}, 1500);
					});
			});

		});
		
		$(window).bind("resize", function (){
			if ($(this).width() > 768) {				
				$('.collapse-responsive').addClass('show');
				$(".user__title").removeAttr("data-toggle href role");
			}else{
				$('.collapse-responsive').removeClass('show');
				$(".user__title").css({
					"border-top":"1px solid #c8c8c8",
				});
				$(".user__title").click(function(){
					var opening = $(this).attr("aria-expanded");
					if (opening == "false"){
						console.log(this);
						$(this).css({
							"background-color":"#08f0ab",
							"border-top" : "",
							"border-top-right-radius": "2rem",
							"border-top-left-radius": "2rem",
						});
						$(this).siblings().animate({
							"margin-bottom":"2rem",
						},500);

						$(this).find('h6, i').css({
							"color":"#ffffff",
						});

						$(this).parent().next().children(".user__title").css({
							"border-top":"none",
						});
						
						$('.user__item span').css({
							"margin-right":"1rem",
						})
					}else{
						$(this).css({
							"background-color":"#ffffff",
							"border-top" : "1px solid #c8c8c8",
							"border-top-right-radius": "",
							"border-top-left-radius": "",
						});

						$(this).siblings().animate({
							"margin-bottom":"0",
						},100);

						$(this).find('h6, i').css({
							"color":"black",
						});

						$(this).parent().next().children(".user__title").css({
							"border-top":"1px solid #c8c8c8",
						});
					}
				});
			}
		}).trigger('resize');

		
		
		
		
	</script>
@endsection