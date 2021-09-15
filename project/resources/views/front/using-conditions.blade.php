@extends('layouts.front')

@section('content')
    <section class="title">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 px-0 d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-between w-100 py-2 px-4 title__green">
                        <span class="text-white text__medium text__iranyekan--bold">شرایط استفاده</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="using-condition">
        <div class="container-fluid px-0">
            <div class="row mb-5 mx-0">
                <div class="col-12 mb-5 px-0 line__height">
                    <p class="text-justify text__black text__small text__iranyekan--regular">
                    کاربر گرامی لطفا موارد زیر را جهت استفاده بهینه از خدمات و
                    برنامه های کاربردی آکام پارس به دقت ملاحظه فرمایید: 
                    ورود کاربران به وب سایت آکام پارس هنگام استفاده از پروفایل
                    شخصی ، طرح های تشویقی آکام پارس و سایر خدمات ارائه شده
                    توسط آکام پارس به معنای آگاه بودن و پذیرفتن شرایط و قوانین
                    و همچنین نحوه استفاده از سرویس ها و خدمات ما است. توجه
                    داشته باشید که ثبت سفارش نیز در هر زمان به معنی پذیرفتن
                    کامل کلیه شرایط و قوانین آکام پارس از سوی کاربر می باشد.
                    </p>                                    
                </div>

                <div class="col-12 mb-5 px-0 line__height">
                    <div class="mb-2 d-flex align-items-end">
                        <img src="{{ asset('assets/front/icon/general-rules.svg') }}" alt="" class="ml-3 information__image">
                        <h6 class="text__iranyekan--bold">قوانین عمومی</h6>
                    </div>
                    <p class="text-justify text__black text__small text__iranyekan--regular">
                        توجه داشته باشید کلیه اصول و رویه‌های آکام ‌پارس منطبق با
                        قوانین جمهوری اسلامی ایران، قانون تجارت الکترونیک و قانون
                        حمایت از حقوق مصرف کننده است و متعاقبا کاربر نیز موظف به
                        رعایت قوانین مرتبط با کاربر است.در صورتیکه در قوانین مندرج،
                        رویه‌های و سرویس‌های آکام‌پارس تغییراتی در آینده ایجاد شود،
                        این صفحه منتشر و به روزرسانی می شود و شما توافق می کنید که
                        استفاده مستمرتان ازسایت به معنی پذیرش هرگونه تغییر است.
                    </p>                                    
                </div>

                <div class="col-12 mb-5 px-0 line__height">
                    <div class="mb-2 d-flex align-items-end">
                        <img src="{{ asset('assets/front/icon/terms-goods.svg') }}" alt="" class="ml-3 information__image">
                        <h6 class="text__iranyekan--bold">شرایط کالاها</h6>
                    </div>
                    <p class="text-justify text__black text__small text__iranyekan--regular">
                        <i class="ion-minus mt-3 information__icon"></i>
                        محصولات ارایه شده در وب سایت از شرکت های معتبر و واردکنندگان
                        رسمی و قانونی عرضه می شود.
                    </p>  

                    <p class="text-justify text__black text__small text__iranyekan--regular">
                        <i class="ion-minus mt-3 information__icon"></i>                 
                        خریداران حداکثر تا 2 روز بعد از ثبت سفارش و قطعی شدن آن،
                        فرصت دارند درخواست ارسال فاکتور را ثبت کنند.
                    </p>    
                    
                    <p class="text-justify text__black text__small text__iranyekan--regular">
                        <i class="ion-minus mt-3 information__icon"></i>
                        سفارش‌هایی که دارای حداقل یک کالا باشند تا ساعت 16 هر روز
                        کاری نهایی شوند، حداقل 1 روز کاری بعد در تهران و نهایت تا 2 روز
                        کاری در شهرستان تحویل داده میشوند.
                    </p>

                    <p class="text-justify text__black text__small text__iranyekan--regular">
                        <i class="ion-minus mt-3 information__icon"></i>
                        در صورت بروز تاخیر در پردازش سفارش شما، این موضوع به شما
                        اطلاع رسانی شده و محصول شما ظرف 24 ساعت تامین می شود.
                    </p>

                    <p class="text-justify text__black text__small text__iranyekan--regular">
                        <i class="ion-minus mt-3 information__icon"></i>
                        در صورت عدم تامین کالا بعد از 24 ساعت، اقلام در انتظار تامین
                        سفارش شما به صورت سیستمی لغو خواهد شد.
                    </p>

                    <p class="text-justify text__black text__small text__iranyekan--regular">
                        <i class="ion-minus mt-3 information__icon"></i>
                        در شرایط خاص مثل فروش شگفت انگیز، احتمال لغو شدن سفارش
                        مربوط به دلایلی مانند اتمام موجودی کالا وجود دارد و آکام‌پارس
                        مجاز است بدون اطلاع قبلی نسبت به توقف سفارش گیری جدید،
                        اقدام و فروش را متوقف کند.
                    </p>

                    <p class="text-justify text__black text__small text__iranyekan--regular">
                        <i class="ion-minus mt-3 information__icon"></i>
                        خدمات پس از فروش آکام‌پارس تنها در صورتی درخواست مشتری
                        مبنی بر بازگرداندن کالای فروشندگان را می پذیرد که لیبل آکام‌پارسی
                        که روی کالا نصب شده است جدا نشده باشد.
                    </p>
                </div>

                <div class="col-12 mb-5 px-0 line__height">
                    <div class="mb-2 d-flex align-items-end">
                        <img src="{{ asset('assets/front/icon/conect electronic.svg') }}" alt="" class="ml-3 information__image">
                        <h6 class="text__iranyekan--bold">قوانین عمومی</h6>
                    </div>
                    <p class="text-justify text__black text__small text__iranyekan--regular">
                        هنگامی که شما از سرویس‌ها و خدمات آکام‌پارس استفاده می کنید
                        سفارش اینترنتی خود را ثبت یا خرید می کنید و یا به آکام پارس
                        ایمیل می زنید، این ارتباطات به صورت الکترونیکی انجام می شود و
                        در صورتی که درخواست شما با رعایت کلیه اصول و رویه‌ها باشد
                        شما موافقت می کنید که آکام پارس به صورت الکترونیکی به
                        درخواست شما پاسخ دهد.
                    </p>                                    
                </div>
            </div>
            
        </div>
    </section>
@endsection