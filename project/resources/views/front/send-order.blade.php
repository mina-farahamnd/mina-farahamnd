@extends('layouts.front')

@section('content')
    <section class="title">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 px-0 d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-between w-100 py-2 px-4 title__green">
                        <span class="text-white text__medium text__iranyekan--bold">رویه های ارسال سفارش</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="send-order">
        <div class="container-fluid px-0">
            <div class="row mb-5 mx-0">
                <div class="col-12 px-0 mb-3">
                    <img src="{{ asset('assets/front/icon/send-order.svg') }}" alt="" class="information__image">
                </div>
                <div class="col-12 mb-5 px-0 line__height">
                    <span class="d-block text-justify text__black text__small text__iranyekan--regular">
                        <i class="ion-minus text__black text__medium information__icon"></i>
                        سفارشات شما پس از گذشت نهایت 24 ساعت کاری در تهران تحویل خواهند شد.
                    </span>
                    <span class="d-block text-justify text__black text__small text__iranyekan--regular">
                        <i class="ion-minus text__black text__medium information__icon"></i>
                        برای ارسال به شهرستان نیز نهایت تا 2 روز کاری انجام می شود.
                    </span>
                </div>
            </div>
        </div>
    </section>
@endsection