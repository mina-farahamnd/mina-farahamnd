@extends('layouts.front')

@section('content')
    <section class="title">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 px-0 d-flex align-items-center justify-content-between">
                    <div class="d-flex justify-content-between w-100 py-2 px-4 title__green">
                        <span class="text-white text__medium text__iranyekan--bold">راهنمای خرید آکام پارس</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

	<section class="guide">
		<div class="container-fluid">
			<div class="row mb-5">
				<div class="col-12 mb-4">
					<span class="text__black text__medium text__iranyekan--bold">1. وارد پروفایل خود بشوید.</span>
				</div>
				<div class="col-12 guide__border mb-4">
					<img src="{{ asset('/assets/front/images/enter-profile-desktop.webp') }}" alt="" class="d-none d-lg-block guide__img">
					<img src="{{ asset('/assets/front/images/enter-profile-mobile.webp') }}" alt="" class="d-lg-none py-4 guide__img">
				</div>
			</div>

			<div class="row mb-5">
				<div class="col-12 mb-4">
					<span class="text__black text__medium text__iranyekan--bold">2. محصول مورد نظر خود را جستجو کنید.</span>
				</div>
				<div class="col-12 guide__border mb-4">
					<img src="{{ asset('/assets/front/images/search-desktop.webp') }}" alt="" class="d-none d-lg-block guide__img">
					<img src="{{ asset('/assets/front/images/search-mobile.webp') }}" alt="" class="d-lg-none py-4 guide__img">
				</div>
			</div>

			<div class="row mb-5">
				<div class="col-12 mb-4">
					<span class="text__black text__medium text__iranyekan--bold">3. پس از انتخاب رنگ، نوع گارانتی و ...افزودن به سبد خرید را انجام دهید.</span>
				</div>
				<div class="col-12 guide__border mb-4">
					<img src="{{ asset('/assets/front/images/select-desktop.webp') }}" alt="" class="d-none d-md-block guide__img">
					<img src="{{ asset('/assets/front/images/select-mobile.webp') }}" alt="" class="d-md-none py-4 guide__img position-relative">
				</div>
			</div>

			<div class="row mb-5">
				<div class="col-12 mb-4">
					<span class="text__black text__medium text__iranyekan--bold">4. شما می توانید تعداد کالا را افزایش یا کاهش بدهید. (همچنین امکان حذف کالا از سبد وجود دارد)</span>
				</div>
				<div class="col-12 guide__border mb-4">
					<img src="{{ asset('/assets/front/images/delete-desktop.webp') }}" alt="" class="d-none d-md-block guide__img">
					<img src="{{ asset('/assets/front/images/delete-mobile.webp') }}" alt="" class="d-md-none py-4 guide__img">
				</div>
			</div>

			<div class="row mb-5">
				<div class="col-12 mb-4">
					<span class="text__black text__medium text__iranyekan--bold">5. آدرس تحویل سفارش خود،روش تحویل و روش پرداخت را انتخاب نمایید.</span>
				</div>
				<div class="col-12 guide__border mb-4">
					<img src="{{ asset('/assets/front/images/address-desktop.png') }}" alt="" class="guide__img">
					{{-- <img src="{{ asset('/assets/front/images/delete-mobile.webp') }}" alt="" class="d-md-none py-4 guide__img"> --}}
				</div>
			</div>

			<div class="row mb-5">
				<div class="col-12 mb-4">
					<span class="text__black text__medium text__iranyekan--bold">6. سفارش شما با موفقیت ثبت شده و کد پیگیری دریافت می کنید.</span>
				</div>
				<div class="col-12 guide__border mb-4">
					<img src="{{ asset('/assets/front/images/tracking code-desktop.png') }}" alt="" class="guide__img">
					{{-- <img src="{{ asset('/assets/front/images/delete-mobile.webp') }}" alt="" class="d-md-none py-4 guide__img"> --}}
				</div>
			</div>
		</div>
	</section>
@endsection