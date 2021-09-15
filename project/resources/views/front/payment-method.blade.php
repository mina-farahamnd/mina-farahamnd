@extends('layouts.front')

@section('content')
    <section class="title">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 px-0 d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-between w-100 py-2 px-4 title__green">
                        <span class="text-white text__medium text__iranyekan--bold">شیوه های پرداخت</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="payment-method">
        <div class="container-fluid px-0">
            <div class="row mb-5 mx-0">                

                <div class="col-12 mb-5 px-0 line__height">
                    <div class="mb-3">
                        <img src="{{ asset('assets/front/icon/payment-spot.svg') }}" alt="" class="ml-3 mb-2 information__image">
                        <h6 class="text__iranyekan--bold">پرداخت در محل</h6>
                    </div>
                    <p class="text-justify text__black text__small text__iranyekan--regular">
                        شما میتوانید وجه سفارشتان را هنگام تحویل کالا با کلیه کارت‌های
                        بانکی اگر ساکن تهران هستید از طریق دستگاه کارتخوان پرداخت
                        کنید ،<span class="text__iranyekan--bold">در ارسال به شهرستان امکان پرداخت درب محل وجود ندارد.</span>
                    </p>                                    
                </div>
 
                <div class="col-12 mb-5 px-0 line__height">
                    <div class="mb-3">
                        <img src="{{ asset('assets/front/icon/payment-online.svg') }}" alt="" class="ml-3 mb-2 information__image">
                        <h6 class="text__iranyekan--bold">پرداخت اینترنتی</h6>
                    </div>
                    <p class="text-justify text__black text__small text__iranyekan--regular">
                        کاربران می توانند در هنگام ثبت سفارش، از طریق درگاه اینترنتی،
                        هزینه سفارش خود را به صورت آنلاین پرداخت کنند. پرداخت موفق
                        هزینه به منزله ثبت قطعی این پرداخت برای سفارش است و پس
                        از آن پیامکی مبنی بر ثبت موفق سفارش، برای کاربر ارسال می شود
                        و نیازی به اطلاع دادن پرداخت سفارش نیست و سفارش به صورت
                        خودکار وارد مراحل آماده سازی و ارسال می شود .<span class="text__iranyekan--bold">لازم به ذکر است
                        که پرداخت اینترنتی باعث ایجاد الویت و تسریع در پردازش سفارش کاربران می شود.</span>
                    </p>
                </div>

                <div class="col-12 mb-5 px-0 line__height">
                    <div class="mb-3">
                        <img src="{{ asset('assets/front/icon/reference-funds.svg') }}" alt="" class="ml-3 mb-2 information__image">
                        <h6 class="text__iranyekan--bold">اطلاعات و شرایط لازم جهت مرجوعی وجه به مشتری</h6>
                    </div>
                    <p class="text-justify text__black text__small text__iranyekan--regular">
                        مشتری می بایست شماره کارت بانکی که حساب آن به نام صاحب
                        پروفایل می باشد را در حساب کاربری آکام پارس خود ثبت نماید.
                        در صورت لزوم عودت وجه به حساب مشتری، اصل بر این است که
                        <span class="text__iranyekan--bold">مبلغ به شماره کارت اعلام شده توسط مشتری عودت خواهد شد.</span>
                        مشتری با درج شماره کارت در حساب کاربری خود می پذیرد که نسبت
                        به انجام تراکنش های مالی در خصوص عودت وجه خریدهای انجام
                        شده رضایت داشته و با معرفی کارت در حساب کاربری مسئولیت های
                        قانونی در این خصوص را می پذیرد.
                        <br>
                        در صورتی که در هر خرید واریز اولیه از کارت دیگری صورت گرفته
                        باشد و مغایرتی بین حساب مبدا که پرداخت اولیه از آن انجام شده
                        با حساب اعلامی توسط مشتری در حساب کاربری کشف شود، آکام
                        پارس مطابق با ضوابط و مقررات قانونی، مبلغ را به حساب مبدا
                        عودت خواهد داد.
                    </p>
                </div>
                                
            </div>
            
        </div>
    </section>
@endsection