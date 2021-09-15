@extends('layouts.front')

@section('content')

<section class="title">
    <div class="container-fluid">
        <div class="row mb-5">
            <div class="col-md-12 px-0 d-flex align-items-center justify-content-between">
                <div class="d-flex justify-content-between w-100 py-2 px-4 title__green">
                    <p class="font-weight-bold text-white text__medium">سوالات پرتکرار</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="questions">
    <div class="container-fluid">
        <div class="row mb-3">
            <div class="col-12 px-0 mt-3 questions__row">
                <a class="btn mb-0 border-0 d-flex justify-content-between questions-btn" role="button" data-toggle="collapse" href="#question2" role="button" aria-expanded="false" aria-controls="question2">
                    <div class="row">
                        <div class="col-12 px-0 d-flex align-items-center questions__sign">
                            <img src="{{asset('assets/front/icon/question-sign.svg')}}" alt="">

                            <p class="mr-n3 text__black text__large pr-4">شرایط استفاده از کد تخفیف اولین خرید چیست؟</p>
                        </div>
                    </div>
                    <img src="{{asset('assets/front/icon/arrow-down-black.svg')}}" alt="" class="questions-open">                        
                </a>

                <div class="collapse answer" id="question2">
                    <section class="questions">
                        <div class="container-fluid">

                            <div class="col-12 mt-5 questions__answer">
                                <div>
                                    <p class="text-justify text__black text__large">سیستم هوشمند آکام پارس، پس از بررسی حساب کاربری در صورتی که مالک آن مشتری جدید آکام پارس باشد، امکان استفاده از کد تخفیف اولین خرید ایجاد می کند و در سایر موارد به کاربر متن زیر اعلام می شود:</p>
                                </div>
                                <div class="d-flex justify-content-center questions__answer--inner">
                                    <img src="{{asset('assets/front/icon/arrow-left-green.svg')}}" alt="">
                                    <p class="px-3 text-justify text__gray text__medium">کد تخفیف وارد شده، تنها برای کاربران جدید قابل استفاده از و طبق بررسی ها شما به عنوان کاربر جدید شناسایی نشدید.</p>
                                </div>
                            </div>

                            <div class="col-12 d-flex justify-content-between align-items-center questions__help">
                                <p class="text__medium text__black">آیا این پاسخ به شما کمک کرد؟</p>
                                <div class="d-flex px-2 w-25 questions__answer--button">
                                    <button type="button" class="w-50 border-0 py-1 btn mb-0 btn__green btn__rounded--yes">
                                        <span class="text-center text__small">بله</span>
                                    </button>
                                    <button type="button" class="w-50 border-0 py-1 btn mb-0 btn__black btn__rounded--no" data-dismiss="modal">
                                        <span class="text-center text__small">خیر</span>
                                    </button>
                                </div>
                            </div>


                        </div>
                    </section>
                </div>                    
            </div>

<!--            <div class="col-12 px-0 mt-3 questions__row">
                <a class="btn border-0 mb-0 d-flex justify-content-between questions-btn" role="button" data-toggle="collapse" href="#question3" role="button" aria-expanded="false" aria-controls="question3">
                    <p class="text__black text__medium">شرایط استفاده از کد تخفیف اولین خرید چیست؟</p>
                    <img src="{{asset('assets/front/icon/arrow-down-black.svg')}}" alt="" class="questions-open">
                </a>

                <section class="questions">
                    <div class="container-fluid">
                        <div class="row mb-3">
                            <div class="col-12 px-0 d-flex align-items-baseline questions__sign">
                                <img src="{{asset('assets/front/icon/question-sign.svg')}}" alt="">

                                <p class="mr-n3 text__black text__large">شرایط استفاده از کد تخفیف اولین خرید چیست؟</p>
                            </div>
                        </div>
                        <div class="col-12 mt-5 questions__answer">
                            <div>
                                <p class="text-justify text__black text__large">سیستم هوشمند آکام پارس، پس از بررسی حساب کاربری در صورتی که مالک آن مشتری جدید آکام پارس باشد، امکان استفاده از کد تخفیف اولین خرید ایجاد می کند و در سایر موارد به کاربر متن زیر اعلام می شود:</p>
                            </div>
                            <div class="d-flex justify-content-center questions__answer&#45;&#45;inner">
                                <img src="{{asset('assets/front/icon/arrow-left-green.svg')}}" alt="">
                                <p class="px-3 text-justify text__gray text__medium">کد تخفیف وارد شده، تنها برای کاربران جدید قابل استفاده از و طبق بررسی ها شما به عنوان کاربر جدید شناسایی نشدید.</p>
                            </div>
                        </div>

                        <div class="col-12 d-flex justify-content-between align-items-center questions__help">
                            <p class="text__medium text__black">آیا این پاسخ به شما کمک کرد؟</p>
                            <div class="d-flex px-2 w-25">
                                <button type="button" class="w-50 border-0 py-1 btn mb-0 btn__green btn__rounded&#45;&#45;yes">
                                    <span class="text-center text__small">بله</span>
                                </button>
                                <button type="button" class="w-50 border-0 py-1 btn mb-0 btn__black btn__rounded&#45;&#45;no" data-dismiss="modal">
                                    <span class="text-center text__small">خیر</span>
                                </button>
                            </div>
                        </div>

                        page: 3
                        <div class="col-12 questions__help">
                            <span class="font-weight-bold text__medium text__green">با تشکر از همکاری شما</span>
                            <span class="font-weight-bold mt-2 text__medium text__black">خوشحالیم که اطلاعات مورد نظر خود را به دست آوردید.</span>
                        </div>


                        page: 4
                        <div class="col-12 questions__help">
                            <span class="font-weight-bold text__medium text__green">با تشکر از همکاری شما</span>
                            <span class="font-weight-bold mt-2 text__medium text__black">نظرات شما برای ما بسیار مهم است و حتما با استفاده از این نتایج به بهبود اطلاعات صفحه میپردازیم.</span>
                        </div>

                        page: 5
                        <div class="col-12 questions__help">
                            <span class="font-weight-bold text__medium text__green">چرا این پاسخ به شما کمک نکرد؟</span>

                            <form action="">
                                <div class="pt-4 pr-4 custom">
                                    <div class="mt-3">
                                        <input type="checkbox" id="answer-1">
                                        <label class="mb-0 custom__label text__small text__black" for="answer-1">پاسخ بسیار طولانی است</label>
                                    </div>
                                    <div class="mt-3">
                                        <input type="checkbox" id="answer-2">
                                        <label class="mb-0 custom__label text__small text__black" for="answer-2">با قوانین موجود در این پاسخ موافق نیستم</label>
                                    </div>
                                    <div class="mt-3">
                                        <input type="checkbox" id="answer-3">
                                        <label class="mb-0 custom__label text__small text__black" for="answer-3">پاسخ مناسبی به سوال من داده نشد</label>
                                    </div>
                                    <div class="mt-3">
                                        <input type="checkbox" id="answer-4">
                                        <label class="mb-0 custom__label text__small text__black" for="answer-4">پاسخ گمراه کننده و اشتباه است</label>
                                    </div>
                                    <div class="mt-3">
                                        <input type="checkbox" id="answer-5">
                                        <label class="mb-0 custom__label text__small text__black" for="answer-5">سایر موارد</label>
                                    </div>
                                </div>
                            </form>

                            <div class="row">
                                <div class="col-md-12 text-md-left text-center">
                                    <button type="button" class="btn border-0 mb-0 py-2 px-4 btn__black" disabled>
                                        <span class="text__small">ثبت نظر</span>
                                    </button>
                                </div>
                            </div>
                        </div>


                        page: 6
                        <div class="col-12 questions__help">
                            <span class="font-weight-bold text__medium text__green">با تشکر از همکاری شما</span>
                            <span class="font-weight-bold mt-2 text__medium text__black">نظرات شما برای ما بسیار مهم است و حتما با استفاده به بهبود اطلاعات این صفحه می پردازیم..</span>
                        </div>
                    </div>
                </section>
            </div>-->

<!--            <div class="col-12 px-0 mt-3 questions__row">
                <a class="btn border-0 mb-0 d-flex justify-content-between questions-btn" role="button" data-toggle="collapse" href="#question4" role="button" aria-expanded="false" aria-controls="question4">
                    <p class="text__black text__medium">شرایط استفاده از کد تخفیف اولین خرید چیست؟</p>
                    <img src="{{asset('assets/front/icon/arrow-down-black.svg')}}" alt="" class="questions-open">                        
                </a>

                <div class="collapse answer" id="question4">
                    <div class="px-4 mt-3">
                        <p class="text__medium text__black">سیستم هوشمند آکام پارس، پس از بررسی حساب کاربری در صورتی که مالک آن مشتری جدید آکام پارس باشد ...</p>
                    </div>
                    <div class="mt-5 px-4 text-left">
                        <a href="" class="text-decoration-none mt-5">
                            <p class="text__medium text__green">مشاهده توضیحات تکمیلی</p>
                        </a>
                    </div>
                </div>                    
            </div>

            <div class="col-12 px-0 mt-3 questions__row">
                <a class="btn border-0 mb-0 d-flex justify-content-between questions-btn" role="button" data-toggle="collapse" href="#question5" role="button" aria-expanded="false" aria-controls="question5">
                    <p class="text__black text__medium">شرایط استفاده از کد تخفیف اولین خرید چیست؟</p>
                    <img src="{{asset('assets/front/icon/arrow-down-black.svg')}}" alt="" class="questions-open">                        
                </a>

                <div class="collapse answer" id="question5">
                    <div class="px-4 mt-3">
                        <p class="text__medium text__black">سیستم هوشمند آکام پارس، پس از بررسی حساب کاربری در صورتی که مالک آن مشتری جدید آکام پارس باشد ...</p>
                    </div>
                    <div class="mt-5 px-4 text-left">
                        <a href="" class="text-decoration-none mt-5">
                            <p class="text__medium text__green">مشاهده توضیحات تکمیلی</p>
                        </a>
                    </div>
                </div>                    
            </div>

            <div class="col-12 px-0 mt-3 questions__row">
                <a class="btn border-0 mb-0 d-flex justify-content-between questions-btn" role="button" data-toggle="collapse" href="#question6" role="button" aria-expanded="false" aria-controls="question6">
                    <p class="text__black text__medium">شرایط استفاده از کد تخفیف اولین خرید چیست؟</p>
                    <img src="{{asset('assets/front/icon/arrow-down-black.svg')}}" alt="" class="questions-open">                        
                </a>

                <div class="collapse answer" id="question6">
                    <div class="px-4 mt-3">
                        <p class="text__medium text__black">سیستم هوشمند آکام پارس، پس از بررسی حساب کاربری در صورتی که مالک آن مشتری جدید آکام پارس باشد ...</p>
                    </div>
                    <div class="mt-5 px-4 text-left">
                        <a href="" class="text-decoration-none mt-5">
                            <p class="text__medium text__green">مشاهده توضیحات تکمیلی</p>
                        </a>
                    </div>
                </div>                    
            </div>

            <div class="col-12 px-0 mt-3 questions__row">
                <a class="btn mb-0 d-flex justify-content-between" role="button" data-toggle="collapse" href="#question7" role="button" aria-expanded="false" aria-controls="question7">
                    <p class="text__black text__medium">شرایط استفاده از کد تخفیف اولین خرید چیست؟</p>
                    <img src="{{asset('assets/front/icon/arrow-down-black.svg')}}" alt="" class="questions-open">                        
                </a>

                <div class="collapse answer" id="question7">
                    <div class="px-4 mt-3">
                        <p class="text__medium text__black">سیستم هوشمند آکام پارس، پس از بررسی حساب کاربری در صورتی که مالک آن مشتری جدید آکام پارس باشد ...</p>
                    </div>
                    <div class="mt-5 px-4 text-left">
                        <a href="" class="text-decoration-none mt-5">
                            <p class="text__medium text__green">مشاهده توضیحات تکمیلی</p>
                        </a>
                    </div>
                </div>                    
            </div>

            <div class="col-12 px-0 mt-3 questions__row">
                <a class="btn mb-0 d-flex justify-content-between questions-btn" role="button" data-toggle="collapse" href="#question8" role="button" aria-expanded="false" aria-controls="question8">
                    <p class="text__black text__medium">شرایط استفاده از کد تخفیف اولین خرید چیست؟</p>
                    <img src="{{asset('assets/front/icon/arrow-down-black.svg')}}" alt="">                        
                </a>

                <div class="collapse answer" id="question8">
                    <div class="px-4 mt-3">
                        <p class="text__medium text__black">سیستم هوشمند آکام پارس، پس از بررسی حساب کاربری در صورتی که مالک آن مشتری جدید آکام پارس باشد ...</p>
                    </div>
                    <div class="mt-5 px-4 text-left">
                        <a href="" class="text-decoration-none mt-5">
                            <p class="text__medium text__green">مشاهده توضیحات تکمیلی</p>
                        </a>
                    </div>
                </div>                    
            </div>-->
        </div>            
    </div>
</section>




@endsection

