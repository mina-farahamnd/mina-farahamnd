@if(Session::has('cart'))
@php($total_price=0)

<div class="card-body header__desktop--cart--card--body">
@foreach(Session::get('cart')->items as $product)

	<div class="row {{$loop->iteration == 1 ? '' : 'mt-4'}}" >
		<div class="col-12 col-sm-2 text-center text-sm-right">
			<img src="{{ $product['item']['photo'] ? filter_var($product['item']['photo'], FILTER_VALIDATE_URL) ?$product['item']['photo']:asset('assets/images/products/'.$product['item']['photo']):asset('assets/images/noimage.png') }}" alt="">
		</div>
		<div class="col-12 col-sm-10">
			<h6 class="text__iranyekan--bold--ennum text__black">{{mb_strlen($product['item']['name'],'utf-8') > 45 ? mb_substr($product['item']['name'],0,45,'utf-8').'...' : $product['item']['name']}}</h6>
			<p>رنگ کالا : <span style="background-color: #{{ $product['color'] }};width:1rem;height:1rem;display:inline-block"></span></p>
			<div class="row mx-1 border__bottom border__top">
				<div class="col-4 px-0 py-1">
					<div class="d-flex justify-content-between pl-2">
						<span class="text__medium text__black">تعداد:</span>
						<span class="text__medium text__gray">{{ $product['qty'] }} عدد</span>
					</div>
				</div>
				<div class="col-8 px-0 py-1 border__right">
					<div class="d-flex justify-content-between pr-2">
						<span class="text__medium text__black">قیمت:</span>
						<div class="d-flex flex-row-reverse ml-n2">
							<span class="text__medium text__number mx-2">{{ number_format(((int)$product['item']['price']) * $product['qty'])}}</span>
							<span class="text__medium">RL</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



@php($total_price += (int)$product['item']['price'] * $product['qty'])

@endforeach
</div>

<div class="card-footer py-0 border-0 header__desktop--cart--card--footer">
	<div class="row">
		<div class="col-12 px-4 px-sm-2 d-sm-flex w-100">
			<div class="d-flex justify-content-between align-items-center py-2 mx-auto mr-sm-2 px-2 header__desktop--cart--card--footer--price">
				<span class="font-weight-bold text__medium text__black">قیمت مجموع:</span>
				<div class="d-flex align-items-center flex-row-reverse">
					<span class="font-weight-bold text__medium mx-2 text__number">{{number_format((int)$total_price)}}</span>
					<span class="text__small">RL</span>
				</div>
			</div>

			<div class="d-flex header__desktop--cart--card--footer--see">
				<a href="{{route('front.checkout')}}" class="btn py-2 px-2 mb-0 rounded-0 btn__black btn__link header__desktop--cart--card--footer--see--btn
				
				">
					<span class="ml-2 text__small">مشاهده سبد خرید</span>
				</a>
				<a href="{{route('front.checkout')}}" class="btn py-2 px-3 mb-0 btn__green btn__green--leftrounded btn__link">
					<span class="ml-2 text__small">تسویه حساب</span>
				</a>
			</div>
		</div>
	</div>
</div>



@else
	<!--
	<h5 class="p-4 text-center text__green">سبد خرید شما خالی است.</h5>
	!-->
@endif