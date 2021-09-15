@extends('layouts.front')


@section('content')
    <section class="user">
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
                <div class="col-12 col-lg-4 px-3">
                    <div class="p-3 user__title user__title--right">
                        <h6>ویرایش اطلاعات من</h6>
                    </div>
                    
                    <div>
                        <a class="btn mb-0 px-0 py-2 d-flex justify-content-between border__bottom user__link" data-toggle="collapse" href="#edit-account-information" role="button" aria-expanded="false" aria-controls="edit-account-information">
                            <p class="text__black text__small">ویرایش اطلاعات حساب کاربری</p>
                        </a>
                        <a class="btn mb-0 px-0 py-2 d-flex justify-content-between border__bottom user__link" data-toggle="collapse" href="#change-address-book" role="button" aria-expanded="false" aria-controls="change-address-book">
                            <p class="text__black text__small">تغییر دفترچه آدرس</p>
                        </a>
                        <a class="btn mb-0 px-0 py-2 d-flex justify-content-between border__bottom user__link" data-toggle="collapse" href="#change-password" role="button" aria-expanded="false" aria-controls="change-password">
                            <p class="text__black text__small">تغییر رمز عبور</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 px-3">
                    <div class="p-3 user__title user__title--middle">
                        <h6>تاریخچه سفارشات من</h6>
                    </div>
                    
                    <div>
                        <a class="btn mb-0 px-0 py-2 d-flex justify-content-between border__bottom user__link" data-toggle="collapse" href="#my-order-list" role="button" aria-expanded="false" aria-controls="my-order-list">
                            <p class="text__black text__medium">لیست سفارشات من</p>
                        </a>
                        <a class="btn mb-0 px-0 py-2 d-flex justify-content-between border__bottom user__link" data-toggle="collapse" href="#returned-goods" role="button" aria-expanded="false" aria-controls="returned-goods">
                            <p class="text__black text__medium">کالاهای برگشتی</p>
                        </a>
                        <a class="btn mb-0 px-0 py-2 d-flex justify-content-between border__bottom user__link" data-toggle="collapse" href="#discount-coupons" role="button" aria-expanded="false" aria-controls="discount-coupons">
                            <p class="text__black text__medium">کوپن های تخفیف</p>
                        </a>
                    </div>
                </div>
                <div class="col-12 col-lg-4 px-3">
                    <div class="p-3 user__title user__title--left">
                        <h6>علاقه مندی های من</h6>
                    </div>

                    <div>
                        <a class="btn mb-0 px-0 py-2 d-flex justify-content-between border__bottom user__link" data-toggle="collapse" href="#my-favorites" role="button" aria-expanded="false" aria-controls="my-favorites">
                            <p class="text__black text__medium">لیست علاقه مندی های من</p>
                        </a>
                    </div>
                </div>
            </div>

            <div class="row mb-3  user__box">
                <div class="col-12">
                    <div class="d-flex justify-content-between">
                        <h6 class="text__gray">تاریخچه سفارشات</h6>
                        <h6 class="font-weight-bold text__green">My Order History</h6>
                    </div>
                </div>                
            </div>

            <div class="row mb-3">
                <div class="col-2 pl-5">
                    <img src="{{asset('assets/front/images/card-2.webp') }}" alt="" class="user__image">
                    
                </div>
                <div class="col-10 px-5">
                    <div class="row py-2 border__top">
                        <div class="col-6 pr-0 d-flex justify-content-between">
                            <p class="text__small text__black">نام کالا:</p>
                            <p class="text__small text__black">هدست بلوتوث هارمن</p>
                        </div>
                        <div class="col-6 pl-0 d-flex justify-content-between border__right">
                            <p class="text__small text__black">مدل کالا:</p>
                            <p class="text__small text__black">Harman/SOHO Wireless Headset</p>
                        </div>
                    </div>
                    <div class="row py-2 border__top">
                        <div class="col-6 pr-2 d-flex justify-content-between">
                            <p class="text__small text__black">رنگ کالا:</p>
                            <div class="d-flex align-items-center">
                                <p class="text__small text__black pl-3">مشکی</p>
                                <span style="width: 1em; height: 1rem; background-color: black; border-radius: .1rem; border: 1px solid black;"></span>
                            </div>
                        </div>
                        <div class="col-6 pl-0 d-flex justify-content-between border__right">
                            <p class="text__small text__black">تعداد:</p>
                            <p class="text__small text__black">1 عدد</p>
                        </div>
                    </div>

                    <div class="row py-2 border__top">
                        <div class="col-6 pr-2 d-flex justify-content-between">
                            <p class="text__small text__black">گارانتی کالا:</p>
                            <p class="text__small text__black">18 ماه گارانتی</p>
                        </div>
                        <div class="col-6 pl-0 d-flex justify-content-between border__right">
                            <p class="text__small text__black">قیمت کالا:</p>
                            <div class="d-flex flex-row-reverse">
                                <p class="text__small text__black mr-2">2,220,000</p>
                                <p class="text__small text__black">RL</p>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2 border__top border__bottom">
                        <div class="col-6 pr-2 d-flex justify-content-between">
                            <p class="text__small text__black">تاریخ سفارش کالا:</p>
                            <p class="text__small text__black">1399/9/9</p>
                        </div>
                        <div class="col-6 pl-0 d-flex justify-content-between border__right">
                            <p class="text__small text__black">تاریخ تحویل کالا:</p>
                            <p class="text__small text__black">1399/9/9</p>
                        </div>
                    </div>
                    
                    <div class="row user__order">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 d-flex align-items-center">
                                    <p class="font-weight-bold text__small text__black">وضعیت سفارش: </p>
                                    <p class="text__small text__black">سفارش شما برای ارسال به درب منزل تحویل پیک داده شد.</p>
                                </div>
                                <div class="col-6 border__right d-flex">
                                    <div class="w-50 d-flex justify-content-center user__order--id">
                                        <p class="text-white d-flex align-items-center justify-content-center p-3 mx-3 text__small user__order--id--exclamation">i</p>
                                        <p class="font-weight-bold text__small text__black">شناسه سفارش: </p>
                                        <p class="text__small text__black">1234</p>
                                    </div>
                                    <div class="w-50 user__order--question">
                                        <a href="#" class="text-decoration-none d-flex justify-content-center border__right">
                                            <p class="text-white d-flex align-items-center justify-content-center p-3 mx-3 text__small user__order--question--sign">?</p>
                                            <p class="font-weight-bold text__small text__green">اگر سوالی دارید، کلیک کنید</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row user__btn">
                <div class="col-12 d-flex justify-content-center">
                    <button class="btn mb-0 btn__more">
                        <h6 class="text__gray">Load More</h6>
                        <img src="{{asset('assets/front/icon/lode more.svg') }}" alt="">
                        
                    </button>
                </div>
            </div>
        </div>
    </section>
@endsection