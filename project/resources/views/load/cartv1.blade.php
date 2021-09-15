@if(Session::has('cart'))
@php($total_price=0)

@foreach(Session::get('cart')->items as $product)

<div class="row hovering-all border border-bottom-0 pb-4 pt-2 w-100 mx-0">
	<div class="col-12 mb-3">
		<button type="button" class="close hovering-all-close" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="col-12 hovering d-flex">
		<div>
			<img src="{{ $product['item']['photo'] ? filter_var($product['item']['photo'], FILTER_VALIDATE_URL) ?$product['item']['photo']:asset('assets/images/products/'.$product['item']['photo']):asset('assets/images/noimage.png') }}"
				alt="headset-harman" class="">
		</div>
		<div class="row mx-3 w-100">
			<div class="col-12 d-flex flex-column text-right pr-0">
				<span>{{mb_strlen($product['item']['name'],'utf-8') > 45 ? mb_substr($product['item']['name'],0,45,'utf-8').'...' : $product['item']['name']}}</span>
				<p>رنگ کالا : <span style="background-color: #{{ $product['color'] }};width:1rem;height:1rem;display:inline-block"></span></p>
			</div>
			<div class="col-12">
				<div class="row d-flex py-0 mt-1">
					<div
						class="col-5 border border-right-0 border-left-0 d-flex justify-content-between align-items-center pl-2 pr-0">
						<span>تعداد:</span>
						<span class="text-muted mr-1">{{ $product['qty'] }} عدد</span>
					</div>
					<div
						class="col-7 border border-left-0 d-flex justify-content-between align-items-center pr-2 pl-0">
						<span>قیمت:</span>
						<span class="mr-5">{{ number_format(((int)$product['item']['price']) * $product['qty']) . " RL" }}</span>
					</div>
				</div>
			</div>
		</div>
	</div>

@php($total_price += (int)$product['item']['price'] * $product['qty'])

</div>

@endforeach

<div class="row w-100 mx-0 px-4 border border-top-0">
	<div class="col-12 d-flex mt-3 px-0 mb-4">
		<div class="col-5 hovering-price d-flex justify-content-between p-2 ">
			<span>قیمت:</span>
			<span>{{number_format((int)$total_price)}} RL</span>
		</div>
		<div class="col-4 hovering-see-cart px-1 py-2">
			<a href="{{route('front.checkout')}}" class="text-decoration-none">
				<span class="text-white">مشاهده سبد خرید</span>
				<img src="{{ asset('/assets/front/images/hahoot/flash-left.svg') }}"
					alt="">
			</a>
		</div>
		<div class="col-3 hovering-checkout px-1 py-2">
			<a href="{{route('front.checkout')}}" class="text-decoration-none">
				<span class="text-white">تسویه حساب</span>
				<img src="{{ asset('/assets/front/images/hahoot/flash-left.svg') }}"
					alt="">
			</a>
		</div>
	</div>
</div>


@else
	<h3 class="border p-4 text-center">سبد خرید شما خالی است.</h3>
@endif